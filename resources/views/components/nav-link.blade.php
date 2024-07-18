@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 leading-5 text-accent focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 leading-5 text-white hover:text-accent hover:border-gray-700 focus:outline-none focus:text-accent/70 focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
