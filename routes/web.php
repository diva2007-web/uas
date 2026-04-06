<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisInteraktifController;
use App\Http\Controllers\LeadboardController;
use App\Http\Controllers\PoinController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// halaman awal (opsional)
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    // ===== KUIS INTERAKTIF =====
    Route::get('/kuis-interaktif', [KuisInteraktifController::class, 'index']);
    Route::post('/kuis-interaktif', [KuisInteraktifController::class, 'store']);

    // ===== LEADBOARD =====
    Route::get('/leadboard', [LeadboardController::class, 'index']);
    Route::post('/leadboard', [LeadboardController::class, 'store']);

    // ===== POIN =====
    Route::get('/poin', [PoinController::class, 'index']);
    Route::post('/poin', [PoinController::class, 'store']);

});
