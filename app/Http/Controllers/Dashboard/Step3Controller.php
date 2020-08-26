<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Step3Request;
use App\Models\Step3;
use App\Models\Survey;
use Auth;

class Step3Controller extends Controller
{
    public function create(Survey $survey)
    {
        if (Auth::user()->profile == config('profile.patient')) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        if ($survey->step3) {
            return redirect()->route('step3s.show', ['survey' => $survey, 'step3' => $survey->step3]);
        }

        return view('dashboard.step3.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step3Request $request)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        $request['survey_id'] = $survey->id;

        $step = Step3::create($request->all());

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
    public function show(Survey $survey, Step3 $step3)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step3.show', ['survey' => $survey, 'step3' => $step3]);
    }
}
