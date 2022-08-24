<a {{$attributes}}>
    {{$slot}}
    @if($showIcon)
        <i class="fa fa-arrow-right"></i>
    @endif
</a>