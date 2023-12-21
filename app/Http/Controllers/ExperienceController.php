<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class ExperienceController extends Controller
{
    
    public function store(Request $request): RedirectResponse
    {
              
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'min_experience_interval' => ['nullable', 'numeric', 'min:0'],
            'max_experience_interval' => ['nullable', 'numeric', 'min:1']
        ]);
      

        $experience = Experience::create([
            'name' => $request->name,
            'min_experience_interval' => $request->min_experience_interval,
            'max_experience_interval' => $request->max_experience_interval            
        ]);

        return redirect()->back()->with('refresh', true);
    }

    public function index()
    {
        if(isset($_GET["1min_experience_interval"])){
            $experiences = Experience::where("min_experience_interval", ">=", 1)->get();
        } else {
            $experiences = Experience::all();
        }

        return view('experiences', [
            'experiences' => $experiences
        ]);
    }





}