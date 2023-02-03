@props([
    'type' => 'text',
    'id',
    'name',
    'placeholder',
    'value'
    ])

<input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'shadow-md outline-none p-1 px-2 rounded border border-blue-200']) }}
>