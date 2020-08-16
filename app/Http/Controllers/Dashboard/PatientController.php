<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Patient;
use App\Models\User;
use Auth;
use DB;
use Exception;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = isset($request['s']) ? $request['s'] : null;

        if ($s) {
            $patients = Patient::with(['user' => function ($q) use ($s) {
                return $q->where('name', 'LIKE', '%' . $s . '%');
            }])
                ->where('professional_id', '=', Auth::id())
                ->paginate(config('pagination.default'));

            dd($patients);
        } else {
            $patients = Patient::where('professional_id', '=', Auth::id())
                ->paginate(config('pagination.default'));
        }

        return view('dashboard.patient.index', compact('patients', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'dashboard.user.create',
            ['title' => 'Informações do paciente', 'isPatientRecord' => true]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $request['password'] = bcrypt($request['password']);

            $request['profile'] = config('profile.patient');

            DB::beginTransaction();

            $user = User::create($request->all());

            $patient = Patient::create([
                'user_id' => $user->id,
                'professional_id' => Auth::id()
            ]);

            DB::commit();

            return redirect()->route('patients.edit', ['patient' => $patient->id])
                ->with(['message' => 'Cadastrado realizado com sucesso.', 'code' => 'success']);
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->route('patients.create')
                ->with([
                    'message' => 'Erro ao cadastrar. Tente novamente! Informe está mesangem ao desenvolvedor: ' . $e->getMessage(),
                    'code' => 'danger'
                ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('dashboard.user.edit', [
            'title' => 'Informações do paciente',
            'isPatientRecord' => true,
            'user' => $patient->user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        try {
            DB::beginTransaction();

            $patient->user->delete();

            $patient->delete();

            DB::commit();

            return redirect()->route('patients.index')
                ->with(['message' => 'Ação de exclusão realizada com sucesso.', 'code' => 'success']);
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->route('patients.index')
                ->with(['message' => 'Erro ao excluir. Tente novamente!', 'code' => 'danger']);
        }
    }
}
