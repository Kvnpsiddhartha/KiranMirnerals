<x-layout>
    
	@include('inc/topbar');


    <x-navbar type="three"/>
    
    <div class="inner-banner">
        <div class="container">
            <h3>{{$product['title1']." ".$product['title2']}}</h3>
            <x-breadcumb>Products</x-breadcumb>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->
    
    <section class="service-page service-details-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">
						<x-sidebar/>
                        <!--<div class="single-sidebar broucher-sidebar">
                            <div class="title">
                                <h3>Brochures</h3>
                            </div>--><!-- /.title -->
                            <!--<p>View our 2018 financial prospectus brochure for an easy to read guide on all of the services offer.</p>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-emails-interface-download-symbol"></i> Download Brochure</a>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-pdf"></i> Characteristics</a>
                        </div>--><!-- /.single-sidebar service-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 col-sm-12 col-xs-12 -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="service-item-box service-details-content">
                        <!--div class="img-box">
                            <img src="img/service-details-1-1.jpg" alt="Awesome Image"/>
                        </div--><!-- /.img-box -->
                        <!--br /-->
                        <!--br /-->
                        <h3>{{$product['title1']." ".$product['title2']}}</h3>
                        <br />
                        <p> {!!$product['description']!!}
                        </p>
                        <br />
						<br />
						
						
						<x-service-images :imgs="$product['imgs']"/>
						
						
                        <br />
                        <br />
                        <x-product-accordions :acc="$product['acc']"/>
                    </div><!-- /.service-item-box -->
                </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->



</x-layout>