<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'btn btn-danger d-inline-flex align-items-center px-4 py-2 border border-transparent rounded text-white text-uppercase tracking-widest transition ease-in-out duration-150'
    ]) }}>
    {{ $slot }}
</button>
