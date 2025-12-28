<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Primary Meta Tags --}}
    <title>@yield('title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')</title>
    <meta name="title" content="@yield('meta_title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')">
    <meta name="description" content="@yield('meta_description', 'Klinik Wijaya menyediakan layanan rehabilitasi stroke dengan terapi robotik pertama di Indonesia. Bagian dari Rumah Sakit Pondok Indah Group dengan tenaga medis profesional dan fasilitas modern.')">
    <meta name="keywords" content="@yield('meta_keywords', 'klinik wijaya, terapi robotik, stroke, rehabilitasi, fisioterapi, pondok indah group, klinik stroke jakarta')">
    <meta name="author" content="Klinik Wijaya">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    
    {{-- Canonical URL --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')">
    <meta property="og:description" content="@yield('og_description', 'Klinik Wijaya menyediakan layanan rehabilitasi stroke dengan terapi robotik pertama di Indonesia.')">
    <meta property="og:image" content="@yield('og_image', asset('assts/logo/logo-klinik-wijaya.png'))">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Klinik Wijaya">
    
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter_title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Rehabilitasi stroke dengan terapi robotik pertama di Indonesia.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assts/logo/logo-klinik-wijaya.png'))">
    
    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assts/logo/logo-klinik-wijaya.png') }}">
    
    {{-- Preconnect for Performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">
    
    {{-- Tailwind CSS CDN - WAJIB DIPERTAHANKAN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Fonts dengan display=swap untuk menghindari FOIT --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    {{-- Hotwire Turbo - Untuk navigasi cepat --}}
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@8.0.4/dist/turbo.es2017-umd.js" defer></script>
    
    {{-- AOS.js CSS - Animasi ringan --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    {{-- Custom Styles --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        /* Turbo Progress Bar - Optional styling */
        .turbo-progress-bar {
            height: 3px;
            background-color: #3F5499;
        }
        
        /* AOS transitions compatibility with Turbo */
        [data-aos] {
            transition-property: transform, opacity;
        }
    </style>
    
    {{-- Structured Data (JSON-LD) --}}
    @stack('structured-data')
    
    @stack('styles')
</head>
<body class="bg-white" data-turbo="true">
    {{-- Navbar --}}
    @include('partials.navbar.main')
    
    {{-- Main Content --}}
    <main id="main-content">
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('partials.footer.main')
    
    {{-- AOS.js - Deferred untuk performa optimal --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    
    {{-- Initialize AOS with Turbo lifecycle --}}
    <script defer>
        // Initialize AOS after DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: false,
                    mirror: false,
                    offset: 50,
                    delay: 0,
                    disable: false
                });
            }
        });
        
        // Reinitialize AOS after Turbo navigation
        document.addEventListener('turbo:load', function() {
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        });
        
        // Refresh AOS after Turbo render
        document.addEventListener('turbo:render', function() {
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        });
        
        // Update meta tags on Turbo navigation for SPA-like behavior
        document.addEventListener('turbo:before-render', function(event) {
            // Preserve meta tags from incoming page
            const newHead = event.detail.newBody.ownerDocument.head;
            const currentHead = document.head;
            
            // Update meta description
            const newDescription = newHead.querySelector('meta[name="description"]');
            const currentDescription = currentHead.querySelector('meta[name="description"]');
            if (newDescription && currentDescription) {
                currentDescription.setAttribute('content', newDescription.getAttribute('content'));
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
