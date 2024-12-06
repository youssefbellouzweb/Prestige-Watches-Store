<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
})->name('index');

Route::get('/brand', function () {
    return view('frontend.brand');
})->name('');

Route::get('/product', function () {
    return view('frontend.product');
})->name('');