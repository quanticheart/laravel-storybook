@props([
    'label' => null,
    'outline' => false,
    'icon' => null,
    'iconPosition' => null,
    'href' => false,
    'size' => null,
    'enable' => true,
    'type' => "dark",
])
<x-button.default {{ $attributes }} href="{{$href}}" outline="{{$outline}}" type="{{$type}}" icon="{{$icon}}"
                  iconPosition="{{$iconPosition}}" label="{{$label}}" size="{{$size}}" enable="{{$enable}}">
    {{ $slot }}
</x-button.default>
