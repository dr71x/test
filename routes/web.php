<?php

use App\Http\Controllers\EncodeController;
use App\Http\Controllers\MahasiswaController;
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
});
Route::get('/Mahasiswa',[MahasiswaController::class,'index']);
Route::post('/Mahasiswa/simpan',[MahasiswaController::class,'simpan'])->name('simpan');
Route::get('/mahasiswa/hapus/{id}',[MahasiswaController::class,'hapus'])->name('hapus');
Route::get('/encode/gambar',[EncodeController::class,'index'])->name('index');
Route::post('/decode/gambar',[EncodeController::class,'decode'])->name('decode');
Route::get('/view/gambar/{id}',[EncodeController::class,'tampilan'])->name('tampilan');
