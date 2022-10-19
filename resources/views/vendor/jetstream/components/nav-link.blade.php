@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link'
            : 'link link_active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
