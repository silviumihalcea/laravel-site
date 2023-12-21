<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkPreference;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class WorkPreferenceController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']       
        ]);

        $work_preferences = WorkPreference::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('refresh', true);
    }

    public function index()
    {
        $work_preferences = WorkPreference::all();
        return view('work_preferences', [
            'work_preferences' => $work_preferences
        ]);
    }

}