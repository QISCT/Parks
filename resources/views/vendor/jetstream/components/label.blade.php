@props(['value'])

<label {{ $attributes->merge(['class' => 'mb-0 text-uppercase font-weight-bold']) }}>
 {{ $value ?? $slot }}
</label>
