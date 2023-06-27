@extends('components.layout')

@section('content')
    <x-success />
    <x-fail />

    <div class="projects-table-container">
        <div class="table-container">
            <h1 class="text-3xl font-bold mb-5 p-2 pb-5 text-center">Projects</h1>
            @auth
                <a href="{{ route('project-form') }}" class="bg-white text-gray-900 rounded mt-2 p-1">Add a
                    project</a>
            @endauth
            <div class="overflow-x-auto">
                <table class="projects-table">
                    <thead>
                        <tr>
                            <th class="header-table-name">Name</th>
                            <th class="header-table-company">Company</th>
                            <th class="header-table-description">Description</th>
                            <th class="header-buttons"> Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $project)
                            <tr>
                                <td class="table-project-name">
                                    <a href="/detail/{{ $project->name }}">{{ $project->name }}</a>
                                </td>
                                <td class="table-project-company">
                                    <a href="/detail/{{ $project->company }}">{{ $project->company }}</a>
                                </td>
                                <td class="table-project-description">
                                    <p>{{ $project->short_description }}
                                </td>
                                <td>
                                    <form action="{{ route('delete-project', ['id' => $project->id]) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-white text-gray-900 rounded mt-2 p-1">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('edit-project', ['id' => $project->id]) }}"
                                        class="bg-white text-gray-900 rounded mt-2 p-1">Edit</a> --}}
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
