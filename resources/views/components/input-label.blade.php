@props(['value'])

<label {{ $attributes->merge(['class' => 'd-block fw-medium text-sm text-secondary']) }}>
    {{ $value ?? $slot }}
</label>
