<article class="max-w-md mx-auto bg-gray-100 border border-gray-300 rounded-lg shadow-md p-4 mb-6">
  <h3 class="text-lg font-semibold text-gray-800 mb-2">
    {{ $citation->texte }}
  </h3>
  
  <p class="text-sm text-gray-700 mb-1">
    <em class="text-green-600">Auteur :</em> {{ $citation->auteur }}
  </p>
  
  <p class="text-sm text-gray-600 mb-3">
    <em class="text-yellow-500">Publié le</em> {{ $citation->created_at->format('d/m/Y') }}
  </p>
  
  <a href="/citation/{{ $citation->id }}/edit"
     class="inline-block px-3 py-1 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium rounded-md transition-colors duration-200">
    Éditer la citation
  </a>
</article>
