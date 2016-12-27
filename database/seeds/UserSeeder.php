<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
        	['access'=>'Pegawai'],
        	['access'=>'Pimpinan'],
        	['access'=>'Administrator'],
        	);
        
        $users = array(
        	['name'=>'Pegawai1','email'=>'pegawai1@ommaya.com', 'password'=>Hash::make('pegawai1'), 'role_id' => '1', 'active' => 'y', 'last_login'=>'2016-12-20'],
        	['name'=>'Pegawai2','email'=>'pegawai2@ommaya.com', 'password'=>Hash::make('pegawai2'), 'role_id' => '1', 'active' => 'y', 'last_login'=>'2016-12-20'],
        	['name'=>'Pimpinan','email'=>'pimpinan@ommaya.com', 'password'=>Hash::make('pimpinan'), 'role_id' => '2', 'active' => 'y', 'last_login'=>'2016-12-20'],
        	['name'=>'Administrator','email'=>'administrator@ommaya.com', 'password'=>Hash::make('administrator'), 'role_id' => '3', 'active' => 'y', 'last_login'=>'2016-12-20'],
        	);

        foreach ($roles as $r) {
        	DB::table('roles')->insert($r);
        }

        foreach ($users as $u) {
        	DB::table('users')->insert($u);
        }
    }
}
