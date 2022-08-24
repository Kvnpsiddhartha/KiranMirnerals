<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Kiran Minerals</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('../ms-icon-144x144.html')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
</head>

<body class="_active-preloader-ovh">

    <div class="preloader">
        <x-spinner />
    </div> <!-- /.preloader -->

    <div class="error-404">
        <a href="{{url('/')}}" class="logo"><img src="{{asset('img/logo1-1.png')}}" alt="Awesome Image" /></a>
        <div class="box">
            <div class="content">
                <h3>404</h3>
                <p>Page is not found!</p>
            </div><!-- /.content -->
        </div><!-- /.box -->
        <div class="copy-text">
            <div class="inner">&copy; Copyright Industrio 2018. All right reserved.</div><!-- /.inner -->
        </div><!-- /.copy-text -->
    </div><!-- /.error-404 -->


    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/isotope.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/jquery.appear.js')}}"></script>
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <!-- google map helper -->
    <script src="{{ asset('js/gmaps.js')}}"></script>
    <script src="{{ asset('js/map-helper.js')}}"></script>

</body>

</html>