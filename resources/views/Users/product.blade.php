@extends('Users.layouts.master')

@section('title')
@endsection

@section('style-online')
@endsection

@section('style')
    <style>
        .detail-container {
            width: 900px;
            max-width: 90vw;
            margin: auto;
            padding-top: 100px;
            text-align: center;
        }

        .detail-title {
            font-size: xx-large;
            padding: 20px 0;
        }

        .detail {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            text-align: left;
        }

        .detail .image img {
            width: fit-content;
            height: 500px;
        }

        .detail .image {
            position: relative;
        }

        .detail .image::before {
            position: absolute;
            width: 300px;
            height: 300px;
            content: '';
            background-color: #94817733;
            z-index: -1;
            border-radius: 190px 100px 170px 180px;
            -webkit-border-radius: 190px 100px 170px 180px;
            -moz-border-radius: 190px 100px 170px 180px;
            -ms-border-radius: 190px 100px 170px 180px;
            -o-border-radius: 190px 100px 170px 180px;
            left: calc(50% - 150px);
            top: 50px;
        }

        .detail .name {
            font-size: xx-large;
            padding: 40px 0 0 0;
            margin: 0 0 10px 0;
        }

        .detail .price {
            font-weight: bold;
            font-size: x-large;
            letter-spacing: 7px;
            margin-bottom: 20px;
        }

        .detail .buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .detail .buttons button {
            background-color: #eee;
            border: none;
            padding: 15px 20px;
            border-radius: 20px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            -o-border-radius: 20px;
            font-family: Poppins;
            font-size: large;
        }

        .detail .buttons svg {
            width: 15px;
        }

        .detail .buttons span {
            background-color: #555454;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            margin-left: 20px;
            color: #eee;
        }

        .detail .buttons button:nth-child(2) {
            background-color: #2f2f2f;
            color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 20px #2f2f2f77;
        }

        .detail .description {
            font-weight: 300;
        }

        @media screen and (max-width: 992px) {
            .detail {
                grid-template-columns: 40% 1fr;
            }
        }

        @media screen and (max-width: 768px) {
            .detail {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .detail .image img {
                width: unset;
                height: 40vh;
            }

            .detail .name {
                font-size: x-large;
                margin: 0;
            }

            .detail .buttons button {
                font-size: small;
            }

            .detail .buttons {
                justify-content: center;
            }
        }
    </style>
@endsection

@section('content')
    <!--==================== MAIN ====================-->
    <main class="main">
        <div class="detail-container">
            <div class="detail-title">PRODUCT DETAIL</div>
            @if ($product)
                <div class="detail">
                    <div class="image">
                        <img src="{{ asset($product['image']) }}" alt="Product Image" />
                    </div>
                    <div class="content">
                        <h1 class="name">{{ $product['title'] }}</h1>
                        <div class="price">{{ $product['price'] }}</div>
                        <div class="buttons">
                            <button>Check out</button>
                            <button>
                                Add to cart
                                <span>
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi illum dolorem beatae eius
                            voluptatem
                            nulla similique culpa animi reprehenderit distinctio, itaque sed eaque earum sit aperiam.
                            Dolores
                            dolorum enim minima.
                        </div>
                    </div>
                </div>
            @else
                <div>Not Found</div>
            @endif
            {{-- <div class="title">SIMILAR PRODUCTS</div>
            <div class="listProduct"></div> --}}
            <section class="featured section container" id="featured">
                <h2 class="section__title">The Clients Favourite</h2>

                <div class="featured__container grid">
                    @foreach ($watches as $watche)
                        <article class="featured__card">
                            <span class="featured__tag">{{ $watche['tag'] }}</span>

                            <img src="{{ asset($watche['image']) }}" alt="{{ $watche['alt'] }}" class="featured__img">

                            <div class="featured__data">
                                <h3 class="featured__title">{{ $watche['title'] }}</h3>
                                <span class="featured__price">{{ $watche['price'] }}</span>
                            </div>

                            <a href="{{ route('product', ['brand_slug' => $watche['brand_slug'], 'slug' => $watche['title']]) }}"
                                class="button featured__button">
                                Buy Now
                            </a>
                        </article>
                    @endforeach

                </div>
            </section>
        </div>
    </main>
@endsection

@section('js-online')
@endsection

@section('js')
@endsection
