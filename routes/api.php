<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\RekapPenjualanController;
use App\Http\Controllers\API\JadwalPengantaranController;
use App\Http\Controllers\API\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//login api
Route::post('login', [AuthController::class, 'login']);

//api rekap/penjualan required login
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/rekap-penjualan', [RekapPenjualanController::class, 'getRekapPenjualan']);
    Route::get('/produk', [ProdukController::class, 'getProduk']);
    Route::get('/jadwal-pengantaran', [JadwalPengantaranController::class, 'getJadwalPengantaran']);
    Route::get('/water_quality', [WaterQualityController::class, 'getWaterQuality']);
    Route::post('/admin/water_quality/store', [WaterQualityController::class, 'store'])->name('admin.water_quality.store');
    Route::get('/water_quality', [WaterQualityController::class, 'getWaterQualityController']);
    Route::get('/admin/water_quality/create', [WaterQualityController::class, 'create'])->name('admin.water_quality.create');

});
