<style>
    .bg-color {
        margin: 0;
        line-height: inherit;
        background-color: #ECB3B3;
        font-family: 'Macondo', cursive;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="bg-color py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>


</x-app-layout>
