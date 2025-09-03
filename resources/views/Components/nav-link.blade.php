@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'bg-gray-200 text-black py-2 px-4 rounded-sm ' : 'text-white ' }}text-sm/6 font-semibold ">{{ $slot }}</a>