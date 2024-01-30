<?php

use App\Http\Controllers\penggunaController;
use App\Http\Controllers\mobilController;
use App\Http\Controllers\sewaController;
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
    session(['id_pengguna' => 1, 'nama' => 'farid asfarianto']);
    return view('dashboard');
});

Route::get('/peminjaman_saya', function(){
    return view('peminjaman');
});

Route::resource('dataPengguna', penggunaController::class);
Route::resource('dataMobil', mobilController::class);
Route::resource('dataPeminjaman', sewaController::class);