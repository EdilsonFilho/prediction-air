<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class WhoController extends Controller
{
    public function index()
    {
        return view('dashboard.who.index');
    }
    public function theory()
    {
        return view('dashboard.who.theory');
    }
}