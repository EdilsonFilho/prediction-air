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
        $amountUsers = 0;
        $amountProfessionals = 0;

        if (
            Auth::user()->profile == config('profile.administrator') ||
            Auth::user()->profile == config('profile.professional')
        ) {
            $amountPatients = Auth::user()->getAmountPatients();
            $amountSurveys = Auth::user()->getAmountSurveys();
        }

        if (Auth::user()->profile == config('profile.administrator')) {
            $amountUsers = Auth::user()->getAmountUsers();
            $amountProfessionals = Auth::user()->getAmountProfessionals();
        }

        return view('dashboard.home.index', [
            'amountPatients' => $amountPatients,
            'amountSurveys' => $amountSurveys,
            'amountUsers' => $amountUsers,
            'amountProfessionals' => $amountProfessionals,
        ]);
    }
}
