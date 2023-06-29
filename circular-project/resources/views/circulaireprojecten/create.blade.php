@extends ('components.layout')

@section('content')
    <div class="project-container">
        <div class="project-form-container">
            <h1 class="project-header">Add a new project</h1>
            <div class="project-form">
                <form method="POST" action="{{ route('create-project') }}">
                    @csrf

                    <label for="name" class="form-name">Project Name:
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="input-name"
                        required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="short_description" class="form-short_description">Description: </label>
                    <input type="text" id="short_description" name="short_description"
                        value="{{ old('short_description') }}" class="input-description" required>
                    @error('short_description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="bg-orange-200 text-gray-900 rounded mt-2 p-1 hover:bg-orange-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
