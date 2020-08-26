<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $amountPatients = 0;
        $amountSurveys = 0;

        if (Auth::user()->profile != config('profile.patient')) {
            $amountPatients = Auth::user()->getAmountPatients();
            $amountSurveys = Auth::user()->getAmountSurveys();
        }

        return view('dashboard.home.index', [
            'amountPatients' => $amountPatients,
            'amountSurveys' => $amountSurveys
        ]);
    }
}
