@extends('layouts.master')

<!-- @section('title')
    Editer un citation{{ $citation->title }}
@endsection -->

@section('content')
<div class="max-w-lg mx-auto mt-6 bg-gray-100 border border-gray-300 rounded-lg shadow-md p-6">
    <form action="{{ url('citation/' . $citation->id  . '/edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        @include('partials.citation-form')

        <button type="submit"
            class="mt-4 px-4 py-2 bg-green-500 hover:bg-green-600 
                   text-white font-semibold rounded-md shadow 
                   transition-colors duration-200">
             Editer
        </button>
    </form>

   <div class="flex items-center gap-4 mt-4">
    <a href="/citation"
       class="inline-block px-3 py-2 bg-yellow-400 hover:bg-yellow-500 
              text-gray-900 font-medium rounded-md shadow transition-colors duration-200">
        Retour aux citations
    </a>

    @include('partials.delete')
</div>


</div>
@endsection
