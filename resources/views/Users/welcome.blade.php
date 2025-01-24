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

                        <a href="{{ route('product', ['brand_slug' => $product['brand_slug'], 'slug' => $product['title']]) }}"
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
                        <img src="{{ asset($brand['image']) }}" alt="{{ $brand['alt'] }}" class="brands__img">
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
        <!--==================== PRODUCTS ====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Products
            </h2>

            <div class="products__container grid">

                @foreach ($products as $product)
                    <article class="products__card">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="products__img">

                        <h3 class="products__title">{{ $product['title'] }}</h3>
                        <span class="products__price">{{ $product['price'] }}</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
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

                                <img src="{{ asset($watch['image']) }}" alt="{{ $watch['alt'] }}" class="new__img">

                                <div class="new__data">
                                    <h3 class="new__title">{{ $watch['title'] }}</h3>
                                    <span class="new__price">{{ $watch['price'] }}</span>
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
        <section class="newsletter section container" id="contact">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                    <p class="newsletter__description">
                        Don't miss out on your discounts. Subscribe to our email
                        newsletter to get the best offers, discounts, coupons,
                        gifts and much more.
                    </p>
                </div>

                <form action="" class="newsletter__subscribe">
                    <input type="email" placeholder="Enter your email" class="newsletter__input">
                    <button class="button">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('js-online')
@endsection

@section('js')
@endsection
