<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/user/{id}/{name}/', function ($id, $name) {
    return "Hello, " . $name . " " . $id;
});
