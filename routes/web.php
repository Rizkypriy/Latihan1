<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [InfoController::class, 'halo']);
Route::get('/ikmi', [InfoController::class, 'ikmi']);
Route::get('/dosen', [InfoController::class, 'dosen']);
Route::get('/mahasiswa/{nama}/{nim}', [InfoController::class, 'detailMahasiswa']);
Route::resource('produk', ProdukController::class);
Route::resource('koleksi', BukuController::class);
