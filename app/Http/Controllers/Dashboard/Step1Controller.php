<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class Step1Controller extends Controller
{
    public function index(User $user)
    {
        return view('dashboard.step1.index', ['user' => $user]);
    }

    public function store(User $user, Request $request)
    {
        dd($user, $request->all());
    }
}
