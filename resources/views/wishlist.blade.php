
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
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/blue.css')}}" media="all" />


		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
		<link rel="shortcut icon" href="assets/images/fav-icon.png">

	</head>

	<body class="page-template-default page woocommerce-wishlist can-uppercase">
		<div id="page" class="hfeed site">
			@include('inc.header.header-v1')

			@include("pages.wishlist")

			@include('inc.footer.footer-v1')

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
