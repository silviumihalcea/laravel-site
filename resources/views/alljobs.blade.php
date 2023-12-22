<div class="mt-4 flex flex-wrap justify-center">
        
                @foreach ($jobs as $job)
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
                        <a href='/jobs' class="btn-green">Apply now</a>
                        <a href='/jobs' class="btn-blue">Edit Job</a>
                        <a href='/jobs' class="btn-red">Remove Job</a>
                    </div>
                </div>
                @endforeach
</div>
        
    

        
