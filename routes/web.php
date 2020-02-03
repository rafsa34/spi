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
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function(){

//-----------------------------------------Bagian--------------------------------------//
Route::get('/bagian','BagianController@index');
Route::post('/bagian/create','BagianController@create');
Route::get('/bagian/{id}/edit','BagianController@edit');
Route::post('/bagian/{id}/update','BagianController@update');
Route::get('/bagian/{id}/del','BagianController@del');

//-----------------------------------------LHP --------------------------------------//
Route::get('/lhp','LhpController@index');
Route::post('/lhp/create','LhpController@create');
Route::get('/lhp/{id}/edit','LhpController@edit');
Route::post('/lhp/{id}/update','LhpController@update');
Route::get('/lhp/{id}/del','LhpController@del');
Route::get('/lhp/cari','LhpController@cari');

//-----------------------------------------LHP Rutin--------------------------------------//
Route::get('/lhp-rutin','LhpController@indexrutin');
Route::get('/lhp-rutin/add','LhpController@addrutin');
Route::post('/lhp-rutin/create','LhpController@create');
Route::get('/lhp-rutin/{id}/edit','LhpController@edit');
Route::post('/lhp-rutin/{id}/update','LhpController@update');
Route::get('/lhp-rutin/{id}/del','LhpController@del');
Route::get('/lhp-rutin/cetak', 'LhpController@cetak');

//-----------------------------------------LHP Khusus--------------------------------------//
Route::get('/lhp-khusus','LhpController@indexkhusus');
Route::get('/lhp-khusus/add','LhpController@addkhusus');
Route::post('/lhp-khusus/create','LhpController@create');
Route::get('/lhp-khusus/{id}/edit','LhpController@edit');
Route::post('/lhp-khusus/{id}/update','LhpController@update');
Route::get('/lhp-khusus/{id}/del','LhpController@del');
Route::get('/lhp-khusus/cetak', 'LhpController@cetak');

//-----------------------------------------LHP SPI--------------------------------------//
Route::get('/lhp-spi','LhpController@indexspi');
Route::post('/lhp-spi/create','LhpController@create');
Route::get('/lhp-spi/{id}/edit','LhpController@edit');
Route::post('/lhp-spi/{id}/update','LhpController@update');
Route::get('/lhp-spi/{id}/del','LhpController@del');
Route::get('/lhp-spi/cetak', 'LhpController@cetak');

//-----------------------------------------LHP BPKP--------------------------------------//
Route::get('/lhp-bpkp','LhpController@indexbpkp');
Route::get('/lhp-bpkp/add','LhpController@addbpkp');
Route::post('/lhp-bpkp/create','LhpController@create');
Route::get('/lhp-bpkp/{id}/edit','LhpController@edit');
Route::post('/lhp-bpkp/{id}/update','LhpController@update');
Route::get('/lhp-bpkp/{id}/del','LhpController@del');
Route::get('/lhp-bpkp/cetak', 'LhpController@cetak');

//-----------------------------------------LHP BPK--------------------------------------//
Route::get('/lhp-bpk','LhpController@indexbpk');
Route::get('/lhp-bpk/add','LhpController@addbpk');
Route::post('/lhp-bpk/create','LhpController@create');
Route::get('/lhp-bpk/{id}/edit','LhpController@edit');
Route::post('/lhp-bpk/{id}/update','LhpController@update');
Route::get('/lhp-bpk/{id}/del','LhpController@del');
Route::get('/lhp-bpk/cetak', 'LhpController@cetak');

//-----------------------------------------LHP KAP--------------------------------------//
Route::get('/lhp-kap','LhpController@indexkap');
Route::get('/lhp-kap/add','LhpController@addkap');
Route::post('/lhp-kap/create','LhpController@create');
Route::get('/lhp-kap/{id}/edit','LhpController@edit');
Route::post('/lhp-kap/{id}/update','LhpController@update');
Route::get('/lhp-kap/{id}/del','LhpController@del');
Route::get('/lhp-kap/cetak', 'LhpController@cetak');

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


// Route::get('/content2','BagianController@content2');

//-----------------------------------------Akun--------------------------------------//


//-----------------------------------------Dashboard--------------------------------------//
//Route::get('/dashboard','DashboardController@index');
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('/akun/{id}/edit','AkunController@edit');
Route::get('/akun','AkunController@profil');
Route::post('/akun/{id}/update','AkunController@update');


// Change Password Routes
Route::get('change-password', 'Auth\ChangePasswordController@show')->name('password.change');
Route::patch('change-password', 'Auth\ChangePasswordController@update')->name('password.change');

//user profil
Route::get('profile', 'Auth\ProfileController@show')->name('profile.show');
    Route::get('profile/edit', 'Auth\ProfileController@edit')->name('profile.edit');
    Route::patch('profile/update', 'Auth\ProfileController@update')->name('profile.update');




});

Route::get('/auth/login','AkunController@index');
Route::post('/auth/login','AkunController@login');

Route::get('/tes', 'RekomendasiController@tes');
//-----------------------------------------Auth--------------------------------------//
Auth::routes();


