<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!--<< Header Area >>-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop Store in Mauritius">
    <!-- ======== Page title ============ -->
    <title>Mauritius Shop - Taba-J - Grocery Store</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="/assets/css/color.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="h" class="letters-loading">
                    h
                </span>
                <span data-text-preloader="o" class="letters-loading">
                    o
                </span>
                <span data-text-preloader="p" class="letters-loading">
                    p
                </span>
                {{-- <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span> --}}
            </div>
            <p class="text-center">Mauritius...</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!--<< Mouse Cursor Start >>-->
    {{-- <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div> --}}

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Is your store missing from Waze and Google Maps? 80% of customers drive and search on Maps
                        and Waze looking for "grocery store near me"—make sure they find you!
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+23052542667">+23052542667</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">

                        </div>
                        <div class="main-button">
                            <a href="{{ url('/add-my-store') }}"> <span class="theme-btn"> Add My Store </span><span
                                    class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">

                    <div class="mean__menu-wrapper">

                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        {{-- <a href="#0" class="search-trigger search-icon"><i
                                class="fa-regular fa-magnifying-glass"></i></a> --}}
                        <div class="main-button">
                            <a href="{{ url('/add-my-store') }}"> <span class="theme-btn"> Get Started </span><span
                                    class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    {{-- <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Hero Section Start -->
    <section class="hero-section fix hero-1 bg-cover" style="background-image: url('/assets/img/hero/hero-bg.jpg');">
        <div class="mike-shape">
            <img src="/assets/img/hero/mike-shape.png" alt="img">
        </div>
        <div class="arrow-shape">
            <img src="/assets/img/hero/arrow-shape.png" alt="img">
        </div>
        <div class="arrow-shape-2">
            <img src="/assets/img/hero/arrow-shape.png" alt="img">
        </div>
        <div class="energy-shape float-bob-y">
            <img src="/assets/img/hero/energy-shape.png" alt="img">
        </div>
        <div class="rocket-shape">
            <img src="/assets/img/hero/rocket.png" alt="img" class="float-bob-y">
        </div>
        <div class="container-fluid">
            <div class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="/assets/img/hero/hero-text.png" alt="img">
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="hero-content">
                        <span class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            Your Digital Visibility!</span>
                        <h1 class="wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s">think
                            digital</h1>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Is your store missing from Waze and Google Maps? 80% of customers drive and search on Maps
                            and Waze looking for "grocery store near me"—make sure they find you!
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="hero-image">
                        <img src="/assets/img/hero/hero-image.png" alt="img" class=" wow img-custom-anim-left"
                            data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="bg-shape">
                            <img src="/assets/img/hero/bg-shape.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    {{-- <div class="video-right">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                            class="video-btn video-popup wow fadeInUp" data-wow-delay=".3s">
                            <i class="fa-duotone fa-play"></i>
                            <img src="/assets/img/hero/text-circle.png" alt="img">
                        </a>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected.
                        </p>
                        <div class="client-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="client-logo">
                                <img src="/assets/img/hero/logo.png" alt="img">
                            </div>
                            <div class="client-img">
                                <img src="/assets/img/hero/client.png" alt="img">
                                <div class="star-icon">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span>450+ reviews</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Marque Section Start -->
    {{-- <div class="marquee-section-1">
        <div class="mycustom-marque style-2">
            <div class="scrolling-wrap">
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
            </div>
        </div>
        <div class="mycustom-marque style-3">
            <div class="scrolling-wrap">
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
                <div class="comm">
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                    <div class="cmn-textslide"><img src="/assets/img/star.png" alt="img">THE BEST SOULTION</div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Service Section Start -->
    <section class="service-section fix section-padding" id="services">
        <div class="left-shape float-bob-y">
            <img src="/assets/img/service/left-shape.png" alt="img">
        </div>
        <div class="right-shape">
            <img src="/assets/img/service/right-shape.png" alt="img">
        </div>
        <div class="bg-shape">
            <img src="/assets/img/service/bg-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title wow fadeInUp">
                        <span>Why List Your Store?</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Be Discovered by Local & tourist Shoppers
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Over 70% of drivers in Mauritius, including tourists, use Waze to find nearby stores. Google Maps
                    searches, like "grocery near me," impact customers' choices on where to find your store.
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="/assets/img/service/icon-1.png" alt="img">
                        </div>
                        <div class="content">
                            <h4>Boost Sales</h4>
                            <p>Get free traffic from tourist and local searching for shop nearby.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="/assets/img/service/icon-2.png" alt="img">
                        </div>
                        <div class="content">
                            <h4>Be Discovered</h4>
                            <p>Increase foot traffic by 30%+ with accurate listings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="/assets/img/service/icon-3.png" alt="img">
                        </div>
                        <div class="content">
                            <h4>Fast & Affordable Setup</h4>
                            <p>We handle everything—listed in 24-48 hours, verified, and optimized.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding"
        style="background-image: url('/assets/img/about/about-bg.png');" id="about">
        <div class="left-shape float-bob-y">
            <img src="/assets/img/about/left-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="brand-wrapper">
            </div>

            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="/assets/img/about/01.png" alt="img" class="wow img-custom-anim-left"
                                data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="bg-shape">
                                <img src="/assets/img/about/bg-shape.png" alt="img">
                            </div>
                            <div class="grap-shape float-bob-x">
                                <img src="/assets/img/about/grap.png" alt="img">
                            </div>
                            <div class="box-shape float-bob-y">
                                <img src="/assets/img/about/box-shape.png" alt="img">
                            </div>
                            <div class="emoji-shape">
                                <img src="/assets/img/about/emoji.png" alt="img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>Shop Owners</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    How It Works
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <i class="fa-regular fa-check"></i> &nbsp; You Share Basic Info (Name, address, photos)
                                of
                                your store.
                            </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s"> <i
                                    class="fa-regular fa-check"></i> &nbsp; We List & Optimize (Waze +
                                Google Maps + Business Profile).</p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s"> <i
                                    class="fa-regular fa-check"></i> &nbsp; You Get Verified (From Google).
                            </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s"> <i
                                    class="fa-regular fa-check"></i> &nbsp; Customers Find You!.
                            </p>

                            <div class="circle-progress-bar-wrapper">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="85" data-duration="2000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Search on WAZE
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="95" data-duration="2000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Search on Google Map
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="{{ url('/add-my-store') }}"> <span class="theme-btn"> Add my shop
                                    </span><span class="arrow-btn"><i
                                            class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- Pricing Section Start -->
    <section class="pricing-section fix section-padding section-bg">
        <div class="left-shape float-bob-y">
            <img src="/assets/img/pricing-left.png" alt="img">
        </div>
        <div class="right-shape float-bob-y">
            <img src="https://cdn-icons-png.flaticon.com/512/6853/6853075.png" width="179px" height="auto"
                alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="pricing-content">
                        <div class="section-title">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>Price</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                One Time Fee, lifetime profit.
                            </h2>
                        </div>
                        <div class="pricing-tab-header mt-4 mt-md-0">
                            <div class="arrow-shape">
                                <img src="/assets/img/arrow.png" alt="img">
                            </div>
                            <ul class="nav" role="tablist">
                                <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                    <a href="#monthly" data-bs-toggle="tab" class="nav-link active"
                                        aria-selected="true" role="tab">
                                        One Time Fee
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="tab-content">
                        <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="pricing-box-items">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4> Waze Only</h4>
                                                <h2>Rs 800 <sub>/ One-time fee</sub></h2>
                                            </div>
                                            <div class="icon">
                                                <img src="https://cdn-icons-png.flaticon.com/512/1040/1040254.png"
                                                    width="40px" height="40px" alt="img">
                                            </div>
                                        </div>

                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Pin Accuracy
                                                    – Exact location pinned on Waze.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Basic
                                                    Listing – Name, address, phone.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 1 Photo
                                                    Upload – Storefront image.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Category
                                                    Optimization – “Grocery Store” or “Mini market", ect.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i>
                                                    Best For: Small shops with tight budgets.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>

                                        </ul>
                                        <div class="price-button">
                                            <a href="{{ url('/add-my-store') }}" class="theme-btn">Add My Store Now <i
                                                    class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="pricing-box-items style-2">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4>Waze + Google Map</h4>
                                                <h2>Rs 1,500 <sub>/ One-time fee</sub></h2>
                                            </div>

                                        </div>
                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Everything
                                                    in Waze Plan +</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Google
                                                    Business Profile Setup</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 3+ Photos –
                                                    Storefront, interior, exterior.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Keywords &
                                                    Description</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Review
                                                    Management – Provide owners to get customer's reviews.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-check"></i>
                                                    Best For: Established stores need maximum visibility.</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                        </ul>
                                        <div class="price-button">
                                            <a href="{{ url('/add-my-store') }}" class="theme-btn">Add My Store Now <i
                                                    class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Cta Section Start -->
    <section class="cta-section section-bg section-padding pb-0">
        <div class="rokect-shape float-bob-y">
            <img src="/assets/img/rokect.png" alt="img">
        </div>
        <div class="container">
            <div class="cta-wrapper bg-cover" style="background-image: url('/assets/img/cta-bg.jpg');">
                <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="/assets/img/cta-img.png" alt="img">
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Stay Connected With Support
                </h2>
                <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                    <a href="https://api.whatsapp.com/send?phone=23052542667" target="_blank"> <span
                            class="theme-btn"> Whatsapp </span><span class="arrow-btn"><i
                                class="fa-regular fa-arrow-up-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    <section class="footer-section footer-bg fix">
        {{-- <div class="container">
            <div class="footer-widgets-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                        © 2025 Webymind. All rights reserved.
                    </p>
                    <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a href="{{ url('/terms-and-conditions') }}">
                                Terms & Condition
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/privacy-policy') }}">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" id="scrollUp" class="scroll-icon">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
    </section>

    <!--<< All JS Plugins >>-->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="/assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="/assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="/assets/js/wow.min.js"></script>
    <!--<< Circle Progress Js >>-->
    <script src="/assets/js/circle-progress.js"></script>
    <!--<< Main.js >>-->
    <script src="/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.js"></script>
</body>

</html>
