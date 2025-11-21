@extends ('layouts.master')

@section('citation')
    Citation Layout
@endsection

@section('content')
<div class="max-w-3xl mx-auto mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6"> Citations</h2>

    @if ($citations && count($citations) > 0)
        @foreach ($citations as $citation)
            <div class="p-6 mb-6 border border-gray-300 rounded-lg shadow-md bg-gray-100 hover:shadow-lg transition-shadow duration-200">
                
               
                @include('partials.citation')
                <div class="mt-4">
                    @include('partials.delete')
                </div>
            </div>
        @endforeach
    @else
        <p class="text-gray-500 italic text-center">Aucune citation disponible.</p>
        <div class="mt-4">
            @include('partials.delete')
        </div>
    @endif
</div>
@endsection
