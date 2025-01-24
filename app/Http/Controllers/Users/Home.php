<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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

        $brands = [
            [
                'image' => 'assets/img/Rolex/18975-rolex-logo.png',
                'alt' => 'Rolex',
                'title' => 'Rolex',
                'slug' => 'rolex',
                'link' => 'brands/Rolex.html',
            ],
            [
                'image' => 'assets/img/Audemars/ Audemars Piguit Logo.png',
                'alt' => 'Audemars Piguit',
                'title' => 'Audemars Piguit',
                'slug' => 'audemars',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Richard Mille/6481a7ab9183c6fd9bba1b1a_Frame_76-removebg-preview.png',
                'alt' => 'Richard Mille',
                'title' => 'Richard Mille',
                'slug' => 'richard',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Patek/patek-philippe logo.png',
                'alt' => 'Patek Philippe',
                'title' => 'Patek Philippe',
                'slug' => 'patek',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Hublot/HUBLOT-LOGO.png',
                'alt' => 'Hublot',
                'title' => 'Hublot',
                'slug' => 'hublot',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Tissot/tissot-logo.png',
                'alt' => 'Tissot',
                'title' => 'Tissot',
                'slug' => 'tissot',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Frank/Franck-Muller_Logo_Black_Surface-Magazine_560px.png',
                'alt' => 'Frank Muller',
                'title' => 'Frank Muller',
                'slug' => 'frank',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Cartier/cartier-2-logo.png',
                'alt' => 'Cartier',
                'title' => 'Cartier',
                'slug' => 'cartier',
                'link' => '#',
            ],
        ];

        $watches = [
            [
                'tag' => 'New',
                'image' => 'assets/img/Richard Mille/1447-ge4sxovdxjg3plv9jrrxt6cz-Main_2x.webp',
                'alt' => 'Longines Rose Watch',
                'title' => 'RM-035',
                'slug' => 'richard',
                'brand_slug' => 'richard',
                'price' => '$163,000',
            ],
            [
                'tag' => 'New',
                'image' => 'assets/img/Patek/106-8soyprb5zryt8moy5l06rmpu-Main_2x.webp',
                'alt' => 'Jazzmaster Watch',
                'title' => 'Nautilus',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '$13.400',
            ],
            [
                'tag' => 'New',
                'image' => 'assets/img/Audemars/1173-lq97x3l1dfip4btg2b40kbu5-Main_2x.webp',
                'alt' => 'Dreyfuss Gold Watch',
                'title' => 'Royal Oak',
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '$55.000',
            ],
            [
                'tag' => 'New',
                'image' => 'assets/img/Cartier/165-jy40bbyj1hl8m7ohu4hfuigh-Main_2x.webp',
                'alt' => 'Portuguese Rose Watch',
                'title' => 'Bleu-Ball',
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '$15.900',
            ],
            [
                'tag' => 'New',
                'image' => 'assets/img/Hublot/1064-nqwd5o8wcf5bvegiuv7oxv75-Main_2x.webp',
                'alt' => 'Portuguese Rose Watch',
                'title' => 'Classical Fusion',
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '$29.000',
            ],
            [
                'tag' => 'New',
                'image' => 'assets/img/Frank/521-xls43y5bn68ewg6t4qpzzkpb-Main_2x.webp',
                'alt' => 'Portuguese Rose Watch',
                'title' => 'Drems Colors',
                'slug' => 'frank',
                'brand_slug' => 'frank',
                'price' => '$700.000',
            ],
        ];

        return view('Users.welcome',['watches' => $watches, 'brands' => $brands, 'products' => $products]);
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
