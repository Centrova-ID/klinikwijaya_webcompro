@extends('layout.main')

@section('title', 'Armeo® Spring - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-center bg-cover"
    style="background-image: url('{{ asset('assts/img/0/robotik_armeo/robotik_armeo-1.webp') }}');">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl"
                 data-aos-once="true"
                 data-aos="fade-up"
                 data-aos-duration="1000">
                 
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">
                    Armeo® Spring
                </h1>

                <p class="text-xl md:text-2xl drop-shadow-lg">
                    Meraih Kembali Kemandirian Melalui Presisi Gerak
                </p>
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
            <span class="text-[#3F5499] font-semibold">Armeo® Spring</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-bold mb-4">Mengembalikan Fungsi Lengan dan Tangan dengan Teknologi Eksoskeleton Canggih</h2>
            <p class="text-lg md:text-xl opacity-80">
                Kemampuan untuk menyuap makanan, menulis, atau sekadar menggenggam tangan orang terkasih adalah fungsi fungsional 
                yang sering kali terganggu pasca-stroke. Di Klinik Wijaya, kami menghadirkan Armeo® Spring dari Hocoma, sebuah 
                teknologi eksoskeleton lengan yang dirancang untuk membangkitkan kembali potensi motorik lengan Anda.
            </p>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-12 bg-white ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/0/robotik_armeo/robotik_armeo-2.webp') }}" alt="Armeo Spring Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Apa itu Armeo® Spring?</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Armeo® Spring adalah perangkat rehabilitasi robotik untuk ekstremitas atas yang menggunakan konsep 
                    <strong>self-initiated repetitive therapy</strong>. Berbeda dengan terapi pasif, Armeo® Spring mendeteksi 
                    upaya gerak sekecil apa pun dari pasien dan memberikan dukungan mekanis yang proporsional melalui sistem 
                    pegas terintegrasi.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Alat ini memungkinkan pasien yang memiliki kelemahan otot signifikan untuk melakukan latihan fungsional 
                    dalam ruang gerak tiga dimensi (3D), mencakup bahu, siku, hingga pergelangan tangan.
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-4 rounded">
                    <p class="text-gray-700 font-semibold italic">
                        "Setiap gerakan kecil adalah langkah besar menuju kemandirian. Armeo® Spring memberdayakan Anda untuk 
                        meraih kembali kehidupan yang Anda impikan."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Key Features Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Mengapa Armeo® Spring Menjadi Standar Baru di Klinik Wijaya?</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Empat keunggulan teknologi yang membuat Armeo® Spring efektif dalam pemulihan fungsi lengan dan tangan
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Feature 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Weight Support yang Dapat Disesuaikan</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Salah satu hambatan utama pasien stroke dalam melatih tangan adalah berat lengan mereka sendiri yang terasa 
                    terlalu berat untuk diangkat. Armeo® Spring menetralisir efek gravitasi ini melalui eksoskeleton, sehingga 
                    pasien dapat menggerakkan lengan dengan usaha minimal dan fokus pada koordinasi gerak yang benar.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 7v10h16V7H4zm14 8h-4v-4h4v4zM6 9h4v6H6V9zm0 8h4v2H6v-2zm10 2h-4v-2h4v2z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Stimulasi Neuroplastisitas melalui Repetisi Intensif</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pemulihan saraf memerlukan ribuan repetisi untuk membangun jalur sinyal baru di otak. Dengan dukungan mekanis 
                    Armeo, pasien mampu melakukan pengulangan gerakan jauh lebih banyak dibandingkan terapi manual, tanpa mengalami 
                    kelelahan otot (fatigue) yang berlebihan.
                </p>
            </div>

            {{-- Feature 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Augmented Performance Feedback</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Latihan dilakukan melalui simulasi interaktif pada layar monitor (gamifikasi). Pasien akan melakukan tugas-tugas 
                    fungsional virtual—seperti memindahkan objek atau meraih sasaran—yang memberikan umpan balik langsung kepada otak. 
                    Hal ini terbukti secara medis meningkatkan motivasi dan mempercepat proses belajar motorik.
                </p>
            </div>

            {{-- Feature 4 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Penilaian Objektif dan Terukur</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Setiap sesi latihan direkam secara digital. Alat ini mengukur jangkauan gerak (Range of Motion), kekuatan, 
                    dan koordinasi secara akurat. Data ini memungkinkan tim medis kami di Klinik Wijaya untuk menyajikan grafik 
                    kemajuan nyata kepada pasien dan keluarga.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Visual Experience Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Pengalaman Latihan Interaktif dengan Gamifikasi</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Latihan yang menyenangkan dan efektif melalui simulasi virtual yang engaging
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Visual 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/armeo-spring-3d-workspace.png') }}" alt="Armeo 3D Workspace" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Ruang Gerak 3D</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Latihan fungsional dalam ruang tiga dimensi mencakup bahu, siku, dan pergelangan tangan
                    </p>
                </div>
            </div>

            {{-- Visual 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/armeo-spring-gamification.png') }}" alt="Armeo Gamification" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Simulasi Interaktif</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Game-based therapy yang membuat latihan terasa menyenangkan dan meningkatkan motivasi
                    </p>
                </div>
            </div>

            {{-- Visual 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/armeo-spring-feedback.png') }}" alt="Armeo Real-time Feedback" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Umpan Balik Real-time</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Data performa instan yang membantu pasien dan terapis memantau progres
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Clinical Benefits Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Manfaat Klinis Bagi Pasien</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Program rehabilitasi dengan Armeo® Spring di Klinik Wijaya ditujukan untuk pemulihan optimal fungsi ekstremitas atas
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Benefit 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 text-center">Mencegah Kekakuan Sendi</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Mengurangi risiko kekakuan sendi dan atrofi otot pada lengan melalui gerakan aktif teratur
                </p>
            </div>

            {{-- Benefit 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 text-center">Koordinasi Mata-Tangan</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Meningkatkan koordinasi antara mata dan tangan (hand-eye coordination) untuk aktivitas sehari-hari
                </p>
            </div>

            {{-- Benefit 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 text-center">Fungsi Motorik Halus</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Mengoptimalkan fungsi motorik halus yang diperlukan untuk kemandirian aktivitas harian
                </p>
            </div>

            {{-- Benefit 4 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14 3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43 15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22 16.29z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 text-center">Mengurangi Spastisitas</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Mengurangi kekakuan saraf (spastisitas) melalui latihan gerak yang ritmis dan terkontrol
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Technology Features Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Teknologi Eksoskeleton di Balik Armeo® Spring</h2>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Exoskeleton Frame Adjustable</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Rangka eksoskeleton yang dapat disesuaikan dengan berbagai ukuran tubuh dan tingkat kelemahan
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Gravity Compensation System</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Sistem pegas yang menetralisir efek gravitasi, mengurangi beban berat lengan hingga mendekati nol
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Motion Capture Sensors</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Sensor presisi tinggi yang mendeteksi dan merekam setiap gerakan untuk analisis mendalam
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Interactive Game Library</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Perpustakaan latihan virtual yang dapat disesuaikan dengan tingkat kesulitan dan target terapi
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Progress Tracking Dashboard</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Grafik kemajuan digital yang memvisualisasikan peningkatan Range of Motion dan kekuatan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/armeo-spring-technology.png') }}" alt="Armeo Spring Technology" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ideal Candidates Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Untuk Siapa Armeo® Spring Dirancang?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Teknologi yang tepat untuk berbagai kondisi gangguan fungsi ekstremitas atas
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Candidate 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pasca Stroke</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pemulihan fungsi lengan dan tangan setelah serangan stroke dengan kelemahan parsial atau total
                </p>
            </div>

            {{-- Candidate 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Cedera Otak Traumatik</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Rehabilitasi motorik lengan pasca-trauma kepala atau cedera otak
                </p>
            </div>

            {{-- Candidate 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Multiple Sclerosis</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Meningkatkan kontrol motorik dan koordinasi pada pasien dengan gangguan saraf degeneratif
                </p>
            </div>

            {{-- Candidate 4 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Kelemahan Otot Kronis</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien dengan kelemahan otot lengan akibat berbagai kondisi neurologis atau ortopedis
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Commitment Section --}}
<section class="py-12 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Pengalaman dan Kepercayaan Lebih dari 20 Tahun</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                Di Klinik Wijaya, Armeo® Spring merupakan bagian dari ekosistem rehabilitasi kami yang telah berpengalaman 
                lebih dari 20 tahun. Kami memadukan kecanggihan teknologi Hocoma dengan sentuhan personal dari terapis kami 
                untuk memastikan setiap gerakan membawa Anda lebih dekat pada pemulihan total.
            </p>
            <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-6 rounded-lg inline-block text-left max-w-3xl">
                <p class="text-gray-700 text-lg font-semibold mb-2">
                    "Hidupkan Kembali Fungsi Tangan Anda"
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Jangan biarkan keterbatasan gerak membatasi interaksi Anda dengan dunia. Jadwalkan konsultasi dan uji coba 
                    Armeo® Spring di Klinik Wijaya hari ini.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
