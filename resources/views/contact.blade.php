<x-app-layout>
    <x-slot name="metaTitle">contacto</x-slot>
    <x-slot name="metaDescription">contact description</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacto') }}
        </h2>
    </x-slot>
    @include('partials.navigation')
</x-app-layout>
