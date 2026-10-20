@props([
    'url' => '/',
    'icon' => null,
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'active' => false,
    'block' => false,
])

<a href="{{ $url }}" @class([
    $bgClass,
    $hoverClass,
    $textClass,
    'block px-4 py-2' => $block,
    'px-4 py-2 rounded hover:shadow-md transition duration-300' => !$block,
    'ring-2 ring-white' => $active,
])>
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
