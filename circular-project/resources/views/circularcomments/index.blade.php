<!-- index.blade.php -->
@extends('components.layout')

@section('content')
    <x-success />
    <x-fail />

    <div class="questions-table-container">
        <div class="table-container">
            <h1 class="text-3xl font-bold mb-5 p-2 pb-5 text-center">Questions</h1>
            <div class="table-content">
                <table class="questions-table">
                    <thead>
                        <tr>
                            <th class="header-table-question>"> Question </th>
                            <th class="header-table-user"> User </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Display all the questions -->
                        @foreach ($questions as $question)
                            <tr>
                                <td class="table-questions-question">
                                    <a
                                        href="{{ route('circularcomments.show', ['question' => $question->id]) }}">{{ $question->title }}</a>
                                </td>
                                <td class="table-questions-user">{{ $question->user->name }}</td>
                            </tr>
                            <!-- Display other question details if needed -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
