<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Klinik Wijaya - Rumah Sakit Pondok Indah Group')</title>
    
    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Klinik Wijaya" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Custom Styles --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    {{-- Navbar --}}
    @include('partials.navbar.main')
    
    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    
    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>
