<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step4Request;
use App\Models\Step4;
use App\Models\Survey;
use Auth;

class Step4Controller extends Controller
{
    public function create(Survey $survey)
    {
        if (Auth::id() != $survey->professional_id) {
            return redirect()->route('patients.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        if ($survey->step4) {
            return redirect()->route('surveys.edit', ['id' => $survey->id])
                ->with([
                    'message' => 'Não é possível criar mais de um Questionário para o mesmo processo de pesquisa.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step4.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step4Request $request)
    {
        $request['survey_id'] = $survey->id;

        $step = Step4::create($request->all());

        if ($step) {
            return redirect()->route('surveys.edit', ['id' => $survey->id])
                ->with([
                    'message' => 'Questionário cadastrado com sucesso. Selecione a seção onde deseja inserir novas informações.',
                    'code' => 'success'
                ]);
        } else {
            return redirect()->back()
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
    public function show(Survey $survey, Step4 $step4)
    {
        if (
            Auth::id() != $survey->professional_id ||
            Auth::id() != $step4->survey->professional_id
        ) {
            return redirect()->route('patients.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step4.show', ['survey' => $survey, 'step4' => $step4]);
    }
}
