<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificare Admin - Velsen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#001b44",
              secondary: "#e05a10",
              surface: "#fcf9f8",
            }
          }
        }
      }
    </script>
</head>
<body class="bg-surface text-gray-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-xl border border-gray-100 p-8">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/5 text-primary mb-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Velsen" class="h-10 w-auto">
            </div>
            <h1 class="text-2xl font-bold text-primary">Panou de Administrare</h1>
            <p class="text-sm text-gray-500 mt-1">Introduceți datele de acces pentru a gestiona site-ul</p>
        </div>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Utilizator / Email</label>
                <input type="text" name="email" value="{{ old('email', 'admin@velsen.ro') }}" required placeholder="admin@velsen.ro"
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Parolă</label>
                <input type="password" name="password" required placeholder="••••••••"
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all">
            </div>

            <button type="submit"
                    class="w-full py-3.5 px-6 rounded-lg bg-secondary text-white font-bold tracking-wide hover:bg-secondary/90 shadow-md shadow-secondary/30 transition-all">
                Autentificare
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} Velsen Servicii de Curățenie. Toate drepturile rezervate.
        </div>
    </div>
</body>
</html>
