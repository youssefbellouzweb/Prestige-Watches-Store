<?php

use App\Http\Controllers\Users\Brand;
use App\Http\Controllers\Users\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Users.welcome');
})->name('index');

Route::get('/brand/{slug}', [Brand::class,'show'])->name('brand');

Route::get('/product/{slug}', [Product::class,'show'])->name('product');
