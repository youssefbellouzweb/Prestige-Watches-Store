<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $products = [
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
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/96-ja353olzfc18tscnj0liuihf-Main_2x.webp',
                'alt' => 'Luxury Watch 3',
                'title' => 'Patek Philippe Vintage',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '22,650',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
                'alt' => 'Luxury Watch 4',
                'title' => 'CArtier Bleu Ball 1',
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '$15,050',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp',
                'alt' => 'Luxury Watch 5',
                'title' => 'Rolex Yacht-Master II 2',
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '$2,500',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/96-ja353olzfc18tscnj0liuihf-Main_2x.webp',
                'alt' => 'Luxury Watch 6 3',
                'title' => 'Patek Philippe Vintage',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '22,650',
            ],
        ];

        $product = array_filter($products, function ($item) use ($slug) {
            return $item['title'] === $slug;
        });

        if (empty($product)) {
            abort(404, 'Product not found');
        }

        $product = array_values($product)[0];

        return view('Users.product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
