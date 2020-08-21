<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step1Request;
use App\Models\Step1;
use App\Models\Survey;

class Step1Controller extends Controller
{
    public function create(Survey $survey)
    {
        if ($survey->step1) {
            return redirect()->route('surveys.edit', ['id' => $survey->id])
                ->with([
                    'message' => 'Não é possível criar mais de um Questionário para o mesmo processo de pesquisa.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step1.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step1Request $request)
    {
        $request['survey_id'] = $survey->id;

        $step = Step1::create($request->all());

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
    public function show(Survey $survey, Step1 $step1)
    {
        return view('dashboard.step1.show', ['survey' => $survey, 'step1' => $step1]);
    }
}
