<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\TarifController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){

    Route::get('/', function(){
        return view('dashboard');
    });
    
    Route::resource('kendaraan', KendaraanController::class);
    Route::resource('area', AreaParkirController::class);
    Route::resource('tarif', TarifController::class);
    Route::resource('transaksi', TransaksiController::class);
});