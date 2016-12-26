<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\add\AddKategoriPost;
use App\Http\Requests\edit\EditKategoriPost;
use App\Kategori;
use Auth;
use Carbon\Carbon;
use Session;

class KategoriController extends Controller
{
    public function index(){    	
    	$data['kategori'] = kategori::dataAll();
    	return view('manage.jurnal.kategori', $data);
    }

    public function create(AddKategoriPost $request){
    	$k = new Kategori;
        $k->kode = $request->kode;
        $k->keterangan = strtoupper($request->keterangan);
        $k->user_id = Auth::user()->id;
        $k->save();
        Session::flash('success', 'Selamat anda telah menambahkan Kategori dengan Kode'.$k->kode.'');
        return redirect('admin/kategori');
    }

    public function update(EditKategoriPost $request){
    	$k = Kategori::find($request->kid);
        $k->kode = $request->kode;
        $k->keterangan = strtoupper($request->keterangan);
        $k->updated_at = Carbon::now();
        $k->save();
        Session::flash('info', 'Selamat anda telah mengubah Kategori dengan Kode '.$k->kode.'');
        return redirect('admin/kategori');   
    }

    public function delete(Request $request){
        $k = Kategori::find($request->kidh);
        Session::flash('warning', 'Selamat anda telah menghapus Kategori dengan Kode '.$k->kode.'');
        $k->delete();
        return redirect('admin/kategori');
    }

}
