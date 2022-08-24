<div class="single-sidebar service-sidebar">
    <ul class="service-list">
        <li class="{{Request::is('service') ? 'active' : '' }}"> <a href="/service">Products</a> </li>
        @foreach ($products as $product)
        <li class="{{ Request::is('product/'.$product->url) ? 'active' : '' }}"><a href="{{url('product/'.$product->url)}}">{{$product->title1." ".$product->title2}}</a> </li>
        @endforeach
    </ul><!-- /.service-list -->
</div><!-- /.single-sidebar service-sidebar -->