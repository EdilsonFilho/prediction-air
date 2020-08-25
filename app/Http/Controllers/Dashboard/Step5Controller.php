<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Step5Request;
use App\Models\Step5;
use App\Models\Survey;
use Auth;

class Step5Controller extends Controller
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

        if ($survey->step5) {
            return redirect()->route('step5s.show', ['survey' => $survey, 'step5' => $survey->step5]);
        }

        return view('dashboard.step5.create', ['survey' => $survey]);
    }

    public function store(Survey $survey, Step5Request $request)
    {
        $request['survey_id'] = $survey->id;

        $step = Step5::create($request->all());

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
    public function show(Survey $survey, Step5 $step5)
    {
        if (
            Auth::id() != $survey->professional_id ||
            Auth::id() != $step5->survey->professional_id
        ) {
            return redirect()->route('patients.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.step5.show', ['survey' => $survey, 'step5' => $step5]);
    }
}
