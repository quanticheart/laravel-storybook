@props([
    'label' => null,
    'outline' => false,
    'icon' => false,
    'iconPosition' => 'before',
    'href' => false,
    'size' => null,
    'enable' => true,
    'type' => false,
])
@if (isset($href) && !empty($href))
    <a href="{{$href}}" {{ $attributes
                                ->class('btn')
                                ->class($outline ? "btn-outline-$type" : "btn-$type")
                                ->class($size ? "btn-$size" : '')
                                ->class($enable ? '' : 'disabled')
                              }}>
        @if (isset($icon) && !empty($icon))
            @if(empty($iconPosition) || $iconPosition === 'before')
                <i class="fa fa-{{$icon}}"></i>
            @endif
        @endif
        {{{ isset($label) && !empty($label) ? $label : $slot }}}
        @if (isset($icon) && !empty($icon) &&  isset($iconPosition) && $iconPosition === 'after')
            <i class="fa fa-{{$icon}}"></i>
        @endif
    </a>
@else
    <button {{ $attributes
                                ->class('btn')
                                ->class($outline ? "btn-outline-$type" : "btn-$type")
                                ->class($size ? "btn-$size" : '')
                                ->class($enable? '' : 'disabled')
                              }}>
        @if (isset($icon) && !empty($icon))
            @if(empty($iconPosition) || $iconPosition === 'before')
                <i class="fa fa-{{$icon}}"></i>
            @endif
        @endif
        {{{ isset($label) && !empty($label) ? $label : $slot }}}
        @if (isset($icon) && !empty($icon) &&  isset($iconPosition) && $iconPosition === 'after')
            <i class="fa fa-{{$icon}}"></i>
        @endif
    </button>
@endif

