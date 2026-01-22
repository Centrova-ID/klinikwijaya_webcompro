@extends('layout.main')

@section('title', 'C-Mill VR+ - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/0/robotik_andago/robotik_andago-4.webp') }}" alt="C-Mill VR+ - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">C-Mill VR+</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Melangkah Melampaui Batas dengan Simulasi Dunia Nyata</p>
            </div>
        </div>
    </div>
</section>

{{-- Breadcrumb --}}
<section class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-[#3F5499]">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-gray-500">Layanan</span>
            <span class="mx-2">/</span>
            <a href="{{ route('layanan.stroke-rehabilitation') }}" class="hover:text-[#3F5499]">Pusat Rehabilitasi Stroke</a>
            <span class="mx-2">/</span>
            <a href="{{ route('layanan.terapi-robotik') }}" class="hover:text-[#3F5499]">Rehabilitasi Robotik</a>
            <span class="mx-2">/</span>
            <span class="text-[#3F5499] font-semibold">C-Mill VR+</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Teknologi Robotik yang Aman. Tantangan Kehidupan Nyata. Hasil yang Terukur.</h2>
            <p class="text-lg md:text-xl opacity-80">
                Di Klinik Wijaya, kami memahami bahwa berjalan bukan sekadar melangkahkan kaki, melainkan kemampuan untuk beradaptasi 
                dengan lingkungan yang dinamis, seperti menghindari rintangan, berbelok di keramaian, dan merespons perubahan permukaan.
            </p>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/0/robotik_andago/robotik_andago-4.webp') }}" alt="C-Mill VR+ Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-neutral-800 mb-6">Apa itu C-Mill VR+?</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Klinik Wijaya dengan bangga menghadirkan <strong>C-Mill VR+</strong> dari Hocoma, sebuah mahakarya teknologi rehabilitasi 
                    yang menggabungkan treadmill medis fungsional dengan kekuatan Virtual Reality (VR) dan Augmented Reality (AR).
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    C-Mill VR+ adalah sistem evaluasi dan pelatihan pola jalan (gait training) yang menggunakan proyeksi visual pada permukaan 
                    treadmill serta layar simulasi besar di hadapan pasien. Teknologi ini menciptakan lingkungan "dunia nyata" yang terkendali, 
                    memungkinkan pasien untuk berlatih berjalan dalam berbagai skenario kehidupan sehari-hari namun aman dari risiko jatuh.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Key Benefits Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Mengapa C-Mill VR+ Adalah Investasi Terbaik untuk Pemulihan Anda?</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Empat keunggulan teknologi yang membedakan C-Mill VR+ dari treadmill rehabilitasi konvensional
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Benefit 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Adaptasi Lingkungan yang Cerdas</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Berbeda dengan treadmill biasa, C-Mill memproyeksikan rintangan virtual (seperti lubang di jalan, batu, atau sungai) langsung 
                    pada permukaan tempat Anda melangkah. Ini melatih koordinasi mata-langkah kaki dan kecepatan reaksi yang krusial untuk mencegah jatuh.
                </p>
            </div>

            {{-- Benefit 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Keterlibatan Kognitif melalui Gamifikasi</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dengan integrasi Virtual Reality, latihan tidak lagi terasa membosankan. Pasien dapat berjalan melalui taman virtual, 
                    mengumpulkan poin, atau mengikuti simulasi kegiatan sehari-hari. Aktivitas ini memicu kerja otak secara ganda (dual-tasking), 
                    melatih aspek fisik sekaligus kognitif secara simultan.
                </p>
            </div>

            {{-- Benefit 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Analisis Gait Instan & Akurat</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    C-Mill dilengkapi dengan plat sensor tekanan (force plate) di bawah sabuk treadmill. Teknologi ini secara otomatis merekam 
                    setiap detail langkah Anda—mulai dari panjang langkah, distribusi berat badan, hingga simetri kaki—memberikan data objektif 
                    bagi terapis kami untuk menyesuaikan program latihan Anda.
                </p>
            </div>

            {{-- Benefit 4 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lingkungan yang Terproteksi</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dilengkapi dengan sistem penyangga (harness) yang kokoh, pasien dapat mengeksplorasi batas kemampuan mereka tanpa rasa takut. 
                    Rasa aman ini secara psikologis sangat penting untuk membangun kembali kepercayaan diri pasien pasca-stroke atau trauma.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- {{-- Visual Experience Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Pengalaman Visual yang Imersif</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Simulasi dunia nyata yang membawa latihan rehabilitasi ke level berikutnya
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Visual 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/cmill-projection.png') }}" alt="C-Mill Projection" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Proyeksi pada Treadmill</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Rintangan virtual diproyeksikan langsung di permukaan treadmill untuk melatih koordinasi visual-motorik
                    </p>
                </div>
            </div>

            {{-- Visual 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/cmill-vr-screen.png') }}" alt="C-Mill VR Screen" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Layar VR Imersif</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Lingkungan 3D yang realistis menciptakan pengalaman berjalan di berbagai skenario kehidupan sehari-hari
                    </p>
                </div>
            </div>

            {{-- Visual 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/cmill-feedback.png') }}" alt="C-Mill Real-time Feedback" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Feedback Real-time</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Data instan menampilkan performa dan progres latihan untuk motivasi optimal
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

{{-- Patient Benefits Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Manfaat Utama bagi Pasien Klinik Wijaya</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Hasil terukur yang mempersiapkan Anda kembali ke kehidupan sehari-hari
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Benefit 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Pencegahan Jatuh</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Melatih keseimbangan dinamis dan kemampuan adaptasi yang diperlukan di tempat umum, mengurangi risiko jatuh hingga signifikan.
                </p>
            </div>

            {{-- Benefit 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Kecepatan Respons</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Memperbaiki kemampuan otak untuk mengambil keputusan gerak secara cepat dalam menghadapi rintangan dan perubahan lingkungan.
                </p>
            </div>

            {{-- Benefit 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Transisi yang Mulus</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Menyiapkan pasien secara mental dan fisik sebelum kembali ke aktivitas sosial mandiri dengan rasa percaya diri yang optimal.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Technology Features Section --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-12 items-start">

            <!-- LEFT -->
            <div class="lg:col-span-5" data-aos="fade-right" data-aos-once="true">
                <h2 class="text-3xl font-extrabold text-neutral-900 leading-tight mb-6">
                    Teknologi Canggih di Balik
                    <span class="text-[#3F5499]">C-Mill VR+</span>
                </h2>

                <p class="text-gray-600 text-base leading-relaxed">
                    C-Mill VR+ menggabungkan teknologi sensor presisi, augmented reality,
                    dan sistem keamanan adaptif untuk menciptakan terapi berjalan
                    yang aman, efektif, dan realistis.
                </p>
            </div>

            <!-- RIGHT -->
            <div class="lg:col-span-7 space-y-5">

                <!-- ITEM -->
                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">
                            Force Plate Sensors
                        </h3>
                        <p class="text-sm text-gray-600">
                            Mengukur distribusi berat badan dan tekanan kaki dengan presisi tinggi
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">
                            Augmented Reality Projection
                        </h3>
                        <p class="text-sm text-gray-600">
                            Proyeksi AR langsung pada permukaan treadmill untuk simulasi rintangan real-time
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">
                            Virtual Reality Environment
                        </h3>
                        <p class="text-sm text-gray-600">
                            Lingkungan 3D imersif yang mensimulasikan berbagai kondisi kehidupan nyata
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">
                            Safety Harness System
                        </h3>
                        <p class="text-sm text-gray-600">
                            Sistem pengaman otomatis yang memberikan dukungan sesuai kebutuhan pasien
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">
                            Data Analytics Dashboard
                        </h3>
                        <p class="text-sm text-gray-600">
                            Analisis komprehensif untuk tracking progres dan penyesuaian program terapi
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


{{-- Clinical Applications --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Untuk Siapa C-Mill VR+ Dirancang?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Teknologi yang tepat untuk berbagai kondisi neurologis dan ortopedis
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Application 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pasca Stroke</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pemulihan pola jalan dan keseimbangan setelah serangan stroke
                </p>
            </div>

            {{-- Application 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Parkinson's Disease</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Melatih koordinasi dan mencegah freezing of gait
                </p>
            </div>

            {{-- Application 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Cedera Tulang Belakang</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Rehabilitasi kemampuan berjalan pasca trauma spinal
                </p>
            </div>

            {{-- Application 4 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Gangguan Keseimbangan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Program pencegahan jatuh untuk lansia dan pasien berisiko tinggi
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Comparison Section --}}
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">C-Mill VR+ vs Treadmill Rehabilitasi Konvensional</h2>
            <p class="text-gray-600">Perbedaan yang membuat pemulihan Anda lebih efektif dan aman</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white">
                            <th class="py-4 px-6 text-left font-semibold text-lg">ASPEK</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">TREADMILL KONVENSIONAL</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">C-MILL VR+ KLINIK WIJAYA</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Simulasi Lingkungan</td>
                            <td class="py-4 px-6 text-gray-600">Hanya permukaan datar standar</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Simulasi VR/AR</span> dengan rintangan dinamis</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Analisis Gait</td>
                            <td class="py-4 px-6 text-gray-600">Observasi visual manual</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Sensor force plate</span> dengan data real-time</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Aspek Kognitif</td>
                            <td class="py-4 px-6 text-gray-600">Latihan fisik saja</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Dual-tasking</span> fisik + kognitif bersamaan</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Motivasi Pasien</td>
                            <td class="py-4 px-6 text-gray-600">Cenderung monoton</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Gamifikasi interaktif</span> yang engaging</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Persiapan Dunia Nyata</td>
                            <td class="py-4 px-6 text-gray-600">Terbatas pada gerakan dasar</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Simulasi skenario</span> kehidupan sehari-hari</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Keamanan</td>
                            <td class="py-4 px-6 text-gray-600">Pegangan manual standar</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Harness system</span> otomatis adaptif</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- Commitment Section --}}
<section class="py-12 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-6">Standar Baru Rehabilitasi di Jakarta</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                Sebagai pelopor rehabilitasi robotik, Klinik Wijaya terus berkomitmen membawa teknologi yang terbukti secara klinis 
                seperti C-Mill VR+ ke Indonesia. Kami menggabungkan akurasi data robotik dengan sentuhan pengalaman manusia untuk 
                memastikan setiap langkah Anda bermuara pada kemandirian.
            </p>
        </div>
    </div>
</section>

@endsection
