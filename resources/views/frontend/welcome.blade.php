@php
    $products = [
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
            'alt' => 'Luxury Watch 1',
            'title' => 'CArtier Bleu Ball',
            'price' => '$15,050',
        ],
        [
            'tag' => 'Sale t',
            'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
            'alt' => 'Luxury Watch 1',
            'title' => 'CArtier Bleu Ball;jnijn',
            'price' => '$15,05099',
        ],
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp',
            'alt' => 'Luxury Watch 2',
            'title' => 'Rolex Yacht-Master II',
            'price' => '$2,500',
        ],
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Patek/96-ja353olzfc18tscnj0liuihf-Main_2x.webp',
            'alt' => 'Luxury Watch 3',
            'title' => 'Patek Philippe Vintage',
            'price' => '22,650',
        ],
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp',
            'alt' => 'Luxury Watch 4',
            'title' => 'CArtier Bleu Ball 1',
            'price' => '$15,050',
        ],
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp',
            'alt' => 'Luxury Watch 5',
            'title' => 'Rolex Yacht-Master II 2',
            'price' => '$2,500',
        ],
        [
            'tag' => 'Sale',
            'image' => 'assets/img/Patek/96-ja353olzfc18tscnj0liuihf-Main_2x.webp',
            'title' => 'Patek Philippe Vintage',
            'alt' => 'Luxury Watch 6 3',
            'price' => '22,650',
        ],
    ];

    $brands = [
        [
            'image' => 'assets/img/Rolex/18975-rolex-logo.png',
            'alt' => 'Rolex',
            'title' => 'Rolex',
            'link' => 'brands/Rolex.html',
        ],
        [
            'image' => 'assets/img/Audemars/ Audemars Piguit Logo.png',
            'alt' => 'Audemars Piguit',
            'title' => 'Audemars Piguit',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Richard Mille/6481a7ab9183c6fd9bba1b1a_Frame_76-removebg-preview.png',
            'alt' => 'Richard Mille',
            'title' => 'Richard Mille',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Patek/patek-philippe logo.png',
            'alt' => 'Patek Philippe',
            'title' => 'Patek Philippe',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Hublot/HUBLOT-LOGO.png',
            'alt' => 'Hublot',
            'title' => 'Hublot',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Tissot/tissot-logo.png',
            'alt' => 'Tissot',
            'title' => 'Tissot',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Frank/Franck-Muller_Logo_Black_Surface-Magazine_560px.png',
            'alt' => 'Frank Muller',
            'title' => 'Frank Muller',
            'link' => '#',
        ],
        [
            'image' => 'assets/img/Cartier/cartier-2-logo.png',
            'alt' => 'Cartier',
            'title' => 'Cartier',
            'link' => '#',
        ],
    ];
@endphp

@extends('layouts.master')

@section('title')
@endsection

@section('style-online')
@endsection

@section('style')
@endsection

@section('content')
    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="{{ asset('assets/img/Rolex/m128238-0118_drp-upright-bba-with-shadow.png') }}"
                        alt="New Watch Collection" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/prestigewatches" target="_blank" class="home__social-link">
                        Facebook
                    </a>
                    <a href="https://twitter.com/prestigewatches" target="_blank" class="home__social-link">
                        Twitter
                    </a>
                    <a href="https://www.instagram.com/prestigewatches" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">ROLEX <br> Day-Just</h1>
                    <p class="home__description">
                        Discover the latest arrival of the new imported watches of the Day-Just series,
                        featuring a modern and resistant design.
                    </p>
                    <span class="home__price">$12345</span>

                    <div class="home__btns">
                        <a href="#featured" class="button button--gray button--small">
                            Discover
                        </a>
                        <button class="button home__button">Buy NOW </button>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">The Clients Favourite</h2>

            <div class="featured__container grid">
                @foreach ($products as $product)
                    <article class="featured__card">
                        <span class="featured__tag">{{ $product['tag'] }}</span>

                        <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">{{ $product['title'] }}</h3>
                            <span class="featured__price">{{ $product['price'] }}</span>
                        </div>

                        <button class="button featured__button">Buy Now</button>
                    </article>
                @endforeach

            </div>
        </section>


        <!--==================== OUR TRUSTED BRANDS ====================-->
        <section class="brands section container" id="brands">
            <h2 class="section__title">Our Trusted Brands</h2>

            <div class="brands__container grid">
                @foreach ($brands as $brand)
                    <article class="brands__card">
                        <img src="{{ asset($brand['image']) }}" alt="{{ $brand['alt'] }}" class="brands__img">
                        <h3 class="brands__title">{{ $brand['title'] }}</h3>
                        <a href="{{ $brand['link'] }}" class="button brands__button">Explore</a>
                    </article>
                @endforeach

            </div>
        </section>

        </div>
        </section>

        <!--==================== STORY ====================-->
        <section class="story section container">
            <div class="story__container grid">
                <div class="story__data">
                    <h2 class="section__title story__section-title">
                        Our Story
                    </h2>

                    <h1 class="story__title">
                        Inspirational Watch of <br> this year
                    </h1>

                    <p class="story__description">
                    <section class="our-story">
                        <div class="container">

                            <p class="our-story__text">
                                Prestige Watches, we blend the charm of Moroccan craftsmanship with unmatched quality and
                                fair prices. Discover luxury without compromise.
                            </p>
                        </div>
                    </section>

                    </p>

                </div>

                <div class="story__images">
                    <img src="{{ asset('assets/img/Patek/92-617kgslvugtkeemb2w74ftzo-Main_2x.webp') }}" alt=""
                        class="story__img">
                    <div class="story__square"></div>
                </div>
            </div>
        </section>

        <!--==================== NEW ARRIVALS ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">New Arrivals</h2>

            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Richard Mille/1447-ge4sxovdxjg3plv9jrrxt6cz-Main_2x.webp') }}"
                                alt="Longines Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">RM-035</h3>
                                <span class="new__price">$163,000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Patek/106-8soyprb5zryt8moy5l06rmpu-Main_2x.webp') }}"
                                alt="Jazzmaster Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Nautilus</h3>
                                <span class="new__price">$13.400</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Audemars/1173-lq97x3l1dfip4btg2b40kbu5-Main_2x.webp') }}"
                                alt="Dreyfuss Gold Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Royal Oak</h3>
                                <span class="new__price">$55.000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Cartier/165-jy40bbyj1hl8m7ohu4hfuigh-Main_2x.webp') }}"
                                alt="Portuguese Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Bleu-Ball</h3>
                                <span class="new__price">$15.900</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Hublot/1064-nqwd5o8wcf5bvegiuv7oxv75-Main_2x.webp') }}"
                                alt="Portuguese Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Classical Fusion</h3>
                                <span class="new__price">$29.000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{ asset('assets/img/Frank/521-xls43y5bn68ewg6t4qpzzkpb-Main_2x.webp') }}"
                                alt="Portuguese Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Drems Colors</h3>
                                <span class="new__price">$700.000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@section('js-online')
@endsection

@section('js')
@endsection
