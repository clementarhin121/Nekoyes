<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::middleware('auth')->group(function () {
    Route::post('/product/{product}/add', [ProductController::class, 'purchase']);
    Route::post('/product/{product}/reduce', [ProductController::class, 'unpurchase']);

});
Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signup', [UserController::class, 'create']);
Route::get('/signin', [UserController::class, 'signin']);
Route::post('/signin', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);