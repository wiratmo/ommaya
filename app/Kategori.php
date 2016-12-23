<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function akuns(){
    	return $this->hasMany('App\Akun');
    }

    public function scopeKategoriId($query, $id){
    	return $query->where('id',$id)->get();
    }

    public function scopeDataAll($query){
    	return $query->join('users','users.id','kategoris.user_id')->select('kategoris.id','kategoris.kode', 'kategoris.keterangan', 'users.name', 'kategoris.created_at')->get();
    }
}
