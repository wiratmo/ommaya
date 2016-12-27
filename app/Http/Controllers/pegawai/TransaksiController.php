<?php

namespace App\Http\Controllers\pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\add\AddTransaksiPost;
use App\Http\Requests\edit\EditTransaksiPost;
use App\Transaksi;
use Carbon\Carbon;
use App\Akun;
use Auth;
use Session;

class TransaksiController extends Controller
{
    public function index(){
    	$data['kode'] = akun::smallData();
    	$data['transaksi'] = transaksi::transaksiAll();
    	return view('manage.jurnal.transaksi', $data);
    }

    public function checkd($debet){
    	if (empty ($debet)){
    		return 0;
    	}
    	return $debet;
    }

    public function checkk($kredit){
    	if (empty ($kredit)){
    		return 0;
    	}
    	return $kredit;	
    }
    public function create(AddTransaksiPost $request){
    	$t = new Transaksi;
    	$t->akun_id 	= $request->transaksi_id;
    	$t->tanggal 	= Carbon::now();
    	$t->debet 		= $this->checkd($request->debet);
    	$t->kredit		= $this->checkk($request->kredit);
    	$t->keterangan 	= $request->keterangan;
    	$t->user_id 	= Auth::user()->id;
    	$t->save();
    	Session::flash('success', 'Selamat anda telah menambahkan Transaksi');
        return redirect('pegawai/transaksi');
    }

    public function update(EditTransaksiPost $request){
        $t = Transaksi::find($request->tid);
        $t->akun_id     = $request->transaksi_id;
        $t->debet       = $this->checkd($request->debet);
        $t->kredit      = $this->checkk($request->kredit);
        $t->keterangan  = $request->keterangan;
        $t->updated_at     = Carbon::now();
        $t->save();
        Session::flash('success', 'Selamat anda telah merubah Transaksi');
        return redirect('pegawai/transaksi');
    }
}
