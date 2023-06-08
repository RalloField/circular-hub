<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
        $company = $request->validated()['company'];
        $description = $request->validated()['short_description'];

        $project = new Project;
        $project->name = $name;
        $project->company = $company;
        $project->short_description = $description;

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
