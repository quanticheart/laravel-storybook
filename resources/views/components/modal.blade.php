@props([
    'size' => null,
    'backdrop' => 'true'
])

@if($attributes->wire('model')->value)
    <div wire:ignore.self
         x-data="{
            show: @entangle($attributes->wire('model')),
            autofocus() { const focusable = $el.querySelector('[autofocus]'); if (focusable) focusable.focus() }
         }"
         x-init="
            new bootstrap.Modal($el, {backdrop: '{{ $backdrop }}'});
            $watch('show', value => value ? bootstrap.Modal.getInstance($el).show() : bootstrap.Modal.getInstance($el).hide());
            $el.addEventListener('hidden.bs.modal', () => show = false);
            $el.addEventListener('shown.bs.modal', autofocus);
        "
         id="{{ $id ?? md5($attributes->wire('model')) }}"
         class="modal fade"
         tabindex="-1"
    >
        <div class="modal-dialog shadow @isset($size) modal-{{ $size }} @endisset">
            <div class="modal-content">
                {{ $slot }}
            </div>
        </div>
    </div>
@else
    <div id="{{ $id ?? substr(md5(mt_rand()), 0, 7) }}" class="modal fade" tabindex="-1" {{ $attributes }}>
        <div class="modal-dialog shadow @isset($size) modal-{{ $size }} @endisset">
            <div class="modal-content">
                {{ $slot }}
            </div>
        </div>
    </div>
@endempty
