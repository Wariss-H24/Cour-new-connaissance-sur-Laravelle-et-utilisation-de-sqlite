@extends ('Layouts.master')

@section('content')
<div class="max-w-2xl mx-auto mt-8 bg-gray-100 border border-gray-300 rounded-lg shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-2">Profil de l'utilisateur</h2>
    <p class="text-gray-700 mb-4">Bienvenue sur votre page de profil.</p>

    <h1 class="text-2xl font-bold text-gray-900 mb-4">Profil de l'utilisateur</h1>

    <p class="text-gray-600 leading-relaxed">
        Bienvenu sur notre site <span class="font-semibold text-green-600">{{ Auth::user()->name }}</span>.  
        Ici, vous pouvez gérer vos informations personnelles et vos préférences en toute simplicité.
    </p>
</div>
@endsection
