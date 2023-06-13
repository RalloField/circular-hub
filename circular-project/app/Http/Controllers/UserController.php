<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = 0;

        $user->save();
        Auth::login($user);
        return to_route('home');
    }
}
