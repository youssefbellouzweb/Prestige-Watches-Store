@extends('Users.layouts.master')

@section('title')
@endsection

@section('style-online')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('style')
    <link rel="stylesheet" href="{{ secure_asset('assets/css/main.css') }}" />
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

        .form-section input {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #fff;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
            font-family: "Merriweather", serif;
        }

        .form-section input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        .form-section button {
            padding: 15px 20px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(135deg, #007bff, #0056b3);
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
            width: 35%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="detail-container">
            <div class="detail-row">
                <div class="detail-col-2">
                    <img src="{{ secure_asset($product['image']) }}" class="detail-product-image" id="emphasisPicture" />
                    <div class="detail-smallImg detail-product-image">
                        @if (!empty($product['images']))
                            @foreach ($product['images'] as $image)
                                <div class="detail-col-4">
                                    <img src="{{ secure_asset($image) }}" class="smallpictures {{ $loop->first ? 'active' : '' }}"
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
                    <div class="detail-price">
                        <span class="detail-productValue">{{ $product['price'] }}DH</span>
                        {{-- <span class="detail-percentage">50%</span> --}}
                    </div>
                    {{-- <span class="detail-totalValue">$250.00</span> --}}
                    <div class="detail-buttonsRow">
                        <div class="detail-increment">
                            <img src="{{ secure_asset('images/icon-minus.svg') }}" id="minus" />
                            <input type="number" name="totalItems" id="totalItems" value="1" min="1" />
                            <img src="{{ secure_asset('images/icon-plus.svg') }}" id="plus" />
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
                            <label for="name">Nom et Prénom:</label>
                            <input type="text" id="name" name="name" required />
                            <label for="phone">Numéro de Téléphone:</label>
                            <input type="tel" id="phone" name="phone" required />
                            <label for="address">Adresse:</label>
                            <input type="text" id="address" name="address" required />
                            <label for="ville">Ville:</label>
                            <input type="text" id="ville" name="ville" required />
                            <input type="hidden" id="name_product" name="name_product" value="{{ $product['title'] }}" />
                            <input type="hidden" id="price" name="price" value="{{ $product['price'] }}" />
                            <input type="hidden" id="price_packaging" name="price_packaging" value="{{ $product['price_packaging'] }}" />
                            <div class="form-radio">
                                {{-- <div>
                                    <input type="radio" id="sans_emballage" name="emballage" value="sans_emballage">
                                    <label for="sans_emballage">sans emballage</label>
                                </div> --}}
                                <div>
                                    <input type="radio" id="avec_emballage" name="emballage" value="avec_emballage">
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

                        <img src="{{ secure_asset($watche['image']) }}" alt="{{ $watche['alt'] }}" class="featured__img">

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
    <script src="{{ secure_asset('assets/js/script.js') }}"></script>
    <script>
        // document
        //     .getElementById("formSubmitBtn")
        //     .addEventListener("click", function() {
        //         const name = document.getElementById("name").value;
        //         const phone = document.getElementById("phone").value;
        //         const address = document.getElementById("address").value;
        //         const ville = document.getElementById("ville").value;
        //         // const name_product = document.getElementById("name_product").value;
        //         // const price = document.getElementById("price").value;
        //         // const plus = document.getElementById('plus');
        //         // const minus = document.getElementById('minus');
        //         // const totalItems = document.getElementById('totalItems');

        //         // plus.addEventListener('click', () => totalItems.value = Math.max(1, ++totalItems.value));
        //         // minus.addEventListener('click', () => totalItems.value = Math.max(1, --totalItems.value));

        //         const message =
        //             `Nom et Prénom: ${name}\nNuméro de Téléphone: ${phone}\nAdresse: ${address}\nCity: ${ville}\nProduct Name: ${name_product}\nPrice: ${price}\nI am interested in the Rolex Datejust Oyster Perpetual Acier 41`;
        //         const whatsappUrl = `https://wa.me/+212772083043?text=${encodeURIComponent(
        //   message
        // )}`;
        //         window.location.href = whatsappUrl;
        //     });

        // document
        //     .getElementById("formSubmitBtn")
        //     .addEventListener("click", function() {
        //         const name = document.getElementById("name").value;
        //         const phone = document.getElementById("phone").value;
        //         const address = document.getElementById("address").value;
        //         const ville = document.getElementById("ville").value;
        //         const name_product = document.getElementById("name_product").value;
        //         const price = document.getElementById("price").value;
        //         const plus = document.getElementById('plus');
        //         const minus = document.getElementById('minus');
        //         const totalItems = document.getElementById('totalItems');

        //         plus.addEventListener('click', () => totalItems.value = Math.max(1, ++totalItems.value));
        //         minus.addEventListener('click', () => totalItems.value = Math.max(1, --totalItems.value));

        //         // استخدم totalItems.value بشكل صحيح
        //         const quantity = totalItems.value;
        //         const totalPrice = price * quantity;

        //         const message =
        //             `Nom et Prénom: ${name}\nNuméro de Téléphone: ${phone}\nAdresse: ${address}\nVille: ${ville}\nProduct Name: ${name_product}\nPrice: ${price}\nQuantity: ${quantity}\nTotal Price: ${totalPrice}\nI am interested in the Rolex Datejust Oyster Perpetual Acier 41`;

        //         const whatsappUrl = `https://wa.me/+212772083043?text=${encodeURIComponent(message)}`;
        //         window.location.href = whatsappUrl;
        //     });

        // document.getElementById("formSubmitBtn").addEventListener("click", function() {
        //     const name = document.getElementById("name").value;
        //     const phone = document.getElementById("phone").value;
        //     const address = document.getElementById("address").value;
        //     const ville = document.getElementById("ville").value;
        //     const name_product = document.getElementById("name_product").value;
        //     const price = document.getElementById("price").value;
        //     const totalItems = document.getElementById('totalItems').value;

        //     // تأكد من أن الكمية صحيحة
        //     if (!totalItems || totalItems < 1) {
        //         alert("Please enter a valid quantity.");
        //         return;
        //     }

        //     const totalPrice = price * totalItems;

        //     const message =
        //         `Nom et Prénom: ${name}\nNuméro de Téléphone: ${phone}\nAdresse: ${address}\nVille: ${ville}\nProduct Name: ${name_product}\nPrice: ${price}\nQuantity: ${totalItems}\nTotal Price: ${totalPrice}`;

        //     const whatsappUrl = `https://wa.me/+212772083043?text=${encodeURIComponent(message)}`;
        //     window.location.href = whatsappUrl;
        // });
    </script>
@endsection

{{-- +212622314644 --}}
