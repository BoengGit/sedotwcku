<?php

use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    return view('welcome');
    // return redirect('login')
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>['auth']], function(){


//crud user
Route::resource('user', 'UserController');
Route::resource('pelanggan', 'PelangganController');
Route::resource('perusahaan', 'PerusahaanController');
});

