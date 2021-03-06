<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
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
/*
Route::get('/', function () {
    return view('layout.master');
});
*/

Route::get('/', [MainController:: class, 'home']);

Route::get('/barang', [BarangController:: class, 'index']);

Route::get('/pelanggan', [PelangganController:: class, 'index']);

Route::get('/pegawai', [PegawaiController:: class, 'index']);

Route::get('/supplier', [SupplierController:: class, 'supplier']);