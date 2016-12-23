<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;

class KategoriController extends Controller
{
    public function index(){
    	$data= kategori::dataAll();
    	return $data;
    }
}
