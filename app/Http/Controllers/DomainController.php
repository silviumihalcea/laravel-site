<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class DomainController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:999']       
        ]);

        $domains = Domain::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->back()->with('refresh', true);
    }

    
    public function index()
    {
        $domains = Domain::all();
        return view('domains', [
            'domains' => $domains
        ]);
    }
}