<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefinitionController extends Controller 
{
    public function show()
    {
        return view('circularwhat/index');
    }
}