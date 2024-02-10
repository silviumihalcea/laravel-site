<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Experiences') }}
        </h2>
    </x-slot>

    <div class="mx-auto w-4/5">
        <div >
            <form method="POST" action="{{ route('experiences') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div> 
                <!-- min experience interval -->
                <div>   
                    <x-input-label for="min_experience_interval" :value="__('Min experience (years)')" />
                    <input id="min_experience_interval" name="min_experience_interval" type="number" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" min="0" max="5"required/> 
                    <x-input-error :messages="$errors->get('min_experience_interval')" class="mt-2" />
                </div>
                <!-- max experience interval -->
                <div>
                    <x-input-label for="max_experience_interval"  :value="__('Max experience (years)')" />
                    <input id="max_experience_interval" name="max_experience_interval" type="number" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" min="1"required/> 
                    <x-input-error :messages="$errors->get('max_experience_interval')" class="mt-2" />
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Add experience type') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <!-- display all experience types -->
        @if($experiences->count()>0)
            <div class="mt-4 text-gray-800">
                <p class="text-lg text-white font-semibold mb-4">All Experiences</p>
                <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md text-gray-200">
                    <table class="w-full table-auto">
                        <thead class="text-left bg-gray-600">
                            <tr>
                                <th class="py-2 px-4 border-b">Id</th>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Min_experience_interval</th>
                                <th class="py-2 px-4 border-b">Max_experience_interval</th>  
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($experiences as $experience)
                                <tr class="{{ $loop->even ? 'bg-gray-800' : '' }}">
                                    <td class="py-2 px-4 border-b">{{ $experience->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $experience->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $experience->min_experience_interval }}</td>
                                    <td class="py-2 px-4 border-b">{{ $experience->max_experience_interval }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p>No experience types found!</p>
        @endif
    </div>
</x-app-layout>