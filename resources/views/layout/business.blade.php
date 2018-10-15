<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <title>Montes Buenos y asociados</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/business/bootstrap.css')}}" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="{{asset('/css/business/camera/css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('css/business/search.css')}}">
    <link rel="stylesheet" href="{{asset('css/business/google-map.css')}}">


    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/business/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/business/rd-smoothscroll.min.js')}}"></script>

    <script src="{{asset('js/business/html5shiv.js')}}"></script>
    <!--[endif]-->
    <script src='{{asset('js/business/device.min.js')}}'></script>
</head>
<body>

    <!--========================================================
                              HEADER
    =========================================================-->
@include('partials.business.header')

    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>

    @yield('content')







    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
 @include('partials.business.footer')



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/business/bootstrap.min.js')}}"></script>
<script src="{{asset('js/business/tm-scripts.js')}}"></script>
<!-- </script> -->


</body>
</html>
