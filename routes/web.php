<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('segi-empat/inputSegiEmpat', 'SegiEmpatController@inputSegiEmpat')->name('segi-empat.inputSegiEmpat');

Route::post('segi-empat/hasil', 'SegiEmpatController@hasil')->name('segi-empat.hasil');

Route::get('segi-empat/inputKubus', 'SegiEmpatController@inputKubus')->name('segi-empat.inputKubus');    
    
Route::post('segi-empat/hasilKubus', 'SegiEmpatController@hasilKubus')->name('segi-empat.hasilKubus');

//untuk routing semua halaman dari suatu folder
Route::resource('kota','KotaController');