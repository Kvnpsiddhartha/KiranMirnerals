<x-layout>

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one slider-home-two" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide-1" style="background-image: url(img/1/bg1.jpg);background-position: center center;  ">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content text-center" ">
                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2>
                                {{-- <a href="#know_more" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more <i class="fa fa-arrow-right"></i></a> --}}
                                <x-button showIcon href="#know_more" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more</x-button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item slide-2" style="background-image: url(img/1/bg5.jpg);background-position: center center; ">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content text-center">
                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2>
                                <p data-animation="animated fadeInDown">We are the best  guaranteed company to serve you. We are dedicated to help you any time.</p>
                                <x-button showIcon href="#know_more" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more</x-button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item slide-3" style="background-image: url(img/1/damien-schnorhk-_kSxOXTyHQU-unsplash.jpg);background-position: center center;  ">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content text-right">
                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2>
                                <p data-animation="animated fadeInDown">We are the best  guaranteed company to serve you. We are dedicated to help you any time.</p>
                                <x-button showIcon href="#know_more" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more</x-button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fas fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fas fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
        </ul>
            
        <div class="logo home-two">
            <a href="index.php"><img src="{{asset("img/logo2-1.png");}}" alt="Awesome Image"/></a>
        </div><!-- /.logo home-two -->
    </div>


    
                    <x-navbar type="two"/>


    <section class="about-style-two sec-pad" id="know_more">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-content">
                        <h3>Welcome to <span>Kiran Minerals</span></h3>
                        <p class="tag-line">With over 20 years running of providing quality in-minerals products, <span>Kiran Minerals</span> Team knows what it takes to deliver the best service to our clients.</p><!-- /.tag-line -->
                        <p>Our philosophy is to care for our clients as though they are family. In fact, some of our clients have been family; we are consistently looking for ways to improve our clients’ service experience while maintaining our “locally-owned and operated” attitude. Here are further reasons why using Kiran Minerals Team, a licensed and bonded home company, is the right choice for you.</p>
                        <!--div class="quote-box">
                            <img src="img/about-quote.png" alt="Awesome Image"/>
                            <p>Many of our SELC registered employees are requested as main preferred temporary staff when a service.</p>
                            <h4>Abhineet Kumawat, CEO</h4>
                        </div--><!-- /.qoute-box -->
                        <x-button href="about.php" class="view-more hvr-sweep-to-right">Know about us</x-button>
                    </div><!-- /.about-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="video-box">
                        <img src="{{asset("img/1/bg2.jpg");}}" alt="Awesome Image"/>
                        <!--<a href="http://www.youtube.com/watch?v=tVwWF-amqV4" class="video-popup"><i class="industrio-icon-play-button hvr-pulse"></i></a>-->
                    </div><!-- /.video-box -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-style-two -->
	
	<!--section class="service-title">
        <div class="container">
            <div class="sec-title light text-center">
                <h3><span>Industrio</span> provides the best service for sustainable progress.</h3>
            </div><!-- /.sec-title light -->
        </div--><!-- /.container -->
    </section--><!-- /.service-title -->
	
	

                <x-service-carousel-items :services="$services"/>
                

	
	

    <section class="testimonials-style-two dark-bg sec-pad">
        <div class="container">
            <div class="sec-title light">
                <h3>Clients say <span>about us</span></h3>
            </div><!-- /.sec-title -->
            <div class="testimonials-style-two-carousel owl-theme owl-carousel">
                <x-review :reviews="$reviews"/>
            </div><!-- /.testimonials-style-two-carousel owl-theme owl-carousel -->        
        </div><!-- /.container -->
    </section><!-- /.testimonials-style-two -->

    


</x-layout>