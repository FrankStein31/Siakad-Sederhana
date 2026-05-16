<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs', BlogController::class);

// Soft delete (trashed) & restore
Route::get('/blogs/trashed', [BlogController::class, 'trashed'])->name('blogs.trashed');

// restore: dukung PUT dan POST (form HTML kadang POST)
Route::match(['put', 'post'], '/blogs/{id}/restore', [BlogController::class, 'restore'])->name('blogs.restore');

Route::delete('/blogs/{id}/force-delete', [BlogController::class, 'forceDelete'])->name('blogs.forceDelete');

Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('dosens', DosenController::class);
Route::resource('karyawans', KaryawanController::class);

