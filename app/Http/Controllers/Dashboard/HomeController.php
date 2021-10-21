<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index');
    }
    public function prediction()
    {
        return view('dashboard.home.prediction');
    }
}