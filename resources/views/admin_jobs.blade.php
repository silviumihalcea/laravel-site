<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Jobs') }}
        </h2>
    </x-slot>

    <div class="mx-auto w-4/5">
        <div class="flex flex-col w-2/6">
            <a href='/jobs' class="btn-blue">Edit Jobs</a>
            <a href='/benefits' class="btn-blue">Edit Benefits</a>
            <a href='/benefits_jobs' class="btn-blue">Edit Benefit - Job Pairs</a>
            <a href='/domains' class="btn-blue">Edit Job Domains</a>
            <a href='/experiences' class="btn-blue">Edit Experience Types</a>
            <a href='/languages' class="btn-blue">Edit Languages</a>
            <a href='/work_preferences' class="btn-blue">Edit Work Preferences</a>
            
        </div>

    </div>
  
</x-app-layout>