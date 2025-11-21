@extends ('Layouts.master')

@section('content')
    <h2>Ajouter une nouvelle citation</h2>
    <form action="/store-citation" method="POST" enctype="multipart/form-data">
    @csrf
   

    @include('partials.citation-form')

     <button type="submit">Ajouter la citation</button>
    </form>
@endsection