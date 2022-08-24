<x-layout>
    @include('inc/topbar')
    <x-navbar type="three" />



    <div class="inner-banner">
        <div class="container">
            <h3>Products</h3>
            <x-breadcumb>Products</x-breadcumb>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->

    <section class="service-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <x-sidebar />
                        <!--<div class="single-sidebar broucher-sidebar">
                            <div class="title">
                                <h3>Brochures</h3>
                            </div>-->
                        <!-- /.title -->
                        <!--<p>View our 2018 financial prospectus brochure for an easy to read guide on all of the services offer.</p>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-emails-interface-download-symbol"></i> Download Brochure</a>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-pdf"></i> Characteristics</a>
                        </div>-->
                        <!-- /.single-sidebar service-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 col-sm-12 col-xs-12 -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="service-item-box">
                        <div class="row masonary-layout">
                            @foreach ($services as $service)
                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <x-service-caraousel-item :service="$service" />




                            </div><!-- /.col-md-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.service-item-box -->
                </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->

    <section class="contact-info-style-two">
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="left-content">
                    <div class="inner">
                        <h3>We provide full range of Premium Industrial Services for your business</h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                        <h4>Get Connected With Us:</h4>
                        <div class="social">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div><!-- /.social -->
                    </div><!-- /.inner -->
                </div><!-- /.left-content -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="right-video-box">
                    <a href="http://www.youtube.com/watch?v=FxAG_11PzCk" class="video-popup"><i class="industrio-icon-play-button"></i> Play Video</a>
                </div><!-- /.right-video-box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.container-fluid -->
    </section><!-- /.video-box-style-one -->

</x-layout>