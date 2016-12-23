<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckPimpinan
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
        if (Auth::check() && Auth::user()->role_id == 2){
             $request->session()->flash('success', 'Selamat datang di halaman Pimpinan');
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
