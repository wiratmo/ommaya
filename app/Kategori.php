<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Kategori extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function akuns(){
    	return $this->hasMany('App\Akun');
    }

    public function scopeDataAll($query){
    	return $query
                    ->select('kategoris.id','kategoris.kode', 'kategoris.keterangan', 'users.name', 'kategoris.updated_at', DB::raw('count(akuns.kategori_id) as jumlah'))
                    ->join('users','users.id','kategoris.user_id')
                    ->join('akuns', 'akuns.kategori_id', 'kategoris.id')
                    ->groupBy('kategoris.id','kategoris.keterangan','kategoris.kode', 'users.name', 'kategoris.updated_at')
                    ->get();
    }

    public function scopeSmallData($query){
        return $query
                    ->select('id','kode','keterangan')
                    ->get();
    }
}
