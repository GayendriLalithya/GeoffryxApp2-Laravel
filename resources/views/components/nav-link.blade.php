@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-inline-flex align-items-center px-1 pt-1 border-bottom border-2 border-primary text-sm font-medium leading-5 text-dark focus:outline-none focus:border-primary transition duration-150 ease-in-out'
            : 'd-inline-flex align-items-center px-1 pt-1 border-bottom border-2 border-transparent text-sm font-medium leading-5 text-secondary hover:text-dark hover:border-gray-300 focus:outline-none focus:text-dark focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
