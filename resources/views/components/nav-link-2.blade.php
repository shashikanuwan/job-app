@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border border-gray-300 rounded-full text-gray-600 pt-1 pb-1 h-8 pl-8 pr-8  bg-yellow-300 hover:border-gray-400 focus:outline-none appearance-none'
            : 'border border-gray-300 rounded-full text-gray-600 pt-1 pb-1 h-8 pl-8 pr-8  bg-green-400 hover:border-gray-400 focus:outline-none appearance-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
