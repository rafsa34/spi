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

//-----------------------------------------Bagian--------------------------------------//

Route::get('/bagian','BagianController@index');
Route::post('/bagian/create','BagianController@create');
Route::get('/bagian/{id}/edit','BagianController@edit');
Route::post('/bagian/{id}/update','BagianController@update');
Route::get('/bagian/{id}/del','BagianController@del');

//-----------------------------------------LHP--------------------------------------//
Route::get('/lhp','LhpController@index');
Route::post('/lhp/create','LhpController@create');
Route::get('/lhp/{id}/edit','LhpController@edit');
Route::post('/lhp/{id}/update','LhpController@update');
Route::get('/lhp/{id}/del','LhpController@del');
Route::get('/lhp/cari','LhpController@cari');

//-----------------------------------------Jenis Temuan--------------------------------------//
Route::get('/jenis-temuan','JenisTemuanController@index');
Route::post('/jenis-temuan/create','JenisTemuanController@create');
Route::get('/jenis-temuan/{id}/edit','JenisTemuanController@edit');
Route::post('/jenis-temuan/{id}/update','JenisTemuanController@update');
Route::get('/jenis-temuan/{id}/del','JenisTemuanController@del');

//-----------------------------------------Temuan--------------------------------------//
Route::get('/temuan','TemuanController@index');
Route::post('/temuan/create','TemuanController@create');
Route::get('/temuan/{id}/edit','TemuanController@edit');
Route::post('/temuan/{id}/update','TemuanController@update');
Route::get('/temuan/{id}/del','TemuanController@del');

//-----------------------------------------Rekomendasi--------------------------------------//
Route::get('/rekomendasi','RekomendasiController@index');
Route::post('/rekomendasi/create','RekomendasiController@create');
Route::get('/rekomendasi/{id}/edit','RekomendasiController@edit');
Route::post('/rekomendasi/{id}/update','RekomendasiController@update');
Route::get('/rekomendasi/{id}/del','RekomendasiController@del');

//-----------------------------------------Tindak Lanjut--------------------------------------//
Route::get('/tindak','TindakController@index');
Route::post('/tindak/create','TindakController@create');
Route::get('/tindak/{id}/edit','TindakController@edit');
Route::post('/tindak/{id}/update','TindakController@update');
Route::get('/tindak/{id}/del','TindakController@del');

//-----------------------------------------Auth--------------------------------------//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
