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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/buat', 'HomeController@buat')->name('buat');
Route::get('/report','HomeController@data')->name('report');
Route::get('/tampil','HomeController@tampil')->name('tampil');
Route::delete('/tampil/{id}','HomeController@delete')->name('home.delete');
Route::patch('/tampil/{id}','HomeController@insert')->name('home.insert');
Route::get('/tampil/edit/{id}','HomeController@edit')->name('home.edit');
Route::post('/tampil/cari','HomeController@cari')->name('home.cari');
Route::get('/tampil/{id}/cetak_pdf', 'HomeController@cetak_pdf')->name('home.cetak');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/users','UserController@index');
Route::resource('egov','EgovController');
Route::post('/cetakopd','HomeController@cari_cetak')->name('cetak_opd');
Route::get('/calender','HomeController@calender')->name('calender');