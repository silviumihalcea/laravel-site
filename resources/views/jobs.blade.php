<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    @if(session('delete'))
    <div class="bg-red-500 bg-opacity-30 rounded-lg flex justify-center py-4 text-white text-base font-bold" role="alert">
        Job deleted!
    </div>
    @endif
    
    @include('addjob')
    @include('alljobs')
      
    

        
</x-app-layout>