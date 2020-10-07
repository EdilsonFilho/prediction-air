<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Models\User;
use App\Models\Setting;
use App\Enums\SettingType;
use App\Enums\StatusType;
use Auth;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.setting.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, User $user)
    {
        $data = [];

        if (!empty($request['password'])) {
            $request['password'] = bcrypt($request['password']);
            $data = $request->all();
        } else {
            $data = $request->except(['password', 'password_confirmation']);
        }

        $user->fill($data)->update();

        if ($user) {
            return redirect()->route('settings.index')
                ->with(['message' => 'Edição realizada com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->route('settings.index')
                ->with(['message' => 'Erro ao editar. Tente novamente!', 'code' => 'danger']);
        }
    }

    public function changeMenu()
    {
        $currentPosition = Auth::user()->settings(\App\Enums\SettingType::CollapseSidebar) ? StatusType::Disabled : StatusType::Activated;

        $setting = Setting::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'name' => SettingType::CollapseSidebar
            ],
            [
                'value' => $currentPosition
            ]
        );

        if ($setting) {
            return response()->json(['message' => 'Configurações do menu salvas com sucesso.']);
        } else {
            return response()->json(['message' => 'Erro ao salvar as configurações do menu.'], 500);
        }
    }
}
