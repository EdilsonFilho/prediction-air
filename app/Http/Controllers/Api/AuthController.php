<?php

namespace App\Http\Controllers\Api;

use App\Enums\ProfilesType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;

class AuthController extends Controller
{
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => [
                'email' => auth('api')->user()->email,
                'phone' => auth('api')->user()->phone,
                'name' => auth('api')->user()->name,
            ]
        ], 200);
    }

    public function register(RegisterRequest $request)
    {
        if (
            $request['profile'] == ProfilesType::ZeroRoleValue
        ) {
            return response()->json(
                [
                    'message' => 'Oops! O perfil escolhido é inválido. Por favor, realize novamente o cadastro.',
                ],
                500
            );
        }

        try {

            $credentials = $request->only([config('seed.username'), 'password']);

            $request['password'] = bcrypt($request->password);

            User::create($request->only(['name', config('seed.username'), 'password', 'phone', 'profile']));

            if (!$token = auth('api')->attempt($credentials)) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }

            return $this->respondWithToken($token);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'message' => 'Oops! Algo inesperado aconteceu. Por favor, realize novamente o cadastro.',
                    'ex' => $e->getMessage()
                ],
                500
            );
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only([config('seed.username'), 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Credenciais incorretas.'], 400);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        try {
            return response()->json(auth('api')->user());
        } catch (JWTException $exception) {
            return response()->json(
                [
                    'error' => 'Oops! Algo inesperado aconteceu. Por favor, realize o login novamente.'
                ],
                401
            );
        }
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Até logo! Mas não demora muito pra voltar, tá?']);
    }

    public function refresh()
    {
        try {
            return response()->json(['access_token' => auth('api')->refresh()]);
        } catch (JWTException $exception) {
            return response()->json(['error' => 'token_invalid'], 400);
        }
    }
}
