<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Benefit;
use App\Models\User;
use App\Models\BenefitJob;
use App\Models\Experience;
use App\Models\Domain;
use App\Models\Language;
use App\Models\WorkPreference;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class JobController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:999'],
            'domain_id' => ['required', 'numeric', 'min:1'],
            'employer_id' => ['required', 'numeric', 'min:1'],
            'experience_id' => ['required', 'numeric', 'min:1'],
            'work_preferences_id' => ['required', 'numeric', 'min:1'],
            'language_id' => ['required', 'numeric', 'min:1'],
            'expired_at' => ['nullable', 'date_format:m/d/Y H:i:s']
         
        ]);
        
        try{
            $job = Job::create([
                'name' => $request->name,
                'description' => $request->description,
                'domain_id' => $request->domain_id,
                'employer_id' => $request->employer_id,
                'experience_id' => $request->experience_id,
                'work_preferences_id' => $request->work_preferences_id,
                'language_id' => $request->language_id,
                'expired_at' => $request->expired_at            
            ]);
            return redirect()->back()->with('success', 'Job added!');

            } catch (\Exception $e) {
        
            return redirect()->back()->with('error', 'Failed to add job.');
        }
    }
    
     

   
    public function index()
    {
        
        $benefits_jobs = BenefitJob::all();
        $employers = User::whereIn("type", ["employer"])->get();
        $domains = Domain::all();
        $experiences= Experience::all();
        $work_preferences = WorkPreference::all();
        $languages = Language::all();

       

        $jobs = Job::with(['benefitJobs', 'employer', 'domain', 'experience', 'workPreference', 'language'])->get();

      
        return view('jobs', [
            'jobs' => $jobs,
            'benefits_jobs' => $benefits_jobs,
            'employers' => $employers,
            'domains' => $domains,
            'experiences' => $experiences,
            'work_preferences' => $work_preferences,
            'languages' => $languages

        ]);
        
    }
}


