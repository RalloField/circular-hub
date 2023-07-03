<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Company;
use App\Models\Question;

class CommentController extends Controller
{
    public function store(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'company_id' => 'required|exists:companies,id',
        ]);

        $comment = new Comment($validatedData);
        $question->comments()->save($comment);

        return redirect()->route('questions.show', ['question' => $question->id]);
    }
}
