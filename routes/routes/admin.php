<?php

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'checkadmin'], function(){
	Route::get('home', "HomeController@index");
	Route::group(['prefix'=>'kategori'], function(){
		Route::get('/', "KategoriController@index");
		Route::post('/', "KategoriController@create");
		Route::get('{id}/edit', "KategoriController@edit");
		Route::post('update', "KategoriController@update");
		Route::delete('delete', "KategoriController@delete");
	});

	Route::group(['prefix'=>'akun'], function(){
		Route::get('/', "AkunController@index");
		Route::post('/', "AkunController@create");
		Route::get('{id}/edit', "AkunController@edit");
		Route::post('update', "AkunController@update");
		Route::delete('delete', "AkunController@delete");
	});

	Route::group(['prefix'=>'transaksi'], function(){
		Route::get('/', "TransaksiController@index");
		Route::post('/', "TransaksiController@create");
		Route::get('{id}/edit', "TransaksiController@edit");
		Route::post('update', "TransaksiController@update");
		Route::delete('delete', "TransaksiController@delete");
	});
});