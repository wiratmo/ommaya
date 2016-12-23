<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function akun(){
    	return $this->belongsTo('App\Akun');
    }

     public function user(){
    	return $this->belongsTo('App\User');
    }
}
