<!DOCTYPE HTML>
<!--
	Justice by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Justice &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/justice/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/justice/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('css/justice/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/justice/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/justice/magnific-popup.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('css/justice/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/justice/owl.theme.default.min.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('css/justice/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/justice/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/justice/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]-->
    <script src="{{asset('js/justice/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

@include('partials.justice.header')

<div class="gtco-loader"></div>

<div id="page">


    @yield('content')



    @include('partials.justice.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/justice/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/justice/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/justice/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/justice/jquery.waypoints.min.js')}}"></script>
<!-- Stellar -->
<script src="{{asset('js/justice/jquery.stellar.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/justice/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/justice/magnific-popup-options.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/justice/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>

