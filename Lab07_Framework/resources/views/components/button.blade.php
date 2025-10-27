@props(['variant' => 'primary'])

@php
    $base = 'px-3 py-1 rounded text-white border-0 cursor-pointer';
    $color = match($variant) {
        'danger' => 'bg-red-600 hover:bg-red-700',
        'primary' => 'bg-blue-600 hover:bg-blue-700',
        default => 'bg-gray-500',
    };
@endphp

<button {{ $attributes->merge(['class' => "$base $color"]) }}>
    {{ $slot }}
</button>
