<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from preetheme.com/html/dmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 16:14:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('front-assets/img/icon.png') }}" type="image/gif" sizes="16x16">
    <link rel="icon" href="{{ asset('front-assets/img/icon.png') }}" type="image/gif" sizes="18x18">
    <link rel="icon" href="{{ asset('front-assets/img/icon.png') }}" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/responsive.css') }}">

</head>

<body>
    <!-- Preeloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
            </div>
        </div>
    </div>
    <!-- Preeloader -->
    <!-- Start Header Area -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4  col-6 align-self-center">
                    <div class="logo">
                        <a href="index.html">
                            {{-- <img src="{{ asset('front-assets/img/logo.png') }}" alt="logo"> --}}
                            LOGO
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-8 col-6">
                    <!-- Header Action -->
                    <div class="header__action">
                        <!-- Login -->
                        <div class="header-login">
                            @if (auth()->user())
                                <a  onclick="document.getElementById('logout-form').submit()">
                                    {{-- logout icon --}}
                                    <i class="far fa-user"></i> <span>Log Out</span>

                                </a>
                            @else
                                <a href="{{ route('login') }}">
                                    <i class="far fa-user"></i> <span>Log In</span>
                                </a>
                            @endif
                        </div>

                        <form action="{{ route('logout') }}" id="logout-form" method="POST">
                            @csrf

                        </form>
                        <!-- Cart -->
                        <div class="mini-cart">
                            <a href="javascript:void(0);">
                                <i class="fas fa-shopping-cart"></i> <span>03</span>
                            </a>
                        </div>
                        <div class="canvas_open">
                            <a href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="menu">
                        <nav>
                            <ul>

                                <li><a href="product.html">Home</a></li>
                                <li><a href="product.html">News Feed</a></li>

                                <li><a href="product.html">Categories</a></li>
                                <li><a href="product.html">Products</a></li>

                                @if (auth()->user())
                                    <li><a href="contact.html">Profile</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Mobile Menu Area -->
    <div class="mobile-menu-area">

        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay">

        </div>
        <div class="offcanvas_menu">
            <div class="offcanvas_menu_wrapper">
                <div class="canvas_close">
                    <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                </div>
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="{{ asset('front-assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div id="menu" class="text-left ">
                    <ul class="offcanvas_main_menu">


                        <li class="menu-item-has-children">
                            <a href="contact.html"> Home</a>
                        </li>


                        <li><a href="product.html">News Feed</a></li>

                        <li><a href="product.html">Categories</a></li>
                        <li><a href="product.html">Products</a></li>

                        <li class="menu-item-has-children">
                            <a href="contact.html"> Profile</a>
                        </li>

                    </ul>
                </div>
                <div class="mobile-menu-login">
                    @if (auth()->user())
                        <a  onclick="document.getElementById('logout-form').submit()">
                            <i class="far fa-user"></i> <span>Log Out</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            <i class="far fa-user"></i> <span>Log In</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!-- End Mobile Menu Area -->

    <!-- Start MinCart Area -->
    <div class="off_canvars_overlay">

    </div>
    <div class="mini-cart-area">
        <div class="mini-cart-full">
            <div class="mini-cart-header">
                <h2>Shopping cart</h2>
                <div class="mini-cart-close">
                    <i class="bi bi-x"></i>
                </div>
            </div>
            <div class="mini-cart-full">
                <div class="cartmini__inner">
                    <ul>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{ asset('front-assets/img/mc1.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">LearnUp - Online LMS WordPress Theme</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{ asset('front-assets/img/mc2.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">Cario - Digital WordPress Theme</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{ asset('front-assets/img/mc3.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">LearnUp - Online LMS WordPress Theme</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mini-cart-bottom">
                <h4>SubTotal : <span>$203.00</span></h4>
                <a class="button-2" href="cart.html">View Cart</a>
                <a class="button-1" href="checkout.html">Checkout Now</a>
            </div>
        </div>
    </div>
    <!-- End MinCart Area -->


    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer">
        <div class="footer-top pt-90 pb-50">
            <div class="container">
                <div class="row">
                    <!-- Single -->
                    <div class="col-lg-6 col-xl-4 col-md-6 mb-30">
                        <div class="footer-widgets-single">
                            <h3>Our Address</h3>
                            <ul class="corporate-address">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>PO Box 16122 Collins Street West Victoria 8007 Australia</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>+61 3 8376 6284</span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <span>info123@gmail.com</span>
                                </li>
                            </ul>
                            <div class="footer-social">
                                <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                                <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-xl-2 col-md-6 mb-30">
                        <div class="footer-widgets-single">
                            <h3>Community </h3>
                            <ul class="footer-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Become an Author</a></li>
                                <li><a href="#">Community Meetups</a></li>
                                <li><a href="#">Become an Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-xl-2 col-md-6 mb-30">
                        <div class="footer-widgets-single">
                            <h3>Products </h3>
                            <ul class="footer-menu">
                                <li><a href="#">Tutor LMS </a></li>
                                <li><a href="#">WP Mega Menu </a></li>
                                <li><a href="#">WP Page Builder </a></li>
                                <li><a href="#">Themes</a></li>
                                <li><a href="#">Interactions</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-xl-2 col-md-6 mb-30">
                        <div class="footer-widgets-single">
                            <h3>Need Help? </h3>
                            <ul class="footer-menu">
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Foxtar Market Terms</a></li>
                                <li><a href="#">Author Terms</a></li>
                                <li><a href="#">Foxtar Licenses</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-xl-2 col-md-6 mb-30">
                        <div class="footer-widgets-single">
                            <h3>Category</h3>
                            <ul class="footer-menu">
                                <li><a href="#">Site Template</a></li>
                                <li><a href="#">WordPress Themes</a></li>
                                <li><a href="#">UI Template</a></li>
                                <li><a href="#">Elementor Kit</a></li>
                                <li><a href="#">eCommerce Template</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copy-text">
                            <p>&copy; 2021 Dmark. Designd By <a href="#"><b>CodexUnicTheme</b></a> All Rights
                                Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <div class="scroll-area">
        <i class="bi bi-arrow-up"></i>
    </div>


    <!-- Js File -->
    <script src="{{ asset('front-assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('front-assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('front-assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from preetheme.com/html/dmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 16:14:51 GMT -->

</html>
