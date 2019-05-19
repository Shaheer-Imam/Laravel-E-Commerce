<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Techmarket HTML</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-reboot.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-techmarket.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/techmarket-font-awesome.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/blue.css')}}" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images/fav-icon.png')}}">
</head>

<body class="woocommerce-active single-product full-width normal">
    <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v1">
            <div class="col-full">
                <ul id="menu-top-bar-left" class="nav justify-content-center">
                    <li class="menu-item animate-dropdown">
                        <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket
                            eCommerce &#8211; Always free delivery</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Quality Guarantee of products" href="shop.html">Quality Guarantee of products</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Fast returnings program" href="track-your-order.html">Fast returnings program</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="No additional fees" href="contact-v2.html">No additional fees</a>
                    </li>
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .top-bar-v1 -->
        @include('ecommerce.ecommerce_include.header')
        <!-- .header-v1 -->
        <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="home-v1.html">Home</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span><a href="product-category.html">TV & Video</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>
                        {{$product->product_name}}
                    </nav>
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has($msg))
                    <div id="form-messages" class="alert alert-{{$msg}} col-md-12" role="alert">
                        {{ Session::get($msg) }}
                    </div>
                    @endif
                    @endforeach

                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="product product-type-simple">
                                <div class="single-product-wrapper">
                                    <div class="product-images-wrapper thumb-count-4">
                                        @if (!empty($product->product_discounted_price))
                                        <span class="onsale">-
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_discounted_price}}</span>
                                        </span>
                                        @endif
                                        <!-- .onsale -->
                                        <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images"
                                            data-columns="4">
                                            <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel"
                                                data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                    data-columns="4">
                                                    <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                    <figure class="woocommerce-product-gallery__wrapper ">
                                                        @if (count($productImage) > 0)
                                                        @foreach ($productImage as $item)
                                                        <div data-thumb="{{$item->product_image_url}}" class="woocommerce-product-gallery__image">
                                                            <a href="{{$item->product_image_url}}" tabindex="0">
                                                                <img width="600" height="600" src="{{$item->product_image_url}}"
                                                                    class="attachment-shop_single size-shop_single wp-post-image"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <div data-thumb="/no-image-icon-33.png" class="woocommerce-product-gallery__image">
                                                            <a href="/no-image-icon-33.png" tabindex="0">
                                                                <img width="600" height="600" src="/no-image-icon-33.png"
                                                                    class="attachment-shop_single size-shop_single wp-post-image"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        @endif
                                                    </figure>
                                                </div>
                                                <!-- .woocommerce-product-gallery -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery-images -->
                                            <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel"
                                                data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">

                                                <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                    @if (count($productImage) > 0)
                                                    @foreach ($productImage as $item)
                                                    <figure data-thumb="{{$item->product_image_url}}" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{$item->product_image_url}}"
                                                            class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                    </figure>
                                                    @endforeach
                                                    @else
                                                    <figure data-thumb="/no-image-icon-33.png" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="/no-image-icon-33.png" class="attachment-shop_thumbnail size-shop_thumbnail"
                                                            alt="">
                                                    </figure>
                                                    @endif
                                                </figure>
                                                <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery-thumbnails -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery -->
                                    </div>
                                    <!-- .product-images-wrapper -->
                                    <div class="summary entry-summary">
                                        <div class="single-product-header">
                                            <h1 class="product_title entry-title">{{$product->product_name}}</h1>
                                            <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                        </div>
                                        <!-- .single-product-header -->
                                        <div class="single-product-meta">
                                            <div class="brand">
                                                <a href="#">
                                                    <img alt="galaxy" src="{{asset('images/brands/brand13.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="cat-and-sku">
                                                <span class="posted_in categories">
                                                    <a rel="tag" href="product-category.html">TV &amp; Video</a>
                                                </span>
                                                <span class="sku_wrapper">SKU:
                                                    <span class="sku">5487FB8/11</span>
                                                </span>
                                            </div>
                                            <div class="product-label">
                                                <div class="ribbon label green-label">
                                                    <span>A+</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .single-product-meta -->
                                        <div class="rating-and-sharing-wrapper">
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating">
                                                    <span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on
                                                        <span class="rating">1</span> customer rating</span>
                                                </div>
                                                <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                                        class="count">1</span> customer review)</a>
                                            </div>
                                        </div>
                                        <!-- .rating-and-sharing-wrapper -->
                                        <div class="woocommerce-product-details__short-description">
                                            {!!$product->product_description !!}
                                            {{-- <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                                <li>Refresh Rate: 120Hz (Effective)</li>
                                                <li>Backlight: LED</li>
                                                <li>Smart Functionality: Yes, webOS 3.0</li>
                                                <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV
                                                    with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1
                                                    RS232C, 1 Ethernet</li>
                                            </ul> --}}
                                        </div>
                                        <!-- .woocommerce-product-details__short-description -->
                                        <div class="product-actions-wrapper">
                                            <div class="product-actions">
                                                <p class="price">
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price}}</span>
                                                    </del>
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price - $product->product_discounted_price}}</span>
                                                    </ins>
                                                </p>
                                                <!-- .single-product-header -->
                                                <form method="post" action="{{route('cart.submit')}}" class="cart">
                                                    {{ csrf_field() }}
                                                    <div class="quantity">
                                                        <label for="quantity-input">Quantity</label>
                                                        <input type="number" size="4" class="input-text qty text" title="Qty"
                                                            value="1" name="product_quantity" id="product_quantity">
                                                    </div>
                                                        <input type="hidden" name="product_id" id="product_id" value="{{$product->product_id}}">
                                                        <input type="hidden" name="product_name" id="product_name" value="{{$product->product_name}}">
                                                        <input type="hidden" name="product_price" id="product_price" value="{{$product->product_price-$product->product_discounted_price}}">
                                                    <!-- .quantity -->
                                                    <button type="submit" class="single_add_to_cart_button button alt" >Add to cart</button>
                                                </form>
                                                <!-- .cart -->
                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .product-actions-wrapper -->
                                    </div>
                                    <!-- .entry-summary -->
                                </div>
                                <!-- .single-product-wrapper -->
                                <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel"
                                    data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <section class="related">
                                        <header class="section-header">
                                            <h2 class="section-title">Related products</h2>
                                            <nav class="custom-slick-nav"></nav>
                                        </header>
                                        <!-- .section-header -->
                                        <div class="products">
                                            @foreach ($RelatedProducts as $item)                                                
                                            <div class="product">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add
                                                        to Wishlist</a>
                                                </div>
                                                <a href="{{route('showproducts',$item->product_id)}}" class="woocommerce-LoopProduct-link">
                                                    <img src="{{$item->product_image_url OR '/no-image-icon-33.png'}}" width="224"
                                                        height="197" class="wp-post-image" alt="">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> ${{$item->product_price}}</span>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title">{{$item->product_name}}</h2>
                                                </a>
                                                <div class="hover-area">
                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add
                                                        to cart</a>
                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                </div>
                                                
                                            </div>
                                            @endforeach

                                </div>
                                </section>
                                <!-- .single-product-wrapper -->
                            </div>
                            <!-- .tm-related-products-carousel -->
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul role="tablist" class="nav tabs wc-tabs">
                                    <li class="nav-item accessories_tab">
                                        <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-accessories"
                                            href="#tab-accessories">Accessories</a>
                                    </li>
                                    @if (!empty($ProductDescription))
                                    <li class="nav-item description_tab">
                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description"
                                            href="#tab-description">Description</a>
                                    </li>
                                    @endif
                                    <li class="nav-item specification_tab">
                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification"
                                            href="#tab-specification">Specification</a>
                                    </li>
                                    <li class="nav-item reviews_tab">
                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews"
                                            href="#tab-reviews">Reviews (1)</a>
                                    </li>
                                </ul>
                                <!-- /.ec-tabs -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-accessories" role="tabpanel">
                                        <div class="accessories">
                                            <div class="accessories-wrapper">
                                                <div class="accessories-product columns-4">
                                                    <div class="products">
                                                        <div class="product">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                                href="single-product-fullwidth.html">
                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    src="{{asset('assets/images/products/8.jpg')}}">
                                                                <span class="price">
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price
                                                                            + $product->product_discounted_price}}</span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price}}</span>
                                                                    </ins>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">{{$product->product_name}}</h2>
                                                            </a>
                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input type="checkbox" data-product-type="simple"
                                                                        data-product-id="185" data-price="997.00" class="product-check"
                                                                        checked=""> Remove
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                                href="single-product-fullwidth.html">
                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    src="{{asset('assets/images/products/16.jpg')}}">
                                                                <span class="price">
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price
                                                                            + $product->product_discounted_price}}</span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price}}</span>
                                                                    </ins>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">{{$product->product_name}}</h2>
                                                            </a>
                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input type="checkbox" data-product-type="simple"
                                                                        data-product-id="185" data-price="997.00" class="product-check"
                                                                        checked=""> Remove
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                                href="single-product-fullwidth.html">
                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    src="{{asset('assets/images/products/14.jpg')}}">
                                                                <span class="price">
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>997.00</span>
                                                                    </ins>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">60UH6150
                                                                    60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            </a>
                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input type="checkbox" data-product-type="simple"
                                                                        data-product-id="185" data-price="997.00" class="product-check"
                                                                        checked=""> Remove
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                                href="single-product-fullwidth.html">
                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    src="{{asset('assets/images/products/4.jpg')}}">
                                                                <span class="price">
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>997.00</span>
                                                                    </ins>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">60UH6150
                                                                    60-Inch 4K Ultra HD Smart LED TV</h2>
                                                            </a>
                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input type="checkbox" data-product-type="simple"
                                                                        data-product-id="185" data-price="997.00" class="product-check"
                                                                        checked=""> Remove
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- .row -->
                                                <div class="accessories-product-total-price">
                                                    <div class="total-price">
                                                        <span class="total-price-html price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>1,666.94
                                                            </span>
                                                        </span>
                                                        <!-- .total-price-html -->
                                                        <span>Bundle Price for Selected items</span>
                                                    </div>
                                                    <!-- .total-price -->
                                                    <div class="accessories-add-all-to-cart">
                                                        <button class="button btn btn-primary add-all-to-cart" type="button">Add
                                                            Bundle to cart</button>
                                                    </div>
                                                    <!-- .accessories-add-all-to-cart -->
                                                </div>
                                                <!-- .accessories-product-total-price -->
                                            </div>
                                            <!-- .accessories-wrapper -->
                                        </div>
                                        <!-- .accessories -->
                                    </div>
                                    <div class="tab-pane panel wc-tab" id="tab-description" role="tabpanel">
                                        @if(!empty($ProductDescription->product_description))
                                        {!! $ProductDescription->product_description !!}
                                        @endif
                                        {{--  <h2>Description</h2>
                                        <h1 style="text-align: center;">Exceptional color. Authentic images.</h1>
                                        <p style="text-align: center;max-width: 1160px;margin: auto auto 60px;">Nullam
                                            dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur
                                            magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada
                                            tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit.
                                            Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                        <div style="text-align: center;">
                                            <iframe width="854" height="480" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/K5OGs8a3vlM?ecver=1"></iframe>
                                        </div>
                                        <div class="outer-wrap">
                                            <div class="content-info">
                                                <h1 style="text-align: left;">Dynamic brightness
                                                    <br> reveals hidden details</h1>
                                                <p style="text-align: left;">Nullam dignissim elit ut urna rutrum, a
                                                    fermentum mi auctor. Mauris efficitur magna orci, et dignissim
                                                    lacus
                                                    <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac
                                                    commodo. Vivamus eleifend porttitor ex sit amet suscipit.
                                                    <br> Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam
                                                    erat volutpat.</p>
                                            </div>
                                            <!-- .content-info -->
                                            <div class="image-info">
                                                <img src="{{asset('assets/images/products/des1.png')}}" alt="">
                                            </div>
                                            <!-- .image-info -->
                                        </div>
                                        <!-- .outer-wrap -->
                                        <div class="outer-wrap">
                                            <div class="image-info">
                                                <img src="{{asset('assets/images/products/des2.png')}}" class="alignnone"
                                                    alt="">
                                            </div>
                                            <!-- .image-info -->
                                            <div class="content-info">
                                                <h1 style="text-align: right;">An incredible view,
                                                    <br> wherever you sit</h1>
                                                <p style="text-align: right;">Nullam dignissim elit ut urna rutrum, a
                                                    fermentum mi auctor. Mauris efficitur magna orci, et dignissim
                                                    lacus
                                                    <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac
                                                    commodo. Vivamus eleifend porttitor ex sit amet suscipit.
                                                    Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat
                                                    volutpat.</p>
                                            </div>
                                            <!-- .content-info -->
                                        </div>
                                        <!-- .outer-wrap -->  --}}
                                    </div>
                                    <div class="tab-pane" id="tab-specification" role="tabpanel">
                                        <div class="tm-shop-attributes-detail like-column columns-3">
                                            <h3 class="tm-attributes-title">General</h3>
                                            <table class="shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>Brand</th>
                                                        <td>
                                                            <p><a href="#" rel="tag">Galaxy</a></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Label</th>
                                                        <td>
                                                            <p><a href="#" rel="tag">A+</a></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- /.shop_attributes -->
                                            <h3 class="tm-attributes-title">Technical Specs</h3>
                                            <table class="shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>Screen Size</th>
                                                        <td>40″</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Aspect Ratio</th>
                                                        <td>16:9</td>
                                                    </tr>
                                                    <tr>
                                                        <th>3DTV</th>
                                                        <td>No</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Recommended Resolution</th>
                                                        <td>1080p</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Panel</th>
                                                        <td>LED</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tuner</th>
                                                        <td>ATSC/Clear QAM Tuners</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Refresh Rate</th>
                                                        <td>120Hz</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Refresh Rate</th>
                                                        <td>120Hz</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- /.shop_attributes -->
                                            <h3 class="tm-attributes-title">Connectivity</h3>
                                            <table class="shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>HDMI</th>
                                                        <td>2 In</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Digital Audio</th>
                                                        <td>1 Optical Out</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Other Connectors</th>
                                                        <td>1 x RF In</td>
                                                        <td>1 x Audio Out (Mini Jack)</td>
                                                        <td>1 x RS232C</td>
                                                    </tr>
                                                    <tr>
                                                        <th>LAN</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Composite A/V</th>
                                                        <td>1 In</td>
                                                    </tr>
                                                    <tr>
                                                        <th>USB</th>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Component Video</th>
                                                        <td>1 in
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- /.shop_attributes -->
                                        </div>
                                        <!-- /.tm-shop-attributes-detail -->
                                    </div>
                                    <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                        <div class="techmarket-advanced-reviews" id="reviews">
                                            <div class="advanced-review row">
                                                <div class="advanced-review-rating">
                                                    <h2 class="based-title">Review (1)</h2>
                                                    <div class="avg-rating">
                                                        <span class="avg-rating-number">5.0</span>
                                                        <div title="Rated 5.0 out of 5" class="star-rating">
                                                            <span style="width:100%"></span>
                                                        </div>
                                                    </div>
                                                    <!-- /.avg-rating -->
                                                    <div class="rating-histogram">
                                                        <div class="rating-bar">
                                                            <div title="Rated 5 out of 5" class="star-rating">
                                                                <span style="width:100%"></span>
                                                            </div>
                                                            <div class="rating-count">1</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:100%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 4 out of 5" class="star-rating">
                                                                <span style="width:80%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 3 out of 5" class="star-rating">
                                                                <span style="width:60%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 2 out of 5" class="star-rating">
                                                                <span style="width:40%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 1 out of 5" class="star-rating">
                                                                <span style="width:20%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.rating-histogram -->
                                                </div>
                                                <!-- /.advanced-review-rating -->
                                                <div class="advanced-review-comment">
                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div class="comment-respond" id="respond">
                                                                <h3 class="comment-reply-title" id="reply-title">Add a
                                                                    review</h3>
                                                                <form novalidate="" class="comment-form" id="commentform"
                                                                    method="post" action="#">
                                                                    <div class="comment-form-rating">
                                                                        <label>Your Rating</label>
                                                                        <p class="stars">
                                                                            <span><a href="#" class="star-1">1</a><a
                                                                                    href="#" class="star-2">2</a><a
                                                                                    href="#" class="star-3">3</a><a
                                                                                    href="#" class="star-4">4</a><a
                                                                                    href="#" class="star-5">5</a></span>
                                                                        </p>
                                                                    </div>
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea aria-required="true" rows="8" cols="45"
                                                                            name="comment" id="comment"></textarea>
                                                                    </p>
                                                                    <p class="comment-form-author">
                                                                        <label for="author">Name
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true" size="30"
                                                                            value="" name="author" id="author">
                                                                    </p>
                                                                    <p class="comment-form-email">
                                                                        <label for="email">Email
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true" size="30"
                                                                            value="" name="email" id="email">
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input type="submit" value="Add Review" class="submit"
                                                                            id="submit" name="submit">
                                                                        <input type="hidden" id="comment_post_ID" value="185"
                                                                            name="comment_post_ID">
                                                                        <input type="hidden" value="0" id="comment_parent"
                                                                            name="comment_parent">
                                                                    </p>
                                                                </form>
                                                                <!-- /.comment-form -->
                                                            </div>
                                                            <!-- /.comment-respond -->
                                                        </div>
                                                        <!-- /#review_form -->
                                                    </div>
                                                    <!-- /#review_form_wrapper -->
                                                </div>
                                                <!-- /.advanced-review-comment -->
                                            </div>
                                            <!-- /.advanced-review -->
                                            <div id="comments">
                                                <ol class="commentlist">
                                                    <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                        <div class="comment_container" id="comment-83">
                                                            <div class="comment-text">
                                                                <div class="star-rating">
                                                                    <span style="width:100%">Rated
                                                                        <strong class="rating">5</strong> out of 5</span>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong itemprop="author" class="woocommerce-review__author">first
                                                                        last</strong>
                                                                    <span class="woocommerce-review__dash">&ndash;</span>
                                                                    <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished"
                                                                        class="woocommerce-review__published-date">June
                                                                        21, 2017</time>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Wow great product</p>
                                                                </div>
                                                                <!-- /.description -->
                                                            </div>
                                                            <!-- /.comment-text -->
                                                        </div>
                                                        <!-- /.comment_container -->
                                                    </li>
                                                    <!-- /.comment -->
                                                </ol>
                                                <!-- /.commentlist -->
                                            </div>
                                            <!-- /#comments -->
                                        </div>
                                        <!-- /.techmarket-advanced-reviews -->
                                    </div>
                                </div>
                            </div>
                            <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                                <header class="section-header">
                                    <h2 class="section-title">Recently viewed products</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products"
                                    data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-6.jpg')}}"
                                                                alt="">
                                                            <div class="media-body">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> $600</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">ZenBook 3
                                                                    Ultrabook 8GB 512SSD W10</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-3.jpg')}}"
                                                                alt="">
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
                                                                <h2 class="woocommerce-loop-product__title">PowerBank
                                                                    4400</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-4.jpg')}}"
                                                                alt="">
                                                            <div class="media-body">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> $800</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">Snap White
                                                                    Instant Digital Camera in White</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-5.jpg')}}"
                                                                alt="">
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
                                                                <h2 class="woocommerce-loop-product__title">Smart
                                                                    Watches 3 SWR50</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-3.jpg')}}"
                                                                alt="">
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
                                                                <h2 class="woocommerce-loop-product__title">PowerBank
                                                                    4400</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-2.jpg')}}"
                                                                alt="">
                                                            <div class="media-body">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> $500</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">Headset 3D
                                                                    Glasses VR for Android</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-4.jpg')}}"
                                                                alt="">
                                                            <div class="media-body">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> $800</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">Snap White
                                                                    Instant Digital Camera in White</h2>
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
                                                <!-- .landscape-product -->
                                                <div class="landscape-product product">
                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                        <div class="media">
                                                            <img class="wp-post-image" src="{{asset('assets/images/products/card-1.jpg')}}"
                                                                alt="">
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
                                                                <h2 class="woocommerce-loop-product__title">Unlocked
                                                                    Android 6″ Inch 4.4.2 Dual Core</h2>
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
                                                <!-- .landscape-product -->
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
                                        <!-- .item -->
                                        @for ($i = 13; $i <= 20; $i++) <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>bosch</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="bosch"
                                                        src="{{asset('/images/brands/brand'.$i.'.jpg')}}">
                                                </figure>
                                            </a>
                                    </div>
                                    @endfor
                                    <!-- .item -->
                                </div>
                    </div>
                    <!-- .col-full -->
                    </section>
                    <!-- .brands-carousel -->
                </div>
                <!-- .product -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
    </div>
    <!-- #content -->
    @include('ecommerce.ecommerce_include.footer')

    </div>

    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/scrollup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>

</body>

</html>