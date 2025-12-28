<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <title>@yield('title', 'Admin Panel') - Klinik Wijaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3F5499',
                        secondary: '#7AC6E4',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div>
        {{-- Main Content --}}
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            {{-- Navigation Tabs --}}
            <div class="mb-8 flex justify-between items-center">
                <nav class="flex space-x-3">
                    <a href="{{ route('admin.dashboard') }}" class="py-1.5 px-3 font-medium text-sm {{ request()->routeIs('admin.dashboard') ? 'text-[#3F5499] bg-neutral-200' : 'text-gray-500 hover:bg-neutral-100' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.articles.index') }}" class="py-1.5 px-3 font-medium text-sm {{ request()->routeIs('admin.articles.*') ? 'text-[#3F5499] bg-neutral-200' : 'text-gray-500 hover:bg-neutral-100' }}">
                        Artikel
                    </a>
                    <a href="{{ route('admin.events.index') }}" class="py-1.5 px-3 font-medium text-sm {{ request()->routeIs('admin.events.*') ? 'text-[#3F5499] bg-neutral-200' : 'text-gray-500 hover:bg-neutral-100' }}">
                        Event
                    </a>
                </nav>

                <div class="flex items-center space-x-4">
                    <span class="font-semibold">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-1 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                    <p class="font-bold">Berhasil!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                    <p class="font-bold">Error!</p>
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
