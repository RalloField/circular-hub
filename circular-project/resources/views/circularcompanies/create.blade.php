@extends ('components.layout')

@section('content')
    <div class="company-container">
        <div class="company-form-container">
            <h1 class="company-header">Register your company:</h1>
            <div class="company-form">
                <form method="POST" action="{{ route('create-project') }}">
                    @csrf

                    <label for="name" class="form-name">Company name:
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="input-name"
                        required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="address" class="form-address">Address: </label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="input-address"
                        required>
                    @error('address')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="country" class="form-country">Country: </label>
                    <input type="text" id="country" name="country" value="{{ old('country') }}" class="input-country"
                        required>
                    @error('country')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="type" class="form-type">Type: </label>
                    <input type="text" id="type" name="type" value="{{ old('type') }}" class="input-type"
                        required>
                    @error('type')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="bg-orange-200 text-gray-900 rounded mt-2 p-1 hover:bg-orange-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
