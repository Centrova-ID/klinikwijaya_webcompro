@extends('layout.main')

@section('title', 'Arm Motus M2 - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/robotik-fourier.png') }}" alt="Arm Motus M2 - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Arm Motus M2</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Revolusi Neurorehabilitasi: Memulihkan Kemandirian dengan AI</p>
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
            <span class="text-[#3F5499] font-semibold">Arm Motus M2</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-bold mb-4">Intensitas Tinggi. Akurasi Presisi. Pemulihan Lebih Cepat.</h2>
            <p class="text-lg md:text-xl opacity-80">
                Dalam dunia rehabilitasi pasca-stroke dan cedera neurologis, kecepatan pemulihan motorik sangat bergantung pada 
                dua hal: intensitas latihan dan akurasi gerakan. Klinik Wijaya dengan bangga menghadirkan Arm Motus M2, sebuah 
                solusi robotik mutakhir yang dirancang untuk mendefinisikan ulang standar terapi ekstremitas atas (lengan dan bahu).
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
                    <img src="{{ asset('assts/img/layanan/robotik-fourier.png') }}" alt="Arm Motus M2 Device" class="w-full h-full  object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Apa Itu Arm Motus M2?</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Arm Motus M2 adalah sistem robotik berbasis AI yang dikembangkan oleh <strong>Fourier Intelligence</strong>. 
                    Alat ini dirancang khusus untuk membantu pasien dengan gangguan fungsi motorik akibat stroke, cedera otak traumatik, 
                    atau penyakit degeneratif lainnya untuk melatih kembali jalur saraf melalui prinsip <strong>neuroplastisitas</strong>.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Berbeda dengan terapi konvensional yang bersifat manual, Arm Motus M2 menawarkan presisi yang tidak tertandingi 
                    oleh tangan manusia, memberikan terapi yang aman, terukur, dan dapat dipersonalisasi sesuai kondisi unik setiap pasien.
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-4 rounded">
                    <p class="text-gray-700 font-semibold italic">
                        "Kemampuan untuk kembali menyisir rambut, makan sendiri, atau sekadar berjabat tangan adalah kemenangan 
                        besar bagi pasien kami."
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
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Keunggulan Medis: Mengapa Robotik Lebih Efektif?</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Arm Motus M2 menawarkan presisi dan efektivitas yang tidak dapat dicapai oleh terapi manual
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Feature 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Teknologi Force Feedback</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sensor sensitif pada robot ini mampu mendeteksi kekuatan otot pasien yang paling lemah sekalipun. Robot akan 
                    memberikan bantuan (assist) hanya saat dibutuhkan, mendorong pasien untuk aktif bergerak secara mandiri.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Evaluasi Objektif & Real-Time</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Motus M2 memberikan laporan data medis yang akurat mengenai jangkauan gerak (Range of Motion), kekuatan otot, 
                    dan koordinasi pasien setiap sesi. Ini memudahkan dokter dan fisioterapis untuk memantau progres secara objektif.
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
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Latihan Berbasis Gamifikasi</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien berlatih melalui simulasi visual yang interaktif. Hal ini meningkatkan motivasi dan keterlibatan kognitif, 
                    yang terbukti secara klinis mempercepat pembentukan sinapsis baru di otak.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Visual Experience Section --}}
