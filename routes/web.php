<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Fakultas\FakultasController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\MataKuliah\MataKuliahController;
use App\Http\Controllers\Krs\KrsController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('fakultas', FakultasController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('mata_kuliah', MataKuliahController::class);

Route::get('/krs', [KrsController::class, 'index'])->name('krs.index');
Route::get('/krs/{mahasiswa}/edit', [KrsController::class, 'edit'])->name('krs.edit');
Route::put('/krs/{mahasiswa}', [KrsController::class, 'update'])->name('krs.update');



