<?php

Route::group(['namespace' => 'pegawai', 'prefix' => 'pegawai', 'middleware' => 'checkpegawai'], function(){
	Route::get('home', "HomeController@index");
	Route::group(['prefix' => 'transaksi'], function(){
		Route::get('/', "TransaksiController@index");
		Route::post('/', "TransaksiController@create");
		Route::get('{id}/edit', "TransaksiController@edit");
		Route::post('update', "TransaksiController@update");
	});
});
