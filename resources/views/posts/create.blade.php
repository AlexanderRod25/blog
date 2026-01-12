<x-app-layout>
    <x-slot name="metaTitle"> "Create new post" </x-slot>
    <x-slot name="metaDescription"> "Form to create a new post" </x-slot>
    <x-slot name="header">
        @include('partials.navigation')
        <div class="mx-auto mt-4 max-w-6xl">
            <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
                {{ __('Crear nuevo post') }}
            </h1>
        </div>
    </x-slot>
    <h1>{{ __('Create new post') }}</h1>
    <form action="{{ route('posts.store')}}" method="POST">
        @csrf

        @include('posts.form-fields')
        <button type="submit">{{ __('Send') }}</button>
        <br/>
    </form>
    <a href="{{ route('posts.index')}}">{{ __('Back') }}</a>
</x-app-layout>


