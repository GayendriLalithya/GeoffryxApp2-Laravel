@props(['align' => 'right', 'contentClasses' => 'bg-white'])

@php
$alignmentClasses = $align === 'left' ? 'dropdown-start' : 'dropdown-end';
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button class="btn btn-secondary dropdown-toggle" type="button" @click="open = !open" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $trigger }}
    </button>

    <div class="dropdown-menu {{ $alignmentClasses }} {{ $contentClasses }}" x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         @click="open = false">
        {{ $content }}
    </div>
</div>

<!-- Include Bootstrap JS (from CDN for Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
