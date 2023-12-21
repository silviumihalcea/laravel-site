<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Work Preferences') }}
        </h2>
    </x-slot>

    <div class="mx-auto w-4/5">
        <div>  
                <form method="POST" action="{{ route('work_preferences') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        
                        <x-primary-button class="ms-4">
                            {{ __('Add work preference') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>


            <div class="mt-4 text-gray-800">
            <p class="text-lg text-white font-semibold mb-4">All work preferences</p>

            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md text-gray-200">
                <table class="w-full table-auto">
                    <thead class="text-left bg-gray-600">
                        <tr>
                            <th class="py-2 px-4 border-b">Id</th>
                            <th class="py-2 px-4 border-b">Name</th>
                    </thead>

                    <tbody>
                        @foreach($work_preferences as $work_preference)
                            <tr class="{{ $loop->even ? 'bg-gray-800' : '' }}">
                                <td class="py-2 px-4 border-b">{{ $work_preference->id }}</td>
                                <td class="py-2 px-4 border-b">{{ $work_preference->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
</div>
               

</x-app-layout>