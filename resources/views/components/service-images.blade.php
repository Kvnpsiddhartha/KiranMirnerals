@php
$imgs=$attributes['imgs'];
@endphp
<div class="row">
    @foreach($imgs as $img)
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-portfolio-style-two">
            <a><img src="{{asset('img/'.$img)}}" alt="Awesome Image" /></a>
        </div><!-- /.single-portfolio-style-two -->
    </div>
    @endforeach
</div>