@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'px-4 py-2 bg-gray-500 rounded-md ': '' }}text-sm/6 font-semibold text-white">{{$slot}}</a>