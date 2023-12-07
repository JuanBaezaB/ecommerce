<?php

use App\Http\Controllers\AddresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('address')->group(function () {
    Route::get('regions', [AddresController::class, 'getRegions'])->name('regions');
    Route::get('provinces/{region_id}', [AddresController::class, 'getProvinces'])->name('provinces');
    Route::get('communes/province/{province_id}', [AddresController::class, 'getCommunesByProvince'])->name('communes-by-province');
    Route::get('communes/region/{region_id}', [AddresController::class, 'getCommunesByRegion'])->name('communes-by-region');
});

