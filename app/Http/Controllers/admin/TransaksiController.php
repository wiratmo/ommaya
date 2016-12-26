<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index(){
    	return view('manage.jurnal.transaksi');
    }
}
