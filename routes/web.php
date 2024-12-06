<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\authController;
use App\Http\Controllers\drivesController;
use App\Http\Controllers\gamingChairController;
use App\Http\Controllers\graphicController;
use App\Http\Controllers\headphonesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\phoneController;


Route::get('/', function () {
    return view('content');
})->name('homepage');

// LOGIN
Route::view('login', 'login')->name('login');
Route::post('graphic-card', [authController::class, 'loginAuth']) -> name('loginSubmit');

// SIGNUP
Route::view('signup', 'signup')->name('signup');
Route::post('signup', [UserController::class, 'userRegister'])->name('signup');

//admin page
Route::view('admin','admin')->name('admin');

//user page
Route::view('user', 'userPage')->name('user-page');


Route::post('admin',[adminController::class , 'store'])->name('add-products');
Route::get('admin',[adminController::class , 'index'])->name('see-products');


//view and controller for graphic card

Route::view('graphic-card', 'graphic')->name('graphic-card');
Route::get('graphic-card', [graphicController::class, 'index'])->name('graphic-card');

//view and controller for mobilephones
Route::view('phone', 'phone')->name('phone');
Route::get('phone', [phoneController::class, 'index'])->name('phone');

//view and controller for headphones
Route::view('headphone', 'headphone')->name('headphone');
Route::get('headphone', [headphonesController::class, 'index'])->name('headphone');

// //view and controller for gamingChair
Route::view('gamingchair', 'gamingchair')->name('gamingchair');
Route::get('gamingchair', [gamingChairController::class, 'index'])->name('gamingchair');

//view and controller for drives
Route::view('drives', 'drives')->name('drives');
Route::get('drives', [drivesController::class, 'index'])->name('drives');




