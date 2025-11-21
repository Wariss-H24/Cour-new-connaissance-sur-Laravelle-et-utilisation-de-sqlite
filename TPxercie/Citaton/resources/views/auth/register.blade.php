@extends('Layouts.master')

@section('content')
<div class="max-w-md mx-auto mt-8   rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6"> Register</h2>

    <form method="POST" action="{{ route('save') }}" class="space-y-4">
        @csrf
        @method('POST')

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input id="name" type="text" name="name" required autofocus value="{{ old('name') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                          focus:outline-none ">
            @error('name')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input id="email" type="email" name="email" required value="{{ old('email') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                          focus:outline-none">
            @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input id="password" type="password" name="password" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                          focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white">
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input id="password-confirm" type="password" name="password_confirmation" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                          focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 bg-white">
            @error('password')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                    class="w-full px-4 py-2 bg-green-500 hover:bg-green-600 
                           text-white font-semibold rounded-md shadow transition-colors duration-200">
                Register
            </button>
        </div>
    </form>
</div>
@endsection
