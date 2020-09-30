<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-sm btn-dark']) }}>
    {{ $slot }}
</button>
