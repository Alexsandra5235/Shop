<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);

Route::get('/sign', [RegistrationController::class, 'sign']);

Route::get('/registration', [RegistrationController::class, 'register']);

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/product/get/add', [ProductController::class, 'page_add']);

Route::post('/product/add', [ProductController::class, 'add']);


