<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/provinces', [LocationController::class, 'getProvinces']);
Route::get('/cities/{provinceId}', [LocationController::class, 'getCities']);
Route::get('/districts/{cityId}', [LocationController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [LocationController::class, 'getVillages']);

