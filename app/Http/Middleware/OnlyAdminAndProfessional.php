<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class OnlyAdminAndProfessional
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->profile == config('profile.patient')) {
            return redirect()->route('home.index')->with([
                'message' => 'Você acessou uma área restrita.',
                'code' => 'danger'
            ]);
        }

        return $next($request);
    }
}
