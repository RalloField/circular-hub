@extends ('components.layout')

@section('content')
    <div class="bg-gray-900 opacity-95 text-purple-900">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-5 p-2 text-center text-white">Add a new project</h1>
            <div class="m-6 max-w-lg mx-auto p-2 rounded-xl">
                <form method="POST" action="{{ route('create-project') }}">
                    @csrf

                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-orange-200">Project Name:
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="border border-orange-200 p-2 w-full" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="company" class="block mb-2 uppercase font-bold text-xs text-orange-200">Company: </label>
                    <input type="text" id="company" name="company" value="{{ old('company') }}"
                        class="border border-orange-200 p-2 w-full" required>
                    @error('company')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="short_description"
                        class="block mb-2 uppercase font-bold text-xs text-orange-200">Description: </label>
                    <input type="text" id="short_description" name="short_description"
                        value="{{ old('short_description') }}" class="border border-orange-200 p-2 w-full" required>
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
