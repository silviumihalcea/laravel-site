<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    @include('addjob')
    @include('alljobs')        
    

        
</x-app-layout>