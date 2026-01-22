@extends('layout.main')

@section('title', 'Ekosistem Robotik Fourier - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/fourier-ecosystem-hero.png') }}" alt="Ekosistem Robotik Fourier - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Ekosistem Robotik Fourier</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Transformasi Holistik Restorasi Gerak</p>
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
            <span class="text-[#3F5499] font-semibold">Ekosistem Robotik Fourier</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Menghubungkan Kembali Otak dengan Tubuh Melalui Teknologi Presisi</h2>
            <p class="text-lg md:text-xl opacity-80">
                Pemulihan neurologis bukan sekadar latihan fisik, melainkan sebuah perjalanan untuk menghubungkan kembali otak 
                dengan tubuh. Klinik Wijaya mempersembahkan rangkaian lengkap teknologi robotik dari Fourier Intelligence—Cycle Motus, 
                Wrist Motus, dan Ankle Motus—untuk memastikan setiap sendi dan otot mendapatkan kesempatan terbaik untuk pulih.
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
                    <img src="{{ asset('assts/img/layanan/fourier-ecosystem-overview.png') }}" alt="Fourier Ecosystem Overview" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-neutral-800 mb-6">Pendekatan Rehabilitasi Komprehensif</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Fourier Intelligence menghadirkan solusi robotik yang dirancang untuk menargetkan setiap aspek pemulihan motorik—
                    dari koordinasi bilateral hingga presisi gerakan halus dan stabilitas fungsional.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Dengan menggabungkan tiga teknologi utama dalam satu ekosistem terintegrasi, Klinik Wijaya menawarkan program 
                    rehabilitasi yang menyeluruh dan berbasis data untuk hasil yang terukur dan optimal.
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-4 rounded">
                    <p class="text-gray-700 font-semibold italic">
                        "Kami tidak hanya melatih Anda untuk bergerak, kami melatih Anda untuk kembali hidup mandiri."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Cycle Motus Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <div class="inline-block bg-[#3F5499]/10 px-4 py-2 rounded-full mb-4">
                <span class="text-[#3F5499] font-bold">CYCLE MOTUS</span>
            </div>
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Sinergi Kekuatan Ekstremitas Atas & Bawah</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Bukan sekadar sepeda statis; ini adalah sistem cerdas yang mampu melakukan adaptasi motorik secara otomatis
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/cycle-motus-device.png') }}" alt="Cycle Motus Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Sistem Isokinetik Cerdas</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Robot mendeteksi kemampuan otot pengguna. Jika pasien kelelahan, robot akan memberikan bantuan 
                                    motorik (Passive Mode). Sebaliknya, jika kekuatan meningkat, robot akan memberikan hambatan 
                                    (Active-Resistive) untuk membangun massa otot.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Keseimbangan Bilateral</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Membantu menyeimbangkan kekuatan antara sisi tubuh yang lemah (hemiparesis) dengan sisi yang sehat, 
                                    mencegah kompensasi gerakan yang salah dan memastikan pemulihan yang proporsional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Wrist Motus Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <div class="inline-block bg-[#3F5499]/10 px-4 py-2 rounded-full mb-4">
                <span class="text-[#3F5499] font-bold">WRIST MOTUS</span>
            </div>
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Presisi untuk Kemandirian</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Pergelangan tangan adalah kunci dari hampir semua aktivitas okupasi manusia
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right" class="order-2 md:order-1">
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Tiga Derajat Kebebasan (3-DoF)</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Memungkinkan latihan pergelangan tangan yang komprehensif, mencakup gerakan memutar (circumduction) 
                                    yang krusial untuk kegiatan seperti memutar kunci atau memegang sendok.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Neurofeedback Visual</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Melalui layar interaktif, pasien dapat melihat upaya gerakan mereka diterjemahkan ke dalam tugas 
                                    digital, memperkuat koneksi antara niat di otak dan respons di tangan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="order-1 md:order-2">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/wrist-motus-device.png') }}" alt="Wrist Motus Device" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ankle Motus Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <div class="inline-block bg-[#3F5499]/10 px-4 py-2 rounded-full mb-4">
                <span class="text-[#3F5499] font-bold">ANKLE MOTUS</span>
            </div>
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Fondasi Stabilitas dan Mobilitas</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Langkah kaki yang stabil dimulai dari pergelangan kaki yang fungsional
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/ankle-motus-device.png') }}" alt="Ankle Motus Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Propriosepsi & Keseimbangan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Selain memperkuat otot, alat ini melatih saraf untuk merasakan posisi sendi (propriosepsi), 
                                    yang sangat penting untuk mencegah risiko jatuh pada pasien lansia atau pasca-stroke.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-start mb-3">
                            <div class="w-10 h-10 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Rehabilitasi Berbasis Kekuatan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sangat efektif untuk mengatasi kekakuan sendi (spasticity) melalui peregangan robotik yang 
                                    lembut namun konsisten, mengembalikan Range of Motion secara bertahap.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Visual Benefits Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Ekosistem Terintegrasi untuk Hasil Optimal</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Sinergi teknologi Fourier yang bekerja bersama untuk pemulihan komprehensif
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Visual 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/fourier-coordination.png') }}" alt="Full Body Coordination" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Koordinasi Seluruh Tubuh</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Latihan simultan untuk ekstremitas atas, bawah, dan sendi-sendi kritis
                    </p>
                </div>
            </div>

            {{-- Visual 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/fourier-data-integration.png') }}" alt="Data Integration" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Integrasi Data Terpadu</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Semua progres terekam dalam satu dashboard untuk monitoring holistik
                    </p>
                </div>
            </div>

            {{-- Visual 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/fourier-adaptive-therapy.png') }}" alt="Adaptive Therapy" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Terapi Adaptif Cerdas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem AI yang menyesuaikan intensitas berdasarkan kemampuan real-time
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Comprehensive Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Mengapa Memilih Terapi Robotik Komprehensif di Klinik Wijaya?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Dengan menggabungkan ketiga alat ini, Klinik Wijaya menawarkan rehabilitasi yang menyeluruh dan terintegrasi
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Reason 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Personalisasi Data</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Setiap kemajuan pada pergelangan tangan, kaki, maupun koordinasi tubuh direkam dalam satu database medis yang 
                    terpadu, memungkinkan analisis mendalam dan penyesuaian program yang presisi.
                </p>
            </div>

            {{-- Reason 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Efisiensi Terapi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sesi latihan yang lebih intensif dalam waktu yang lebih singkat dibandingkan terapi manual tradisional, 
                    dengan repetisi tinggi yang optimal untuk neuroplastisitas.
                </p>
            </div>

            {{-- Reason 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Kualitas Hidup</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Kami tidak hanya melatih Anda untuk bergerak, kami melatih Anda untuk kembali hidup mandiri dengan kemampuan 
                    fungsional yang diperlukan dalam kehidupan sehari-hari.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Technology Overview Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-neutral-800 mb-6">Teknologi Fourier Intelligence</h2>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Sensor Multi-Parameter</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Mengukur torsi, kecepatan, Range of Motion, dan pola gerakan dengan akurasi tinggi
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
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Adaptive Resistance Control</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Resistensi yang menyesuaikan otomatis berdasarkan kemampuan dan progres pasien
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
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Interactive Visual Feedback</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Gamifikasi yang meningkatkan motivasi dan engagement selama terapi
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
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Comprehensive Reporting System</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Laporan progres detail untuk pasien dan tim medis dengan visualisasi grafis
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
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Safety & Comfort Design</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Ergonomis dan dilengkapi dengan sistem keamanan multi-layer untuk kenyamanan maksimal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/fourier-technology-overview.png') }}" alt="Fourier Technology" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Commitment Section --}}
<section class="py-12 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-6">Komitmen Klinik Wijaya untuk Pemulihan Optimal</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                Dengan lebih dari 20 tahun pengalaman dalam rehabilitasi neurologis, Klinik Wijaya terus berinovasi dengan 
                menghadirkan teknologi terdepan dari Fourier Intelligence. Ekosistem robotik komprehensif kami dirancang untuk 
                memberikan hasil yang terukur, terapi yang efisien, dan yang terpenting—mengembalikan kemandirian Anda.
            </p>
            <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-6 rounded-lg inline-block text-left max-w-3xl">
                <p class="text-gray-700 text-lg font-semibold mb-2">
                    "Konsultasikan Pemulihan Anda"
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Jangan biarkan keterbatasan fisik menghambat masa depan Anda. Tim spesialis kami siap membantu Anda 
                    merancang program rehabilitasi yang tepat dengan teknologi Fourier.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-16 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Mulai Perjalanan Pemulihan Holistik Anda</h2>
            <p class="text-xl text-white/90 mb-8">
                Rasakan manfaat ekosistem robotik terintegrasi dari Fourier Intelligence di Klinik Wijaya
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#3F5499] font-bold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    Konsultasi Sekarang
                </a>
                <a href="{{ route('layanan.terapi-robotik') }}" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-[#3F5499] transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Lihat Robotik Lainnya
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
