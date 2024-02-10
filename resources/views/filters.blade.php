
@if(isset($filteredJobs) && count($filteredJobs) > 0)
<!-- show filtered jobs -->
    <x-app-layout>
    <div class="mt-auto flex">
            <a href="/" class="btn-blue">Reset filters</a>
        </div>
    <div class="mt-4 flex justify-between">
        <div class="flex flex-wrap justify-center">
                        @foreach ($filteredJobs as $job)
                        <div class="job-card flex flex-col">
                                <div class="mt-4 flex flex-col items-center">
                                    <img src="{{ $job->employer->employer_logo }}" alt="Employer Logo" class="employer-logo">
                                    <span>{{ $job->employer->name }}</span>
                                </div>
                            <div class="job-details">
                                <h3><strong>{{ $job->name }}</strong></h3>
                                <p><em>{{ $job->description }}</em></p>
                                <p><strong>Domain: </strong>{{ $job->domain->name }}</p>
                                <p><strong>Experience: </strong>{{ $job->experience->name }}</p>
                                <p><strong>Work Preferences: </strong> {{ $job->workPreference->name }}</p>
                                <p><strong>Language:</strong> {{ $job->language->name }}</p>                    
                            </div>
                            <div class="mt-auto flex items-center justify-center">
                                <a href="{{ $job->tag }}" class="btn-green">Find out more</a>
                            </div>
                        </div>
                        @endforeach
        </div>
    </div>
    </x-app-layout>


@else
<!-- no jobs for selected filters -->
    @if(isset($filteredJobs) && count($filteredJobs) < 1)
    <x-app-layout>
        <h3>No jobs found with the applied filters.</h3>
        <div class="mt-auto flex">
            <a href="/" class="btn-blue">Reset filters</a>
        </div>
    </x-app-layout>
    @endif

<!-- show filters -->
    <form method="POST" action="{{ route('filters') }}">
    @csrf
        
        <div class="job-card filter flex flex-col justify-center p-4 border border-gray-700 rounded-md shadow-md bg-gray-800 text-white">
            
            <!-- domain filter -->   
            <div class="mt-4 relative inline-block text-left">
                            <x-input-label for="domain_id" :value="__('Domain')" />
                            <select  id="domain_id" class="block mt-1 w-full bg-gray-700 text-white" name="domain_id">
                                <option value="select_domain" selected disabled>Select domain</option>
                                @foreach($domains as $domain)
                                <option value="{{ $domain->id }}">{{ $domain->name }}</option>                    
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('domain_id')" class="mt-2" />
                </div>

            <!-- employer filter -->
                <div class="mt-4 relative inline-block text-left">
                            <x-input-label for="employer_id" :value="__('Employer')" />
                            <select  id="employer_id" class="block mt-1 w-full bg-gray-700 text-white" name='employer_id'>
                                
                                <option value="select_employer" selected disabled>Select employer</option>
                                
                                @foreach($employers as $employer)                             
                                        <option value="{{ $employer->id }}">{{ $employer->name }}</option>                
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('employer_id')" class="mt-2" />
                </div>
            
            <!-- experience filter -->
                <div class="mt-4 relative inline-block text-left">
                                <x-input-label for="experience_id" :value="__('Experience')" />
                                <select  id="experience_id" class="block mt-1 w-full bg-gray-700 text-white" name="experience_id">
                                    <option value="select_experience" selected disabled>Select experience</option>
                                    @foreach($experiences as $experience)
                                    <option value="{{ $experience->id }}">{{ $experience->name }}</option>                    
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('experience_id')" class="mt-2" />
                </div>        

            <!-- work preferences filter -->
                <div class="mt-4 relative inline-block text-left">
                            <x-input-label for="work_preferences_id" :value="__('Work_preferences')" />
                            <select  id="work_preferences_id" class="block mt-1 w-full bg-gray-700 text-white" name="work_preferences_id">
                                <option value="select_work_preferences" selected disabled>Select work preferences</option>
                                @foreach($work_preferences as $work_preference)
                                <option value="{{ $work_preference->id }}">{{ $work_preference->name }}</option>                    
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('work_preferences_id')" class="mt-2" />
                </div>

            <!-- language filter -->
                <div class="mt-4 relative inline-block text-left">
                            <x-input-label for="language_id" :value="__('Language')" />
                            <select  id="language_id" class="block mt-1 w-full bg-gray-700 text-white" name="language_id">
                                <option value="select_language" selected disabled>Select language</option>
                                @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>                    
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('language_id')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                            
                            <x-primary-button class="ms-4">
                                {{ __('Apply filters') }}
                            </x-primary-button>
                </div>
                
        </div>
    </form>

@endif
