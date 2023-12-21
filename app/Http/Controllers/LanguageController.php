<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class LanguageController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']       
        ]);

        $language = Language::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('refresh', true);
    }

      
    public function index()
    {
        $languages = Language::all();
        return view('languages', [
            'languages' => $languages
        ]);
    }
}