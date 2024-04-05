<?php

use App\Http\Controllers\Api\ApiBagController;
use App\Http\Controllers\Api\ApiLoginController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ApiLoginController::class, 'login'])
    ->name('api.login.login')
    ->middleware('auth:sanctum');

Route::apiResource('bags', ApiBagController::class)
    ->middleware('auth.sanctum');

Route::get('/test', function () {
    return json_encode('hello from api');
});
