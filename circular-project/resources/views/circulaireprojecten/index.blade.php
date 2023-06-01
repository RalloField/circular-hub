@extends('components.layout')

@section('content')
    <x-success />
    <x-fail />

    <div class="bg-gray-900 opacity-95 text-white">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-5 p-2 pb-5 text-center">Projects</h1>
            <a href="{{ route('project-form') }}" class="bg-white text-gray-900 rounded mt-2 p-1">Add a
                project</a>
            <div class="overflow-x-auto">
                <table class="table-auto border-collapse border border-gray-700 w-full mt-5 p-2 pt-5">
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
                                    class="border border-gray-700 px-4 py-2 text-left text-orange-200 hover:bg-orange-900 hover:text-white">
                                    <a href="/detail/{{ $project->name }}">{{ $project->name }}</a>
                                </td>
                                <td
                                    class="border border-gray-700 px-4 py-2 text-left text-orange-200 hover:bg-orange-900 hover:text-white">
                                    <a href="/detail/{{ $project->company }}">{{ $project->company }}</a>
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
