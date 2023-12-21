<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BenefitJob;
use App\Models\Benefit;
use App\Models\Job;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class BenefitJobController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
       
      
        $request->validate([
            'benefit_id' => ['required', 'numeric', 'min:1'],
            'job_id'     => ['required', 'numeric', 'min:1']
        ]);
       
        $benefit = Benefit::find($request->benefit_id);
        $job = Job::find($request->job_id);
        

        if ($benefit && $job) {
            
            $benefit_job = BenefitJob::create([
                'benefit_id' => $benefit->id,
                'job_id'     => $job->id
            ]);

            return redirect()->back()->with('refresh', true);
        } else {
            return redirect()->back()->with('error', 'Benefit or Job not found.');
        }
    }
    
    public function index()
    {
       
        $jobs = Job::all();
        $benefits = Benefit::all();
        $benefits_jobs = BenefitJob::with(['benefit', 'job'])->get();
    
        return view('benefits_jobs', [
            'jobs' => $jobs,
            'benefits_jobs' => $benefits_jobs,
            'benefits' => $benefits
        ]);
    }
   
}