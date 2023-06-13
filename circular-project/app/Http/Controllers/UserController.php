<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $users = User::all();
    }

    public function create()
    {
        return view('users.register');
    }

    public function store()
    {
    }
}
