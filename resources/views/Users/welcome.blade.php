@extends('Users.layouts.master')

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
                    <img src="{{ secure_asset($product['image']) }}" alt="New Watch Collection" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.instagram.com/prestiges_watches.ma?igsh=MTNqdWR2YmtuY2Jldg%3D%3D" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                    <a href="https://www.tiktok.com/@prestiges_watches?_t=ZM-8uSGq1vduCt&_r=1" target="_blank" class="home__social-link">
                        Tik Tok
                    </a>
                </div>
                <div class="home__data">
                    <h1 class="home__title">{{ $product['brand_slug'] }}<br>{{ $product['title'] }}</h1>
                    <p class="home__description">
                        {{ $product['description'] }}
                    </p>
                    <span class="home__price">{{ $product['price'] }}DH</span>

                    <div class="home__btns">
                        <a href="#featured" class="button button--gray button--small">
                            Discover
                        </a>
                        <a href="{{ route('product', ['brand_slug' => $product['brand_slug'], 'slug' => $product['title']]) }}"
                            class="button home__button">Buy NOW </a>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">The Clients Favourite</h2>
            <div class="featured__container grid">
                @foreach ($features as $feature)
                    <article class="featured__card">
                        <span class="featured__tag">{{ $feature['tag'] }}</span>
                        <img src="{{ secure_asset($feature['image']) }}" alt="{{ $feature['alt'] }}" class="featured__img">
                        <div class="featured__data">
                            <h3 class="featured__title">{{ $feature['title'] }}</h3>
                            <span class="featured__price">{{ $feature['price'] }}DH</span>
                        </div>
                        <a href="{{ route('product', ['brand_slug' => $feature['brand_slug'], 'slug' => $feature['title']]) }}"
                            class="button featured__button">
                            Buy
                            Now</a>
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
                        <img src="{{ secure_asset($brand['image']) }}" alt="{{ $brand['alt'] }}" class="brands__img">
                        <h3 class="brands__title">{{ $brand['title'] }}</h3>
                        <a href="{{ route('brand', ['slug' => $brand['slug']]) }}"
                            class="button brands__button">Explore</a>
                    </article>
                @endforeach
            </div>
        </section>
        </div>
        </section>
        <!--==================== STORY ====================-->
        <section class="story section container" id="about">
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
                                Fondée en 2022, Prestige Watches s'est imposée comme une référence pour les amateurs de montres de luxe au Maroc. Nous avons une mission claire : offrir à nos clients les plus belles pièces horlogères au meilleur prix, sans compromis sur l'authenticité et la qualité.

Ce qui nous distingue ? Nous importons nous-mêmes chaque montre depuis l’étranger, en sélectionnant soigneusement nos modèles auprès de fournisseurs de confiance. Cela nous permet de garantir l'originalité et l'excellence de nos produits, tout en offrant des tarifs compétitifs.

Chez Prestige Watches, chaque montre est plus qu’un accessoire : c’est un symbole d’élégance, de prestige et de savoir-faire. Faites confiance à notre expertise pour trouver la pièce parfaite qui sublimera votre poignet.
                            </p>
                        </div>
                    </section>

                    </p>

                </div>

                <div class="story__images">
                    <img src="{{ secure_asset($product['image']) }}"
                        alt="" class="story__img">
                    <div class="story__square"></div>
                </div>
            </div>
        </section>
        <!--==================== PRODUCTS ====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Products
            </h2>

            <div class="products__container grid">

                @foreach ($products as $product)
                    <article class="products__card">
                        <img src="{{ secure_asset($product['image']) }}" alt="{{ $product['alt'] }}" class="products__img">

                        <h3 class="products__title">{{ $product['title'] }}</h3>
                        <span class="products__price">{{ $product['price'] }}DH</span>

                        <a href="{{ route('product', ['brand_slug' => $product['brand_slug'], 'slug' => $product['title']]) }}"
                            class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </a>
                    </article>
                @endforeach

            </div>
        </section>
        <!--==================== NEW ARRIVALS ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">New Arrivals</h2>
            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($watches as $watch)
                            <article class="new__card swiper-slide">
                                <span class="new__tag">{{ $watch['tag'] }}</span>

                                <img src="{{ secure_asset($watch['image']) }}" alt="{{ $watch['alt'] }}" class="new__img">

                                <div class="new__data">
                                    <h3 class="new__title">{{ $watch['title'] }}</h3>
                                    <span class="new__price">{{ $watch['price'] }}DH</span>
                                </div>

                                <a href="{{ route('product', ['brand_slug' => $product['brand_slug'], 'slug' => $product['title']]) }}"
                                    class="button featured__button">
                                    BUY NOW
                                </a>
                            </article>
                        @endforeach
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
