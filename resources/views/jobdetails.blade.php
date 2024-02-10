<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $jobdetails->name }}
        </h2>
    </x-slot>

    @if('session'('already_applied')){
        <div class="bg-red-500 bg-opacity-30 rounded-lg flex justify-center py-4 text-white text-base font-bold" role="alert">
        You have already applied for this job.
        </div>
    }
    @endif

    @if('session'('applied')){
        <div class="bg-green-500 bg-opacity-30 rounded-lg flex justify-center py-4 text-white text-base font-bold" role="alert">
        Congrats! You have applied for this job.
        </div>
    }
    @endif



    <div class="mt-4 flex flex-wrap justify-center">
        <div class="job-card-detailed flex flex-col items-center justify-center">
            <h2 class="m-4"><strong>All benefits</strong></h2>
        @foreach($jobbenefits as $jobbenefit)
            <p>{{ $jobbenefit->benefit->name }}</p>
        @endforeach
        </div>
            <div class="job-card-detailed flex flex-col">
                <div class="mt-4 flex flex-col items-center">
               
                    <img src="{{ $jobdetails->employer->employer_logo }}" alt="Employer Logo" class="employer-logo">
                    <h3><span>{{ $jobdetails->employer->name }}</span></h3>
              
                </div>
                <div class="job-details">
                    <h2><strong>{{ $jobdetails->name }}</strong></h2>
                    <p><em>{{ $jobdetails->description }}</em></p>
                    <p><strong>Domain: </strong>{{ $jobdetails->domain->name }}</p>
                    <p><strong>Experience: </strong>{{ $jobdetails->experience->name }}</p>
                    <p><strong>Work Preferences: </strong> {{ $jobdetails->workPreference->name }}</p>
                    <p><strong>Language:</strong> {{ $jobdetails->language->name }}</p>                    
                </div>
                <div class="flex">
                    @guest
                        <a href="/login" class="btn-green">Apply now</a>
                    @else
                        @if(auth()->user()->type == 'admin' || ($jobdetails->employer && $jobdetails->employer->id == auth()->user()->id))
                            <a href="/delete-job/{{ $jobdetails->id }}" class="btn-red">Remove this job</a>                            
                        @elseif(auth()->user()->type == 'employer')
                            <a href="/dashboard/{{$jobdetails->id}}" class="btn-green opacity-50 cursor-not-allowed pointer-events-none">Apply now</a>
                        @else
                            <a href="/dashboard/{{$jobdetails->id}}" class="btn-green">Apply now</a>
                        @endif
                    @endguest
                </div>
            </div>
    </div>
</x-app-layout>

