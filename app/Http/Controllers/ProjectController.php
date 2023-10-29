<?php

namespace App\Http\Controllers;

use App\Actions\ProjectStoreAction;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
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

    public function create(): View
    {
        return view('project.create');
    }

    public function store(ProjectRequest $request): RedirectResponse
    {
        ProjectStoreAction::execute($request);

        return redirect(route('project.index'));
    }

    public function show(Project $project): View
    {
        return view('project.show', compact('project'));
    }

    public function edit(Project $project): View
    {

        return view('project.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project): RedirectResponse
    {
        ProjectStoreAction::execute($request, $project);

        return redirect(route('project.index'));
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect(route('project.index'));
    }
}
