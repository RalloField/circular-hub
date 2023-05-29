@extends('components.layout')

@section('content')
    <x-success />
    <x-fail />

    <div class="bg-gray-900 opacity-95 text-white">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-5 p-2 text-center">Projects</h1>
            <div class="overflow-x-auto">
                <table class="table-auto border-collapse border border-gray-700 w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left uppercase">Name</th>
                            <th class="px-4 py-2 text-left uppercase">Company</th>
                            <th class="px-4 py-2 text-center uppercase">Description</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $project)
                            <tr>
                                <td
                                    class="border border-gray-700 px-4 py-2 text-left text-purple-200 hover:bg-purple-900 hover:text-white">
                                    <a href="/books/detail/{{ $project->name }}">{{ $project->name }}</a>
                                </td>
                                <td
                                    class="border border-gray-700 px-4 py-2 text-left text-purple-200 hover:bg-purple-900 hover:text-white">
                                    <a href="/authors/detail/{{ $project->company }}">{{ $project->company }}</a>
                                </td>
                                <td class="border border-gray-700 px-4 py-2 text-center">
                                    <p>{{ $project->short_description }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
