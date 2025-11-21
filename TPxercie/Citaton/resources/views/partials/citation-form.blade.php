<div class="max-w-md mx-auto">
  <div>
    <label for="texte" class="block text-sm font-medium text-gray-800 mb-1">
      Texte de la citation
    </label>
    <textarea
      id="texte"
      name="texte"
      rows="4"
      class="w-full border border-gray-400 rounded-md p-2 
             focus:outline-none focus:ring-2 focus:ring-yellow-400 
             bg-gray-100 text-gray-900"
      required
    >{{ old('texte', $citation->texte ?? '') }}</textarea>
  </div>

  <div class="mt-4">
    <label for="auteur" class="block text-sm font-medium text-gray-800 mb-1">
      Auteur
    </label>
    <input
      type="text" id="auteur" name="auteur"
      class="w-full border border-gray-400 rounded-md p-2 
             focus:outline-none focus:ring-2 focus:ring-green-500 
             bg-gray-100 text-gray-900"
      value="{{ old('auteur', $citation->auteur ?? '') }}" required
    />
  </div>
</div>
