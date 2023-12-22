

    @if(session('success'))    
    <div class="alert alert-success flex flex-col justify-center items-center mb-4 w-7/8">
    <p class="text-lg text-white font-bold">{{ session('success') }}</p>   
    </div>
    @endif

    @if(session('error'))    
    <div class="alert alert-danger flex flex-col justify-center items-center mb-4 w-7/8">
    <p class="text-lg text-white font-bold">{{ session('error') }}</p>   
    </div>
    @endif

    @auth
        @if(auth()->user()->type == 'admin' || auth()->user()->type == 'employer')
    <div class="flex flex-col w-7/8">
        <div class="flex flex-col justify-center items-center mb-4">  
            <p class="text-lg text-white font-semibold">Add job</p>
        
                <form method="POST" action="{{ route('jobs') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    
                    <!-- Domain -->
                    <div>
                        <x-input-label for="domain_id" :value="__('Domain')" />
                        <select  id="domain_id" class="block mt-1 w-full" name="domain_id">
                            <option value="select_domain" selected disabled>Select domain</option>
                            @foreach($domains as $domain)
                            <option value="{{ $domain->id }}">{{ $domain->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('domain_id')" class="mt-2" />
                     </div>

                    <!-- Employer -->
                    <div>
                        <x-input-label for="employer_id" :value="__('Employer')" />
                        <select  id="employer_id" class="block mt-1 w-full" name='employer_id'>
                            @if(auth()->user()->type == 'admin')
                            <option value="select_employer" selected disabled>Select employer</option>
                            @endif
                            @foreach($employers as $employer)
                                @if(auth()->user()->id == $employer->id)
                                    <option value="{{ $employer->id }}" selected>{{ $employer->name }}
                                @elseif(auth()->user()->type == 'admin')
                                    <option value="{{ $employer->id }}">{{ $employer->name }}
                                @endif
                                </option>                
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('employer_id')" class="mt-2" />
                     </div>

                    

                    <!-- Experience -->
                     <div>
                        <x-input-label for="experience_id" :value="__('Experience')" />
                        <select  id="experience_id" class="block mt-1 w-full" name="experience_id">
                            <option value="select_experience" selected disabled>Select experience</option>
                            @foreach($experiences as $experience)
                            <option value="{{ $experience->id }}">{{ $experience->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('experience_id')" class="mt-2" />
                     </div>
                    <!-- Work preferences -->
                     <div>
                        <x-input-label for="work_preferences_id" :value="__('Work_preferences')" />
                        <select  id="work_preferences_id" class="block mt-1 w-full" name="work_preferences_id">
                            <option value="select_work_preferences" selected disabled>Select work preferences</option>
                            @foreach($work_preferences as $work_preference)
                            <option value="{{ $work_preference->id }}">{{ $work_preference->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('work_preferences_id')" class="mt-2" />
                     </div>

                     <!-- Language -->
                     <div>
                        <x-input-label for="language_id" :value="__('Language')" />
                        <select  id="language_id" class="block mt-1 w-full" name="language_id">
                            <option value="select_language" selected disabled>Select language</option>
                            @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('language_id')" class="mt-2" />
                     </div>

                      <!-- Expired at -->
                      <div>
                        <x-input-label for="expired_at_id" :value="__('Expired_at')" />
                        <x-text-input id="expired_at" class="block mt-1 w-full" type="datetime-local" name="expired_at" />
                        <x-input-error :messages="$errors->get('expired_at_id')" class="mt-2" />
                     </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        
                        <x-primary-button class="ms-4">
                            {{ __('Add job') }}
                        </x-primary-button>
                    </div>
                </form>

        
        </div>

        @endif
        @endauth

        
       

