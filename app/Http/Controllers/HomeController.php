<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::latest()->take(6)->get();
        $services = \App\Models\Service::latest()->take(6)->get();

        return view('pages.home', compact('projects', 'services'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function earthquakeTest()
    {
        return view('pages.earthquake-test');
    }
}
