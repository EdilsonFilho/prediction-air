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

            $amountPatients = Auth::user()->getAmountPatients();

            $amountSurveys = Auth::user()->getAmountSurveys();

            return view(
                'dashboard.home.admin',
                compact(
                    'totalUsers',
                    'totalProfessionals',
                    'totalPatients',
                    'totalSurveys',
                    'users',
                    'amountPatients',
                    'amountSurveys'
                )
            );
        }


        // $amountPatients = 0;
        // $amountSurveys = 0;
        // $amountUsers = 0;
        // $amountProfessionals = 0;
        // $users = collect();

        // if (
        //     Auth::user()->profile == config('profile.administrator') ||
        //     Auth::user()->profile == config('profile.professional')
        // ) {
        //     $amountPatients = Auth::user()->getAmountPatients();
        //     $amountSurveys = Auth::user()->getAmountSurveys();
        // }

        // if (Auth::user()->profile == config('profile.administrator')) {
        //     $amountUsers = Auth::user()->getAmountUsers();
        //     $amountProfessionals = Auth::user()->getAmountProfessionals();
        //     $users = Auth::user()->getLastUsers();
        // }

        // return view('dashboard.home.index', [
        //     'amountPatients' => $amountPatients,
        //     'amountSurveys' => $amountSurveys,
        //     'amountUsers' => $amountUsers,
        //     'amountProfessionals' => $amountProfessionals,
        //     'users' => $users,
        // ]);
    }
}
