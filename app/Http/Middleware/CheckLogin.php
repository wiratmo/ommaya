<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogin
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
        if(Auth::check()){
            if(Auth::user()->role_id==1){
                return redirect('pegawai/home');
            } else if (Auth::user()->role_id==2){
                return redirect('pimpinan/home');
            } else if (Auth::user()->role_id==3){
                return redirect('admin/home');
            } else{
                $request->session()->flush();
                $request->session()->flash('warning', 'Akun anda sudah terdaftar, Silakan hubungi admin untuk mengaktifkan akun');
                return $next($request);
            }
        }
        return $next($request);
    }
}
