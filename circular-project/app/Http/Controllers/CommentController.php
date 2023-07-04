<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $request, Question $question)
    {
        $validatedData = $request->validate([
            'body' => 'required|string|max:255',
        ]);
        $body = $validatedData['body'];

        // Create a new comment
        $comment = new Comment;
        $comment->body = $body;
        $comment->user_id = Auth::id();
        $comment->question_id = $question->id;

        $comment->save();


        // Redirect back to the question's show page
        return redirect()->route('circularcomments.show', ['question' => $question->id]);
    }
}
