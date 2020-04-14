<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- homev206:52-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<base href="{{asset('')}}">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />

	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="source/css/plugins.css">
	<link rel="stylesheet" href="source/css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="source/images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->

<!--end of login form popup-->
<!--signup form popup-->

<!--end of signup form popup-->

<!-- BEGIN | Header -->
@if(Route::currentRouteName() == 'index' || Route::currentRouteName() == 'index_light')
@include('header')
<!-- END | Header -->
@else
@include('header_small')
@endif

@yield('content')
<!--end of latest new v2 section-->
<!-- footer v2 section-->
@include('footer')
<!-- end of footer v2 section-->

<script src="source/js/jquery.js"></script>
<script src="source/js/plugins.js"></script>
<script src="source/js/plugins2.js"></script>
<script src="source/js/custom.js"></script>
</body>

<!-- homev207:28-->
</html>