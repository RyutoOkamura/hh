@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-l text-white']) }}>
    {{ $value ?? $slot }}
</label>
