<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Step2Request;
use App\Models\Step2;
use App\Models\Survey;
use Auth;

class Step2Controller extends Controller
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

        if ($survey->step2) {
            return redirect()->route('step2s.show', ['survey' => $survey, 'step2' => $survey->step2]);
        }

        return view('dashboard.step2.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step2Request $request)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        $request['survey_id'] = $survey->id;

        $step = Step2::create($request->all());

        if ($step) {

            if (Auth::user()->profile != config('profile.patient')) {
                return redirect()->route('step2s.show', ['survey' => $survey, 'step2' => $survey->step2])
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
    public function show(Survey $survey, Step2 $step2)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step2.show', ['survey' => $survey, 'step2' => $step2]);
    }
}
