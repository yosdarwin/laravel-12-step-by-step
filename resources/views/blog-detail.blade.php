<x-layout heading="About">
    <h1 class="text-2xl font-bold">Posts Title: {{ $post['title'] }} </h1>
    <h5 class="text-sm text-gray-400">Author: {{ $post['author'] }} | at {{ $post->created_at }}</h5>
    <article class="mt-4">
        <p>
            {{ $post['body'] }}
        </p>
    </article>
    
</x-layout>