<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/coffe-master/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Coffee</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('css/coffe-master/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/coffe-master/main.css')}}">
</head>
<body>

@include('partials.coffe-master.header')


    @yield('content')




<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="{{asset('img/coffe-master/b1.jpg')}}" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#"><h4>Portable latest Fashion for young women</h4></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="{{asset('img/coffe-master/b2.jpg')}}" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#"><h4>Portable latest Fashion for young women</h4></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End blog Area -->


<!-- start footer Area -->
@include('partials.coffe-master.footer')
<!-- End footer Area -->

<script src="{{asset('js/coffe-master/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('js/coffe-master/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('js/coffe-master/easing.min.js')}}"></script>
<script src="{{asset('js/coffe-master/hoverIntent.js')}}"></script>
<script src="{{asset('js/coffe-master/superfish.min.js')}}"></script>
<script src="{{asset('js/coffe-master/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/coffe-master/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/coffe-master/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/coffe-master/jquery.sticky.js')}}"></script>
<script src="{{asset('js/coffe-master/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/coffe-master/parallax.min.js')}}"></script>
<script src="{{asset('js/coffe-master/waypoints.min.js')}}"></script>
<script src="{{asset('js/coffe-master/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/coffe-master/mail-script.js')}}"></script>
<script src="{{asset('js/coffe-master/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>



