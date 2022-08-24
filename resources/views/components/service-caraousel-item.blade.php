@php
    $service=$attributes['service'];
@endphp


<div class="item">
    <div class="single-service-style-four {{$service->sss4class}}">
        <div class="img-box">
            <img src="{{asset("img/$service->image");}}" alt="Awesome Image"/>
            <div class="box">
                <div class="content">
                    <i class="{{$service->icon}}"></i>
                    <h3><span>{{$service->title1}}</span>
                        <br />{{$service->title2}}</h3>
                    <x-button href="{{$service->url}}" class="more hvr-sweep-to-right">Learn more</x-button>
                </div><!-- /.content -->
            </div><!-- /.box -->
        </div><!-- /.img-box -->
    </div><!-- /.single-service-style-four -->
</div><!-- /.item -->
       