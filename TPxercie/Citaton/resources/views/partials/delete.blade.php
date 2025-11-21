<form action="/citation/{{ $citation->id }}/delete" method="POST" class="max-w-sm mx-auto mt-6">
    @csrf
    @method('DELETE')
    <input 
        type="submit" 
        value=" Effacer la citation"
        class="px-4 py-2 bg-red-500 hover:bg-red-600 
               text-gray-100 font-semibold rounded-md 
               shadow-md cursor-pointer transition-colors duration-200" />
</form>