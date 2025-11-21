@extends('layouts.master')

@section('content')
  <div class="max-w-sm mx-auto mt-6">
    <form action="admin/user/{{ $user->id }}/delete" method="POST" 
          class="bg-gray-100 border border-gray-300 rounded-lg shadow-md p-4">
      @csrf
      @method('DELETE')

      <input type="submit" 
             value="Supprimer l'utilisateur"
             class="w-full px-4 py-2 bg-red-500 hover:bg-red-600 
                    text-gray-100 font-semibold rounded-md 
                    transition-colors duration-200 cursor-pointer" />
    </form>
  </div>
@endsection
