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
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assts/logo/klinikwijaya.png') }}" alt="Logo Klinik Wijaya" class="h-12 sm:h-14 md:h-16 lg:h-9 w-auto object-contain">
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-gray-700 hover:text-[#3F5499] font-medium text-base transition-colors duration-200">
                    Beranda
                </a>

                <div class="relative dropdown group">
                    <button class="px-4 py-2 text-gray-700 hover:text-[#3F5499] font-medium text-base flex items-center space-x-1 transition-colors duration-200">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-200 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu hidden absolute left-0 top-full w-72 bg-white rounded-lg shadow-lg py-1 px-1 border border-gray-100">
                        <a href="{{ route('layanan.stroke-rehabilitation') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Robotic rehabilitation
                        </a>
                        <a href="{{ route('layanan.terapi-robotik') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Aquatic rehabilitation
                        </a>
                        <a href="{{ route('layanan.musculosceletal') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Physical therapy
                        </a>
                    </div>
                </div>

                <a href="{{ route('fasilitas') }}" class="px-4 py-2 text-gray-700 hover:text-[#3F5499] font-medium text-base transition-colors duration-200">
                    Fasilitas
                </a>

                <div class="relative dropdown group">
                    <button class="px-4 py-2 text-gray-700 hover:text-[#3F5499] font-medium text-base flex items-center space-x-1 transition-colors duration-200">
                        <span>Tentang Kami</span>
                        <svg class="w-4 h-4 group-hover:rotate-180 transition-transform duration-200 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu hidden absolute left-0 top-full w-64 bg-white rounded-lg shadow-lg py-1 px-1 border border-gray-100">
                        <a href="{{ route('tentang-kami') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Tentang Kami
                        </a>
                        <a href="{{ route('artikel.index') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Artikel
                        </a>
                        <a href="{{ route('event.index') }}" class="block px-4 py-2 text-base text-gray-700 hover:bg-[#3F5499]/10 hover:text-[#3F5499] rounded">
                            Event
                        </a>
                    </div>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="hidden lg:flex items-center space-x-3">
                <a href="{{ route('buat-janji') }}" class="px-6 py-2 bg-[#3F5499] text-white rounded-lg font-medium text-base hover:bg-[#3F5499]/80">
                    Buat Janji Temu
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="lg:hidden">
                <button type="button" class="text-gray-700 hover:text-[#3F5499] focus:outline-none focus:text-teal-600" id="mobile-menu-button">
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
            <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-[#3F5499] rounded-lg font-medium transition-colors duration-200">
                Home
            </a>
            
            <div class="space-y-1">
                <button class="w-full text-left px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-[#3F5499] rounded-lg font-medium flex items-center justify-between transition-colors duration-200" onclick="toggleMobileSubmenu('layanan')">
                    <span>Layanan</span>
                    <svg class="w-4 h-4 transform transition-transform" id="layanan-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1" id="layanan-submenu">
                    <a href="{{ route('layanan.stroke-rehabilitation') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Pusat Rehabilitasi Stroke</a>
                    <a href="{{ route('layanan.terapi-robotik') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Terapi Robotik</a>
                    <a href="{{ route('layanan.musculosceletal') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Musculoskeletal</a>
                </div>
            </div>

            <a href="{{ route('fasilitas') }}" class="block px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-[#3F5499] rounded-lg font-medium transition-colors duration-200">
                Fasilitas
            </a>

            <div class="space-y-1">
                <button class="w-full text-left px-4 py-3 text-gray-700 hover:bg-teal-50 hover:text-[#3F5499] rounded-lg font-medium flex items-center justify-between transition-colors duration-200" onclick="toggleMobileSubmenu('tentang')">
                    <span>Tentang Kami</span>
                    <svg class="w-4 h-4 transform transition-transform" id="tentang-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1" id="tentang-submenu">
                    <a href="{{ route('tentang-kami') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Tentang Kami</a>
                    <a href="{{ route('artikel.index') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Artikel</a>
                    <a href="{{ route('event.index') }}" class="block px-4 py-2 text-base text-gray-600 hover:text-[#3F5499]">Event</a>
                </div>
            </div>

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
