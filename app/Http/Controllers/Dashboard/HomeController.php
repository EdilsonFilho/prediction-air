<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $amountPatients = Auth::user()->getAmountPatients();

        $amountSurveys = Auth::user()->getAmountSurveys();

        return view('dashboard.home.index', [
            'amountPatients' => $amountPatients,
            'amountSurveys' => $amountSurveys
        ]);
    }
}
