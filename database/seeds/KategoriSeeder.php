<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = array(
        	['kode'=>'110', 'keterangan' => 'AKTIVA LANCAR', 'user_id'=>'3'],
        	['kode'=>'120', 'keterangan' => 'AKTIVA TETAP', 'user_id'=>'3'],
        	['kode'=>'210', 'keterangan' => 'HUTANG LANCAR', 'user_id'=>'3'],
        	['kode'=>'220', 'keterangan' => 'HUTANG TETAP', 'user_id'=>'3'],
        	['kode'=>'310', 'keterangan' => 'PRIVE LANCAR', 'user_id'=>'3'],
        	['kode'=>'320', 'keterangan' => 'PRIVE TETAP', 'user_id'=>'3'],
        	['kode'=>'410', 'keterangan' => 'PENDAPATAN LANCAR', 'user_id'=>'3'],
        	['kode'=>'420', 'keterangan' => 'PENDAPATAN TETAP', 'user_id'=>'3'],
        	['kode'=>'510', 'keterangan' => 'BEBAN LANCAR', 'user_id'=>'3'],
        	['kode'=>'520', 'keterangan' => 'BEBAN TETAP', 'user_id'=>'3'],
        	);
        foreach ($kategori as $k) {
        	DB::table('kategoris')->insert($k);
        }
    }
}
