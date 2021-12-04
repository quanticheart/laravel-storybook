@props([
    'label' => null,
    'size' => null,
    'icon' => false,
    'iconPosition' => 'before',
    'enable' => true,
])
<a
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'btn btn-link shadow-none text-decoration-none' . ($size ? " btn-$size" : ''),
    ]) ->class($enable ? '' : 'disabled') }}
>
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

