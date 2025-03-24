<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/sign', [RegistrationController::class, 'sign'])->name('sign');

Route::post('/sign/check', [RegistrationController::class, 'signCheck']);

Route::get('/registration', [RegistrationController::class, 'register']);

Route::post('/registration/add/profile', [RegistrationController::class, 'addProfile']);

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/product/get/add/{id_profile}', [ProductController::class, 'page_add']);

Route::post('/product/add', [ProductController::class, 'add']);


