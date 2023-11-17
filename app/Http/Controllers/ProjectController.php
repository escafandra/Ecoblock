<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        $projects = Project::search($request->query('search'))
            ->orderBy('name')
            ->paginate(20);

        $projects->appends(['search' => $request->query('search')]);

        return view('project.index', compact('projects'));
    }
}
