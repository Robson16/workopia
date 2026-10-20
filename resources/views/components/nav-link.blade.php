@props([
    'url' => '/',
    'active' => false,
    'mobile' => false,
    'icon' => null,
    'button' => false,
])

<a href="{{ $url }}" @class([
    'block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black' =>
        $mobile && $button,
    'block px-4 py-2 hover:bg-blue-700' => $mobile && !$button,
    'bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300' =>
        !$mobile && $button,
    'text-white hover:underline py-2' => !$mobile && !$button,
    'ring-2 ring-white' => $active && $button,
    'text-yellow-500 font-bold' => $active && !$button,
])>
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
