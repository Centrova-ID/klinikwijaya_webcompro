@extends('layout.main')

@section('title', 'Aquatic Rehabilitation - Rehabilitasi Akuatik Pasca-Stroke | Klinik Wijaya')
@section('meta_description', 'Rehabilitasi akuatik di kolam hidroterapi privat Klinik Wijaya Jakarta Selatan. Program terapi pasca-stroke dengan prinsip fisika air untuk pemulihan lebih cepat dan aman.')

@section('content')

<!-- Hero Section dengan Background Image -->
<section class="relative h-[500px] bg-cover bg-center" style="background-image: linear-gradient(rgba(63, 84, 153, 0.7), rgba(122, 198, 228, 0.7)), url('/public/assts/img/aquatic-hero.jpg');">
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="font-americana-bold text-4xl md:text-6xl font-bold mb-4" data-aos="fade-up">Aquatic Rehabilitation</h1>
            <p class="text-xl md:text-2xl font-light" data-aos="fade-up" data-aos-delay="100">Standar Baru Pemulihan Pasca-Stroke di Kolam Hidroterapi Privat</p>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <ol class="flex flex-wrap items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-[#3F5499]">Beranda</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="/layanan" class="hover:text-[#3F5499]">Layanan</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="/layanan/pusat-rehabilitasi-stroke" class="hover:text-[#3F5499]">Pusat Rehabilitasi Stroke</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="text-[#3F5499] font-medium">Aquatic Rehabilitation</li>
        </ol>
    </div>
</nav>

