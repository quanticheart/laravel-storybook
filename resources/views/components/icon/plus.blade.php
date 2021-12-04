@props([
    'width' => 16,
    'height' => 16
])
<svg
    width="{{ $width }}" height="{{ $height }}"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes ?? '' }}
>
    <path d="M12 6V18M18 12L6 12" stroke="currentColor" stroke-width="1.5" />
</svg>
