<?php

use App\Http\Controllers\ApiLoginController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ApiLoginController::class, 'login'])
    ->name('api.login.login')
    ->middleware('auth:sanctum');
