<?php

use App\Http\Controllers\{AuthController, KendaraanController, AreaParkirController, TarifController, TransaksiController};
use App\Http\Controllers\LogAktivitasController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('dashboard'); });
    Route::resource('kendaraan', KendaraanController::class);
    Route::resource('area-parkir', AreaParkirController::class);
    Route::resource('tarif', TarifController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::get('/log-aktivitas', [LogAktivitasController::class, 'index'])->name('log-aktivitas.index');
});