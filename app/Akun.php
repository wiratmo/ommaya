<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
