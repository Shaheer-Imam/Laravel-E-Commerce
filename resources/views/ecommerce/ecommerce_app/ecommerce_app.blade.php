<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Techmarket HTML</title>
        @yield('stylesheets')
        
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav-icon.png">
    </head>
    <body class="page-template-template-homepage-v3">
        <div id="page" class="hfeed site">
            <div class="top-bar top-bar-v2">
                <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket eCommerce &#8211; Always free delivery</a>
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
                    <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
                        <li class="hidden-sm-down menu-item animate-dropdown">
                            <a title="Track Your Order" href="track-your-order.html">
                                <i class="tm tm-order-tracking"></i>Track Your Order</a>
                        </li>
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="tm tm-dollar"></i>Dollar (US)
                                <span class="caret"></span>
                            </a>
                            <ul role="menu" class="dropdown-menu">
                                <li class="menu-item animate-dropdown">
                                    <a title="AUD" href="#">AUD</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="INR" href="#">INR</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="AED" href="#">AED</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="SGD" href="#">SGD</a>
                                </li>
                            </ul>
                            <!-- .dropdown-menu -->
                        </li>
                        <li class="menu-item">
                            <a title="My Account" href="login-and-register.html">
                                <i class="tm tm-login-register"></i>Register or Sign in</a>
                        </li>
                    </ul>
                    <!-- .nav -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- .top-bar-v2 -->
            @include('ecommerce.ecommerce_include.header')
            <!-- .header-v2 -->
            <!-- ============================================================= Header End ============================================================= -->
            @yield('content')
            <!-- #content -->
            
            @include('ecommerce.ecommerce_include.footer')    
        </div>
        
        @yield('scripts')
    </body>
</html>