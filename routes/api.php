<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\authController;


Route::get('/home', [homeController::class, 'index']);

Route::post('/home', [homeController::class, 'store']); // Add product
Route::delete('/home/{categoryId}/{productId}', [homeController::class, 'destroy']);




Route::post('/signup', [UserController::class, 'signup']);

Route::post('/login', [authController::class, 'login']);



