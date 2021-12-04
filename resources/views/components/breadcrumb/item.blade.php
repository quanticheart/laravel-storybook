@props([
    'active' => false,
    'href' => null,
    'label' => null,
])
<li {{
    $attributes->class('breadcrumb-item')
               ->merge(['class' => $active ? 'active' : ''])
}}
    {!!
    $active ? 'aria-current="page"' : ""
!!}
>
    @if(isset($href) && !empty($href))
        <a href="{{$href}}">{{$label}}</a>
    @else
        {{$label}}
    @endif
</li>

