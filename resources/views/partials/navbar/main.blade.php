<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 0;
        right: 0;
        height: 8px;
        background: transparent;
    }
</style>

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('assts/logo/klinikwijaya.png') }}" alt="Logo Klinik Wijaya" class="w-[260px]">
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-gray-700 hover:text-teal-600 font-medium text-sm transition-colors duration-200">
                    Beranda
                </a>

                <div class="relative dropdown group">
                    <button class="px-4 py-2 text-gray-700 hover:text-teal-600 font-medium text-sm flex items-center space-x-1 transition-colors duration-200">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu hidden absolute left-0 top-full w-72 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
                        <a href="{{ route('layanan.stroke-rehabilitation') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Pusat Rehabilitasi Stroke
                        </a>
                        <a href="{{ route('layanan.terapi-robotik') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Terapi Robotik
                        </a>
                        <a href="{{ route('layanan.musculosceletal') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Musculoskeletal
                        </a>
                    </div>
                </div>

                <a href="{{ route('fasilitas') }}" class="px-4 py-2 text-gray-700 hover:text-teal-600 font-medium text-sm transition-colors duration-200">
                    Fasilitas
                </a>

                <div class="relative dropdown group">
                    <button class="px-4 py-2 text-gray-700 hover:text-teal-600 font-medium text-sm flex items-center space-x-1 transition-colors duration-200">
                        <span>Tentang Kami</span>
                        <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu hidden absolute left-0 top-full w-64 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
                        <a href="{{ route('tentang-kami') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Tentang Kami
                        </a>
                        <a href="{{ route('artikel.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Artikel
                        </a>
                        <a href="{{ route('event.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-colors duration-200">
                            Event
                        </a>
                    </div>
                </div>

                <a href="{{ route('galeri') }}" class="px-4 py-2 text-gray-700 hover:text-teal-600 font-medium text-sm transition-colors duration-200">
                    Galeri
                </a>
            </div>

            {{-- Action Buttons --}}
            <div class="hidden lg:flex items-center space-x-3">
                <a href="{{ route('buat-janji') }}" class="px-6 py-2.5 bg-teal-600 text-white rounded font-medium text-sm hover:bg-teal-700 transition-colors duration-200 shadow-md hover:shadow-lg">
                    Buat Janji
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="lg:hidden">
                <button type="button" class="text-gray-700 hover:text-teal-600 focus:outline-none focus:text-teal-600" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div class="hidden lg:hidden" id="mobile-menu">
        <div class="px-4 pt-2 pb-4 space-y-2 bg-white border-t border-gray-200">
            <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg font-medium transition-colors duration-200">
                Home
            </a>
            
            <div class="space-y-1">
                <button class="w-full text-left px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg font-medium flex items-center justify-between transition-colors duration-200" onclick="toggleMobileSubmenu('layanan')">
                    <span>Layanan</span>
                    <svg class="w-4 h-4 transform transition-transform" id="layanan-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1" id="layanan-submenu">
                    <a href="{{ route('layanan.stroke-rehabilitation') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Pusat Rehabilitasi Stroke</a>
                    <a href="{{ route('layanan.terapi-robotik') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Terapi Robotik</a>
                    <a href="{{ route('layanan.musculosceletal') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Musculoskeletal</a>
                </div>
            </div>

            <a href="{{ route('fasilitas') }}" class="block px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg font-medium transition-colors duration-200">
                Fasilitas
            </a>

            <div class="space-y-1">
                <button class="w-full text-left px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg font-medium flex items-center justify-between transition-colors duration-200" onclick="toggleMobileSubmenu('tentang')">
                    <span>Tentang Kami</span>
                    <svg class="w-4 h-4 transform transition-transform" id="tentang-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1" id="tentang-submenu">
                    <a href="{{ route('tentang-kami') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Tentang Kami</a>
                    <a href="{{ route('artikel.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Artikel</a>
                    <a href="{{ route('event.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-teal-600">Event</a>
                </div>
            </div>

            <a href="{{ route('galeri') }}" class="block px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg font-medium transition-colors duration-200">
                Galeri
            </a>

            <div class="pt-4">
                <a href="{{ route('buat-janji') }}" class="block text-center px-6 py-3 bg-teal-600 text-white rounded-lg font-medium hover:bg-teal-700 transition-colors duration-200">
                    Buat Janji
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Mobile submenu toggle
    function toggleMobileSubmenu(id) {
        const submenu = document.getElementById(id + '-submenu');
        const icon = document.getElementById(id + '-icon');
        submenu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
</script>
