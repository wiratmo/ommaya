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

    public function scopeTransaksiAll($query){
    	return $query
    				->join('akuns', 'akuns.id', 'transaksis.akun_id')
    				->join('users', 'users.id', 'transaksis.user_id')
    				->join('kategoris', 'kategoris.id','akuns.kategori_id')
    				->select('transaksis.id as tid','akuns.id as aid','kategoris.kode', 'akuns.nu', 'akuns.keterangan as aket', 'transaksis.keterangan as tket', 'transaksis.tanggal', 'transaksis.debet','transaksis.kredit', 'users.name')
    				->groupBy('transaksis.id','akuns.id','kategoris.kode', 'akuns.nu','akuns.keterangan', 'transaksis.keterangan', 'transaksis.tanggal', 'transaksis.debet','transaksis.kredit', 'users.name')
    				->orderBy('kategoris.kode', 'asc')
    				->get();
    }

    public function scopeTransaksiKode($query, $kode){
    	return $query
    				->join('akuns', 'akuns.id', 'transaksis.akun_id')
    				->join('users', 'users.id', 'transaksis.user_id')
    				->join('kategoris', 'kategoris.id','akuns.kategori_id')
    				->select('transaksis.id as tid','akuns.id as aid','kategoris.kode', 'akuns.nu', 'akuns.keterangan as aket', 'transaksis.keterangan as tket', 'transaksis.tanggal', 'transaksis.debet','transaksis.kredit', 'users.name')
                    ->groupBy('transaksis.id','akuns.id','kategoris.kode', 'akuns.nu','akuns.keterangan', 'transaksis.keterangan', 'transaksis.tanggal', 'transaksis.debet','transaksis.kredit', 'users.name')
    				->orderBy('kategoris.kode', 'asc')
    				->where('kategoris.kode',$kode)
    				->get();	
    }
}
