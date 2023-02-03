@props(['for'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'font-bold pb-1']) }}>
    {{ $slot }}
</label>