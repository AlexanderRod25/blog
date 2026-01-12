<x-app-layout>
    <x-slot name="metaTitle">contacto</x-slot>
    <x-slot name="metaDescription">contact description</x-slot>
    <x-slot name="header">
        @include('partials.navigation')
        <div class="mx-auto mt-4 max-w-6xl">
            <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
                {{ __('Contacto') }}
            </h1>
        </div>
    </x-slot>

</x-app-layout>
