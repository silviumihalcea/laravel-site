<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Find a job. Apply now!') }}
        </h2>
    </x-slot>


    @include('alljobs')        
    

        
</x-app-layout>