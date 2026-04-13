<x-layout heading="About">
    <h1 class="text-2xl font-bold">Posts:</h1>
    <ul>
        @foreach ($posts as $post)
        <li class="my-4">
            <h2 class="font-bold text-2xl mb-3 text-gray-800">{{ $post->title }}</h2>
            <h4 class="text-gray-500 text-sm mb-4">Author: {{ $post->author }} | at {{ $post->created_at->format('d F Y') }}</h4>
            <p class="mb-4">{{ $post->body }}</p>
            <a href="/blog/{{ $post['slug'] }}" class="px-4 py-2 bg-blue-600 text-white rounded-md inline-block mb-4">Read more</a>
           </li>
           <hr />
        @endforeach
    </ul>
</x-layout>