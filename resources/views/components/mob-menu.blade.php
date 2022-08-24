<?php
?>
<a href="#" class="close-button side-navigation-close-btn fa fa-times"></a><!-- /.close-button -->
<div class="sidebar-content">
    <div class="top-content">
        <a href="{{url('/')}}"><img src="{{url('img/logo1-1.png')}}" alt="Awesome Image" /></a>
    </div><!-- /.top-content -->
    <nav class="nav-menu middle-content">
        <ul class="navigation-box">
            <li class="{{Request::is('/') ? 'current' : '' }}">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="{{ (Request::is('about') || Request::is('clientele') || Request::is('quality-control') || Request::is('infrastructure') || Request::is('mining') ? 'current' : '') }}">
                <a href="#">Company <span class="subnav-toggler fa fa-caret-down"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('packaging')}}">Packaging</a></li>
                    <li><a href="{{url('mining')}}">Mining</a></li>
                    <li><a href="{{url('clients')}}">Clientele</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul><!-- /.sub-menu -->
            </li>
            <li class="{{ Request::is('product/*') ||  Request::is('service') ? 'current' : '' }}">
                <a href="#">Products <span class="subnav-toggler fa fa-caret-down"></span></a>
                <ul class="sub-menu">
                    @foreach($products as $p)
                    <li><a href="{{url('product/'.$p->url)}}">{{$p->title1." ".$p->title2}}</a> </li>
                    @endforeach
                </ul><!-- /.sub-menu -->
            </li>
            <li class="{{ Request::is('packaging') ? 'current' : '' }}"> <a href="packaging">Packaging</a> </li>
            <li class="{{ Request::is('contact') ? 'current' : '' }}"> <a href="contact">Contact Us</a> </li>
        </ul>
    </nav><!-- /.nav-menu -->
    <div class="bottom-content">
        <div class="social">
            <a href="#" class="fab fa-facebook-f"></a>
            <!--
                --><a href="#" class="fab fa-twitter"></a>
            <!--
                --><a href="#" class="fab fa-google-plus-g"></a>
            <!--
                --><a href="#" class="fab fa-instagram"></a>
            <!--
                --><a href="#" class="fab fa-behance"></a>
        </div><!-- /.social -->
        <p class="copy-text">&copy; 2019 Kiran Minerals. <br /> Made with <i class="fa fa-heart"></i> by <a href="http://www.jethitech.com">JethiTech</a></p><!-- /.copy-text -->
    </div><!-- /.bottom-content -->
</div><!-- /.sidebar-content -->