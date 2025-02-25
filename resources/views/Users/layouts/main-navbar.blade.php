<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="{{route("home")}}" class="nav__logo">
            <i class='bx bxs-watch nav__logo-icon'></i> Watches
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route("hero-home")}}" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="{{route("featured")}}" class="nav__link">Favourite</a>
                </li>
                <li class="nav__item">
                    <a href="{{route("about")}}" class="nav__link">About Us</a>
                </li>
                <li class="nav__item">
                    <a href="{{route("products")}}" class="nav__link">Products</a>
                </li>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>
        </div>

        <div class="nav__btns">
            <!-- Theme change button -->
            <i class='bx bx-moon change-theme' id="theme-button"></i>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </div>
    </nav>
</header>
