@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-weight-normal text-success']) }}>
        {{ $status }}
    </div>
@endif
