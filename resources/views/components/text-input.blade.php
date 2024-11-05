<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control shadow-sm rounded']) !!}>
