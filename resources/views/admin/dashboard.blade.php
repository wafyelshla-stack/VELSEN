<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panou Administrare - Velsen Media Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#001b44",
              secondary: "#e05a10",
              surface: "#f8fafc",
            }
          }
        }
      }
    </script>
</head>
<body class="bg-surface text-gray-800 min-h-screen">
    <!-- Top Nav -->
    <header class="bg-primary text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <a href="/" target="_blank" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Velsen" class="h-9 w-auto" style="background: transparent;">
                    <span class="font-extrabold text-xl tracking-wide text-white">Velsen Admin</span>
                </a>
                <span class="bg-white/10 text-xs px-2.5 py-1 rounded-full font-mono text-secondary">Media Manager</span>
            </div>

            <div class="flex items-center gap-4">
                <a href="/" target="_blank" class="text-xs font-semibold px-3 py-1.5 rounded bg-white/10 hover:bg-white/20 transition-all flex items-center gap-1.5">
                    <span>Vezi Site-ul Live</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-xs font-semibold px-3 py-1.5 rounded bg-red-600/80 hover:bg-red-600 text-white transition-all">
                        Deconectare
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span class="font-semibold text-sm">{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-bold">&times;</button>
            </div>
        @endif

        <div class="mb-8">
            <h1 class="text-2xl font-extrabold text-primary">Administrare Imagini Site</h1>
            <p class="text-sm text-gray-500 mt-1">Încărcați și schimbați fotografiile afișate pe pagina principală și în secțiunea de servicii.</p>
        </div>

        <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($imageFields as $key => $field)
                    @php
                        $currentUrl = \App\Models\SiteSetting::url($key, $field['default']);
                        $hasCustom = \App\Models\SiteSetting::get($key) !== null;
                    @endphp
                    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="p-4 border-b border-gray-100 bg-gray-50/50 flex items-start justify-between">
                            <div>
                                <h3 class="font-bold text-sm text-primary">{{ $field['label'] }}</h3>
                                <p class="text-xs text-gray-500 mt-0.5">{{ $field['description'] }}</p>
                            </div>
                            @if($hasCustom)
                                <span class="bg-emerald-100 text-emerald-700 text-[10px] uppercase font-bold px-2 py-0.5 rounded-full shrink-0">Personalizat</span>
                            @else
                                <span class="bg-gray-100 text-gray-600 text-[10px] uppercase font-bold px-2 py-0.5 rounded-full shrink-0">Implicit</span>
                            @endif
                        </div>

                        <!-- Image Preview -->
                        <div class="p-4 bg-gray-90 border-b border-gray-100 flex items-center justify-center min-h-[160px] relative group">
                            <img src="{{ $currentUrl }}" alt="{{ $field['label'] }}" class="max-h-36 w-auto object-contain rounded shadow-sm">
                        </div>

                        <!-- Upload Input -->
                        <div class="p-4 bg-white">
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Schimbă Imaginea</label>
                            <input type="file" name="images[{{ $key }}]" accept="image/*"
                                   class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Save Floating / Sticky Bar -->
            <div class="sticky bottom-6 mt-8 bg-white/95 backdrop-blur border border-gray-200 shadow-2xl rounded-2xl p-4 flex items-center justify-between max-w-2xl mx-auto z-40">
                <div class="flex items-center gap-3">
                    <div class="w-3 h-3 rounded-full bg-secondary animate-pulse"></div>
                    <span class="text-xs font-semibold text-gray-700">După selectarea fișierelor, apăsați pe salvare.</span>
                </div>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-secondary text-white font-bold text-sm hover:bg-secondary/90 shadow-md shadow-secondary/30 transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 002-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
                    <span>Salvează Modificările</span>
                </button>
            </div>
        </form>
    </main>
</body>
</html>
