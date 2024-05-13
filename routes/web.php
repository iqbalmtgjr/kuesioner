<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ParameternilaiController;
use App\Http\Controllers\TahunajaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/tahun-ajaran', [TahunajaranController::class, 'index'])->name('tahun-ajaran');
Route::get('/parameter-nilai', [ParameternilaiController::class, 'index'])->name('parameter-nilai');
