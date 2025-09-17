<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/tambahBuku', [BukuController::class, 'create'])->name('buku.create');
Route::post('/tambahBuku', [BukuController::class, 'store'])->name('buku.store');


Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/tambahMahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/tambahMahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
