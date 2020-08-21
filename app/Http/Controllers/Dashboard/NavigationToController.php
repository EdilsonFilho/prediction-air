<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class NavigationToController extends Controller
{
    public function to(User $user, Request $request)
    {
        switch ($request['step']) {
            case 'step1':
                return redirect()->route('step1s.index', $user);

            default:
                return redirect()->route('surveys.index', $user);
        }
    }
}
