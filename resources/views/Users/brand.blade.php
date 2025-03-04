@extends('Users.layouts.master')

@section('title')
@endsection

@section('style-online')
@endsection

@section('style')
    <style>
        .hero-video {
            width: 100%;
            height: calc(100vh - var(--header-height));
            /* Adjust for header height */
            object-fit: cover;
            position: relative;
            z-index: -1;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .video-section {
            position: relative;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="video-section">
            <video class="hero-video" autoplay muted loop>
                <source src="{{ secure_asset($brand['video']) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">

            </div>
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">The Clients Favourite</h2>

            <div class="featured__container grid">

                @if ($products)
                    @foreach ($products as $product)
                        <article class="featured__card">
                            <span class="featured__tag">{{ $product['tag'] }}</span>

                            <img src="{{ secure_asset($product['image']) }}" alt="{{ $product['alt'] }}" class="featured__img">

                            <div class="featured__data">
                                <h3 class="featured__title">{{ $product['title'] }}</h3>
                                <span class="featured__price">{{ $product['price'] }}DH</span>
                            </div>

                            <a href="{{ route('product', ['brand_slug' => $product['brand_slug'], 'slug' => $product['title']]) }}" class="button featured__button">
                                Buy Now
                            </a>
                        </article>
                    @endforeach
                @else
                    <h1>Products not found</h1>
                @endif

            </div>
        </section>

    </main>
@endsection

@section('js-online')
@endsection

@section('js')
@endsection
