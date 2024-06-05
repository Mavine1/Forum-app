<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Feed\FeedController;

Route::post('/feed/store', [FeedController::class, 'store'])->middleware('auth:sanctum');

Route::get('/test', function () {
    return response([
        'message' => 'API is working'
    ], 200);
});

Route::post('register', [AuthenticationController::class, 'register']);
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('/feed/store', [FeedController::class, 'store'])->middleware('auth:sanctum');
