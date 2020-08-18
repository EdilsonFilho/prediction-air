<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class SurveyController extends Controller
{
    public function index(User $user)
    {
        // TODO: Validar se existe permissão para realziar a pesquisa

        return view('dashboard.survey.index', ['user' => $user]);
    }

    public function step1(User $user)
    {
        return view('dashboard.survey.step1', ['user' => $user]);
    }
}
