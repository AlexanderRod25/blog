<x-app-layout>
    <x-slot name="metaTitle"> {{$post->title}} </x-slot>
    <x-slot name="metaDescription"> {{$post->body}} </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('nosotros') }}
        </h2>
    </x-slot>
    @include('partials.navigation')
    <h1>Edit form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')

        @include('posts.form-fields')
        <button type="submit">{{ __('Send') }}</button>
        <br/>
    </form>
    <br />

    <a href="{{ route('posts.index')}}">Back</a>
</x-app-layout>


