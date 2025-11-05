<x-app-layout>
    <x-slot name="metaTitle"> nosotros </x-slot>
    <x-slot name="metaDescription">about description</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('nosotros') }}
        </h2>
    </x-slot>
    @include('partials.navigation')
    <x-slot name="sidebar">
        prueba
    </x-slot>
</x-app-layout>
