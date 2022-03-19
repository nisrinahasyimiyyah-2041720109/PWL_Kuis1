<?php

use App\Http\Controllers\MainController;
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

Route::get('/barang', [MainController:: class, 'barang']);

Route::get('/pelanggan', [MainController:: class, 'pelanggan']);

Route::get('/pegawai', [MainController:: class, 'pegawai']);

Route::get('/supplier', [MainController:: class, 'supplier']);