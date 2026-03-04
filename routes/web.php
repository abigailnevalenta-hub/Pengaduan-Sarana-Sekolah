<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index'])->name('login.page');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan.index');  
Route::get('/pengaduan/create', [App\Http\Controllers\PengaduanController::class, 'create'])->name('pengaduan.create');  
Route::post('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/tanggapan', function () {
    return view('tanggapan.tanggapan');
})->name('tanggapan');

Route::get('/laporan', function () {
    return view('laporan.laporan');
})->name('laporan');

Route::get('/pengaturan', function () {
    return view('pengaturan.pengaturan');
})->name('pengaturan');
