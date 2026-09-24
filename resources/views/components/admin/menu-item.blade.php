@props([
    'href',
    'label',
    'active' => false,
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $active
            ? 'flex items-center p-2 text-white bg-blue-600 rounded-lg'
            : 'flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100'
    ]) }}
>
    <span class="w-5 h-5 shrink-0">
        {{ $slot }}
    </span>

    <span class="ms-3">
        {{ $label }}
    </span>
</a>
