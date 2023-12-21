<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class ExampleController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'type' => ['required', 'string', 'in:type1,type2'],
            'expired_at' => ['nullable', 'date_format:m/d/Y H:i:s']
        ]);

        $example = Example::create([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'expired_at' => $request->expired_at
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
