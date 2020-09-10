<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\PatientsExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

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
            $patients = User::where('name', 'LIKE', '%' . $s . '%')
                ->where('professional_id', '=', Auth::id())
                ->paginate(config('pagination.default'));
        } else {
            $patients = User::where('professional_id', '=', Auth::id())
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
        $request['password'] = bcrypt($request['password']);

        $request['profile'] = config('profile.patient');

        $request['professional_id'] = Auth::id();

        $user = User::create($request->all());

        if ($user) {
            return redirect()->route('patients.edit', ['id' => $user['id']])
                ->with(['message' => 'Cadastrado realizado com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->route('patients.create')
                ->with(['message' => 'Erro ao cadastrar. Tente novamente!', 'code' => 'danger']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'title' => 'Informações do paciente',
            'isPatientRecord' => true,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
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
            return redirect()->route('patients.edit', ['id' => $user['id']])
                ->with(['message' => 'Edição realizada com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->route('patients.create')
                ->with(['message' => 'Erro ao editar. Tente novamente!', 'code' => 'danger']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        if ($user) {
            return redirect()->route('patients.index')
                ->with(['message' => 'Ação de exclusão realizada com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->route('patients.index')
                ->with(['message' => 'Erro ao excluir. Tente novamente!', 'code' => 'danger']);
        }
    }

    public function export()
    {
        return Excel::download(new PatientsExport, 'HADDS_Exportação_' . date('Y-m-d') . '.xlsx');
    }
}
