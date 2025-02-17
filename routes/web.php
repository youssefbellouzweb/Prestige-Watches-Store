<?php

use App\Http\Controllers\Users\Brand;
use App\Http\Controllers\Users\Home;
use App\Http\Controllers\Users\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class,'index'])->name('home');
Route::get('/#home', [Home::class,'index'])->name('hero-home');
Route::get('/#about', [Home::class,'index'])->name('about');
Route::get('/#products', [Home::class,'index'])->name('products');
Route::get('/#featured', [Home::class,'index'])->name('featured');

Route::get('/brand/{slug}', [Brand::class,'show'])->name('brand');

Route::get('/brand/product/{brand_slug}/{slug}', [Product::class, 'show'])->name('product');
