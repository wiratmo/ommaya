<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Akun extends Model
{
    public function kategori(){
    	return $this->belongsTo('App\Kategori');
    }

    public function transaksis(){
    	return $this->hasMany('App\Transaksi');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function scopeLastData($query, $id){
        return $query
                    ->select('nu')
                    ->whereKategori_id($id)
                    ->orderBy('nu','desc')
                    ->take(1)
                    ->get();
    }

    public function scopeDataAll($query){
    	return $query
                    ->select('akuns.id', 'kategoris.keterangan','kategoris.kode','kategoris.id as kid','akuns.nu','akuns.keterangan', DB::raw('sum(transaksis.debet) as debet'), DB::raw('sum(transaksis.kredit) as kredit'), 'users.name','akuns.updated_at')
                    ->join('users','users.id','akuns.user_id')
                    ->join('transaksis', 'transaksis.akun_id', 'akuns.id')
                    ->join('kategoris', 'kategoris.id', 'akuns.kategori_id')
                    ->groupBy('akuns.id','kategoris.keterangan','kategoris.kode','akuns.nu','akuns.keterangan','akuns.updated_at', 'users.name','kategoris.id')
                    ->orderBy('kategoris.kode', 'asc')
                    ->orderBy('akuns.nu','asc')
                    ->get();
    }
}
