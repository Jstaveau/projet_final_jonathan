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
            <div class="header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 offset-md-4 col-7">
                            <div class="logo text-md-center">
                                <a href="/"><img src=" img/logo/logo.png " alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-5">
                            <div class="mini-cart text-end">
                                <ul>
                                    <li>
                                        <a class="cart-icon" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                            <span>3</span>
                                        </a>
                                        <div class="mini-cart-brief text-left">
                                            <div class="cart-items">
                                                <p class="mb-0">You have <span>03 items</span> in your
                                                    shopping bag</p>
                                            </div>
                                            <div class="all-cart-product clearfix">
                                                <div class="single-cart clearfix">
                                                    <div class="cart-photo">
                                                        <a href="#"><img src="img/cart/1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h5><a href="#">dummy product name</a></h5>
                                                        <p class="mb-0">Price : $ 100.00</p>
                                                        <p class="mb-0">Qty : 02 </p>
                                                        <span class="cart-delete"><a href="#"><i
                                                                    class="zmdi zmdi-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="single-cart clearfix">
                                                    <div class="cart-photo">
                                                        <a href="#"><img src="img/cart/2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h5><a href="#">dummy product name</a></h5>
                                                        <p class="mb-0">Price : $ 300.00</p>
                                                        <p class="mb-0">Qty : 01 </p>
                                                        <span class="cart-delete"><a href="#"><i
                                                                    class="zmdi zmdi-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-totals">
                                                <h5 class="mb-0">Total <span
                                                        class="floatright">$500.00</span></h5>
                                            </div>
                                            <div class="cart-bottom  clearfix">
                                                <a href="/cart" class="button-one floatleft text-uppercase"
                                                    data-text="View cart">View cart</a>
                                                <a href="/checkout" class="button-one floatright text-uppercase"
                                                    data-text="Check out">Check out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN-MENU START -->
            <div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <div class="main-menu  d-none d-md-block">
                <nav>
                    <ul>
                        <li><a href="/">home</a>
                        </li>
                        <li><a href="/products">products</a></li>
                        <li><a href="/blog">blog</a></li>
                        <li><a href="/about-us">about us</a></li>
                        <li><a href="/contact">contact</a></li>
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
                                    <li><a href="index.html">home</a>
                                    </li>
                                    <li><a href="shop-list.html">product</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-menu end -->
        @yield('content')
        <!-- FOOTER START -->
        <footer>
            <!-- Footer-area start -->
            <div class="footer-area {{!Request::is('/') ? 'footer-2' : ''}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer">
                                <h3 class="footer-title  title-border">Contact Us</h3>
                                <ul class="footer-contact">
                                    <li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
                                    <li><span>Cell-Phone :</span>012345 - 123456789</li>
                                    <li><span>Email :</span>your-email@gmail.com</li>
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
                                    <form action="#">
                                        <input type="text" name="email" placeholder="Email Address..." />
                                        <button class="button-one submit-btn-4" type="submit" data-text="Subscribe">Subscribe</button>
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
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="#" src="img/product/quickview-photo.jpg" />
                                    </div>
                                </div><!-- .product-images -->

                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <hr />
                                        <div class="s-price-box">
                                            <span class="new-price">$160.00</span>
                                            <span class="old-price">$190.00</span>
                                        </div>
                                        <hr />
                                    </div>
                                    <a href="shop.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3" min="1">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to
                                                cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
                                        est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Google +" href="#"
                                                        class="gplus social-icon"><i
                                                            class="zmdi zmdi-google-plus"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#"
                                                        class="twitter social-icon"><i
                                                            class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a target="_blank" title="Facebook" href="#"
                                                        class="facebook social-icon"><i
                                                            class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#"
                                                        class="linkedin social-icon"><i
                                                            class="zmdi zmdi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->

    </div>
    <!-- WRAPPER END -->

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

    @yield('contact')
</body>

</html>
