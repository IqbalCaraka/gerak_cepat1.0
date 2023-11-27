<?php

use Illuminate\Support\Facades\Route;

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
})->name('utama');

// Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::resource('/dashboard', 'GerakCepatController');
Route::resource('/kepalabidang', 'KepalaBidangController');
Route::resource('/kasubumum', 'KepalaSubbagianUmumController');
Route::resource('/kasubkeu', 'KasubKeuanganController');
Route::resource('/pbj', 'PBJController');
Route::resource('/teknisi', 'TeknisiController');


Route::resource('/asetku/pengguna', 'PegawaiController');
Route::resource('/asetku/pengajuanperbaikan', 'PengajuanPerbaikanController');
Route::resource('/asetku/pengajuankebutuhan', 'PengajuanKebutuhanController');
Route::resource('/asetku/kelompokBMN', 'KelompokBMNController');
Route::resource('/asetku/subkelompokBMN', 'SubKelompokBMNController');
Route::resource('/asetku/BMN', 'BMNController');
Route::resource('/asetku/laporan', 'LaporanController');
Route::resource('/asetku/riwayat', 'RiwayatController');


Route::resource('/asetku/daftaraset', 'DaftarAsetController');
Route::resource('/asetku/riwayataktifitasaset', 'RiwayatAktifitasAsetController');
Route::group(['middleware' => ['auth']], function(){
});

