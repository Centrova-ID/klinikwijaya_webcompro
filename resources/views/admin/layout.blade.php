<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Top Navigation Bar -->
    <nav class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] shadow-lg fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-white">Klinik Wijaya Admin</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-white font-semibold">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-lg transition-colors">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-16">
        <!-- Page Header -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <h2 class="text-3xl font-bold text-gray-900">@yield('header')</h2>
            </div>
        </div>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Navigation Tabs -->
            <div class="mb-8 border-b border-gray-200">
                <nav class="flex space-x-8">
                    <a href="{{ route('admin.dashboard') }}" class="pb-4 px-1 border-b-2 font-medium text-sm {{ request()->routeIs('admin.dashboard') ? 'border-[#3F5499] text-[#3F5499]' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.articles.index') }}" class="pb-4 px-1 border-b-2 font-medium text-sm {{ request()->routeIs('admin.articles.*') ? 'border-[#3F5499] text-[#3F5499]' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Artikel
                    </a>
                    <a href="{{ route('admin.events.index') }}" class="pb-4 px-1 border-b-2 font-medium text-sm {{ request()->routeIs('admin.events.*') ? 'border-[#3F5499] text-[#3F5499]' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Event
                    </a>
                </nav>
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
