<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('laporan.form'));

Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.form');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
