<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brand', function () {
    return view('frontend.brand');
});

Route::get('/product', function () {
    return view('frontend.product');
});