@extends('layout.main')

@section('title', 'Hocoma Andago® - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/0/robotik_andago/robotik_andago-6.webp') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Hocoma Andago®</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Jembatan Menuju Kemandirian</p>
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
            <span class="text-[#3F5499] font-semibold">Hocoma Andago®</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-bold mb-4">Bergerak Bebas. Melangkah Aman. Menemukan Kembali Kepercayaan Diri.</h2>
            <p class="text-lg md:text-xl opacity-80">
                Puncak dari setiap perjalanan rehabilitasi adalah momen ketika pasien mampu kembali berjalan di atas permukaan tanah 
                (over-ground) dengan kekuatan mereka sendiri. Klinik Wijaya menghadirkan Andago® dari Hocoma, sebuah solusi robotik 
                revolusioner yang dirancang untuk menjembatani transisi dari latihan di atas treadmill menuju mobilitas mandiri yang sesungguhnya.
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
                    <img src="{{ asset('assts/img/layanan/andago-device.png') }}" alt="Hocoma Andago Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Apa itu Andago®?</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Andago® adalah sistem mobile robot untuk latihan berjalan di atas permukaan tanah yang dilengkapi dengan teknologi 
                    <strong>Dynamic Body Weight Support</strong> (penyangga berat badan dinamis).
                </p>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Berbeda dengan alat bantu jalan konvensional yang bersifat pasif, Andago adalah robot cerdas yang secara aktif mengikuti 
                    niat gerak pasien. Alat ini memberikan proteksi penuh terhadap risiko jatuh tanpa membatasi ruang gerak, memungkinkan 
                    Anda berjalan di koridor klinik atau mengelilingi ruangan dengan rasa aman.
                </p>
                <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-4 rounded">
                    <p class="text-gray-700 font-semibold italic">
                        "Andago® bukan sekadar alat medis; ia adalah rekan yang memberikan Anda keberanian untuk melepaskan pegangan dan mulai berjalan kembali menuju masa depan yang lebih aktif."
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
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Keunggulan Andago® dalam Pemulihan Pasca-Stroke</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Di Klinik Wijaya, kami memanfaatkan Andago® untuk memberikan pengalaman rehabilitasi yang paling mendekati aktivitas kehidupan sehari-hari
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Feature 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.49 5.48c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm-3.6 13.9l1-4.4 2.1 2v6h2v-7.5l-2.1-2 .6-3c1.3 1.5 3.3 2.5 5.5 2.5v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1l-5.2 2.2v4.7h2v-3.4l1.8-.7-1.6 8.1-4.9-1-.4 2 7 1.4z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Kebebasan Bergerak</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Andago® menggunakan sensor cerdas yang mendeteksi gerakan tubuh Anda. Robot ini akan bergerak maju saat Anda melangkah 
                    dan berhenti saat Anda berhenti, tanpa perlu didorong secara manual. Ini melatih koordinasi tubuh dan keseimbangan secara 
                    alami dalam lingkungan yang nyata.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Penyangga Berat Badan Dinamis</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Inilah fitur yang membedakan Andago dari walker biasa. Robot ini menopang sebagian berat badan Anda secara konstan, 
                    sehingga kaki Anda terasa lebih ringan dan tidak cepat lelah. Teknologi ini memungkinkan Anda untuk fokus pada kualitas 
                    langkah dan postur tubuh yang benar.
                </p>
            </div>

            {{-- Feature 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Proteksi Jatuh 100%</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Keamanan adalah prioritas utama kami. Dengan sistem harness (sabuk pengaman) yang terintegrasi, Andago® akan segera 
                    mengunci posisi jika mendeteksi adanya ketidakseimbangan atau indikasi jatuh. Hal ini memberikan rasa percaya diri 
                    psikologis yang luar biasa bagi pasien untuk bereksplorasi lebih jauh.
                </p>
            </div>

            {{-- Feature 4 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fleksibilitas Navigasi</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Andago® memungkinkan pasien untuk tidak hanya berjalan lurus, tetapi juga berlatih berbelok dan menavigasi hambatan 
                    saat berjalan. Ini adalah simulasi sempurna untuk mempersiapkan diri sebelum Anda kembali berjalan secara mandiri.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- {{-- Visual Experience Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Pengalaman Latihan Over-Ground yang Aman</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Andago® memberikan kebebasan bergerak dengan keamanan maksimal
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Visual 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/andago-mobility.png') }}" alt="Andago Mobility" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Mobilitas 360°</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Bergerak ke segala arah dengan sensor yang mengikuti niat gerak Anda secara alami
                    </p>
                </div>
            </div>

            {{-- Visual 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/andago-harness.png') }}" alt="Andago Safety Harness" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Sistem Harness Cerdas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Penyangga dinamis yang memberikan dukungan sesuai kebutuhan dan proteksi penuh
                    </p>
                </div>
            </div>

            {{-- Visual 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <img src="{{ asset('assts/img/layanan/andago-training.png') }}" alt="Andago Training Session" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Latihan Real-World</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Simulasi aktivitas kehidupan nyata dalam lingkungan yang aman dan terkontrol
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

{{-- Why Choose Andago Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Mengapa Memilih Latihan Andago® di Klinik Wijaya?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Sebagai pusat rehabilitasi stroke berpengalaman lebih dari 20 tahun, Klinik Wijaya memahami bahwa pemulihan bukan 
                hanya soal kekuatan otot, tapi juga tentang kepercayaan diri untuk melangkah kembali
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Reason 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Evaluasi Terukur</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Terapis kami dapat memantau intensitas latihan dan jarak tempuh Anda secara digital, memberikan data objektif untuk 
                    menyesuaikan program rehabilitasi Anda.
                </p>
            </div>

            {{-- Reason 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Transisi Holistik</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Kami mengintegrasikan Andago® sebagai bagian dari program berkelanjutan setelah pasien menyelesaikan fase latihan 
                    dengan Lokomat®, memastikan progres yang konsisten.
                </p>
            </div>

            {{-- Reason 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Fasilitas Modern</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Klinik kami menyediakan ruang yang luas dan aman untuk Anda mengeksplorasi kemampuan gerak bersama Andago® dengan 
                    pengawasan terapis berpengalaman.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Technology Features Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-start">

            {{-- KIRI : JUDUL --}}
            <div data-aos-once="true" data-aos="fade-right">
                <h2 class="font-americana text-3xl font-bold text-neutral-800">
                    Teknologi Cerdas di Balik Andago®
                </h2>
            </div>

            {{-- KANAN : GRID CARD --}}
            <div data-aos-once="true" data-aos="fade-left">
                <div class="grid sm:grid-cols-2 gap-6">

                    {{-- ITEM 1 --}}
                    <div class="border border-gray-200 rounded-2xl p-6 bg-white">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Sensor Gerak Multi-Arah</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Mendeteksi niat gerak pasien dan mengikuti arah pergerakan secara otomatis
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 2 --}}
                    <div class="border border-gray-200 rounded-2xl p-6 bg-white">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Dynamic Body Weight Support System</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Penyangga berat badan yang dapat disesuaikan dari 0-100% sesuai kemampuan pasien
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 3 --}}
                    <div class="border border-gray-200 rounded-2xl p-6 bg-white">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Auto-Lock Fall Protection</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sistem pengaman otomatis yang mengunci posisi saat mendeteksi ketidakseimbangan
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 4 --}}
                    <div class="border border-gray-200 rounded-2xl p-6 bg-white">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Digital Monitoring Dashboard</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Tracking real-time untuk jarak, kecepatan, dan intensitas latihan
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 5 --}}
                    <div class="border border-gray-200 rounded-2xl p-6 bg-white sm:col-span-2">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#3F5499] text-white flex items-center justify-center rounded-full flex-shrink-0 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Adjustable Harness System</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sabuk pengaman ergonomis yang dapat disesuaikan untuk kenyamanan optimal
                                </p>
                            </div>
                        </div>
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
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Untuk Siapa Andago® Cocok?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Andago® dirancang khusus untuk pasien yang telah melewati fase awal rehabilitasi dan siap untuk transisi ke mobilitas mandiri
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
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pasca Lokomat®</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien yang telah menyelesaikan terapi Lokomat dan siap untuk latihan over-ground
                </p>
            </div>

            {{-- Candidate 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Stroke Ringan-Sedang</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien dengan kemampuan berjalan parsial yang membutuhkan dukungan keamanan
                </p>
            </div>

            {{-- Candidate 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Masalah Keseimbangan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien dengan gangguan keseimbangan yang perlu latihan dalam lingkungan aman
                </p>
            </div>

            {{-- Candidate 4 --}}
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-[#3F5499]/10 flex items-center justify-center rounded-full mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Persiapan Pulang</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pasien yang mempersiapkan diri untuk kembali ke aktivitas sehari-hari di rumah
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Comparison Section --}}
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Andago® vs Alat Bantu Jalan Konvensional</h2>
            <p class="text-gray-600">Perbedaan yang membuat latihan Anda lebih efektif dan aman</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white">
                            <th class="py-4 px-6 text-left font-semibold text-lg">FITUR</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">WALKER KONVENSIONAL</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">ANDAGO® KLINIK WIJAYA</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Dukungan Gerak</td>
                            <td class="py-4 px-6 text-gray-600">Pasif, perlu didorong manual</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Aktif mengikuti</span> niat gerak pasien</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Penyangga Berat Badan</td>
                            <td class="py-4 px-6 text-gray-600">Tidak ada atau minimal</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Dinamis 0-100%</span> sesuai kebutuhan</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Proteksi Jatuh</td>
                            <td class="py-4 px-6 text-gray-600">Terbatas, risiko masih tinggi</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">100% aman</span> dengan auto-lock system</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Fleksibilitas Arah</td>
                            <td class="py-4 px-6 text-gray-600">Hanya maju-mundur</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">360° mobilitas</span> penuh</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Monitoring Data</td>
                            <td class="py-4 px-6 text-gray-600">Tidak ada tracking</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Digital tracking</span> jarak dan intensitas</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Fokus Latihan</td>
                            <td class="py-4 px-6 text-gray-600">Bergantung pada alat</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Kualitas pola jalan</span> dan postur</td>
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
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Saatnya Melangkah ke Tahap Berikutnya</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                Andago® bukan sekadar alat medis; ia adalah rekan yang memberikan Anda keberanian untuk melepaskan pegangan dan 
                mulai berjalan kembali menuju masa depan yang lebih aktif.
            </p>
            <div class="bg-gradient-to-r from-[#3F5499]/10 to-[#7AC6E4]/10 border-l-4 border-[#3F5499] p-6 rounded-lg inline-block text-left max-w-3xl">
                <p class="text-gray-700 text-lg font-semibold mb-2">
                    "Rasakan Sensasi Berjalan Bebas Tanpa Rasa Takut"
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Konsultasikan dengan tim ahli kami untuk melihat apakah program Andago® tepat untuk fase pemulihan Anda atau orang tercinta.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-16 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-bold text-white mb-4">Siap untuk Transisi ke Over-Ground Walking?</h2>
            <p class="text-xl text-white/90 mb-8">
                Bergabunglah dengan ratusan pasien yang telah merasakan manfaat Andago® dalam perjalanan pemulihan mereka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buat-janji') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#3F5499] font-bold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg">
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
