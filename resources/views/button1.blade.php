<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Button1') }}
        </h2>
    </x-slot>

    <div class="container">
    <form method="POST" action="{{ route('example') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value=0 min=0 step="0.01" required />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Type -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Type')" />
            <select name="type">
                <option value="type1">Type 1</option>
                <option value="type2">Type 2</option>
            </select>
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <!-- Expired At -->
        <div class="mt-4">
            <x-input-label for="expired_at" :value="__('Expired At')" />

            <x-text-input id="expired_at" class="block mt-1 w-full"
                            type="datetime-local"
                            name="expired_at" />

            <x-input-error :messages="$errors->get('expired_at')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            
            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>


    </div>

</x-app-layout>