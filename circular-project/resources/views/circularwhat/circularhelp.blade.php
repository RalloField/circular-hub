<!-- economy.blade.php -->
@extends('components.layout')

@section('content')
    <x-success />
    <div class="articles">
        <article>
            <div class="circular-def">
                <h1><a href="/circular-help"> How can you help?</a></h1>
                <p>We don't always have to wait on the government or private organisations to take action.</p>
                <p>Find out how you can already have an impact in your own household or even on the workfloor!</p>
            </div>
        </article>
        <div class="button-container">
            <a href="{{ route('what') }}" class="Backbutton" type="button">Go Back</a>
        </div>
    </div>
@endsection
