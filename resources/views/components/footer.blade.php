<?php
?>
<div class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget about-widget">
                    <a href="{{url('/')}}"><img src="{{asset('img/logo2-1.png')}}" alt="Awesome Image" /></a>
                    <h3>About us</h3>
                    <p>We are manufacturing and exporting White Quartz Stone to our prominent clients.</p>
                </div><!-- /.footer-widget about-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-widget links-widget">
                    <div class="title">
                        <h3>Links</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{url('packaging')}}">Packaging</a></li>
                        <li><a href="{{url('mining')}}">Mining</a></li>
                        <li><a href="{{url('clients')}}">Clientele</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul><!-- /.links-list -->
                </div><!-- /.footer-widget links-widget -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget services-widget">
                    <div class="title">
                        <h3>Products</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        @foreach($products as $p)
                        <li><a href="{{url('product/'.$p->url)}}">{{$p->title1." ".$p->title2}}</a> </li>
                        @endforeach
                </div><!-- /.footer-widget services-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget subscribe-widget">
                    <!--<h3>Subscribe Today</h3>-->
                    <h3>Find Us</h3>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.784688993381!2d75.71748781440218!3d26.942039483115007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db2d586d5c08b%3A0xda54664be450480!2sJethi+Tech+Solutions!5e0!3m2!1sen!2sin!4v1550763645551" width="270px" height="150px"></iframe>
                    </p>
                    <!--<p>Many of our SELC registered employees are requested as main</p>-->
                    <!--<form action="Admin/subscribe.php" method="post" class="subscribe-form">
                            <input type="text" name="email" placeholder="Email Address" />
                            <button type="submit" class="hvr-sweep-to-right">Subscribe</button>
                        </form>-->
                    <!-- /.subscribe-form -->
                </div><!-- /.footer-widget subscribe-widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.main-footer -->
<div class="bottom-footer">
    <div class="container">
        <div class="left-text pull-left">
            <p>&copy; Copyright Kiran Minerals <?php echo date("Y"); ?>. All right reserved.</p>
        </div><!-- /.left-text -->
        <div class="right-text pull-right">
            <p>Created with <i class="fa fa-heart"></i> by <a href="http://www.jethitech.com">JethiTech</a></p>
        </div><!-- /.right-text -->
    </div><!-- /.container -->
</div><!-- /.bottom-footer -->