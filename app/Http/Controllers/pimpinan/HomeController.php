<?php

namespace App\Http\Controllers\pimpinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
      public function __construct()
    {
        $this->middleware('checkpimpinan');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pimpinan.home');
    }
}
