@props(['target', 'slide', 'active' => false])

<button
    type="button"
    data-bs-target="{{ $target }}"
    data-bs-slide-to="{{ $slide }}"
    aria-current="{{ $active ? 'true' : 'false' }}"
    aria-label="Slide {{ $slide + 1 }}"
    {{ $attributes->class(['active' => $active]) }}
>
    {{ $slot }}
</button>
