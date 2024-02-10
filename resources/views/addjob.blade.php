
    <!-- if add job is ok -->
    @if(session('success'))    
        <div class="bg-green-500 bg-opacity-30 rounded-lg flex justify-center py-4 text-white text-base font-bold" role="alert">
        {{ session('success') }}
        </div>
    @endif

    <!-- if add job has error -->
    @if(session('error'))    
        <div class="bg-red-500 bg-opacity-30 rounded-lg flex justify-center py-4 text-white text-base font-bold" role="alert">
        {{ session('error') }}   
        </div>
    @endif

    <!-- add job will be available if admin or employer is logged in -->
    @auth
    @if(auth()->user()->type == 'admin' || auth()->user()->type == 'employer')
        <div class="flex flex-col w-7/8">
            <div class="flex flex-col justify-center items-center mb-4">  
                <p class="text-lg text-white font-semibold">Add job</p>

                <!-- add job form -->
                <form method="POST" action="{{ route('jobs') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-1">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Tag non visible for slug -->
                    <div>
                        <x-input-label for="tag" :value="__('Tag')" style="display:none;"/>
                        <x-text-input id="tag" class="block mt-1 w-full" type="text" name="tag" :value="old('tag')" style="display:none;" />
                        <x-input-error :messages="$errors->get('tag')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div class="mt-1">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    
                    <!-- Domain -->
                    <div class="mt-1">
                        <x-input-label for="domain_id" :value="__('Domain')" />
                        <select  id="domain_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="domain_id">
                            <option value="select_domain" selected disabled>Select domain</option>

                            <!-- domain only from the existing domains -->
                            @foreach($domains as $domain)
                            <option value="{{ $domain->id }}">{{ $domain->name }}</option>                    
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('domain_id')" class="mt-2" />
                     </div>

                    <!-- Employer -->
                    <div class="mt-1">
                        <x-input-label for="employer_id" :value="__('Employer')" />
                        <select  id="employer_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name='employer_id'>
                            
                            <!-- dummy value for admin which can not be selected -->
                            @if(auth()->user()->type == 'admin')
                                <option value="select_employer" selected disabled>Select employer</option>
                            @endif

                            @foreach($employers as $employer)
                                <!-- predefined value for employer = him; logged employer can not choose another employer -->
                                @if(auth()->user()->id == $employer->id) 
                                    <option value="{{ $employer->id }}" selected>{{ $employer->name }}

                                <!-- admin can choose any employer -->
                                @elseif(auth()->user()->type == 'admin')
                                    <option value="{{ $employer->id }}">{{ $employer->name }}
                                @endif
                                    </option>                
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('employer_id')" class="mt-2" />
                    </div>

                    

                    <!-- Experience -->
                    <div class="mt-1">
                        <x-input-label for="experience_id" :value="__('Experience')" />
                        <select  id="experience_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="experience_id">
                            <option value="select_experience" selected disabled>Select experience</option>
                            
                            <!-- experience only from the existing experiences -->
                            @foreach($experiences as $experience)
                                <option value="{{ $experience->id }}">{{ $experience->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('experience_id')" class="mt-2" />
                    </div>

                    <!-- Work preferences -->
                    <div class="mt-1">
                        <x-input-label for="work_preferences_id" :value="__('Work_preferences')" />
                        <select  id="work_preferences_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="work_preferences_id">
                            <option value="select_work_preferences" selected disabled>Select work preferences</option>
                            
                            <!-- work preference only from the existing work preferences -->
                            @foreach($work_preferences as $work_preference)
                                <option value="{{ $work_preference->id }}">{{ $work_preference->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('work_preferences_id')" class="mt-2" />
                     </div>

                     <!-- Language -->
                     <div class="mt-1">
                        <x-input-label for="language_id" :value="__('Language')" />
                        <select  id="language_id" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" name="language_id">
                            <option value="select_language" selected disabled>Select language</option>
                            
                            <!-- language only from the existing languages -->
                            @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>                    
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('language_id')" class="mt-2" />
                     </div>

                    <!-- Expired at -->
                    <!-- some problems here; temporary unavailable -->
                    <div class="mt-1" style="display:none;">
                        <x-input-label for="expired_at_id" :value="__('Expired_at')" />
                        <x-text-input id="expired_at" class="block mt-1 w-full border border-gray-700 rounded-md shadow-md bg-gray-800 text-white" type="datetime-local" name="expired_at" />
                        <x-input-error :messages="$errors->get('expired_at_id')" class="mt-2" />
                    </div>
                    
                    <!-- add job button -->
                    <div class="flex items-center justify-end mt-4"> 
                        <x-primary-button class="ms-4">
                            {{ __('Add job') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    @endif
    @endauth
        
       

