<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benefit;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class BenefitController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $benefit = Benefit::create([
            'name' => $request->name            
        ]);

        return redirect()->back()->with('refresh', true);
    }

    public function index()
    {
        $benefits = Benefit::all();
        return view('benefits', [
            'benefits' => $benefits
        ]);
    }


}