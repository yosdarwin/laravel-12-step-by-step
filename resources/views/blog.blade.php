<x-layout heading="About">
    <h1 class="text-2xl font-bold">Posts:</h1>
    <ul>
        @foreach ($posts as $post)
        <li><a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}  by: {{ $post['author'] }}</a></li>
        @endforeach
    </ul>
</x-layout>