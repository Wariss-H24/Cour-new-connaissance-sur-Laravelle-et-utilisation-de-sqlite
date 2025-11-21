@extends('layouts.master')
@section('content')
<div class="max-w-3xl mx-auto mt-6">
    @if ($users)
        @foreach ($users as $user)
            <div class="p-6 mb-6 border border-gray-300 rounded-lg shadow-md bg-gray-100 hover:shadow-lg transition-shadow duration-200">
               
                <p class="font-semibold text-gray-800 text-lg">{{ $user->name }}</p>
                <p class="text-gray-600">{{ $user->email }}</p>

               
                <form action="/admin/user/{{ $user->id }}/role" method="POST" class="mt-4">
                    @csrf
                    @method('PATCH')
                    <label for="role-{{ $user->id }}" class="block text-sm font-medium text-gray-700 mb-1">
                         Rôle de l'utilisateur
                    </label>
                    <select name="role" id="role-{{ $user->id }}"
                        class="block w-1/2 px-3 py-2 border border-gray-400 rounded-md shadow-sm 
                               focus:outline-none focus:ring-yellow-400 focus:border-yellow-400 sm:text-sm bg-white">
                        <option value="lecteur" {{ $user->role === 'lecteur' ? 'selected' : '' }}>Lecteur</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="auteur" {{ $user->role === 'auteur' ? 'selected' : '' }}>Auteur</option>
                    </select>
                    <button type="submit"
                        class="mt-3 inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-md shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                         Mettre à jour le rôle
                    </button>
                </form>

                
                <form action="/user/{{ $user->id }}/delete" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value=" Supprimer l'utilisateur"
                        class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 cursor-pointer" />
                </form>
            </div>
        @endforeach
    @else
        <p class="text-gray-500 italic text-center">Aucun utilisateur disponible.</p>
    @endif
</div>
@endsection
