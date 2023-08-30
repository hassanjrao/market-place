<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from preetheme.com/html/dmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 16:14:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-title') - {{ config('app.name') }} </title>
    <link rel="icon" href="{{ asset('media/logos/fav.png') }}" type="image/gif" sizes="16x16">
    <link rel="icon" href="{{ asset('media/logos/fav.png') }}" type="image/gif" sizes="18x18">
    <link rel="icon" href="{{ asset('media/logos/fav.png') }}" type="image/gif" sizes="20x20">

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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')


    @livewireStyles

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
                            <img src="{{ asset('media/logos/main_logo.png') }}" alt="logo">

                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-8 col-6">
                    <!-- Header Action -->
                    <div class="header__action">
                        <!-- Login -->
                        <div class="header-login">
                            @if (auth()->user())
                                <a onclick="document.getElementById('logout-form').submit()">
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

                            <a href="{{ route('carts.index') }}" id="cartHeaderIcon"
                                class="{{ request()->segment(1) == 'carts' ? ' active' : '' }}">
                                <i class="fas fa-shopping-cart"></i> <span id="cartHeaderIconValue">
                                    {{ session()->has('cart') && isset(session('cart')['products']) ? count(session('cart')['products']) : '0' }}
                                </span>

                            </a>

                            <input type="hidden" id="cartHiddenField"
                                value="{{ session()->has('cart') && isset(session('cart')['products']) ? count(session('cart')['products']) : 0 }}">


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

                                <li><a class="{{ request()->segment(1) == '' ? ' active' : '' }}"
                                        href="{{ route('front.landing') }}">Home</a></li>
                                <li><a class="{{ request()->segment(1) == 'news-feeds' ? ' active' : '' }}"
                                        href="{{ route('news-feeds.index') }}">News Feed</a></li>

                                <li><a class="{{ request()->segment(1) == 'products' ? ' active' : '' }}"
                                        href="{{ route('products.index') }}">Products</a></li>

                                @if (auth()->user())
                                    <li><a class="{{ request()->segment(1) == 'profile' ? ' active' : '' }}" href="{{ route("profile.index") }}">Profile</a></li>
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
                        <img src="{{ asset('media/logos/main_logo.png') }}" alt="logo">
                    </a>
                </div>
                <div id="menu" class="text-left ">
                    <ul class="offcanvas_main_menu">


                        <li><a class="{{ request()->segment(1) == '' ? ' active' : '' }}"
                                href="{{ route('home') }}">Home</a></li>
                        <li><a class="{{ request()->segment(1) == 'news-feeds' ? ' active' : '' }}"
                                href="{{ route('news-feeds.index') }}">News Feed</a></li>


                        <li><a class="{{ request()->segment(1) == 'products' ? ' active' : '' }}"
                                href="{{ route('products.index') }}">Products</a></li>

                        <li class="menu-item-has-children">
                            <a class="{{ request()->segment(1) == 'products' ? ' active' : '' }}" href="{{ route("profile.index") }}"> Profile</a>
                        </li>

                    </ul>
                </div>
                <div class="mobile-menu-login">
                    @if (auth()->user())
                        <a onclick="document.getElementById('logout-form').submit()">
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


    @if (request()->segment(1) != '')
        <div class="breadcrumb-area pt-30 pb-30 section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">@yield('page-title')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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

                </div>
            </div>
        </div>
        <div class="footer-bottom pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copy-text">
                            <p>&copy; 2023 {{ config("app.name") }}

                            </p>
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

    @livewireScripts


    <script>
        function showStatus(message, type = 'success', toast = true) {



            if (type == "success") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                if (toast) {
                    Toast.fire({
                        icon: type,
                        title: message,
                    })
                } else {
                    Swal.fire({
                        icon: type,
                        title: message,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    })
                }
            } else if (type == "error") {

                Swal.fire({
                    icon: type,
                    title: message,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                })


            }

        }
    </script>


    @yield('js-after')

    @stack("scripts")

</body>

<!-- Mirrored from preetheme.com/html/dmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 16:14:51 GMT -->

</html>
