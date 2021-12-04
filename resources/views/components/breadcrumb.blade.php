@props(['list' => null])
@if(isset($list) && !empty($list))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($list as $label => $value)
                @if($loop->last)
                    <x-breadcrumb.item active="true" label="{{$label}}"/>
                @else
                    <x-breadcrumb.item active="false" href="{{$value}}" label="{{$label}}"/>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
