<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaController extends Controller
{
    public function index()
    {
        return Inertia::render('InertiaForm');
    }

    public function fetchData(Request $request)
    {
        // Use HTTP client to talk to the RapidAPI endpoint
        $id = $request->input('id');
        $response = \Http::withHeaders([
            'X-RapidAPI-Host' => 'crunchbase-crunchbase-v1.p.rapidapi.com',
            'X-RapidAPI-Key' => '9f8020dc4dmsh2dd7c0dd991beeep18d76fjsn653d117a3320',
        ])->get("https://crunchbase-crunchbase-v1.p.rapidapi.com/entities/organizations/{$id}");

        return $response->json();
    }
}
