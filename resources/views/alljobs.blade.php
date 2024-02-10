<div class="flex flex-wrap justify-center">
    <!-- get all jobs -->
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
                
                <!-- if admin is logged in than he should be able to edit job not to find out more -->
                @if(auth()->check() && auth()->user()->type == 'admin')
                    <a href="{{ $job->tag }}" class="btn-green">Edit this job</a>
                @else
                    <a href="{{ $job->tag }}" class="btn-green">Find out more</a>
                @endif
            </div>
        </div>
    @endforeach
</div>
        
    

        
