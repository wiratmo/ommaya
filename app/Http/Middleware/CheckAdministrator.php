<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdministrator
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
        if (Auth::check() && Auth::user()->role_id == 3){
             $request->session()->flash('success', 'Selamat datang di halaman Administrator');
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
