<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Job;
use App\Models\Cart;
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

class CartController extends Controller
{
   public function store(int $jobId){
    $existingJob = Cart::where('user_id', '=', Auth::user()->id)->where('job_id', '=', $jobId)->first();
        if ($existingJob) {
            return redirect()->back()->with('already_applied', true);
        } else{
            $carts= Cart::create([
                'user_id' => Auth::user()->id,
                'job_id'=>$jobId
            ]);
            return redirect()->back()->with('applied',true);
        }
    }


    public function show()
{
    $carts = Cart::with('job')->where('user_id', '=', Auth::user()->id)->get();
    return view('dashboard', [
        'carts' => $carts
    ]);
}

    public function get_candidates() {
        
            $jobs = Job::where('employer_id', '=', Auth::user()->id)->get();
           
            $jobIds = [];

            foreach ($jobs as $job) {
            $jobIds[] = $job->id;
            }

            $candidates = Cart::whereIn('job_id', $jobIds)->get();
            

            return view('candidates', [
                'jobs' => $jobs,
                'candidates' => $candidates
                
            ]);
        
        }
    }

