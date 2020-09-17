<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step1Request;
use App\Models\Step1;
use App\Models\Survey;
use Auth;

class Step1Controller extends Controller
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

        if ($survey->step1) {
            return redirect()->route('step1s.show', ['survey' => $survey, 'step1' => $survey->step1]);
        }

        return view('dashboard.step1.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step1Request $request)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        $request['survey_id'] = $survey->id;

        $step = Step1::create($request->all());

        if ($step) {

            if (Auth::user()->profile != config('profile.patient')) {
                return redirect()->route('step1s.show', ['survey' => $survey, 'step1' => $survey->step1])
                    ->with([
                        'message' => 'Questionário cadastrado com sucesso. Selecione a seção onde deseja inserir novas informações.',
                        'code' => 'success'
                    ]);
            }

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
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step1.show', ['survey' => $survey, 'step1' => $step1]);
    }
}
