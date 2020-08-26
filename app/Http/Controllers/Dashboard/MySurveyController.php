<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Survey;
use Auth;

class MySurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::where('patient_id', '=', Auth::id())
            ->paginate(config('pagination.default'));

        return view('dashboard.survey.index', ['user' => Auth::user(), 'surveys' => $surveys]);
    }
}
