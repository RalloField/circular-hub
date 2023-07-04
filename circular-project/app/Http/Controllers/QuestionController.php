<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Models\Company;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('circularcomments.index', compact('questions'));
    }

    public function show(Question $question)
    {
        $question->load('comments.user', 'comments.company');
        $users = User::all();
        $companies = Company::all();
        return view('circularcomments.show', compact('question', 'users', 'companies'));
    }
}
