<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My candidates') }}
        </h2>
    </x-slot>
@auth
    <div class="mx-auto w-4/5">
          
       
        <!-- get all candidates -->
        <div class="mt-4 text-gray-800">
           

            @if($candidates->count() === 0)
                <div class="flex justify-center items-center h-96 bg-blue rounded-md flex-col">
                    <span class="text-3xl text-center font-medium">No candidates yet!</span>
                </div>
            @else

                <p class="text-lg text-white font-semibold mb-4">All candidates</p>
                <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md text-gray-200">
                    <table class="w-full table-auto">
                        <thead class="text-left bg-gray-600">
                            <tr>
                                <th class="py-2 px-4 border-b">Candidate Name</th>
                                <th class="py-2 px-4 border-b">Candidate Email</th>
                                <th class="py-2 px-4 border-b">Job Name</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($candidates as $candidate)
                                <tr class="{{ $loop->even ? 'bg-gray-800' : '' }}">
                                    <td class="py-2 px-4 border-b">{{ $candidate->user->name }}</td>                                
                                    <td class="py-2 px-4 border-b">{{ $candidate->user->email }}</td>
                                    <td class="py-2 px-4 border-b">{{ $candidate->job->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>  
    </div>
    @endauth
</x-app-layout>