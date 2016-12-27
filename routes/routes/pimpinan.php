<?php

Route::group(['namespace' => 'pimpinan', 'prefix' => 'pimpinan', 'middleware' => 'checkpimpinan'], function(){
	Route::get('home', "HomeController@index");
});