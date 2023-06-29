<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SessionRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    use ValidatesRequests;

    public function create()
    {
        return view('sessions.login');
    }

    public function store(SessionRequest $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect()->route('projects');
        } else {
            throw ValidationException::withMessages(['email' => 'Email or password are incorrect']);
        }
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
