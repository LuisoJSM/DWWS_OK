<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploaderController;



Route::post('/login', action: LoginController::class)->middleware('guest:sanctum');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/logout', function (Request $request) {
    return $request->user()->currentAccessToken()->delete();
})->middleware('auth:sanctum');
