@php
$reviews=$attributes['reviews'];    
@endphp
@foreach ($reviews as $review)
<div class="item">
    <div class="single-testimonial-style-two">
        <div class="inner">
        <p><i class="fas fa-quote-left"></i> {{$review->review}}<i class="fas fa-quote-right"></i></p>
        <div class="client-info-box">
            <div class="img-box">
                <img src="{{asset("img/$review->client_photo");}}" alt="Awesome Image"/>
            </div><!-- /.img-box -->
            <div class="text-box">
                <h3>{{$review->client_name}}</h3>
                <p>{{$review->designation}}</p>
            </div><!-- /.text-box -->
        </div><!-- /.client-info-box -->
        </div><!-- /.inner -->
    </div><!-- /.single-testimonial-style-two -->
</div><!-- /.item -->
@endforeach