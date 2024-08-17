<?php

use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('api')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});


Route::get('/', function () {
    return view('welcome');
});
