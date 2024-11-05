<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'btn btn-primary d-inline-flex align-items-center px-3 py-2 border border-0 rounded text-uppercase fw-semibold small transition-duration-150'
    ]) }}>
    {{ $slot }}
</button>
