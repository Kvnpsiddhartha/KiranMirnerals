@php
$services=$attributes['services'];
@endphp
<section class="service-style-four about-page" style="margin-top:-150px;">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-md-4">
                    <h3>Why choose <span>Kiran Minerals</span> for your business</h3>
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <p>Our quartz sand is made from the superior quality of pure white quartz stone with utmost precision to provide required size and quality to our valuable clients. We are the <strong>ISO 9001 & ISO 14001 CERTIFIED</strong> company & are manufacturer of snow white Quartz Powder and we are producing various mesh in Quartz Powder.</p>
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.sec-title -->
        <div class="service-style-four-carousel owl-theme owl-carousel">
            @foreach ($services as $service)
            <x-service-caraousel-item :service="$service" />

            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-style-four -->