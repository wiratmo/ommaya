<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\add\AddAkunPost;
use App\Http\Requests\edit\EditAkunPost;
use App\Akun;
use App\Kategori;
use Auth;
use Carbon\Carbon;
use Session;


class AkunController extends Controller
{
    public function index(){
        $data['kategori'] = kategori::smallData();
    	$data['akun'] = akun::dataAll();
    	return view('manage.jurnal.akun', $data);
    }

    public function noUrut($id){
        if (empty(akun::lastData($id)[0])){
            return 1;
        } else {
            return (akun::lastData($id)[0]->nu) + 1;
        }
    }

    public function create(AddAkunPost $request){
        $a = new Akun;
        $a->kategori_id = $request->kategori_id;
        $a->nu = $this->noUrut($request->id);
        $a->keterangan = $request->keterangan;
        $a->user_id = Auth::user()->id;
        $a->save();
        Session::flash('success', 'Selamat anda telah menambahkan Akun');
        return redirect('admin/akun');
    }

    public function update(EditAkunPost $request){
        $a = Akun::find($request->aid);
        $a->kategori_id = $request->kategori_id;
        $a->nu = $this->noUrut($request->kategori_id);
        $a->keterangan = $request->keterangan;
        $a->updated_at = Carbon::now();
        $a->save();
        Session::flash('warning', 'Selamat anda telah merubah Akun');
        return redirect('admin/akun');
    }

    public function delete(Request $request){
        $a = Akun::find($request->aid);
        Session::flash('warning', 'Selamat anda telah menghapus Akun');
        $a->delete();
        return redirect('admin/akun');
    }
}
