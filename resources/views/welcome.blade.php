<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Find a job. Apply now!') }}
        </h2>
    </x-slot>

    <div class="mt-4 flex justify-between">
    @include('filters')
    @include('alljobs')        
    
    </div>
        
</x-app-layout>