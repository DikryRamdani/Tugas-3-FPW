<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('app');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/buku', function () {
    return view('buku');
})->middleware('auth');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/tambahBuku', [BukuController::class, 'create'])->name('buku.create');
Route::post('/tambahBuku', [BukuController::class, 'store'])->name('buku.store');


Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/tambahMahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/tambahMahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/register', [authController::class, 'showRegister'])->name('register');
Route::post('/register', [authController::class, 'register']);

Route::get('/login', [authController::class, 'showLogin'])->name('login');
Route::post('/login', [authController::class, 'login']);

Route::get('/logout', [authController::class, 'logout'])->name('logout');

// Halaman dashboard (hanya bisa diakses setelah login)
Route::get('/dashboard', function () {
    return view('app');
})->middleware('auth');
