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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\Cart;




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
            'expired_at' => ['nullable', 'date_format:m/d/Y H:i:s'],

         
        ]);

        $name = $request->name;
        $tag = Str::slug($name);

        

        try{
            $job = Job::create([
                'name' => $name,
                'description' => $request->description,
                'domain_id' => $request->domain_id,
                'employer_id' => $request->employer_id,
                'experience_id' => $request->experience_id,
                'work_preferences_id' => $request->work_preferences_id,
                'language_id' => $request->language_id,
                'expired_at' => $request->expired_at,
                'tag' => $tag          
            ]);

            Log::info('Job added successfully: ' . $job->id);

            return redirect()->back()->with('success', 'Job added!');

            } catch (\Exception $e) {
            Log::error('Failed to add job: ' . $e->getMessage());

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
        

        if(Auth::user() && Auth::user()->type === 'employer'){
            $jobs = Job::where('employer_id', Auth::user()->id)->with(['benefitJobs', 'employer', 'domain', 'experience', 'workPreference', 'language'])->get();
        }else{
             $jobs = Job::with(['benefitJobs', 'employer', 'domain', 'experience', 'workPreference', 'language'])->get();
        }
      
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

    public function showJob($tag){

        $jobdetails = Job::where('tag', $tag)->first();
        $jobbenefits = BenefitJob::where('job_id', $jobdetails->id)->get();
        return view('jobdetails',
        ['jobdetails'=>$jobdetails,
         'jobbenefits' => $jobbenefits
        ]);
    }

    public function filters(Request $request){
        $employers = User::whereIn("type", ["employer"])->get();
        $domains = Domain::all();
        $experiences= Experience::all();
        $work_preferences = WorkPreference::all();
        $languages = Language::all();
        $benefits_jobs = BenefitJob::all();
        $validatedData = $request->validate([
            'domain_id' => 'nullable|exists:domains,id',
            'employer_id' => 'nullable|exists:users,id',
            'experience_id' => 'nullable|exists:experiences,id',
            'work_preferences_id' => 'nullable|exists:work_preferences,id',
            'language_id' => 'nullable|exists:languages,id',
        ]);

        $jobsQuery = Job::query();

        foreach ($validatedData as $key => $value) {
            if ($value) {
                $jobsQuery->where($key, $value);
            }
        }
    
        $filteredJobs = $jobsQuery->get();
        $allJobs = Job::all();
    
       return view('filters', ['filteredJobs' => $filteredJobs,
       'benefits_jobs' => $benefits_jobs,
       'employers' => $employers,
       'domains' => $domains,
       'experiences' => $experiences,
       'work_preferences' => $work_preferences,
       'languages' => $languages,
       'allJobs' => $allJobs]);
    }

    public function destroy($id){
        Cart::where('job_id', '=', $id)->delete();
        Job::find($id)->delete();
        
        return redirect('jobs')->with('delete', true);
    }
    
 
}
    



