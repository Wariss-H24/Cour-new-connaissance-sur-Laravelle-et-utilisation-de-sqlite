@extends('Layouts.master')

@section('content')
<div class="max-w-md mx-auto mt-10   rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6"> Login</h2>

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        @method('POST')

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input id="email" type="email" name="email" required autofocus value="{{ old('email') }}"
                   class="w-full px-3 py-2  border-gray-300 rounded-md shadow-sm 
                          focus:outline-none   bg-white">
            @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input id="password" type="password" name="password" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                          focus:outline-none  bg-white">
            @error('password')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                    class="w-full px-4 py-2 bg-green-500 hover:bg-green-600 
                           text-white font-semibold rounded-md shadow transition-colors duration-200">
                Login
            </button>
        </div>
    </form>
</div>
@endsection
