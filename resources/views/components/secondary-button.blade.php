<button {{ $attributes->merge([
    'type' => 'button', 
    'class' => 'btn d-inline-flex align-items-center px-3 py-2 bg-white border border-secondary rounded text-secondary text-uppercase tracking-widest shadow-sm hover:bg-light focus:outline-none disabled:opacity-25 transition duration-150'
    ]) }}>
    {{ $slot }}
</button>

<!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->

<!-- Using custom.css -->
<!-- <button {{ $attributes->merge([
    'class' => 'btn-custom btn d-inline-flex align-items-center px-3 py-2 ...'
    ]) }}>
    {{ $slot }}
</button> -->
