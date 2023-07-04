<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;

use App\Models\Project;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $projects = Project::all();
        return view('circulaireprojecten.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('circulaireprojecten.create');
    }

    public function store(ProjectRequest $request)
    {
        $name = $request->validated()['name'];
        $description = $request->validated()['short_description'];

        $project = new Project;
        $project->name = $name;
        $project->short_description = $description;

        $project->user_id = Auth::id();
        $project->company_id = Auth::user()->company->id;

        $project->save();

        return redirect('projects');
    }

    public function delete($id)
    {
        $project = Project::find($id);
        if ($project) {
            $project->delete();
            return redirect('projects')->with('success', 'Project deleted successfully.');
        } else {
            return redirect('projects')->with('error', 'Failed to delete project. Project not found.');
        }
    }
}
