@props([
    'url' => '/',
    'active' => false,
    'mobile' => false,
    'icon' => null,
])

<a href="{{ $url }}" @class([
    'block px-4 py-2 hover:bg-blue-700' => $mobile,
    'text-white hover:underline py-2' => !$mobile,
    'text-yellow-500 font-bold' => $active,
])>
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
