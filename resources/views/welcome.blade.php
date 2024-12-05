<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    <title>Responsive watches website </title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class='bx bxs-watch nav__logo-icon'></i> Prestige Watches
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag'></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>

    

    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="{{asset('assets/img/Rolex/m128238-0118_drp-upright-bba-with-shadow.png')}}" alt="New Watch Collection"
                        class="home__img">
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
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="{{asset('assets/img/Cartier/451-o7pwhf3u1vssktw7s9uikiff-Main_2x.webp')}}" alt="Luxury Watch 1"
                        class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">CArtier Bleu Ball</h3>
                        <span class="featured__price">$15,050</span>
                    </div>

                    <button class="button featured__button">Buy Now</button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="{{asset('assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp')}}" alt="Luxury Watch 2"
                        class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Rolex Yacht-Master II</h3>
                        <span class="featured__price">$2,500</span>
                    </div>

                    <button class="button featured__button">Buy Now</button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="{{asset('assets/img/Patek/96-ja353olzfc18tscnj0liuihf-Main_2x.webp')}}" alt="Luxury Watch 3"
                        class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title"> Patek Philippe Vintage</h3>
                        <span class="featured__price">22,650</span>
                    </div>

                    <button class="button featured__button">Buy Now</button>
                </article>
            </div>
        </section>


        <!--==================== OUR TRUSTED BRANDS ====================-->
        <section class="brands section container" id="brands">
            <h2 class="section__title">Our Trusted Brands</h2>

            <div class="brands__container grid">
                <article class="brands__card">
                    <img src="{{asset('assets/img/Rolex/18975-rolex-logo.png')}}" alt="Rolex" class="brands__img">
                    <h3 class="brands__title">Rolex</h3>
                    <a href="brands/Rolex.html" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Audemars/ Audemars Piguit Logo.png')}}" alt="Audemars Piguit" class="brands__img">
                    <h3 class="brands__title">Audemars Piguit</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Richard Mille/6481a7ab9183c6fd9bba1b1a_Frame_76-removebg-preview.png')}}"
                        alt="Richard Mille" class="brands__img">
                    <h3 class="brands__title">Richard Mille</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Patek/patek-philippe logo.png')}}" alt="Patek Philippe" class="brands__img">
                    <h3 class="brands__title">Patek Philippe</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Hublot/HUBLOT-LOGO.png')}}" alt="Hublot" class="brands__img">
                    <h3 class="brands__title">Hublot</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Tissot/tissot-logo.png')}}" alt="Tissot" class="brands__img">
                    <h3 class="brands__title">Tissot</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Frank/Franck-Muller_Logo_Black_Surface-Magazine_560px.png')}}" alt="Frank Muller"
                        class="brands__img">
                    <h3 class="brands__title">Frank Muller</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>

                <article class="brands__card">
                    <img src="{{asset('assets/img/Cartier/cartier-2-logo.png')}}" alt="Cartier" class="brands__img">
                    <h3 class="brands__title">Cartier</h3>
                    <a href="#" class="button brands__button">Explore</a>
                </article>
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
                                     Prestige Watches, we blend the charm of Moroccan craftsmanship with unmatched quality and fair prices. Discover luxury without compromise.
                                </p>
                            </div>
                        </section>
                        
                    </p>

                   
                </div>

                <div class="story__images">
                    <img src="{{asset('assets/img/Patek/92-617kgslvugtkeemb2w74ftzo-Main_2x.webp')}}" alt="" class="story__img">
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

                            <img src="{{asset('assets/img/Richard Mille/1447-ge4sxovdxjg3plv9jrrxt6cz-Main_2x.webp')}}"
                                alt="Longines Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">RM-035</h3>
                                <span class="new__price">$163,000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{asset('assets/img/Patek/106-8soyprb5zryt8moy5l06rmpu-Main_2x.webp')}}" alt="Jazzmaster Watch"
                                class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Nautilus</h3>
                                <span class="new__price">$13.400</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{asset('assets/img/Audemars/1173-lq97x3l1dfip4btg2b40kbu5-Main_2x.webp')}}"
                                alt="Dreyfuss Gold Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Royal Oak</h3>
                                <span class="new__price">$55.000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{asset('assets/img/Cartier/165-jy40bbyj1hl8m7ohu4hfuigh-Main_2x.webp')}}"
                                alt="Portuguese Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Bleu-Ball</h3>
                                <span class="new__price">$15.900</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{asset('assets/img/Hublot/1064-nqwd5o8wcf5bvegiuv7oxv75-Main_2x.webp')}}"
                                alt="Portuguese Rose Watch" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Classical Fusion</h3>
                                <span class="new__price">$29.000</span>
                            </div>

                            <button class="button new__button">BUY NOW</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="{{asset("assets/img/Frank/521-xls43y5bn68ewg6t4qpzzkpb-Main_2x.webp")}}"
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

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <h3 class="footer__title">Our Information</h3>
                <ul class="footer__list">
                    <li>Rabat, Morocco</li>
                    <li>Rabat</li>
                    <li>+123-456-7890</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">About Us</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Support Center</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Customer Support</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Products</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Luxury Watches</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">New Arrivals</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Best Sellers</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Accessories</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Follow Us</h3>
                <ul class="footer__social">
                    <a href="https://www.facebook.com/prestigewatches" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://twitter.com/prestigewatches" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="https://www.instagram.com/prestigewatches" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; 2024 Prestige Watches. All rights reserved</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('assets/js/swiper-bundle.min.j')}}s"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>