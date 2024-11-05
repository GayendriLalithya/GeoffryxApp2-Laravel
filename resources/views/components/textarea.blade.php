@props(['disabled' => false])

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control shadow-sm rounded']) !!}>
{{ $slot }}
</textarea>
