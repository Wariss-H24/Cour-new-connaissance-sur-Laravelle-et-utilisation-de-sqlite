@extends ('Layouts.master')
@section('content')
    <h2>Gestion des citations</h2>
    <p>Bienvenue dans l'interface de gestion des citations. Ici, vous pouvez ajouter, modifier ou supprimer des citations de notre collection.</p>
    @include('citation.create')
@endsection