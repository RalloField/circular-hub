@extends ('components.layout')

@section('content')
    <div class="register-container">
        <div class="register-form-container">
            <h1 class="register-header">Register</h1>
            <div class="register-form">
                <form method="POST" action="">
                    @csrf

                    <label for="name" class="form-name">Name:
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="input-name"
                        required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="lastname" class="form-lastname">Last name: </label>
                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}"
                        class="input-lastname" required>
                    @error('lastname')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="email" class="form-email">Email: </label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="input-email"
                        required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="password" class="form-password">Password: </label>
                    <input type="text" id="password" name="password" value="{{ old('password') }}"
                        class="input-password" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="bg-orange-200 text-gray-900 rounded mt-2 p-1 hover:bg-orange-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
