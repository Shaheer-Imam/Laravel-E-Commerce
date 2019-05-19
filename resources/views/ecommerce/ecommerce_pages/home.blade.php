@extends('ecommerce.ecommerce_app.ecommerce_app')
@section('scripts')
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="assets/js/hidemaxlistitem.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/hidemaxlistitem.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/scrollup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
@endsection
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-techmarket.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/techmarket-font-awesome.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick-style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css" media="all" />
@endsection
@section('content')
    <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                {{-- Slider --}}
                                <div class="homev3-slider-with-banners row">
                                    <div class="slider">
                                        <div class="home-v3-slider home-slider">
                                            <div class="slider-1">
                                                <img src="assets/images/slider/home-v3-img-1.png" alt="">
                                                <div class="caption">
                                                    <div class="title">The new-tech gift you are wishing for
                                                        <br>is right here</div>
                                                    <div class="sub-title">Big screens in incredibly slim designs that in your hand.</div>
                                                    <div class="button">Browse now
                                                        <i class="tm tm-long-arrow-right"></i>
                                                    </div>
                                                    <div class="bottom-caption">Free shipping on US Terority</div>
                                                </div>
                                            </div>
                                            <div class="slider-1 slider-2">
                                                <img src="assets/images/slider/home-v1-img-2.png" alt="">
                                                <div class="caption">
                                                    <div class="title">The new-tech gift you are wishing for
                                                        <br>is right here</div>
                                                    <div class="sub-title">Big screens in incredibly slim designs that in your hand.</div>
                                                    <div class="button">Browse now
                                                        <i class="tm tm-long-arrow-right"></i>
                                                    </div>
                                                    <div class="bottom-caption">Free shipping on US Terority</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-with-6-banners column-2">
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban6-1.jpg ); height: 165px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <strong>Fresh s7 Edge</strong>
                                                                <br> 32 GB Unlocked
                                                                <br> Quad Core</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">$279.99</span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban6-2.jpg ); height: 166px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h4 class="pretitle">Feat Category</h4>
                                                            <h3 class="title">Catch Best
                                                                <br>
                                                                <strong>Deals</strong> on the
                                                                <br> Curved TVs
                                                                <br> Entertainment</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban6-3.jpg ); height: 161px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">New Arrivals
                                                                <br> in
                                                                <strong>Accessories</strong>
                                                                <br> at Best Prices.</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">
                                                            <span class="start_price">from</span>$13.79</span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban6-4.png ); height: 165px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <strong>20% Off Tech</strong>
                                                                <br> at Ultrabooks,
                                                                <br> Laptops, Tablets
                                                                <br>Notebooks &amp;
                                                                <br>More</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban6-5.png); height: 166px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h4 class="pretitle">Best Gift Idea</h4>
                                                            <h3 class="title">Mini Two Wheel
                                                                <br>
                                                                <strong>Self Balancing</strong>
                                                                <br> Scooter</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>439.99</span>
                                                            </ins>
                                                            <del>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>689.00</span>
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner small-banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/ban-5.jpg ); height: 161px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">Brilliant New
                                                                <br>
                                                                <strong>Earphones for </strong>
                                                                <br> Bluetooth devices</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">
                                                            <span class="start_price">from</span>$5.99</span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                    </div>
                                    <!-- .slider-with-6-banners -->
                                </div>
                                {{-- Slider --}}

                                {{-- Featured List --}}
                                <div class="features-list">
                                    <div class="features">
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Free Delivery</h5>
                                                    <span>from $50</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">99% Customer</h5>
                                                    <span>Feedbacks</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">365 Days</h5>
                                                    <span>for free return</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Payment</h5>
                                                    <span>Secure System</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Only Best</h5>
                                                    <span>Brands</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                    </div>
                                    <!-- .features -->
                                </div>
                                {{-- Featured List --}}
                                <section class="section-categories-carousel" id="categories-carousel-2">
                                    <header class="section-header">
                                        <h2 class="section-title">Featured categories</h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    <!-- .section-header -->
                                    <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                        <div class="woocommerce columns-8">
                                            <div class="products">
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="All in One PC" src="assets/images/category/16.png">
                                                        <h2 class="woocommerce-loop-category__title">All in One PC </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Audio & Music" src="assets/images/category/17.png">
                                                        <h2 class="woocommerce-loop-category__title">Audio & Music </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Cells & Tablets" src="assets/images/category/18.png">
                                                        <h2 class="woocommerce-loop-category__title">Cells & Tablets </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Computers & Laptops" src="assets/images/category/19.png">
                                                        <h2 class="woocommerce-loop-category__title">Computers & Laptops </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Desktop PCs" src="assets/images/category/20.png">
                                                        <h2 class="woocommerce-loop-category__title">Desktop PCs </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Digital Cameras" src="assets/images/category/21.png">
                                                        <h2 class="woocommerce-loop-category__title">Digital Cameras </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Games & Consoles" src="assets/images/category/22.png">
                                                        <h2 class="woocommerce-loop-category__title">Games & Consoles </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Headphones" src="assets/images/category/23.png">
                                                        <h2 class="woocommerce-loop-category__title">Headphones </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Home Entertainment" src="assets/images/category/24.png">
                                                        <h2 class="woocommerce-loop-category__title">Home Entertainment </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="300" height="300" alt="Home Theater & Audio" src="assets/images/category/20.png">
                                                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- .products-->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                </section>
                                <!-- .section-top-categories -->
                                <div class="fullwidth-notice stretch-full-width">
                                    <div class="col-full">
                                        <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                                    </div>
                                    <!-- .col-full -->
                                </div>
                                <!-- .fullwidth-notice -->
                                <section class="section-products-carousel new-arrival-carousel" id="section-products-carousel-7">
                                    <header class="section-header">
                                        <h2 class="section-title">Hot New Arrivals</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel 7-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-7 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-7">
                                                <div class="products">
                                                    @for ($i = 0; $i < 10; $i++)
                                                        <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> 399.00</span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-products-carousel -->
                                <section class="section-products-carousel" id="section-products-carousel-8">
                                    <header class="section-header">
                                        <h2 class="section-title">Trending Now</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel 8-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-8 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-8">
                                                <div class="products">
                                                    @for ($i = 0; $i < 10; $i++)
                                                        <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> 456.00</span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                            </div>
                                                        </div>   
                                                    @endfor
                                                </div>
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                {{-- Banner --}}
                                <div class="banners">
                                    <div class="row">
                                        <div class="banner banner-long text-in-right">
                                            <a href="#">
                                                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/3-2.jpg ); height: 259px;">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <strong>Shop now</strong> to find savings on everything you need
                                                                <br> for the big game.</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="banner-action button">Browse</span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner banner-short text-in-left">
                                            <a href="#">
                                                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/3-5.jpg ); height: 259px;">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <strong>1000 mAh</strong>
                                                                <br> Power Bank Pro.</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">$34.99</span>
                                                        <span class="banner-action button">Buy Now</span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                    </div>
                                    <!-- .row -->
                                </div>
                                {{-- Banner --}}
                                {{-- Cell Phones and Tablets --}}
                                <section class="section-products-carousel-tabs section-hot-new-arrivals section-products-carousel-tabs 8-column-tabs">
                                    <div class="section-products-carousel-tabs-wrap">
                                        {{-- Side content --}}
                                        <header class="section-header">
                                            <h2 class="section-title">Cell Phones & Tablets</h2>
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0a268ad00" data-toggle="tab">Bestsellers</a></li>
                                                @for ($i = 1; $i <= 4; $i++)
                                                    <li class="nav-item"><a class="nav-link" href="#tab-59f89f0a268ad0{{$i}}" data-toggle="tab">Bestsellers</a></li>
                                                @endfor
                                            </ul>
                                        </header>
                                        {{-- Side content --}}
                                        {{-- Tab Content --}}
                                        <div class="tab-content">
                                                <div id="tab-59f89f0a268ad00" class="tab-pane active" role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-8">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                            @for ($i = 1; $i <= 4; $i++)
                                                <div id="tab-59f89f0a268ad0{{$i}}" class="tab-pane" role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-8">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                            @endfor
                                        </div>
                                        {{-- Tab Content --}}
                                    </div>
                                </section>
                                {{-- Cell Phones and Tablets --}}
                                
                                {{-- Recommended for you  --}}
                                <section class="rating-product section-products-carousel" id="section-products-carousel-5">
                                    <header class="section-header">
                                        <h2 class="section-title">Recommended For You</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-5 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                @for ($i = 0; $i < 23; $i++)
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                        </a>
                                                        <div class="techmarket-product-rating">
                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                <span style="width:0%">
                                                                    <strong class="rating">0</strong> out of 5</span>
                                                            </div>
                                                            <span class="review-count">(5)</span>
                                                        </div>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                {{-- Recommended for you --}}
                                
                                <section class="stretch-full-width section-products-carousel-with-bg 7-column-carousel-bg">
                                    <div class="col-full">
                                        <div class="row">
                                            <header class="section-header">
                                                <h2 class="section-title">Make
                                                    <br> dreams
                                                    <br>
                                                    <span>your reality.</span>
                                                </h2>
                                                <img alt="" src="assets/images/products/bg-2.png">
                                            </header>
                                            <div class="products-carousel-with-bg">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1201,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-6">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 15; $i++)
                                                                    <div class="product">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/xs-4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce-->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .products-carousel-with-bg -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .col-full -->
                                </section>
                                <!-- .section-products-carousel-with-bg -->
                                <section class="section-hot-new-arrivals section-landscape-products-card-carousel-tabs section-products-carousel-tabs">
                                    <div class="section-products-carousel-tabs-wrap">
                                        <header class="section-header">
                                            <h2 class="section-title">Tv & Visual Entertainment</h2>
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link active" href="#top-201" data-toggle="tab">Top 20</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#4k-ultra-hd" data-toggle="tab">4K Ultra HD</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#qled-tvs" data-toggle="tab">QLED Tvs</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#suhd-tvs" data-toggle="tab">SUHD Tvs</a></li>
                                            </ul>
                                        </header>
                                        <!-- .section-header -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="top-201">
                                                <div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                 <div class="landscape-product-card product">
                                                                    <div class="media">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                            <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $939.99</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$627.99</span>
                                                                                    </del>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                                <div class="ribbon green-label">
                                                                                    <span>A+</span>
                                                                                </div>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </a>
                                                                            <div class="hover-area">
                                                                                <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                                <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                            </div>
                                                                            <!-- .hover-area -->
                                                                        </div>
                                                                        <!-- .media-body -->
                                                                    </div>
                                                                    <!-- .media -->
                                                                </div>   
                                                                @endfor
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                            </div>
                                                            <!-- .products -->
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div role="tabpanel" class="tab-pane" id="4k-ultra-hd">
                                                <div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 7; $i++)
                                                                    <div class="landscape-product-card product">
                                                                        <div class="media">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                                <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                                    <span class="price">
                                                                                        <ins>
                                                                                            <span class="amount"> $939.99</span>
                                                                                        </ins>
                                                                                        <del>
                                                                                            <span class="amount">$627.99</span>
                                                                                        </del>
                                                                                    </span>
                                                                                    <!-- .price -->
                                                                                    <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                                    <div class="ribbon green-label">
                                                                                        <span>A++</span>
                                                                                    </div>
                                                                                    <div class="techmarket-product-rating">
                                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                                            <span style="width:0%">
                                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                                        </div>
                                                                                        <span class="review-count">(0)</span>
                                                                                    </div>
                                                                                    <!-- .techmarket-product-rating -->
                                                                                </a>
                                                                                <div class="hover-area">
                                                                                    <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                                    <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                                </div>
                                                                                <!-- .hover-area -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <!-- .products -->
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div role="tabpanel" class="tab-pane" id="qled-tvs">
                                                <div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 7; $i++)
                                                                    <div class="landscape-product-card product">
                                                                        <div class="media">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                                <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                                    <span class="price">
                                                                                        <ins>
                                                                                            <span class="amount"> $939.99</span>
                                                                                        </ins>
                                                                                        <del>
                                                                                            <span class="amount">$627.99</span>
                                                                                        </del>
                                                                                    </span>
                                                                                    <!-- .price -->
                                                                                    <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                                    <div class="ribbon green-label">
                                                                                        <span>A++</span>
                                                                                    </div>
                                                                                    <div class="techmarket-product-rating">
                                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                                            <span style="width:0%">
                                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                                        </div>
                                                                                        <span class="review-count">(0)</span>
                                                                                    </div>
                                                                                    <!-- .techmarket-product-rating -->
                                                                                </a>
                                                                                <div class="hover-area">
                                                                                    <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                                    <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                                </div>
                                                                                <!-- .hover-area -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <!-- .products -->
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div role="tabpanel" class="tab-pane" id="suhd-tvs">
                                                <div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    <div class="landscape-product-card product">
                                                                        <div class="media">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                                <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                                    <span class="price">
                                                                                        <ins>
                                                                                            <span class="amount"> $939.99</span>
                                                                                        </ins>
                                                                                        <del>
                                                                                            <span class="amount">$627.99</span>
                                                                                        </del>
                                                                                    </span>
                                                                                    <!-- .price -->
                                                                                    <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                                    <div class="ribbon green-label">
                                                                                        <span>A</span>
                                                                                    </div>
                                                                                    <div class="techmarket-product-rating">
                                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                                            <span style="width:0%">
                                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                                        </div>
                                                                                        <span class="review-count">(0)</span>
                                                                                    </div>
                                                                                    <!-- .techmarket-product-rating -->
                                                                                </a>
                                                                                <div class="hover-area">
                                                                                    <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                                    <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                                </div>
                                                                                <!-- .hover-area -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <!-- .products -->
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                        </div>
                                        <!-- .tab-content -->
                                    </div>
                                    <!-- .section-products-carousel-tabs-wrap -->
                                </section>
                                <!-- .section-hot-new-arrivals -->
                                <div class="home-v3-banner-with-products-carousel row">
                                    <div class="banner column-1">
                                        <a href="#">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/home-v3-banner.jpg ); height: 321px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">Edsssentials
                                                            <br> of
                                                            <strong>Wearable
                                                                <br> Gadgets</strong>
                                                        </h3>
                                                    </div>
                                                    <span class="banner-action button">View All</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                    <section class="section-products-carousel column-2">
                                        <div class="products-carousel carousel-without-attributes" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-7">
                                                    <div class="products">
                                                        @for ($i = 0; $i < 7; $i++)
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <!-- .woocommerce -->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </section>
                                    <!-- .section-products-carousel -->
                                </div>
                                <!-- .home-v3-banner-with-products-carousel -->
                                <div class="banner full-width-banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/full-width.png ); height: 236px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>Extremely Portable</strong>, learn
                                                        <br> to ride in just 3 minutes</h3>
                                                    <h4 class="subtitle">Travel up to 22km in a single charge</h4>
                                                </div>
                                                <span class="banner-action button">Browse now
                                                    <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                                </span>
                                            </div>
                                            <!-- /.caption -->
                                        </div>
                                        <!-- /.banner-b -->
                                    </a>
                                    <!-- /.section-header -->
                                </div>
                                <!-- /.banner -->
                                <section class="categorie_carousel_2 section-categories-carousel" id="categories-carousel-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Computers & Laptops Categories</h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    {{-- Product Category Slider --}}
                                    <!-- .section-header -->
                                    <div class="product-categories-carousel product-categories-3" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-3 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="woocommerce columns-6">
                                            <div class="products">
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-1.png">
                                                        <h2 class="woocommerce-loop-category__title">All in One PC </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-2.png">
                                                        <h2 class="woocommerce-loop-category__title">Audio &amp; Music </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-3.png">
                                                        <h2 class="woocommerce-loop-category__title">Cells &amp; Tablets </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-4.png">
                                                        <h2 class="woocommerce-loop-category__title">Computers &amp; Laptops </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-5.png">
                                                        <h2 class="woocommerce-loop-category__title">Desktop PCs </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-6.png">
                                                        <h2 class="woocommerce-loop-category__title">Digital Cameras </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-7.png">
                                                        <h2 class="woocommerce-loop-category__title">Games &amp; Consoles </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-5.png">
                                                        <h2 class="woocommerce-loop-category__title">Headphones </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-1.png">
                                                        <h2 class="woocommerce-loop-category__title">Home Entertainment </h2>
                                                    </a>
                                                </div>
                                                <div class="product-category product">
                                                    <a href="product-category.html">
                                                        <img width="224" height="197" alt="" src="assets/images/category/sm-3.png">
                                                        <h2 class="woocommerce-loop-category__title">Home Theater &amp; Audio </h2>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- .products-->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    {{-- Product Category Slider --}}
                                </section>
                                <!-- .section-top-categories -->
                                <section class="section-products-carousel-tabs techmarket-tabs">
                                    <div class="section-products-carousel-tabs-wrap">
                                        <header class="section-header">
                                            <h2 class="section-title">Digital Cameras For You</h2>
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0a4075b0" data-toggle="tab">Best Choice</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0a4075b1" data-toggle="tab">Action Cameras</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0a4075b2" data-toggle="tab">Compacts</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0a4075b3" data-toggle="tab">DSLR Cameras</a></li>
                                            </ul>
                                        </header>
                                        <!-- .section-header -->
                                        <div class="tab-content">
                                            <div id="tab-59f89f0a4075b0" class="tab-pane active" role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 12; $i++)
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f0a4075b1" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 12; $i++)
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f0a4075b2" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 12; $i++)
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f0a4075b3" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                @for ($i = 0; $i < 12; $i++)
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                        </div>
                                        <!-- .tab-content -->
                                    </div>
                                    <!-- .section-products-carousel-tabs-wrap -->
                                </section>
                                <!-- .section-products-carousel-tabs -->
                                <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                                    <header class="section-header">
                                        <h2 class="section-title">Recently viewed products</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-5">
                                                <div class="products">
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="assets/images/products/card-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-carousel -->
                                <section class="brands-carousel">
                                    <h2 class="sr-only">Brands Carousel</h2>
                                    <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="brands">
                                            @for ($i = 0; $i < 7; $i++)
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>apple</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <!-- .col-full -->
                                </section>
                                <!-- .brands-carousel -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            
@endsection