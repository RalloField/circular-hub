<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function show()
    {
        return view('circularwhat/index');
    }

    public function circulareconomy()
    {
        return view('circularwhat/circulardefinition');
    }

    public function circulartech()
    {
        return view('circularwhat/circulartech');
    }

    public function circularhelp()
    {
        return view('circularwhat/circularhelp');
    }
}
