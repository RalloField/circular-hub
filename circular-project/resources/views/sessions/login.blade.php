@extends ('components.layout')

@section('content')
    <div class="login-container">
        <div class="login-form-container">
            <h1 class="login-header">Login</h1>
            <div class="login-form">
                <form method="POST" action="{{ route('login-user') }}">
                    @csrf

                    <label for="email" class="form-email">Email: </label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="input-email"
                        required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    <label for="password" class="form-password">Password: </label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}"
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
