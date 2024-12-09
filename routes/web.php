<?php

use App\Http\Controllers\Frontend\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
})->name('index');

Route::get('/brand', [Product::class,'index'])->name('');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');
