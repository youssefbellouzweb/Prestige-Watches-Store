<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Brand extends Controller
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
                'image' => 'assets/img/Cartier/Blue/velvera.ma-1738955188364/montre-homme-cart-santos-wssa0030-velvera-ma-1.png',
                'alt' => 'CArtier Blue',
                'title' => 'CArtier Blue',
                'slug' => 'cartier',
                'images' => [
                    "assets/img/Cartier/Blue/velvera.ma-1738955188364/montre-homme-cart-santos-wssa0030-velvera-ma-1.png",
                    "assets/img/Cartier/Blue/velvera.ma-1738955188364/montre-homme-cart-santos-wssa0030-velvera-ma-2.png",
                    "assets/img/Cartier/Blue/velvera.ma-1738955188364/montre-homme-cart-santos-wssa0030-velvera-ma-3.png",
                    "assets/img/Cartier/Blue/velvera.ma-1738955188364/montre-homme-cart-santos-wssa0030-velvera-ma-4.png",
                ],
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Cartier/Skeleton white/royalmontre.com-1738956913267/w1242_tpadding12-3.jpg',
                'alt' => 'Skeleton white',
                'title' => 'Skeleton white',
                'slug' => 'cartier',
                'images' => [
                    "assets/img/Cartier/Skeleton white/royalmontre.com-1738956913267/w1242_tpadding12-3.jpg",
                    "assets/img/Cartier/Skeleton white/royalmontre.com-1738956913267/w1242_tpadding12-4.jpg",
                    "assets/img/Cartier/Skeleton white/royalmontre.com-1738956913267/637710148883595333-2135978-copie.jpg",
                    "assets/img/Cartier/Skeleton white/royalmontre.com-1738956913267/637710148883595333-2226285-copie.jpg",
                ],
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Cartier/Santos black/velvera.ma-1738954632229/montre-homme-cart-santos-wssa0037-velvera-ma-1.png',
                'alt' => 'Santos black',
                'title' => 'Santos black',
                'slug' => 'cartier',
                'images' => [
                    "assets/img/Cartier/Santos black/velvera.ma-1738954632229/montre-homme-cart-santos-wssa0037-velvera-ma-1.png",
                    "assets/img/Cartier/Santos black/velvera.ma-1738954632229/montre-homme-cart-santos-wssa0037-velvera-ma-2.png",
                    "assets/img/Cartier/Santos black/velvera.ma-1738954632229/montre-homme-cart-santos-wssa0037-velvera-ma-6.png",
                    "assets/img/Cartier/Santos black/velvera.ma-1738954632229/montre-homme-cart-santos-wssa0037-velvera-ma-5.png",
                ],
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Cartier/TAnk black/royalmontre.com-1738957560146/w1242_tpadding12-2022-03-05T173405.416.jpg',
                'alt' => 'Tank black',
                'title' => 'Tank black',
                'slug' => 'cartier',
                'images' => [
                    "assets/img/Cartier/TAnk black/royalmontre.com-1738957560146/w1242_tpadding12-2022-03-05T173405.416.jpg",
                    "assets/img/Cartier/TAnk black/royalmontre.com-1738957560146/w1242_tpadding12-2022-03-05T173410.460.jpg",
                    "assets/img/Cartier/TAnk black/royalmontre.com-1738957560146/w1242_tpadding12-2022-03-05T173406.990.jpg",
                    "assets/img/Cartier/TAnk black/royalmontre.com-1738957560146/w1242_tpadding12-2022-03-05T173410.802.jpg",
                ],
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Audemars/offshore diver chr/velvera.ma-1738958058425/montre-homme-ap-royal-oak-offshore-diver-chronograph-velvera-ma-1-removebg-preview.png',
                'alt' => 'offshore diver chr',
                'title' => 'offshore diver chr',
                'slug' => 'audemars',
                'images' => [
                    "assets/img/Audemars/offshore diver chr/velvera.ma-1738958058425/montre-homme-ap-royal-oak-offshore-diver-chronograph-velvera-ma-1-removebg-preview.png",
                    "assets/img/Audemars/offshore diver chr/velvera.ma-1738958058425/montre-homme-ap-royal-oak-offshore-diver-chronograph-velvera-ma-3.png",
                    "assets/img/Audemars/offshore diver chr/velvera.ma-1738958058425/montre-homme-ap-royal-oak-offshore-diver-chronograph-velvera-ma-4.png",
                    "assets/img/Audemars/offshore diver chr/velvera.ma-1738958058425/montre-homme-ap-royal-oak-offshore-diver-chronograph-velvera-ma-5.png",
                ],
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Audemars/rose gold brown dial/www.horoview.com-1738959449916/scraped_image_6AxhyER.jpg',
                'alt' => 'rose gold brown dial',
                'title' => 'rose gold brown dial',
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Audemars/royal oak blue/velvera.ma-1738959136546/montre-homme-ap-royal-oak-bleu-41-mm-velvera-ma-1.png',
                'alt' => 'royal oak blue',
                'title' => 'royal oak blue',
                'slug' => 'audemars',
                'images' => [
                    "assets/img/Audemars/royal oak blue/velvera.ma-1738959136546/montre-homme-ap-royal-oak-bleu-41-mm-velvera-ma-1.png",
                    "assets/img/Audemars/royal oak blue/velvera.ma-1738959136546/montre-homme-ap-royal-oak-bleu-41-mm-velvera-ma-2.png",
                    "assets/img/Audemars/royal oak blue/velvera.ma-1738959136546/montre-homme-ap-royal-oak-bleu-41-mm-velvera-ma-3.png",
                    "assets/img/Audemars/royal oak blue/velvera.ma-1738959136546/montre-homme-ap-royal-oak-bleu-41-mm-velvera-ma-4.png",
                ],
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Audemars/royal oak chronographe/velvera.ma-1738958948979/montre-homme-ap-royal-oak-chronographe-41mm-26320st-oo-1220st-velvera-ma-1.png',
                'alt' => 'royal oak chronographe',
                'title' => 'royal oak chronographe',
                'slug' => 'audemars',
                'images' => [
                    "assets/img/Audemars/royal oak chronographe/velvera.ma-1738958948979/montre-homme-ap-royal-oak-chronographe-41mm-26320st-oo-1220st-velvera-ma-1.png",
                    "assets/img/Audemars/royal oak chronographe/velvera.ma-1738958948979/montre-homme-ap-royal-oak-chronographe-41mm-26320st-oo-1220st-velvera-ma-2.png",
                    "assets/img/Audemars/royal oak chronographe/velvera.ma-1738958948979/montre-homme-ap-royal-oak-chronographe-41mm-26320st-oo-1220st-velvera-ma-3.png",
                    "assets/img/Audemars/royal oak chronographe/velvera.ma-1738958948979/montre-homme-ap-royal-oak-chronographe-41mm-26320st-oo-1220st-velvera-ma-4.png",
                ],
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Hublot/classic fusion automatique/classic fusion automatique 01.jpeg',
                'alt' => 'classic fusion automatique',
                'title' => 'classic fusion automatique',
                'slug' => 'hublot',
                'images' => [
                    "assets/img/Hublot/classic fusion automatique/classic fusion automatique 01.jpeg",
                    "assets/img/Hublot/classic fusion automatique/classic fusion automatique 04.jpeg",
                ],
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Hublot/classic fusion gris quartz/IMG_7989 (6).JPG',
                'alt' => 'classic fusion gris quartz',
                'title' => 'classic fusion gris quartz',
                'slug' => 'hublot',
                'images' => [
                    "assets/img/Hublot/classic fusion gris quartz/IMG_7989 (6).JPG",
                    "assets/img/Hublot/classic fusion gris quartz/IMG_6808 (1).HEIC",
                    "assets/img/Hublot/classic fusion gris quartz/IMG_6799 (2).HEIC",
                    "assets/img/Hublot/classic fusion gris quartz/IMG_6766 (2).JPG",
                ],
                'brand_slug' => 'hublot',
                'price' => '300',
                'price_packaging' => '450',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Hublot/Classic fusion noir/IMG_7987 (1).JPG',
                'alt' => 'Classic fusion noir',
                'title' => 'Classic fusion noir',
                'slug' => 'hublot',
                'images' => [
                    "assets/img/Hublot/Classic fusion noir/IMG_7987 (1).JPG",
                    "assets/img/Hublot/Classic fusion noir/IMG_6740 (1).JPG",
                    "assets/img/Hublot/Classic fusion noir/IMG_6732 (1).HEIC",
                    "assets/img/Hublot/Classic fusion noir/IMG_6705 (1).HEIC",
                ],
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Hublot/classic fusion vert/IMG_7988 (1).JPG',
                'alt' => 'classic fusion vert',
                'title' => 'classic fusion vert',
                'slug' => 'hublot',
                'images' => [
                    "assets/img/Hublot/classic fusion vert/IMG_7988 (1).JPG",
                    "assets/img/Hublot/classic fusion vert/IMG_7990 (1).JPG",
                    "assets/img/Hublot/classic fusion vert/IMG_7991 (1).JPG",
                ],
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Patek Philippe 5270G-001/Patek Philippe 5270G-001 1.jpeg',
                'alt' => 'Patek Philippe Grand Complications brun',
                'title' => 'Patek Philippe Grand Complications brun',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '435',
                'price_packaging' => '600',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Patek Philippe 5270P-001/Patek Philippe 5270P-001 1.jpeg',
                'alt' => '⁠Patek Philippe Grand Complications noir',
                'title' => '⁠Patek Philippe Grand Complications noir',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '435',
                'price_packaging' => '600',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Patek Philippe 5270R-001/Patek Philippe 5270R-001.jpeg',
                'alt' => 'Patek Philippe Grand Complications 5270R-001',
                'title' => 'Patek Philippe Grand Complications 5270R-001',
                'slug' => 'patek',
                'brand_slug' => 'patek',
                'price' => '435',
                'price_packaging' => '600',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Nautilus blanc/montre-homme-patek-nautilus-automatique-57111a-velvera-ma-1.jpg',
                'alt' => 'Nautilus blanc',
                'title' => 'Nautilus blanc',
                'slug' => 'patek',
                'images' => [
                    "assets/img/Patek/Nautilus blanc/montre-homme-patek-nautilus-automatique-57111a-velvera-ma-1.jpg",
                    "assets/img/Patek/Nautilus blanc/montre-homme-patek-nautilus-automatique-57111a-velvera-2.png",
                    "assets/img/Patek/Nautilus blanc/montre-homme-patek-nautilus-automatique-57111a-velvera-4.png",
                    "assets/img/Patek/Nautilus blanc/montre-homme-patek-nautilus-automatique-57111a-velvera-ma-3.png",
                ],
                'brand_slug' => 'patek',
                'price' => '850',
                'price_packaging' => '1000',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Nautilus Blue/5811_1G_001_1@2x.jpg',
                'alt' => 'Nautilus Blue',
                'title' => 'Nautilus Blue',
                'slug' => 'patek',
                'images' => [
                    "assets/img/Patek/Nautilus Blue/5811_1G_001_1@2x.jpg",
                    "assets/img/Patek/Nautilus Blue/5811_1G_001_2.jpg",
                    "assets/img/Patek/Nautilus Blue/5811_1G_001_8@2x.jpg",
                    "assets/img/Patek/Nautilus Blue/5811_1G_001_10@2x.jpg",
                ],
                'brand_slug' => 'patek',
                'price' => '850',
                'price_packaging' => '1000',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Patek/Nautilus Olive Green/montre-homme-patek-nautilus-automatique-5711a-olive-green-velvera-ma-1.jpg',
                'alt' => 'Nautilus Olive Green',
                'title' => 'Nautilus Olive Green',
                'slug' => 'patek',
                'images' => [
                    "assets/img/Patek/Nautilus Olive Green/montre-homme-patek-nautilus-automatique-5711a-olive-green-velvera-ma-1.jpg",
                    "assets/img/Patek/Nautilus Olive Green/montre-homme-patek-nautilus-automatique-5711a-olive-green-velvera-ma-2.png",
                    "assets/img/Patek/Nautilus Olive Green/montre-homme-patek-nautilus-automatique-5711a-olive-green-velvera-ma-3.png",
                    "assets/img/Patek/Nautilus Olive Green/montre-homme-patek-nautilus-automatique-5711a-olive-green-velvera-ma-4.png",
                ],
                'brand_slug' => 'patek',
                'price' => '850',
                'price_packaging' => '1000',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Tissot/dark green/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-1.png',
                'alt' => 'dark green',
                'title' => 'dark green',
                'slug' => 'tissot',
                'images' => [
                    "assets/img/Tissot/dark green/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-1.png",
                    "assets/img/Tissot/dark green/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-2.png",
                    "assets/img/Tissot/dark green/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-3.png",
                    "assets/img/Tissot/dark green/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-4.png",
                ],
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Tissot/ice blue/montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-1.png',
                'alt' => 'ice blue',
                'title' => 'ice blue',
                'slug' => 'tissot',
                'images' => [
                    "assets/img/Tissot/ice blue/montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-1.png",
                    "assets/img/Tissot/ice blue/montre-homme-tt-pxr-powermatic-80-fond-vert-velvera-ma-2.png",
                    "assets/img/Tissot/ice blue/montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-3.png",
                    "assets/img/Tissot/ice blue/montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-4.png",
                ],
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Tissot/powermatic cadran blue/montre-homme-tt-pxr-powermatic-80-cadran-bleu-velvera-ma-1.png',
                'alt' => 'powermatic cadran blue',
                'title' => 'powermatic cadran blue',
                'slug' => 'tissot',
                'images' => [
                    "assets/img/Tissot/powermatic cadran blue/montre-homme-tt-pxr-powermatic-80-cadran-bleu-velvera-ma-1.png",
                    "assets/img/Tissot/powermatic cadran blue/montre-homme-tt-pxr-powermatic-80-cadran-bleu-velvera-ma-3.png",
                    "assets/img/Tissot/powermatic cadran blue/montre-homme-tt-pxr-powermatic-80-cadran-bleu-velvera-ma-4.png",
                    "assets/img/Tissot/powermatic cadran blue/montre-homme-tt-pxr-powermatic-80-cadran-bleu-velvera-ma-2.png",
                ],
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Tissot/powermatic cadran white/montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-1.png',
                'alt' => 'powermatic cadran white',
                'title' => 'powermatic cadran white',
                'slug' => 'tissot',
                'images' => [
                    "assets/img/Tissot/powermatic cadran white/montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-1.png",
                    "assets/img/Tissot/powermatic cadran white/montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-2.png",
                    "assets/img/Tissot/powermatic cadran white/montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-3.png",
                    "assets/img/Tissot/powermatic cadran white/montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-4.png",
                ],
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just acier/rolex-datejust-white-arabic-dial-steel-yellow-gold-mens-watch-16233-65560_4caff.jpg',
                'alt' => 'date just acier',
                'title' => 'date just acier',
                'images' => [
                    "assets/img/Rolex/date just acier/rolex-datejust-white-arabic-dial-steel-yellow-gold-mens-watch-16233-65560_4caff.jpg",
                    "assets/img/Rolex/date just acier/rolex-datejust-white-arabic-dial-steel-yellow-gold-mens-watch-16233-65560_4cd78.jpg",
                    "assets/img/Rolex/date just acier/rolex-datejust-white-arabic-dial-steel-yellow-gold-mens-watch-16233-65560_5b457.jpg",
                    "assets/img/Rolex/date just acier/rolex-datejust-white-arabic-dial-steel-yellow-gold-mens-watch-16233-65560_9abf9.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just choclate/rolex-datejust-41-steel-rose-gold-chocolate-dial-mens-watch-126331-box-card-63623_2a36b.jpg',
                'alt' => 'date just choclate',
                'title' => 'date just choclate',
                'images' => [
                    "assets/img/Rolex/date just choclate/rolex-datejust-41-steel-rose-gold-chocolate-dial-mens-watch-126331-box-card-63623_2a36b.jpg",
                    "assets/img/Rolex/date just choclate/rolex-datejust-41-steel-rose-gold-chocolate-dial-mens-watch-126331-box-card-63623_2f8e2.jpg",
                    "assets/img/Rolex/date just choclate/rolex-datejust-41-steel-rose-gold-chocolate-dial-mens-watch-126331-box-card-63623_96fc1.jpg",
                    "assets/img/Rolex/date just choclate/rolex-datejust-41-steel-rose-gold-chocolate-dial-mens-watch-126331-box-card-63623_97e54.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just gray/rolex-datejust-41-steel-white-gold-slate-dial-watch-126334-box-card-67256_3d7d4.jpg',
                'alt' => 'date just gray',
                'title' => 'date just gray',
                'images' => [
                    "assets/img/Rolex/date just gray/rolex-datejust-41-steel-white-gold-slate-dial-watch-126334-box-card-67256_3d7d4.jpg",
                    "assets/img/Rolex/date just gray/rolex-datejust-41-steel-white-gold-slate-dial-watch-126334-box-card-67256_8c47a.jpg",
                    "assets/img/Rolex/date just gray/rolex-datejust-41-steel-white-gold-slate-dial-watch-126334-box-card-67256_44a65.jpg",
                    "assets/img/Rolex/date just gray/rolex-datejust-41-steel-white-gold-slate-dial-watch-126334-box-card-67256_527f0.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just webledon/rolex-datejust-ii-41-steel-yellow-gold-wimbledon-dial-mens-watch-116333-box-card-67824_07fdf_md.jpg',
                'alt' => 'date just webledon',
                'title' => 'date just webledon',
                'images' => [
                    "assets/img/Rolex/date just webledon/rolex-datejust-ii-41-steel-yellow-gold-wimbledon-dial-mens-watch-116333-box-card-67824_07fdf_md.jpg",
                    "assets/img/Rolex/date just webledon/rolex-datejust-ii-41-steel-yellow-gold-wimbledon-dial-mens-watch-116333-box-card-67824_136f2_md.jpg",
                    "assets/img/Rolex/date just webledon/rolex-datejust-ii-41-steel-yellow-gold-wimbledon-dial-mens-watch-116333-box-card-67824_cf70f_md.jpg",
                    "assets/img/Rolex/date just webledon/rolex-datejust-ii-41-steel-yellow-gold-wimbledon-dial-mens-watch-116333-box-card-67824_e5508_md.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Gmt Master Batman/rolex-gmt-master-ii-black-blue-batman-bezel-steel-mens-watch-116710-67242_4dff1.jpg',
                'alt' => 'Gmt Master Batman',
                'title' => 'Gmt Master Batman',
                'images' => [
                    "assets/img/Rolex/Gmt Master Batman/rolex-gmt-master-ii-black-blue-batman-bezel-steel-mens-watch-116710-67242_4dff1.jpg",
                    "assets/img/Rolex/Gmt Master Batman/rolex-gmt-master-ii-black-blue-batman-bezel-steel-mens-watch-116710-67242_6dca7.jpg",
                    "assets/img/Rolex/Gmt Master Batman/rolex-gmt-master-ii-black-blue-batman-bezel-steel-mens-watch-116710-67242_8b472.jpg",
                    "assets/img/Rolex/Gmt Master Batman/rolex-gmt-master-ii-black-blue-batman-bezel-steel-mens-watch-116710-67242_49dcd.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Perpetual 41/rolex-oyster-perpetual-41mm-black-dial-steel-mens-watch-124300-unworn-67918_6decc.jpg',
                'alt' => 'Perpetual 41',
                'title' => 'Perpetual 41',
                'images' => [
                    "assets/img/Rolex/Perpetual 41/rolex-oyster-perpetual-41mm-black-dial-steel-mens-watch-124300-unworn-67918_6decc.jpg",
                    "assets/img/Rolex/Perpetual 41/rolex-oyster-perpetual-41mm-black-dial-steel-mens-watch-124300-unworn-67918_3262a.jpg",
                    "assets/img/Rolex/Perpetual 41/rolex-oyster-perpetual-41mm-black-dial-steel-mens-watch-124300-unworn-67918_6230e.jpg",
                    "assets/img/Rolex/Perpetual 41/rolex-oyster-perpetual-41mm-black-dial-steel-mens-watch-124300-unworn-67918_9894d.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/sky dweller/rolex-sky-dweller-steel-white-gold-black-dial-mens-watch-326934-box-card-61285_0ce7b.jpg',
                'alt' => 'sky dweller',
                'title' => 'sky dweller',
                'images' => [
                    "assets/img/Rolex/sky dweller/rolex-sky-dweller-steel-white-gold-black-dial-mens-watch-326934-box-card-61285_0ce7b.jpg",
                    "assets/img/Rolex/sky dweller/rolex-sky-dweller-steel-white-gold-black-dial-mens-watch-326934-box-card-61285_8d1f4.jpg",
                    "assets/img/Rolex/sky dweller/rolex-sky-dweller-steel-white-gold-black-dial-mens-watch-326934-box-card-61285_22a3e681bb.jpg",
                    "assets/img/Rolex/sky dweller/rolex-sky-dweller-steel-white-gold-black-dial-mens-watch-326934-box-card-61285_24efc.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0ff37.jpg',
                'alt' => 'Daytona Rose Gold',
                'title' => 'Daytona Rose Gold',
                'images' => [
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0ff37.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_4fde2.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_5ad2c.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0107e.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just wembledon/rolex-datejust-41-grey-green-wimbledon-dial-steel-mens-watch-126300-65842_0acb1.jpg',
                'alt' => 'date just wembledon',
                'title' => 'date just wembledon',
                'images' => [
                    "assets/img/Rolex/date just wembledon/rolex-datejust-41-grey-green-wimbledon-dial-steel-mens-watch-126300-65842_0acb1.jpg",
                    "assets/img/Rolex/date just wembledon/rolex-datejust-41-grey-green-wimbledon-dial-steel-mens-watch-126300-65842_1f23d.jpg",
                    "assets/img/Rolex/date just wembledon/rolex-datejust-41-grey-green-wimbledon-dial-steel-mens-watch-126300-65842_95ac2.jpg",
                    "assets/img/Rolex/date just wembledon/rolex-datejust-41-grey-green-wimbledon-dial-steel-mens-watch-126300-65842_0969b.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/date just white/rolex-datejust-steel-white-gold-silver-dial-mens-watch-126234-box-card-67916_1dc9c.jpg',
                'alt' => 'date just white',
                'title' => 'date just white',
                'images' => [
                    "assets/img/Rolex/date just white/rolex-datejust-steel-white-gold-silver-dial-mens-watch-126234-box-card-67916_1dc9c.jpg",
                    "assets/img/Rolex/date just white/rolex-datejust-steel-white-gold-silver-dial-mens-watch-126234-box-card-67916_c19e6.jpg",
                    "assets/img/Rolex/date just white/rolex-datejust-steel-white-gold-silver-dial-mens-watch-126234-box-card-67916_fcc65.jpg",
                    "assets/img/Rolex/date just white/rolex-datejust-steel-white-gold-silver-dial-mens-watch-126234-box-card-67916_52ce9.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/day date green rose gold/rolex-day-date-40-president-rose-gold-green-dial-mens-watch-228235-unworn-55261_54527.jpg',
                'alt' => 'day date green rose gold',
                'title' => 'day date green rose gold',
                'images' => [
                    "assets/img/Rolex/day date green rose gold/rolex-day-date-40-president-rose-gold-green-dial-mens-watch-228235-unworn-55261_54527.jpg",
                    "assets/img/Rolex/day date green rose gold/rolex-day-date-40-president-rose-gold-green-dial-mens-watch-228235-unworn-55261_49b45.jpg",
                    "assets/img/Rolex/day date green rose gold/rolex-day-date-40-president-rose-gold-green-dial-mens-watch-228235-unworn-55261_b59d8.jpg",
                    "assets/img/Rolex/day date green rose gold/rolex-day-date-40-president-rose-gold-green-dial-mens-watch-228235-unworn-55261_49b45.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/DAyDate rose gold/rolex-president-day-date-40mm-rose-gold-chocolate-diamond-watch-228235-67248_7ae8f.jpg',
                'alt' => 'DAyDate rose gold',
                'title' => 'DAyDate rose gold',
                'images' => [
                    "assets/img/Rolex/DAyDate rose gold/rolex-president-day-date-40mm-rose-gold-chocolate-diamond-watch-228235-67248_7ae8f.jpg",
                    "assets/img/Rolex/DAyDate rose gold/rolex-president-day-date-40mm-rose-gold-chocolate-diamond-watch-228235-67248_b10bd.jpg",
                    "assets/img/Rolex/DAyDate rose gold/rolex-president-day-date-40mm-rose-gold-chocolate-diamond-watch-228235-67248_b6d19.jpg",
                    "assets/img/Rolex/DAyDate rose gold/rolex-president-day-date-40mm-rose-gold-chocolate-diamond-watch-228235-67248_7b2e5.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/day just 41 blue/rolex-datejust-41-blue-dial-steel-mens-watch-126300-64777_f3272.jpg',
                'alt' => 'day just 41 blue',
                'title' => 'day just 41 blue',
                'images' => [
                    "assets/img/Rolex/day just 41 blue/rolex-datejust-41-blue-dial-steel-mens-watch-126300-64777_f3272.jpg",
                    "assets/img/Rolex/day just 41 blue/rolex-datejust-41-blue-dial-steel-mens-watch-126300-64777_eb0cf.jpg",
                    "assets/img/Rolex/day just 41 blue/rolex-datejust-41-blue-dial-steel-mens-watch-126300-64777_c2b07.jpg",
                    "assets/img/Rolex/day just 41 blue/rolex-datejust-41-blue-dial-steel-mens-watch-126300-64777_59cb7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Daytona Panda No/img-1114-1.jpg',
                'alt' => 'Daytona Panda No',
                'title' => 'Daytona Panda No',
                'images' => [
                    "assets/img/Rolex/Daytona Panda No/img-1114-1.jpg",
                    "assets/img/Rolex/Daytona Panda No/img-1113 (1).jpg",
                    "assets/img/Rolex/Daytona Panda No/img-1116-1.jpg",
                    "assets/img/Rolex/Daytona Panda No/img-1118-1.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0107e.jpg',
                'alt' => 'Daytona Rose Gold',
                'title' => 'Daytona Rose Gold',
                'images' => [
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0107e.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_b1acd.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_5ad2c.jpg",
                    "assets/img/Rolex/Daytona Rose Gold/rolex-daytona-cosmograph-black-dial-rose-gold-mens-watch-116505-box-card-67037_0ff37.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Daytona Vert et Gold/johnmayer4.jpg',
                'alt' => 'Daytona Vert et Gold',
                'title' => 'Daytona Vert et Gold',
                'images' => [
                    "assets/img/Rolex/Daytona Vert et Gold/johnmayer4.jpg",
                    "assets/img/Rolex/Daytona Vert et Gold/johnmayer3.jpg",
                    "assets/img/Rolex/Daytona Vert et Gold/johnmayer5.jpg",
                    "assets/img/Rolex/Daytona Vert et Gold/johnmayer7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/GMT Master II Black Gray Bruce Wayne/rolex-gmt-master-ii-black-gray-bruce-wayne-bezel-steel-mens-watch-126710-unworn-67930_b6c8e.jpg',
                'alt' => 'GMT Master II Black Gray Bruce Wayne',
                'title' => 'GMT Master II Black Gray Bruce Wayne',
                'images' => [
                    "assets/img/Rolex/GMT Master II Black Gray Bruce Wayne/rolex-gmt-master-ii-black-gray-bruce-wayne-bezel-steel-mens-watch-126710-unworn-67930_b6c8e.jpg",
                    "assets/img/Rolex/GMT Master II Black Gray Bruce Wayne/rolex-gmt-master-ii-black-gray-bruce-wayne-bezel-steel-mens-watch-126710-unworn-67930_07e03.jpg",
                    "assets/img/Rolex/GMT Master II Black Gray Bruce Wayne/rolex-gmt-master-ii-black-gray-bruce-wayne-bezel-steel-mens-watch-126710-unworn-67930_e0a22.jpg",
                    "assets/img/Rolex/GMT Master II Black Gray Bruce Wayne/rolex-gmt-master-ii-black-gray-bruce-wayne-bezel-steel-mens-watch-126710-unworn-67930_3fbe7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Gmt Master Pepsi/rolex-gmt-master-ii-blue-red-pepsi-bezel-steel-mens-watch-126710-61839_109eb.jpg',
                'alt' => 'Gmt Master Pepsi',
                'title' => 'Gmt Master Pepsi',
                'images' => [
                    "assets/img/Rolex/Gmt Master Pepsi/rolex-gmt-master-ii-blue-red-pepsi-bezel-steel-mens-watch-126710-61839_109eb.jpg",
                    "assets/img/Rolex/Gmt Master Pepsi/rolex-gmt-master-ii-blue-red-pepsi-bezel-steel-mens-watch-126710-61839_30328.jpg",
                    "assets/img/Rolex/Gmt Master Pepsi/rolex-gmt-master-ii-blue-red-pepsi-bezel-steel-mens-watch-126710-61839_a3136.jpg",
                    "assets/img/Rolex/Gmt Master Pepsi/rolex-gmt-master-ii-blue-red-pepsi-bezel-steel-mens-watch-126710-61839_bd8b7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Gmt Master Root Beer/rolex-gmt-master-ii-root-beer-steel-rose-gold-mens-watch-126711-65127_63849.jpg',
                'alt' => 'Gmt Master Root Beer',
                'title' => 'Gmt Master Root Beer',
                'images' => [
                    "assets/img/Rolex/Gmt Master Root Beer/rolex-gmt-master-ii-root-beer-steel-rose-gold-mens-watch-126711-65127_63849.jpg",
                    "assets/img/Rolex/Gmt Master Root Beer/rolex-gmt-master-ii-root-beer-steel-rose-gold-mens-watch-126711-65127_c438c.jpg",
                    "assets/img/Rolex/Gmt Master Root Beer/rolex-gmt-master-ii-root-beer-steel-rose-gold-mens-watch-126711-65127_b461e.jpg",
                    "assets/img/Rolex/Gmt Master Root Beer/rolex-gmt-master-ii-root-beer-steel-rose-gold-mens-watch-126711-65127_cf67d.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Milgauss Bleu/rolex-milgauss-blue-dial-green-crystal-steel-mens-watch-116400gv-box-card-66232_0729c.jpg',
                'alt' => 'Milgauss Bleu',
                'title' => 'Milgauss Bleu',
                'images' => [
                    "assets/img/Rolex/Milgauss Bleu/rolex-milgauss-blue-dial-green-crystal-steel-mens-watch-116400gv-box-card-66232_0729c.jpg",
                    "assets/img/Rolex/Milgauss Bleu/rolex-milgauss-blue-dial-green-crystal-steel-mens-watch-116400gv-box-card-66232_16298.jpg",
                    "assets/img/Rolex/Milgauss Bleu/rolex-milgauss-blue-dial-green-crystal-steel-mens-watch-116400gv-box-card-66232_64eed.jpg",
                    "assets/img/Rolex/Milgauss Bleu/rolex-milgauss-blue-dial-green-crystal-steel-mens-watch-116400gv-box-card-66232_0f431.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Rolex Daytona Oysterflex choco dial no/69758925-51c2-4a60-9289-87c4ebc72d14.jpeg',
                'alt' => 'Rolex Daytona Oysterflex choco dial no',
                'title' => 'Rolex Daytona Oysterflex choco dial no',
                'images' => [
                    "assets/img/Rolex/Rolex Daytona Oysterflex choco dial no/69758925-51c2-4a60-9289-87c4ebc72d14.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex choco dial no/67277210-e710-4fd1-81c0-21c0eb6071bb.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex choco dial no/69758925-51c2-4a60-9289-87c4ebc72d14.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex choco dial no/14a05850-7fd2-4abf-95ce-09bfe413163c.jpeg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Rolex Daytona Oysterflex Ghost No/eb74f269-c3fe-46ef-926f-f5291b5e6aa5.jpeg',
                'alt' => 'Rolex Daytona Oysterflex Ghost No',
                'title' => 'Rolex Daytona Oysterflex Ghost No',
                'images' => [
                    "assets/img/Rolex/Rolex Daytona Oysterflex Ghost No/eb74f269-c3fe-46ef-926f-f5291b5e6aa5.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex Ghost No/f198a12c-62f5-44a2-baaa-ec627d2659f1.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex Ghost No/f5076173-5566-43c1-a66f-fca7179740e9.jpeg",
                    "assets/img/Rolex/Rolex Daytona Oysterflex Ghost No/fb59d113-8662-4041-8e5e-7054b1db90a0.jpeg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/submariner black/rolex-submariner-nondate-ceramic-bezel-steel-mens-watch-114060-box-card-67975_22596.jpg',
                'alt' => 'submariner black',
                'title' => 'submariner black',
                'images' => [
                    "assets/img/Rolex/submariner black/rolex-submariner-nondate-ceramic-bezel-steel-mens-watch-114060-box-card-67975_22596.jpg",
                    "assets/img/Rolex/submariner black/rolex-submariner-nondate-ceramic-bezel-steel-mens-watch-114060-box-card-67975_7bc9b.jpg",
                    "assets/img/Rolex/submariner black/rolex-submariner-nondate-ceramic-bezel-steel-mens-watch-114060-box-card-67975_34371.jpg",
                    "assets/img/Rolex/submariner black/rolex-submariner-nondate-ceramic-bezel-steel-mens-watch-114060-box-card-67975_a5b6a.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Submariner Hulk/rolex-submariner-hulk-green-dial-steel-mens-watch-116610lv-box-card-65895_260b9.jpg',
                'alt' => 'Submariner Hulk',
                'title' => 'Submariner Hulk',
                'images' => [
                    "assets/img/Rolex/Submariner Hulk/rolex-submariner-hulk-green-dial-steel-mens-watch-116610lv-box-card-65895_260b9.jpg",
                    "assets/img/Rolex/Submariner Hulk/rolex-submariner-hulk-green-dial-steel-mens-watch-116610lv-box-card-65895_5cc06.jpg",
                    "assets/img/Rolex/Submariner Hulk/rolex-submariner-hulk-green-dial-steel-mens-watch-116610lv-box-card-65895_c7fb6.jpg",
                    "assets/img/Rolex/Submariner Hulk/rolex-submariner-hulk-green-dial-steel-mens-watch-116610lv-box-card-65895_ae283.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/Yaacht master oysterflex/rolex-yachtmaster-40mm-rose-gold-oysterflex-bracelet-mens-watch-116655-box-card-67506_1fc42.jpg',
                'alt' => 'Yaacht master oysterflex',
                'title' => 'Yaacht master oysterflex',
                'images' => [
                    "assets/img/Rolex/Yaacht master oysterflex/rolex-yachtmaster-40mm-rose-gold-oysterflex-bracelet-mens-watch-116655-box-card-67506_1fc42.jpg",
                    "assets/img/Rolex/Yaacht master oysterflex/rolex-yachtmaster-40mm-rose-gold-oysterflex-bracelet-mens-watch-116655-box-card-67506_1e37d.jpg",
                    "assets/img/Rolex/Yaacht master oysterflex/rolex-yachtmaster-40mm-rose-gold-oysterflex-bracelet-mens-watch-116655-box-card-67506_84df0.jpg",
                    "assets/img/Rolex/Yaacht master oysterflex/rolex-yachtmaster-40mm-rose-gold-oysterflex-bracelet-mens-watch-116655-box-card-67506_9ae1b.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/yacht master blure/rolex-yachtmaster-steel-platinum-bezel-blue-dial-mens-watch-116622-card-66860_345a7.jpg',
                'alt' => 'yacht master blure',
                'title' => 'yacht master blure',
                'images' => [
                    "assets/img/Rolex/yacht master blure/rolex-yachtmaster-steel-platinum-bezel-blue-dial-mens-watch-116622-card-66860_345a7.jpg",
                    "assets/img/Rolex/yacht master blure/rolex-yachtmaster-steel-platinum-bezel-blue-dial-mens-watch-116622-card-66860_532fe_md.jpg",
                    "assets/img/Rolex/yacht master blure/rolex-yachtmaster-steel-platinum-bezel-blue-dial-mens-watch-116622-card-66860_eaf58_md.jpg",
                    "assets/img/Rolex/yacht master blure/rolex-yachtmaster-steel-platinum-bezel-blue-dial-mens-watch-116622-card-66860_57f86_md.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/Rolex/yacht master grey/rolex-yachtmaster-rhodium-dial-steel-platinum-mens-watch-116622-box-card-64534_1b346.jpg',
                'alt' => 'yacht master grey',
                'title' => 'yacht master grey',
                'images' => [
                    "assets/img/Rolex/yacht master grey/rolex-yachtmaster-rhodium-dial-steel-platinum-mens-watch-116622-box-card-64534_1b346.jpg",
                    "assets/img/Rolex/yacht master grey/rolex-yachtmaster-rhodium-dial-steel-platinum-mens-watch-116622-box-card-64534_2b37d.jpg",
                    "assets/img/Rolex/yacht master grey/rolex-yachtmaster-rhodium-dial-steel-platinum-mens-watch-116622-box-card-64534_9dda2.jpg",
                    "assets/img/Rolex/yacht master grey/rolex-yachtmaster-rhodium-dial-steel-platinum-mens-watch-116622-box-card-64534_48e52.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
            ]
        ];

        $brands = [
            [
                'image' => 'assets/img/Rolex/18975-rolex-logo.png',
                'alt' => 'Rolex',
                'title' => 'Rolex',
                'video' => 'assets/img/Rolex/videoplayback.mp4',
                'slug' => 'rolex',
                'link' => 'brands/Rolex.html',
            ],
            [
                'image' => 'assets/img/Audemars/ Audemars Piguit Logo.png',
                'alt' => 'Audemars Piguit',
                'video' => 'assets/img/Audemars/Royal Oak -  Audemars Piguet.mp4',
                'title' => 'Audemars Piguit',
                'slug' => 'audemars',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Patek/patek-philippe logo.png',
                'alt' => 'Patek Philippe',
                'title' => 'Patek Philippe',
                'video' => 'assets/img/Patek/Patek Philippe four new Nautilus models.mp4',
                'slug' => 'patek',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Hublot/HUBLOT-LOGO.png',
                'alt' => 'Hublot',
                'title' => 'Hublot',
                'video' => 'assets/img/Hublot/HUBLOT - CLASSIC FUSION ELEMENTS.mp4',
                'slug' => 'hublot',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Tissot/tissot-logo.png',
                'alt' => 'Tissot',
                'title' => 'Tissot',
                'video' => 'assets/img/Tissot/Tissot PRX - Cinematic Ad.mp4',
                'slug' => 'tissot',
                'link' => '#',
            ],
            [
                'image' => 'assets/img/Cartier/cartier-2-logo.png',
                'alt' => 'Cartier',
                'title' => 'Cartier',
                'video' => 'assets/img/Cartier/Cartier Watch Shape Your Time Official Video | aBlogtoWatch.mp4',
                'slug' => 'cartier',
                'link' => '#',
            ],
        ];

        $filteredProducts = array_filter($products, function ($product) use ($slug) {
            return $product['brand_slug'] === $slug;
        });

        $brand = array_filter($brands, function ($item) use ($slug) {
            return strtolower($item['slug']) === strtolower($slug);
        });

        $brand = array_values($brand)[0];

        return view('Users.brand', ['products' => $filteredProducts, 'brand' => $brand]);
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
