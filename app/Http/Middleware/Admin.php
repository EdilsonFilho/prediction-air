<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
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
        if (Auth::user()->profile != config('profile.administrator')) {
            return redirect()->route('home.index')
                ->with(['message' => 'Você não tem permissão para acessar essa área.', 'code' => 'error']);
        }

        return $next($request);
    }
}
