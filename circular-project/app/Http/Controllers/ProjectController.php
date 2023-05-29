<?php

namespace App\Http\Controllers;

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
}
