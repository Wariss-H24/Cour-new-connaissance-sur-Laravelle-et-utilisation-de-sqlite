<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <div class="max-w-5xl mx-auto p-6">
    
    <!-- Navigation -->
    <nav class="flex flex-wrap items-center justify-between mb-6 border-b border-gray-300 pb-3">
      <div class="space-x-4 text-sm font-medium">
        <a href="/" class="text-gray-700 hover:text-green-600">Accueil</a>
        <a href="/about" class="text-gray-700 hover:text-green-600">A propos</a>
        @auth
          <a href="/citation" class="text-gray-700 hover:text-green-600">Citation</a>
          <a href="/citation-gestion" class="text-gray-700 hover:text-green-600">Gestion des Citation</a>
          <a href="/gestion-user" class="text-gray-700 hover:text-green-600">Gestion des Utilisateur</a>
        @endauth
        @guest
          <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-600">Login</a>
          <a href="{{ route('register') }}" class="text-gray-700 hover:text-green-600">Register</a>
        @endguest
        @auth
          <a href="{{ route('profile') }}" class="text-gray-700 hover:text-green-600">Votre profil</a>
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <input type="submit" value="Se déconnecter"
                   class="ml-2 px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md cursor-pointer text-sm">
          </form>
        @endauth
      </div>
    </nav>

    <!-- Header -->
    <header class="mb-6">
      <h1 class="text-3xl font-bold text-gray-900 mb-2"> Trouvez l'inspiration du jour</h1>
      <p class="text-gray-600 leading-relaxed">
        Plongez dans un océan de sagesse. De Confucius à Steve Jobs, explorez les paroles qui ont marqué l'histoire 
        et qui résonnent encore aujourd'hui. Que vous cherchiez la motivation, la réflexion ou simplement un beau proverbe, 
        vous êtes au bon endroit.
      </p>
    </header>

    <!-- Contenu -->
    <main>
      @yield('content')
    </main>
  </div>
</body>
</html>
