<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('login');

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'checkadmin'], function(){
	Route::get('home', "HomeController@index");
	Route::get('kategori', "KategoriController@index");
});

Route::group(['namespace' => 'pimpinan', 'prefix' => 'pimpinan', 'middleware' => 'checkpimpinan'], function(){
	Route::get('home', "HomeController@index");
});

Route::group(['namespace' => 'pegawai', 'prefix' => 'pegawai', 'middleware' => 'checkpegawai'], function(){
	Route::get('home', "HomeController@index");
});
