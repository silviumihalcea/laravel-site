<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\User; 
use App\Models\Experience;
use App\Models\WorkPreference;
use App\Models\Language;
use App\Models\Job;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showWelcome()
    {
        $domains = Domain::all();
        $employers = User::whereIn("type", ["employer"])->get();
        $experiences = Experience::all();
        $work_preferences = WorkPreference::all();
        $languages = Language::all();
        $jobs = Job::with(['benefitJobs', 'employer', 'domain', 'experience', 'workPreference', 'language'])->get();

        return view('welcome', [
            'jobs' => $jobs,
            'domains' => $domains,
            'employers' => $employers,
            'experiences' => $experiences,
            'work_preferences' => $work_preferences,
            'languages' => $languages,
        ]);
    }
}