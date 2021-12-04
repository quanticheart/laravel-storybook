@props([
'outline' => false,
])
<button class="btn{{$outline ? ' btn-outline-primary' : ' btn-primary'}}">
    <i class="fa fa-apple-alt"></i>
    {{{ $slot }}}
</button>
