@extends('Users.layouts.master')

@section('title')
@endsection

@section('style-online')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <style>
        /* Form Section Styles */
        .form-section {
            margin-top: 30px;
            padding: 30px;
            border-radius: 15px;
            background: linear-gradient(135deg, #f8f8f8, #e7e7e7);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            font-size: 25px;
            margin-bottom: 20px;
            color: #222;
            font-family: "Merriweather", serif;
            text-align: center;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-section label {
            font-size: 16px;
            color: #555;
            font-weight: bold;
            font-family: "Merriweather", serif;
        }

        .form-div {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-section .form-div input {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 90%;
            background: #fff;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
            font-family: "Merriweather", serif;
        }

        .form-section .form-div i {
            color: hsl(26, 100%, 55%);
        }

        .form-section .form-div input:focus {
            border-color: hsl(26, 100%, 55%);
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        .form-section button {
            padding: 15px 20px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(135deg, hsl(26, 100%, 61%), hsl(26, 100%, 55%));
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            font-family: "Merriweather", serif;
            align-self: center;
        }

        .form-section button:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
            transform: translateY(-2px);
        }

        .form-radio {
            display: flex;
            flex-direction: column;
        }

        .form-radio div {
            width: 100%;
            display: flex;
            gap: 10px;
            align-items: center;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="detail-container">
            <div class="detail-row">
                <div class="detail-col-2">
                    <img src="{{ asset($product['image']) }}" class="detail-product-image" id="emphasisPicture" />
                    <div class="detail-smallImg detail-product-image">
                        @if (!empty($product['images']))
                            @foreach ($product['images'] as $image)
                                <div class="detail-col-4">
                                    <img src="{{ asset($image) }}" class="smallpictures {{ $loop->first ? 'active' : '' }}"
                                        alt="Product Image" />
                                </div>
                            @endforeach
                        @else
                            <div>Not Found</div>
                        @endif
                    </div>
                </div>
                <div class="detail-col-2">
                    <small class="detail-companyName">{{ $product['title'] }}</small>
                    <p>{{ $product['description'] }}</p>
                    <div class="detail-price">
                        <span class="detail-productValue">{{ $product['price'] }}DH</span>
                        {{-- <span class="detail-percentage">50%</span> --}}
                    </div>
                    {{-- <span class="detail-totalValue">$250.00</span> --}}
                    <div class="detail-buttonsRow">
                        <div class="detail-increment">
                            <img src="{{ asset('images/icon-minus.svg') }}" id="minus" />
                            <input type="number" name="totalItems" id="totalItems" value="1" min="1" />
                            <img src="{{ asset('images/icon-plus.svg') }}" id="plus" />
                        </div>
                        {{-- <div class="detail-callToAction">
                            <button id="btn">
                                <i class="fa-solid fa-cart-shopping"></i> Add to cart
                            </button>
                        </div> --}}
                    </div>
                    <!-- New Form Section -->
                    <div class="form-section">
                        <h2>Order Information</h2>
                        <form id="orderForm">
                            <div class="form-div">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" id="name" name="name" placeholder="Nom et Prénom" required />
                            </div>
                            <div class="form-div">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" id="phone" name="phone" placeholder="Numéro de Téléphone" required />
                            </div>
                            <div class="form-div">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" id="address" name="address" placeholder="Adresse" required />
                            </div>
                            <div class="form-div">
                                <i class="fa-solid fa-building"></i>
                                <input type="text" id="ville" name="ville" placeholder="Ville" required />
                            </div>
                            <input type="hidden" id="name_product" name="name_product" value="{{ $product['title'] }}" />
                            <input type="hidden" id="price" name="price" value="{{ $product['price'] }}" />
                            <input type="hidden" id="price_packaging" name="price_packaging" value="{{ $product['price_packaging'] }}" />
                            <div class="form-radio">
                                <div>
                                    <input type="checkbox" id="avec_emballage" name="emballage" value="avec_emballage">
                                    <label for="avec_emballage">avec emballage</label>
                                </div>
                            </div>
                            <button type="button" id="formSubmitBtn">Buy Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="featured section container" id="featured">
            <h2 class="section__title">The Clients Favourite</h2>

            <div class="featured__container grid">
                @foreach ($watches as $watche)
                    <article class="featured__card">
                        <span class="featured__tag">{{ $watche['tag'] }}</span>

                        <img src="{{ asset($watche['image']) }}" alt="{{ $watche['alt'] }}" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">{{ $watche['title'] }}</h3>
                            <span class="featured__price">{{ $watche['price'] }}DH</span>
                        </div>

                        <a href="{{ route('product', ['brand_slug' => $watche['brand_slug'], 'slug' => $watche['title']]) }}"
                            class="button featured__button">
                            Buy Now
                        </a>
                    </article>
                @endforeach

            </div>
        </section>
    </main>
@endsection

@section('js-online')
@endsection

@section('js')
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
