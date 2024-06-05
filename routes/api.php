<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\FeedController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function(){
    return response ([
        'message' => 'Api is working '
    ], 200);
});
Route::post('register',[AuthenticationController::class, 'register']);
Route::post('login',[AuthenticationController::class, 'login']);
Route::post('store',[FeedController::class, 'store']);
