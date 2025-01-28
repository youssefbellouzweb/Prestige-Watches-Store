<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('Users.layouts.master', function ($view) {
            $items = [
                [
                    'tag' => 'Sale',
                    'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
                    'alt' => 'Luxury Watch 1',
                    'title' => 'CArtier Bleu Ball',
                    'slug' => 'cartier',
                    'brand_slug' => 'cartier',
                    'price' => '$15,050',
                ],
                [
                    'tag' => 'Sale t',
                    'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
                    'alt' => 'Luxury Watch 1',
                    'title' => 'CArtier Bleu Ball;jnijn',
                    'slug' => 'cartier',
                    'brand_slug' => 'cartier',
                    'price' => '$15,05099',
                ],
                [
                    'tag' => 'Sale',
                    'image' => 'assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp',
                    'alt' => 'Luxury Watch 2',
                    'title' => 'Rolex Yacht-Master II',
                    'slug' => 'rolex',
                    'brand_slug' => 'rolex',
                    'price' => '$2,500',
                ]
            ];
            $view->with('items', $items);
        });
    }
}
