<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::orderByRaw("status = 'ongoing' DESC")->latest()->get();
        return view('pages.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = \App\Models\Project::where('slug', $slug)->firstOrFail();
        return view('pages.projects.show', compact('project'));
    }
}
