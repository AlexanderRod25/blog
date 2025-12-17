<x-app-layout>
    <x-slot name="metaTitle"> "Create new post" </x-slot>
    <x-slot name="metaDescription"> "Form to create a new post" </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('nosotros') }}
        </h2>
    </x-slot>
    @include('partials.navigation')
    <h1>{{ __('Create new post') }}</h1>
    <form action="{{ route('posts.store')}}" method="POST">
        @csrf

        @include('posts.form-fields')
        <button type="submit">{{ __('Send') }}</button>
        <br/>
    </form>
    <a href="{{ route('posts.index')}}">{{ __('Back') }}</a>
</x-app-layout>


