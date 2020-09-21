<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\InterventionRequest;
use App\Models\Intervention1;
use App\Models\Intervention2;
use App\Models\Intervention3;
use App\Models\Intervention4;
use App\Models\Intervention5;
use App\Models\Intervention6;
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

        $intervention = $this->updateOrCreateIntervention(
            $request['type'],
            $request['step_id'],
            $survey->id,
            $request['text']
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

    private function updateOrCreateIntervention($type, $step, $survey, $text)
    {
        $intervention = null;

        switch ($type) {
            case 'STEP_1':

                $intervention = Intervention1::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step1_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            case 'STEP_2':

                $intervention = Intervention2::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step2_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            case 'STEP_3':

                $intervention = Intervention3::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step3_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            case 'STEP_4':

                $intervention = Intervention4::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step4_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            case 'STEP_5':

                $intervention = Intervention5::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step5_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            case 'STEP_6':

                $intervention = Intervention6::updateOrCreate(
                    [
                        'survey_id' => $survey,
                        'step6_id' => $step,
                    ],
                    [
                        'text' => $text
                    ]
                );

                break;

            default:
                # code...
                break;
        }

        return $intervention;
    }
}
