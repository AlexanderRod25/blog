<x-app-layout>
    <x-slot name="metaTitle">blog</x-slot>
    <x-slot name="metaDescription">blog description</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>

    </x-slot>
    @include('partials.navigation')

    <a href="{{ route('posts.create')}}">Create new post</a>
    @foreach ($posts as $post)
        <div style="display: flex; align-items:baseline">
            <h2>
                <a href="{{ route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>
    @endforeach
</x-app-layout>
