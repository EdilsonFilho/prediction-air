<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\User;
use Auth;

class SurveyController extends Controller
{
    public function index(User $user)
    {
        // TODO: Validar se existe permissão para realziar a pesquisa

        $surveys = Survey::where('professional_id', '=', Auth::id())
            ->paginate(config('pagination.default'));

        return view('dashboard.survey.index', ['user' => $user, 'surveys' => $surveys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        $survey = Survey::create([
            'professional_id' => Auth::id(),
            'patient_id' => $user->id
        ]);

        if ($survey) {
            return redirect()->route('surveys.edit', ['id' => $survey['id']])
                ->with([
                    'message' => 'Questionário iniciado com sucesso. Selecione a seção onde deseja inserir novas informações.',
                    'code' => 'success'
                ]);
        } else {
            return redirect()->route('surveys.create')
                ->with([
                    'message' => 'Erro ao iniciar um novo questionário. Por favor, tente novamente.',
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
    public function edit(Survey $survey)
    {
        $user = User::find($survey->patient_id);

        return view('dashboard.survey.edit', ['survey' => $survey, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();

        if ($survey) {
            return redirect()->back()
                ->with(['message' => 'Ação de exclusão realizada com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->back()
                ->with(['message' => 'Erro ao excluir. Tente novamente!', 'code' => 'danger']);
        }
    }
}
