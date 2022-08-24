<header class="header header-home-{{$attributes['type']}} stricky">
    <nav class="navbar navbar-default header-navigation">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ (Request::is('about') || Request::is('clientele') || Request::is('quality-control') || Request::is('infrastructure') || Request::is('mining') ? 'current' : '') }}">
                        <a href="#">Company</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('about')}}">About Us</a> </li>
                            <li><a href="{{ url('clientele')}}">Clientele</a> </li>
                            <li><a href="{{ url('quality-control')}}">Quality Control</a> </li>
                            <li><a href="{{ url('infrastructure')}}">Infrastructure</a> </li>
                            <li><a href="{{ url('mining')}}">Mining</a> </li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="{{ Request::is('product/*') ||  Request::is('service') ? 'current' : '' }}">
                        <a href="{{url('/service')}}">Products</a>
                        <ul class="sub-menu">
                            @foreach ($products as $product)
                            <li><a href="{{url('product/'.$product->url)}}">{{$product->title1." ".$product->title2}}</a> </li>
                            @endforeach
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="{{ Request::is('packaging') ? 'current' : '' }}"> <a href="{{ url('packaging')}}">Packaging</a> </li>
                    <li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{ url('contact')}}">Contact Us</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <x-button showIcon href="#" class="rqa-btn hvr-sweep-to-right">Request Sample</x-button>
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->