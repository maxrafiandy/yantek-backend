<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', 'UserController');
Route::resource('alat', 'AlatController');
Route::resource('jenis-alat', 'JenisAlatController');
Route::resource('customer', 'CustomerController');
Route::resource('penyelenggara', 'PenyelenggaraController');
Route::resource('kelas-rs', 'KelasRsController');
Route::resource('pejabat', 'JenisPejabatController');
Route::resource('fasyankes', 'FasyankesController');
Route::resource('sbu-provinsi', 'SbuProvinsiController');
Route::resource('sbu-kabupaten', 'SbuKabupatenController');
Route::resource('petugas', 'Petugas');
