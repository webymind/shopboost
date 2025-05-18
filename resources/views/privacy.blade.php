<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<< Header Area >>-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <!-- ======== Page title ============ -->
    <title>Privacy Policy</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="assets/css/color.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
        .footer-bg {
            background-color: #ffffff !important;
        }
    </style>
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

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="left-shape">
            <img src="https://cdn-icons-png.flaticon.com/512/8662/8662564.png" width="500px" height="auto"
                alt="img">
        </div>
        <div class="right-shape">
            <img src="https://cdn-icons-png.flaticon.com/512/9821/9821342.png" width="250px" height="auto"
                alt="img">
        </div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Privacy Policy</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        Privacy Policy
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Details Section Start -->
    <section class="news-details-section section-padding">
        <div class="container">
            <div class="news-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-8">
                        <div class="news-post-details">
                            <div class="single-news-post">
                                {{-- <div class="post-featured-thumb">
                                    <img src="assets/img/news/details-1.jpg" alt="">
                                </div> --}}
                                <div class="post-content">
                                    {{-- <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            18 Dec, 2024
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-tag"></i>
                                            Technology
                                        </li>
                                    </ul> --}}
                                    <h3 class="mb-4">Mauritius DPA ACT 2017 </h3>

                                    <h3 class="mb-3">What Data We Collect:</h3>
                                    <ul class="mb-3">
                                        <li>Your business name, address, phone number (to list on Waze/Google Maps and
                                            to contact you for transactional purposes).
                                        </li>
                                        <li>Photos of your store (if provided by you).</li>
                                    </ul>

                                    <h3 class="mb-3">How We Use It:</h3>
                                    <ul class="mb-3">
                                        <li>Only to create/update your business listings on Waze and Google Maps.</li>

                                        <li>Never for marketing, spam, or third-party sharing.</li>
                                    </ul>


                                    <h3 class="mb-3">Your Rights DPA 2017:</h3>
                                    <ul class="mb-3">
                                        <li>✔ Access: Ask for a copy of the provided data anytime.</li>
                                        <li>✔ Correct: Request updates if your info changes.</li>
                                        <li>✔ Delete: Ask us to remove your data (will also delist your business).</li>
                                    </ul>


                                    <h3 class="mb-3">Data Security:</h3>
                                    <ul class="mb-3">
                                        <li>Stored securely in password-protected systems.</li>
                                        <li>Deleted upon your request.</li>
                                    </ul>

                                    <h3 class="mb-3">For DPA requests:</h3>
                                    <ul class="mb-3">
                                        <li>📧 Email: [contact@webymind.com]</li>
                                        <li>📞 Phone: [+230 52542667]</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section Start -->
    <section class="footer-section footer-bg fix">
        <div class="container">
            <div class="footer-widgets-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        {{-- <div class="single-footer-widget">
                            <div class="widget-head">

                            </div>

                        </div> --}}
                    </div>

                </div>
            </div>
        </div>

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
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Circle Progress Js >>-->
    <script src="assets/js/circle-progress.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.js"></script>
</body>

</html>
