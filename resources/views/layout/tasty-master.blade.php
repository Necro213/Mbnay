<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

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

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/tasty-master/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/tasty-master/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/tasty-master/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/tasty-master/flexslider.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/tasty-master/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/tasty-master/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]-->
    <script src="{{asset('js/tasty-master/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
@include('partials.tasty-master.header')

    @yield('content')




    <div id="fh5co-blog" class="fh5co-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Events</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url(/img/tasty-master/gallery_1.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Photoshoot On The Street</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url(/img/tasty-master/gallery_2.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Surfing at Philippines</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url(/img/tasty-master/gallery_3.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Focus On Uderwater</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(/img/tasty-master/hero_1.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Book a Table</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
                    <p><a href="reservation.html" class="btn btn-primary btn-outline">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

@include('partials.tasty-master.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/tasty-master/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/tasty-master/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/tasty-master/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/tasty-master/jquery.waypoints.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/tasty-master/jquery.stellar.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/tasty-master/jquery.flexslider-min.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/tasty-master/main.js')}}"></script>

</body>
</html>