<!-- Intro Banner -->
<section class="py-12 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-americana text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up">Transformasi Pemulihan: Mengapa Air Menjadi Media Terapi Terbaik?</h2>
        <p class="text-lg md:text-xl max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Bagi pasien pasca-stroke, setiap gerakan adalah sebuah kemenangan. Klinik Wijaya menghadirkan rehabilitasi akuatik yang memanfaatkan prinsip fisika air untuk menciptakan lingkungan terapi yang aman sekaligus menantang secara fisik.
        </p>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="inline-block px-4 py-2 bg-[#3F5499]/10 text-[#3F5499] rounded-full text-sm font-semibold mb-4">REHABILITASI MEDIS BERBASIS AIR</span>
                <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-6">Apa Itu Aquatic Rehabilitation?</h2>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    Rehabilitasi akuatik adalah program terapi latihan yang dilakukan di dalam air dengan suhu terkontrol (sekitar 32°C - 34°C). Terapi ini dipandu langsung oleh dokter spesialis Kedokteran Fisik dan Rehabilitasi (Sp.KFR) serta fisioterapis yang terlatih secara khusus untuk memanfaatkan prinsip fisika air demi tujuan medis.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Berbeda dengan sekadar berenang, rehabilitasi akuatik adalah <span class="font-semibold text-[#3F5499]">sains gerak yang memanfaatkan elemen alam</span> untuk melampaui keterbatasan fisik yang dialami pasien pasca-stroke.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="100">
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="/public/assts/img/aquatic-pool.jpg" alt="Kolam Hidroterapi Klinik Wijaya" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Statement Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12" data-aos="fade-up">Tantangan Terapi Konvensional di Darat</h2>
            <div class="bg-white rounded-xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Hambatan fisik seperti <span class="font-semibold text-[#3F5499]">kelemahan otot</span>, <span class="font-semibold text-[#3F5499]">hilangnya keseimbangan</span>, hingga <span class="font-semibold text-[#3F5499]">rasa takut akan terjatuh</span> seringkali menjadi kendala utama dalam sesi fisioterapi konvensional (darat).
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/5 to-[#7AC6E4]/5 rounded-lg p-6 border-l-4 border-[#3F5499]">
                    <p class="text-lg text-gray-800 italic">
                        "Pemulihan yang efektif memerlukan lingkungan yang mendukung keamanan sekaligus tantangan fisik. Itulah sebabnya, Aquatic Rehabilitation melalui fasilitas kolam hidroterapi privat kami menjadi layanan unggulan dalam mempercepat kemandirian pasien."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Keunggulan Akuatik -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Keunggulan Akuatik Dibanding Terapi Manual di Darat</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Meskipun terapi manual di darat tetap penting, rehabilitasi di dalam air menawarkan keunggulan unik yang tidak dapat direplikasi di lingkungan kering
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Keunggulan 1: Gaya Apung -->
            <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center mb-3">
                            <span class="text-4xl font-bold text-[#3F5499] mr-3">1</span>
                            <h3 class="text-xl font-bold text-gray-800">Melawan Gravitasi dengan Gaya Apung (Buoyancy)</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Di darat, pasien stroke harus menopang 100% berat badan mereka, yang seringkali terlalu berat untuk tungkai yang lemah. Di dalam air, gaya apung membantu menopang tubuh hingga 90%.
                        </p>
                        <div class="bg-[#3F5499]/5 rounded-lg p-4 border-l-4 border-[#3F5499]">
                            <p class="text-sm font-semibold text-[#3F5499] mb-2">✓ Manfaat Klinis:</p>
                            <p class="text-gray-700 text-sm">
                                Pasien yang belum mampu berdiri di darat dapat mulai berlatih jalan di air dengan beban minimal pada sendi, meningkatkan kepercayaan diri secara instan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keunggulan 2: Resistensi Multi-Arah -->
            <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center mb-3">
                            <span class="text-4xl font-bold text-[#3F5499] mr-3">2</span>
                            <h3 class="text-xl font-bold text-gray-800">Resistensi Multi-Arah yang Lembut (Viscosity)</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Air memberikan hambatan alami (viskositas) yang setara dengan beban statis namun bersifat low-impact.
                        </p>
                        <div class="bg-[#3F5499]/5 rounded-lg p-4 border-l-4 border-[#3F5499]">
                            <p class="text-sm font-semibold text-[#3F5499] mb-2">✓ Manfaat Klinis:</p>
                            <p class="text-gray-700 text-sm">
                                Memperkuat otot tanpa risiko cedera berlebih. Setiap gerakan di air berfungsi sebagai latihan penguatan yang menyeluruh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keunggulan 3: Tekanan Hidrostatik -->
            <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center mb-3">
                            <span class="text-4xl font-bold text-[#3F5499] mr-3">3</span>
                            <h3 class="text-xl font-bold text-gray-800">Tekanan Hidrostatik untuk Stabilitas</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Tekanan air membantu menstabilkan tubuh pasien yang memiliki gangguan keseimbangan (balance disorder).
                        </p>
                        <div class="bg-[#3F5499]/5 rounded-lg p-4 border-l-4 border-[#3F5499]">
                            <p class="text-sm font-semibold text-[#3F5499] mb-2">✓ Manfaat Klinis:</p>
                            <p class="text-gray-700 text-sm">
                                Tekanan ini merangsang input sensorik ke otak, membantu pasien merasakan posisi tubuhnya dengan lebih baik (propriosepsi) dan mengurangi pembengkakan (edema) pada tungkai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keunggulan 4: Relaksasi Spastisitas -->
            <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center mb-3">
                            <span class="text-4xl font-bold text-[#3F5499] mr-3">4</span>
                            <h3 class="text-xl font-bold text-gray-800">Relaksasi Spastisitas Melalui Termal</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Salah satu tantangan terbesar pasca-stroke adalah spastisitas (otot kaku/tegang).
                        </p>
                        <div class="bg-[#3F5499]/5 rounded-lg p-4 border-l-4 border-[#3F5499]">
                            <p class="text-sm font-semibold text-[#3F5499] mb-2">✓ Manfaat Klinis:</p>
                            <p class="text-gray-700 text-sm">
                                Air hangat dalam kolam hidroterapi Klinik Wijaya membantu merelaksasi sistem saraf dan otot yang kaku, sehingga jangkauan gerak (range of motion) menjadi lebih luas dibandingkan saat terapi manual di darat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Experience Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Pengalaman Visual Rehabilitasi Akuatik</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Lihat bagaimana prinsip fisika air bekerja untuk pemulihan pasien pasca-stroke
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Visual 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-56 bg-gray-200">
                    <img src="/public/assts/img/buoyancy-therapy.jpg" alt="Gaya Apung dalam Terapi" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Gaya Apung (Buoyancy)</h3>
                    <p class="text-gray-600">Pasien dapat berlatih berdiri dan berjalan dengan dukungan 90% dari air, mengurangi beban pada sendi dan otot lemah.</p>
                </div>
            </div>

            <!-- Visual 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-56 bg-gray-200">
                    <img src="/public/assts/img/water-resistance.jpg" alt="Resistensi Air" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Resistensi Multi-Arah</h3>
                    <p class="text-gray-600">Setiap gerakan di air menciptakan hambatan alami yang memperkuat otot secara menyeluruh tanpa risiko cedera.</p>
                </div>
            </div>

            <!-- Visual 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-56 bg-gray-200">
                    <img src="/public/assts/img/warm-water-therapy.jpg" alt="Terapi Air Hangat" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Terapi Termal</h3>
                    <p class="text-gray-600">Air hangat 32-34°C merelaksasi otot spastik dan meningkatkan range of motion secara signifikan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Private Facility Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-[#3F5499]/10 text-[#3F5499] rounded-full text-sm font-semibold mb-4" data-aos="fade-up">FASILITAS PREMIUM</span>
                <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="100">Kolam Hidroterapi Privat: Keamanan dan Privasi Tanpa Kompromi</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Kami memahami bahwa kenyamanan psikologis sangat berpengaruh pada hasil terapi. Klinik Wijaya menyediakan fasilitas yang dirancang khusus untuk kebutuhan medis Anda.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Facility Image -->
                <div class="rounded-xl overflow-hidden shadow-lg" data-aos="fade-right">
                    <img src="/public/assts/img/private-pool.jpg" alt="Kolam Hidroterapi Privat" class="w-full h-full object-cover">
                </div>

                <!-- Facility Features -->
                <div class="space-y-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Privasi Total</h3>
                            <p class="text-gray-600">Satu pasien, satu terapis. Tanpa gangguan dari pasien lain, fokus pemulihan menjadi lebih maksimal.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Aksesibilitas Tinggi</h3>
                            <p class="text-gray-600">Dilengkapi dengan sistem hoist atau tangga khusus untuk memudahkan pasien dengan keterbatasan mobilitas masuk ke dalam air.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Higienitas Standar Medis</h3>
                            <p class="text-gray-600">Sistem filtrasi dan sanitasi air menggunakan sistem reverse osmosis yang aman bila tertelan dan dipantau ketat secara berkala.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Facility Images -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="/public/assts/img/pool-hoist.jpg" alt="Sistem Hoist" class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-center font-semibold text-gray-700">Sistem Hoist Medis</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="/public/assts/img/pool-filtration.jpg" alt="Sistem Filtrasi" class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-center font-semibold text-gray-700">Reverse Osmosis System</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <img src="/public/assts/img/therapy-session.jpg" alt="Sesi Terapi" class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-center font-semibold text-gray-700">Sesi Terapi Terpandu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Synergy Section -->
<section class="py-16 bg-gradient-to-br from-[#3F5499]/5 to-[#7AC6E4]/5">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">Sinergi Teknologi Robotik dan Rehabilitasi Akuatik</h2>
            <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Rehabilitasi akuatik bukan sekadar berenang; ini adalah <span class="font-bold text-[#3F5499]">sains gerak yang memanfaatkan elemen alam</span> untuk melampaui keterbatasan fisik.
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 rounded-lg p-6 border-l-4 border-[#3F5499]">
                    <p class="text-lg text-gray-800 italic font-medium">
                        "Di Klinik Wijaya, teknologi robotik dan rehabilitasi akuatik bekerja sinergis untuk memastikan jalan Anda menuju pemulihan menjadi lebih cepat, aman, dan bermartabat."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ideal Candidates Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Siapa yang Cocok untuk Aquatic Rehabilitation?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Program rehabilitasi akuatik kami dirancang khusus untuk pasien dengan kondisi berikut
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 text-center mb-2">Pasca-Stroke</h3>
                <p class="text-sm text-gray-600 text-center">Gangguan keseimbangan dan kelemahan otot</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 text-center mb-2">Spastisitas</h3>
                <p class="text-sm text-gray-600 text-center">Otot kaku dan tegang akibat kondisi neurologis</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 text-center mb-2">Edema Tungkai</h3>
                <p class="text-sm text-gray-600 text-center">Pembengkakan pada kaki dan tungkai</p>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-[#3F5499]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 text-center mb-2">Keterbatasan ROM</h3>
                <p class="text-sm text-gray-600 text-center">Range of motion terbatas pada sendi</p>
            </div>
        </div>
    </div>
</section>

<!-- Medical Team Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                <div class="text-center mb-8">
                    <h2 class="font-americana text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tim Medis Berpengalaman</h2>
                    <p class="text-lg text-gray-600">Dipandu oleh spesialis dan terapis terlatih</p>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="border-l-4 border-[#3F5499] pl-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Dokter Spesialis Kedokteran Fisik dan Rehabilitasi (Sp.KFR)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Merancang program terapi individual berdasarkan evaluasi medis komprehensif dan memantau progres klinis secara berkala.
                        </p>
                    </div>
                    <div class="border-l-4 border-[#7AC6E4] pl-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Fisioterapis Bersertifikat Aquatic Therapy</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Terlatih secara khusus untuk memanfaatkan prinsip fisika air dalam konteks medis dan keselamatan pasien di lingkungan akuatik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-americana text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Jadwalkan Konsultasi Anda Hari Ini</h2>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Ingin mengetahui apakah Aquatic Rehabilitation sesuai untuk kondisi Anda atau kerabat tercinta? Hubungi tim medis Klinik Wijaya untuk evaluasi komprehensif.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#3F5499] rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Konsultasi via WhatsApp
            </a>
            <a href="/buat-janji" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-[#3F5499] transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Buat Janji Temu
            </a>
        </div>
        <p class="text-sm mt-6 opacity-90" data-aos="fade-up" data-aos-delay="300">
            Klinik Wijaya: Menghadirkan Masa Depan Rehabilitasi di Jantung Jakarta Selatan
        </p>
    </div>
</section>

@endsection
