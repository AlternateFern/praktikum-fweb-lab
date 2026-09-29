@props(['status'])

@php
    $colors = [
        'aman' => 'bg-green-100 text-green-800',
        'menipis' => 'bg-yellow-100 text-yellow-800',
        'habis' => 'bg-red-100 text-red-800',
    ];
    
    $selectedColor = $colors[$status] ?? 'bg-gray-100 text-gray-800';
@endphp

<span {{ $attributes->merge(['class' => "px-2.5 py-0.5 rounded-full text-xs font-medium {$selectedColor}"]) }}>
    {{ $slot }}
</span>