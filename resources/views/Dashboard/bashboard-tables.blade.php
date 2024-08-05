<x-app-layout>
    @if (request()->routeIs('projects'))
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Projects') }}
            </h2>
        </x-slot>
        @include('dashboard.project')
    @elseif (request()->routeIs('categories'))
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Categories') }}
            </h2>
        </x-slot>
        @include('dashboard.categories')
    @endif

</x-app-layout>
