<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestige Watches</title>
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
  <style>
    /* Add this to your existing CSS or within <style> tags */
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
</head>

<body>
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

  <main class="main">
    <section class="video-section">
      <video class="hero-video" autoplay muted loop>
        <source src="{{asset('assets/img/Rolex/videoplayback.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="hero-content">

      </div>
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section container" id="featured">
        <h2 class="section__title">The Clients Favourite</h2>

        <div class="featured__container grid">
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/1-w70x429knb132x17edf24c63-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Submariner Date</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <a href="{{asset('Shwood-Shop/product.html')}}" class="button featured__button"> 
                    Buy Now
                  </a>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/2-y181jdh67kx2lripaucfting-Main_2x.webp')}}" alt="Luxury Watch 2"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Rolex Yacht-Master II</h3>
                    <span class="featured__price">$2,500</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/3-oxbyqsr0pt5y84g8sexacrfl-Main_2x.webp')}}" alt="Luxury Watch 3"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title"> Patek Philippe Vintage</h3>
                    <span class="featured__price">22,650</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/4-s3n4vjwfzcimyvyeizqpl6cv-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/49-5os8cromlu1m5otpcim3xb2w-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/47-v5b06z1h6pcvqe8xu0e9h2pg-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/54-83a5t6w7ocqe7bm8y9kigmt3-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/55-vb2javyk3a8rlddxgy6lkr33-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/59-64dbjwtbd3y6580vuf2h85z0-Main_2x.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/SubmarinerOr.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('assets/img/Rolex/SubmarinerNoDate.webp')}}" alt="Luxury Watch 1"
                    class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">CArtier Bleu Ball</h3>
                    <span class="featured__price">$15,050</span>
                </div>

                <button class="button featured__button">Buy Now</button>
            </article>
        </div>
    </section>

  </main>

  <footer class="footer section">
    <div class="footer__container container grid">
      <div class="footer__content">
        <h3 class="footer__title">Our information</h3>
        <ul class="footer__list">
          <li>Rabat, Morocco</li>
          <li>+212-657-984-513</li>
          <li>ELhanafi007@gmail.com</li>
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
            <a href="#" class="footer__link">Copy Right</a>
          </li>
        </ul>
      </div>
      <div class="footer__content">
        <h3 class="footer__title">Product</h3>
        <ul class="footer__links">
          <li>
            <a href="#" class="footer__link">Road bikes</a>
          </li>
          <li>
            <a href="#" class="footer__link">Mountain bikes</a>
          </li>
          <li>
            <a href="#" class="footer__link">Electric</a>
          </li>
          <li>
            <a href="#" class="footer__link">Accesories</a>
          </li>
        </ul>
      </div>
      <div class="footer__content">
        <h3 class="footer__title">Social</h3>
        <ul class="footer__social">
          <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
            <i class='bx bxl-facebook'></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
            <i class='bx bxl-instagram'></i>
          </a>
          <a href="https://twitter.com/" target="_blank" class="footer__social-link">
            <i class='bx bxl-twitter'></i>
          </a>
        </ul>
      </div>
    </div>
    <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>
  </footer>
  <a href="#" class="scrollup" id="scroll-up">
    <i class='bx bx-up-arrow-alt scrollup__icon'></i>
  </a>
     <!--=============== SCROLL UP ===============-->
     <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>