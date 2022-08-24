<x-layout>

    @include('inc/topbar');

    <x-navbar type="three" />

    <div class="inner-banner">
        <div class="container">
            <h3>Quality Control</h3>
            <x-breadcumb>Quality Control</x-breadcumb>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->

    <section class="service-page1 service-details-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="service-item-box service-details-content">
                        <!--div class="img-box">
                            <img src="img/service-details-1-1.jpg" alt="Awesome Image"/>
                        </div-->
                        <!-- /.img-box -->
                        <!--br /-->
                        <!--br /-->
                        <p>Kiran Minerals is committed to continually improve the effectiveness of the quality management system adopted and implemented throughout the organization by ensuring its customer satisfaction. Kiran Minerals ensures strict quality controls. The company has fully equipped laboratory with the testing facilities of both chemical and physical properties.
                        </p>
                        <p>All our plants are ISO 9001 & ISO 14001 certified and all of our products are checked at each stage through individual laboratories at respective plants. The Controlling is done by a central laboratory.
                        </p>
                        <br />
                        <br />

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-portfolio-style-two">
                                    <a><img src="{{asset('img/quality/1.jpg')}}" alt="Awesome Image" style="width : 100%;" /></a>
                                </div><!-- /.single-portfolio-style-two -->
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-portfolio-style-two">
                                    <a><img src="{{asset('img/quality/2.jpg')}}" alt="Awesome Image" style="width : 100%;" /></a>
                                </div><!-- /.single-portfolio-style-two -->
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-portfolio-style-two">
                                    <a><img src="{{asset('img/quality/3.jpg')}}" alt="Awesome Image" style="width : 100%;" /></a>
                                </div><!-- /.single-portfolio-style-two -->
                            </div>
                        </div>
                        <br />
                    </div><!-- /.service-item-box -->
                </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <div class="single-sidebar broucher-sidebar">
                            <!-- <div class="title">
                                 <h3>Brochures</h3>
                             </div>-->
                            <!-- /.title -->
                            <!-- <p>View our 2018 financial prospectus brochure for an easy to read guide on all of the services offer.</p>
                             <a href="#" class="broucher-btn"><i class="industrio-icon-emails-interface-download-symbol"></i> Download Brochure</a>
                             <a href="#" class="broucher-btn"><i class="industrio-icon-pdf"></i> Characteristics</a>-->
                        </div><!-- /.single-sidebar service-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 col-sm-12 col-xs-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->

</x-layout>