<!-- <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Pengalaman Terapi yang Komprehensif</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kombinasi teknologi AI dan gamifikasi untuk hasil rehabilitasi yang optimal
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Visual 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/arm-motus-m2-ai-system.png') }}" alt="AI System" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">AI-Powered Assistance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem kecerdasan buatan yang menyesuaikan level bantuan secara otomatis sesuai kemampuan pasien
                    </p>
                </div>
            </div>

            {{-- Visual 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/arm-motus-m2-interactive.png') }}" alt="Interactive Games" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Interactive Training Games</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Simulasi interaktif yang membuat terapi terasa menyenangkan dan meningkatkan partisipasi aktif
                    </p>
                </div>
            </div>

            {{-- Visual 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/arm-motus-m2-analytics.png') }}" alt="Data Analytics" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Comprehensive Analytics</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Dashboard analitik lengkap untuk monitoring progres dan penyesuaian program terapi
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

{{-- Program Benefits Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Manfaat Program Rehabilitasi dengan Motus M2</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Di Klinik Wijaya, kami memahami bahwa setiap pasien memiliki perjalanan pemulihan yang unik
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Benefit 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Aman dan Terukur</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Meminimalisir risiko cedera akibat pola gerakan yang salah dengan sistem kontrol presisi tinggi dan monitoring real-time.
                </p>
            </div>

            {{-- Benefit 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Personalisasi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Program latihan dapat disesuaikan dengan tingkat keparahan kondisi pasien, mulai dari tahap pasif hingga aktif-resistif.
                </p>
            </div>

            {{-- Benefit 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Efisien</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pengulangan gerakan (repetisi) yang tinggi dalam satu sesi memastikan stimulasi otak yang optimal untuk neuroplastisitas.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Technology Features Section --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-12 items-start">

            <!-- LEFT : TITLE -->
            <div class="lg:col-span-5" data-aos="fade-right" data-aos-once="true">
                <h2 class="font-americana text-3xl font-extrabold text-neutral-900 leading-tight">
                    Teknologi AI yang Mengubah
                    <span class="text-[#3F5499]">Standar Rehabilitasi</span>
                </h2>
            </div>

            <!-- RIGHT : FEATURES -->
            <div class="lg:col-span-7 space-y-5">

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">
                            Adaptive Force Control
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Kontrol gaya adaptif yang menyesuaikan resistensi berdasarkan kemampuan pasien secara real-time
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">
                            Multi-Joint Movement Analysis
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Analisis gerakan multi-sendi untuk evaluasi komprehensif fungsi bahu, siku, dan pergelangan tangan
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">
                            Passive-Assisted-Active Modes
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Tiga mode latihan: pasif (robot bergerak), assisted (bantuan parsial), dan aktif (resistensi)
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">
                            Cloud-Based Progress Tracking
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Data tersimpan di cloud untuk akses mudah oleh tim medis dan monitoring jangka panjang
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-slate-50 border rounded-xl p-5">
                    <div class="w-9 h-9 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0">
                        ✓
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">
                            Safety Emergency Stop
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Sistem keamanan multi-layer dengan tombol emergency stop dan batas torsi otomatis
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


{{-- Ideal Candidates Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Siapa yang Membutuhkan Terapi Ini?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Layanan ini sangat direkomendasikan bagi pasien dengan berbagai kondisi neurologis dan ortopedis
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
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pasca-Stroke</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Fase akut maupun kronis dengan gangguan fungsi motorik ekstremitas atas
                </p>
            </div>

            {{-- Candidate 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Cedera Sumsum Tulang Belakang</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Spinal Cord Injury dengan kelemahan atau kelumpuhan lengan
                </p>
            </div>

            {{-- Candidate 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Multiple Sclerosis & Parkinson</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Penyakit degeneratif dengan gangguan kontrol motorik progresif
                </p>
            </div>

            {{-- Candidate 4 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pasca-Operasi Ortopedi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pemulihan setelah operasi pada bahu, siku, atau lengan
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Commitment Section --}}
<section class="py-12 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Melangkah Menuju Masa Depan yang Lebih Mandiri</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                Dengan hadirnya Fourier Motus M2 di Klinik Wijaya, teknologi medis tercanggih kini berada dalam jangkauan Anda. 
                Kami mengundang Anda untuk berkonsultasi dengan tim spesialis kedokteran fisik dan rehabilitasi kami untuk melihat 
                bagaimana keajaiban robotik ini dapat membantu Anda atau orang terkasih meraih kembali kualitas hidupnya.
            </p>
            <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-6 rounded-lg inline-block text-left max-w-3xl">
                <p class="text-gray-700 text-lg font-semibold mb-2">
                    "Klinik Wijaya: Dimana Teknologi Bertemu Empati"
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Lebih dari 20 tahun pengalaman dalam rehabilitasi neurologis, kami memadukan teknologi AI terdepan dengan 
                    pendekatan humanis untuk hasil pemulihan yang optimal.
                </p>
            </div>
        </div>
    </div>
</section>


@endsection
