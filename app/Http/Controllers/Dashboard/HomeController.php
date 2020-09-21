<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->profile == config('profile.administrator')) {

            $totalUsers = Auth::user()->getTotalUsers();

            $totalProfessionals = Auth::user()->getTotalProfessionals();

            $totalPatients = Auth::user()->getTotalPatients();

            $totalSurveys = Survey::all()->count();

            $users = Auth::user()->getLastUsers();

            return view(
                'dashboard.home.administrator',
                compact(
                    'totalUsers',
                    'totalProfessionals',
                    'totalPatients',
                    'totalSurveys',
                    'users'
                )
            );
        }

        // if (Auth::user()->profile == config('profile.professional')) {

        //     $amountPatients = Auth::user()->getAmountPatients();

        //     $totalSurveys = Survey::all()->count();

        //     return view(
        //         'dashboard.home.professional',
        //         compact(
        //             'amountPatients',
        //             'totalSurveys'
        //         )
        //     );
        // }

        $totalSurveys = Survey::where('patient_id', '=', Auth::id())->count();

        return view(
            'dashboard.home.patient',
            compact(
                'totalSurveys'
            )
        );
    }
}
