<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InterventionRequest;
use App\Models\Intervention;
use App\Models\Survey;

class InterventionController extends Controller
{
    public function store(InterventionRequest $request, Survey $survey)
    {
        if (!canAccessStep($survey)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        // $intervention = Intervention::create($request->all());

        $intervention = Intervention::updateOrCreate(
            [
                'survey_id' => $survey->id,
                'step_id' => $request['step_id'],
            ],
            [
                'text' => $request['text']
            ]
        );

        if ($intervention) {
            return redirect()->back()
                ->with([
                    'message' => 'Intervenção cadastrada com sucesso.',
                    'code' => 'success'
                ]);
        } else {
            return redirect()->back()
                ->with([
                    'message' => 'Erro ao cadastrar intervenção. Por favor, tente novamente.',
                    'code' => 'danger'
                ]);
        }
    }
}
