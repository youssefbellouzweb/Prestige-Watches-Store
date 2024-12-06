<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/1-w70x429knb132x17edf24c63-Main_2x.webp',
            'alt' => 'Luxury Watch 1',
            'title' => 'Submariner Date',
            'price' => '$15,050',
            'link' => 'Shwood-Shop/product.html',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/2-y181jdh67kx2lripaucfting-Main_2x.webp',
            'alt' => 'Luxury Watch 2',
            'title' => 'Rolex Yacht-Master II',
            'price' => '$2,500',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/3-oxbyqsr0pt5y84g8sexacrfl-Main_2x.webp',
            'alt' => 'Luxury Watch 3',
            'title' => 'Patek Philippe Vintage',
            'price' => '$22,650',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/4-s3n4vjwfzcimyvyeizqpl6cv-Main_2x.webp',
            'alt' => 'Luxury Watch 4',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/49-5os8cromlu1m5otpcim3xb2w-Main_2x.webp',
            'alt' => 'Luxury Watch 5',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/47-v5b06z1h6pcvqe8xu0e9h2pg-Main_2x.webp',
            'alt' => 'Luxury Watch 6',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/54-83a5t6w7ocqe7bm8y9kigmt3-Main_2x.webp',
            'alt' => 'Luxury Watch 7',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/55-vb2javyk3a8rlddxgy6lkr33-Main_2x.webp',
            'alt' => 'Luxury Watch 8',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp',
            'alt' => 'Luxury Watch 9',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/SubmarinerOr.webp',
            'alt' => 'Luxury Watch 10',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
            [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/SubmarinerNoDate.webp',
            'alt' => 'Luxury Watch 11',
            'title' => 'Cartier Bleu Ball',
            'price' => '$15,050',
            'link' => '#',
            ],
          ];

          return view('frontend.product', compact('products'));
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
    public function show(string $id)
    {
        //
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
