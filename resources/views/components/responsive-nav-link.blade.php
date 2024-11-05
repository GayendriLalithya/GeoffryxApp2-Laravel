@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block w-100 ps-3 pe-4 py-2 border-start border-4 border-primary text-start text-lg fw-medium text-primary bg-light focus:outline-none focus:text-primary focus:bg-white transition duration-150 ease-in-out'
            : 'd-block w-100 ps-3 pe-4 py-2 border-start border-4 border-transparent text-start text-lg fw-medium text-secondary hover:text-dark focus:outline-none focus:text-dark focus:bg-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
