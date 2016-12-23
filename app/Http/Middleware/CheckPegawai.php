<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckPegawai
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
        if (Auth::check() && Auth::user()->role_id == 1){
            $request->session()->flash('success', 'Selamat datang di halaman Pegawai');
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
