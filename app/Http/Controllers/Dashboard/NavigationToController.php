<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Survey;

class NavigationToController extends Controller
{
    public function to(Survey $survey, Request $request)
    {
        switch ($request['step']) {
            case 'step1':
                return redirect()->route('step1s.create', $survey);
            case 'step2':
                return redirect()->route('step2s.create', $survey);
            case 'step3':
                return redirect()->route('step3s.create', $survey);
            case 'step4':
                return redirect()->route('step4s.create', $survey);

            default:
                return redirect()->route('surveys.edit', $survey);
        }
    }
}
