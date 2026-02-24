<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
        return view('pages.services.show', compact('service'));
    }
}
