@php
    $acc=$attributes['acc'];
@endphp

<div class="faq-style-one">
    <div class="accrodion-grp" data-grp-name="faq-accrodion">
        @foreach ($acc as $a)
        <div class="accrodion">
            <div class="accrodion-title">
                <h4>{{$a['title']}}</h4>
            </div>
            <div class="accrodion-content">
                <div class="inner">
                    <div class="row">
                        @foreach ($a['imgs'] as $img)
                            
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-portfolio-style-two">
                                <a><img src="{{asset('img/'.$img)}}" alt="Awesome Image"/></a>
                            </div><!-- /.single-portfolio-style-two -->
                        </div>
                        @endforeach
                    </div>
                    <br />
                    <div class="row">
                        @foreach($a['tags'] as $tag)
                            <div class="col-md-4 col-sm-2 col-xs-6">
                                <ul class="meta-info">
                                    <li><i class="fa fa-tag"></i><span>{{$tag['tag']}}</span>
                                        @if($tag['value'])
                                        : {{$tag['value']}}
                                        @endif
                                    </li>
                                    </ul><!-- /.meta-info -->
                            </div>
                            @endforeach
                    </div>
                </div><!-- /.inner -->
            </div>
        </div>
                @endforeach
            </div>
        </div><!-- /.faq-style-one -->