<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Benefits - Jobs Pairs') }}
        </h2>
    </x-slot>

    <div class="mx-auto w-4/5">
        <!-- form to add benefit job pairs -->
        <div>  
            <form method="POST" action="{{ route('benefits_jobs') }}">
                @csrf

                <div>
                    <x-input-label for="benefit_id" :value="__('Benefit')" />
                    <select  id="benefit_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="benefit_id">
                        <option value="select_benefit" selected disabled>Select benefit</option>
                        @foreach($benefits as $benefit)
                            <option value="{{ $benefit->id }}">{{ $benefit->name }}</option>                    
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('Benefit')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="job_id" :value="__('Job')" />
                    <select id="job_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="job_id">
                        <option value="select_job" selected disabled>Select Job</option>
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>           
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('Job')" class="mt-2" />
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    
                    <x-primary-button class="ms-4">
                        {{ __('Add benefit - Job Pair') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <!-- get all pair job benefits -->
        <div class="mt-4 bg-gray-700 rounded-lg overflow-hidden shadow-md text-gray-200">
            <table class="w-full table-auto">
                <thead class="text-left bg-gray-600">
                    <tr>
                        <th class="py-2 px-4 border-b">Id</th>
                        <th class="py-2 px-4 border-b">Benefit</th>
                        <th class="py-2 px-4 border-b">Job</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($benefits_jobs as $benefit_job)
                        <tr class="{{ $loop->even ? 'bg-gray-800' : '' }}">
                            <td class="py-2 px-4 border-b">{{ $benefit_job->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $benefit_job->benefit->name }}</td>
                            @if ($benefit_job->job)
                                <td class="py-2 px-4 border-b">{{ $benefit_job->job->name }}</td>
                            @else 
                                <td class="py-2 px-4 border-b">Null</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>

</x-app-layout>