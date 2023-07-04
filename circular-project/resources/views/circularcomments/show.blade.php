<!-- show.blade.php -->
@extends('components.layout')

@section('content')
    <div class="comment-container">
        <div class="question-section">
            <h1 class="title">{{ $question->title }}</h1>
            <p class="description">{{ $question->description }}</p>
        </div>

        <div class="comments-section">
            <h2>Comments:</h2>
            <!-- Display the thread of comments here -->
            @if ($question->comments->count() > 0)
                @foreach ($question->comments as $comment)
                    <div class="comment">
                        <p>{{ $comment->body }}</p>
                        <p class="comment-author">Posted by: {{ $comment->user->name }}</p>
                    </div>
                @endforeach
            @else
                <p>No comments yet.</p>
            @endif
        </div>

        <div class="comment-form-section text-center">
            <h2>Add Comment:</h2>
            <!-- Form for adding a new comment -->
            <form action="{{ route('storeComment', ['question' => $question->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="body" id="comment" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>
        </div>
    </div>
@endsection
