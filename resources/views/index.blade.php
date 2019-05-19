<?php
	// Define the root folder and base URL for the application
	function baseURL(){
		return sprintf(
			"%s://%s%s",
			isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			$_SERVER['SERVER_NAME'],
			dirname($_SERVER['REQUEST_URI'])
		);
	}

	define('BASE_URL', baseURL());
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$color = 'blue';
	$bodyClass = 'page home page-template-default';

	switch( $page ) {

		case 'home-v1':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v1 can-uppercase';
		break;

		case 'blog-v1':
			$bodyClass = 'right-sidebar';
		break;

		case 'blog-v2':
			$bodyClass = 'right-sidebar blog-grid';
		break;

		case 'blog-v3':
			$bodyClass = 'right-sidebar blog-list';
		break;

		case 'blog-fullwidth':
			$bodyClass = 'full-width';
		break;

		case 'blog-single':
			$bodyClass = 'right-sidebar single single-post';
		break;

		case 'single-product-sidebar':
			$bodyClass = 'woocommerce-active  single-product left-sidebar normal';
		break;

		case 'single-product-fullwidth':
			$bodyClass = 'woocommerce-active single-product full-width normal';
		break;

		case 'single-product-extended':
			$bodyClass = 'woocommerce-active single-product full-width extended';
		break;
		case 'shop-right-sidebar':
			$bodyClass = 'woocommerce-active right-sidebar';
		break;

		case 'shop-fullwidth':
			$bodyClass = 'woocommerce-active full-width';
		break;

		case 'shop-listing-with-product-sidebar':
			$bodyClass = 'woocommerce-active two-sidebar';
		break;

		case 'shop-listing':
		case 'shop-listing-large':
		case 'product-category':
		case 'shop':
		case 'shop-extended':
			$bodyClass = 'woocommerce-active left-sidebar';
		break;

		case 'home-v10':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v10';
		break;

		case 'home-v8':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v8';
		break;

		case 'home-v6':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v6';
		break;

		case 'home-v5':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v5 can-uppercase';
		break;

		case 'home-v4':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v4 can-uppercase';
		break;

		case 'home-v3':
			$bodyClass = 'page-template-template-homepage-v3';
		break;

		case 'home-v2':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v2 can-uppercase';
		break;

		case 'wishlist':
			$bodyClass = 'page-template-default page woocommerce-wishlist can-uppercase';
		break;

		case 'landing-page-v1':
			$bodyClass = 'woocommerce-active page-template-template-landingpage-v1 can-uppercase';
		break;

		case 'landing-page-v2':
			$bodyClass = 'woocommerce-active page-template-template-landingpage-v2 can-uppercase';
		break;

		case 'checkout':
			$bodyClass = 'woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase';
		break;

		case '404':
			$bodyClass = 'page-template-default error-page';
		break;

		case 'home-v11':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v11';
		break;

		case 'home-v12':
			$bodyClass = 'woocommerce-active page-template-template-homepage-v12';
		break;

		case 'home-v13':
			$bodyClass = 'organic-market page-template-template-homepage-v1 woocommerce-active';
		break;

		case 'home-v14':
			$bodyClass = 'garden-market page-template-template-homepage-v6 woocommerce-active';
		break;

		case 'order-received':
			$bodyClass = 'page-template-default woocommerce-checkout woocommerce-page woocommerce-order-received can-uppercase woocommerce-active';
		break;


	}
?>
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
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.')}}css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/techmarket-font-awesome.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-style.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/'.$color.'.css')}}" media="all" />


		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
		<link rel="shortcut icon" href="assets/images/fav-icon.png">

	</head>

	<body class="<?php echo $bodyClass;?>">
		<div id="page" class="hfeed site">

			@include('inc.header.header-v1');

			@include('/pages/'.$page.''); 

			@include('/inc/footer/footer'); 

		</div>

		

		<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/tether.min.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="/assets/js/hidemaxlistitem.min.js"></script>

		<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/assets/js/hidemaxlistitem.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="/assets/js/scrollup.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
		<script type="text/javascript" src="/assets/js/pace.min.js"></script>
		<script type="text/javascript" src="/assets/js/slick.min.js"></script>
		<script type="text/javascript" src="/assets/js/scripts.js"></script>
		
	</body>
</html>
