<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class HomeController extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('checkadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::flash('success', 'Selamat datang di halaman Administrator');
        return view('admin.home');
    }
}
