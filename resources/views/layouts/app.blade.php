{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home one || Hurst</title>
    <meta name="description"
        content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v5 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- lightbox css -->
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <!-- material-design-iconic-font css -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.css') }}">
    <!-- All common css of theme -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- shortcode css -->
    <link rel="stylesheet" href="{{ asset('css/shortcode.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
</head>

<body>
    <!-- WRAPPER START -->
    <div class="wrapper {{ !Request::is('/') ? 'bg-dark-white' : '' }}">

        <!-- Mobile-header-top Start -->
        <div class="mobile-header-top d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- header-search-mobile start -->
                        <div class="header-search-mobile">
                            <div class="table">
                                <div class="table-cell">
                                    <ul>
                                        <li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
                                        <li><a href="login.html"><i class="zmdi zmdi-lock"></i></a></li>
                                        <li><a href="my-account.html"><i class="zmdi zmdi-account"></i></a></li>
                                        <li><a href="wishlist.html"><i class="zmdi zmdi-favorite"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-search-mobile start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header-top End -->
        <!-- HEADER-AREA START -->
        <header id="sticky-menu" class="header">
            <!-- MAIN-MENU START -->
            <div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4 col-7">
                <div class="logo text-md-center">
                    <a href="/"><img src=" {{ asset('img/logo/logo.png') }} " alt="" /></a>
                </div>
            </div>
            <div class="main-menu  d-none d-md-block">
                <nav>
                    <ul>
                        <li><a href="/">Back to website</a></li>
                        <li><a href="/dashboard">Users</a></li>
                        <li><a href="/dashboard/products">Products</a></li>
                        <li><a href="/dashboard/articles">Articles</a></li>
                        <li><a href='/dashboard/categories'>Categories</a></li>
                        <li><a href='/dashboard/teams'>Team</a></li>
                        <li><a href='/dashboard/mails'>Mailbox</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">logout</a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- MAIN-MENU END -->
        </header>
        <!-- HEADER-AREA END -->
        <!-- Mobile-menu start -->
        <div class="mobile-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 d-block d-md-none">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="/">Back to website</a>
                                    </li>
                                    <li><a href="shop-list.html">product</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a :href="route('logout')">logout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.dashboard.banner')
        <!-- Mobile-menu end -->
        @yield('content')

        <!-- FOOTER START -->
        <footer>
            <!-- Footer-area start -->
            @php
                use App\Models\Info;
                $contact = Info::all()->first();
            @endphp
            <div class="footer-area {{ !Request::is('/') ? 'footer-2' : '' }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer">
                                <h3 class="footer-title  title-border">Contact Us</h3>
                                <ul class="footer-contact">
                                    <li><span>Address :</span>{{ $contact->address }}</li>
                                    <li><span>Cell-Phone :</span>{{ $contact->phone }} - {{ $contact->phone2 }}
                                    </li>
                                    <li><span>Email :</span>{{ $contact->mail }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title  title-border">accounts</h3>
                                <ul class="footer-menu">
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title  title-border">shipping</h3>
                                <ul class="footer-menu">
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
                                </ul>
                            </div>
                        </div>
                        @if (Request::is('/'))
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer">
                                    <h3 class="footer-title  title-border">your choice Products</h3>
                                    <div class="footer-product">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="footer-thumb">
                                                    <a href="#"><img src="img/footer/1.jpg" alt="" /></a>
                                                    <div class="footer-thumb-info">
                                                        <p><a href="#">Furniture Product<br>Name</a></p>
                                                        <h4 class="price-3">$ 60.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="footer-thumb">
                                                    <a href="#"><img src="img/footer/1.jpg" alt="" /></a>
                                                    <div class="footer-thumb-info">
                                                        <p><a href="#">Furniture Product<br>Name</a></p>
                                                        <h4 class="price-3">$ 60.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer newsletter-item">
                                    <h3 class="footer-title  title-border">Email Newsletters</h3>
                                    <div class="footer-subscribe">
                                        <form action="/newsletter" method="POST">
                                            @csrf
                                            <input type="text" name="email" placeholder="Email Address..." />
                                            <button class="button-one submit-btn-4" type="submit"
                                                data-text="Subscribe">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Footer-area end -->
            <!-- Copyright-area start -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p class="mb-0">&copy; <a
                                        href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank">
                                        CodeCarnival </a> 2021. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment  text-md-end">
                                <a href="#"><img src="img/payment/1.png" alt="" /></a>
                                <a href="#"><img src="img/payment/2.png" alt="" /></a>
                                <a href="#"><img src="img/payment/3.png" alt="" /></a>
                                <a href="#"><img src="img/payment/4.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright-area start -->
        </footer>
        <!-- FOOTER END -->
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- jquery.meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <!-- slick.min js -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <!-- jquery.treeview js -->
        <script src="{{ asset('js/jquery.treeview.js') }}"></script>
        <!-- lightbox.min js -->
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
        <!-- jquery-ui js -->
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <!-- jquery.nivo.slider js -->
        <script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('lib/home.js') }}"></script>
        <!-- jquery.nicescroll.min js -->
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <!-- countdon.min js -->
        <script src="{{ asset('js/countdon.min.j') }}s"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
        @yield('contact')
</body>

</html>
