<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
            @if(auth()->check())
                Welcome, {{ auth()->user()->name }}!
            @else
                {{ __('Welcome!') }}
            @endif
        </h2>
    </x-slot>

         
        <div class="flex flex-col items-start">
            @if(auth()->check() && auth()->user()->type === 'employer') 
                <a href="/jobs" class="btn-blue">View my jobs</a>
                <a href="/candidates" class="btn-blue">Who applied to my jobs?</a>
            @endif
        </div>
     
        <div class="flex flex-wrap justify-center">
            @foreach ($carts as $cart)
                <div class="job-card flex flex-col">
                    <div class="mt-4 flex flex-col items-center">
                        <img src="{{ $cart->job->employer->employer_logo }}" alt="Employer Logo" class="employer-logo">
                        <span>{{ $cart->job->employer->name }}</span>
                    </div>
                    <div class="job-details">
                        <h3><strong>{{ $cart->job->name }}</strong></h3>
                        <p><strong>Domain: </strong>{{ $cart->job->domain->name }}</p>            
                    </div>
                    
                </div>
            @endforeach
        </div>
     
</x-app-layout>
