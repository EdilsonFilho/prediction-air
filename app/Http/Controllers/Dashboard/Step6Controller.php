<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Step6Request;
use App\Models\Step6;
use App\Models\Survey;

class Step6Controller extends Controller
{
    public function create(Survey $survey)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        if ($survey->step6) {
            return redirect()->route('step6s.show', ['survey' => $survey, 'step6' => $survey->step6]);
        }

        return view('dashboard.step6.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step6Request $request)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        $request['survey_id'] = $survey->id;

        $step = Step6::create($request->all());

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
    public function show(Survey $survey, Step6 $step6)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step6.show', ['survey' => $survey, 'step6' => $step6]);
    }
}
