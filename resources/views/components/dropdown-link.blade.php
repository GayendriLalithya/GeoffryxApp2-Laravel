<a {{ $attributes->merge([
    'class' => 'd-block w-100 px-3 py-2 text-start text-sm text-dark bg-light hover:bg-light hover:text-dark focus:bg-light focus:text-dark'
    ]) }}>
    {{ $slot }}
</a>

<!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->

<!-- Using custom.css -->
<!-- <a {{ $attributes->merge([
    'class' => 'd-block w-100 px-3 py-2 text-start text-sm custom-dropdown-link'
    ]) }}>
    {{ $slot }}
</a> -->
