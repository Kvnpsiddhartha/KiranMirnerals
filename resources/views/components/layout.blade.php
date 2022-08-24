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

    <x-spinner/>

    <div class="page-wrapper">
{{$slot}}

    <section class="contact-info-style-one">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Get in <span>touch</span></h3>
                        <p>You will find yourself working in a true partnership that results in an incredible experience, and  product that is the best.</p>
                    </div><!-- /.title -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-7">
                    <div class="contact-infos">
                        <div class="single-contact-infos">
                            <div class="icon-box">
                                <i class="industrio-icon-phone-call"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Call us on</h3>
                                <p>+91-9461948418</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-contact-infos -->
                        <div class="single-contact-infos">
                            <div class="icon-box">
                                <i class="industrio-icon-envelope"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Email us</h3>
                                <p>abhineet@kiranminerals.com</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-contact-infos -->
                    </div><!-- /.contact-infos -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.contianer -->
    </section><!-- /.contact-info-style-one -->
    </div><!-- /.page-wrapper -->

    <footer class="site-footer fixed-footer">
        <x-footer/>
    </footer><!-- /.site-footer -->

    <section class="hidden-sidebar side-navigation">
        <x-mob-menu/>
    </section><!-- /.hidden-sidebar -->



    <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
        <div class="search_box_inner">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </div>
    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

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