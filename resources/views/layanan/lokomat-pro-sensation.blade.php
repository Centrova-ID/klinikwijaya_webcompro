@extends('layout.main')

@section('title', 'Lokomat® Pro Sensation - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-1.webp') }}" alt="Lokomat Pro Sensation - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Lokomat® Pro Sensation</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Revolusi Mobilitas untuk Pemulihan Jalan Anda</p>
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
            <span class="text-[#3F5499] font-semibold">Lokomat® Pro Sensation</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos-once="true" data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-semibold mb-4">Menghadirkan Teknologi Robotik Tercanggih di Dunia ke Jakarta</h2>
            <p class="text-base md:text-lg opacity-85">
                Di Klinik Wijaya, kami percaya bahwa setiap langkah adalah kemajuan menuju kebebasan. Sebagai pelopor rehabilitasi robotik di Indonesia, kami menghadirkan <span class="font-semibold">Lokomat® Pro Sensation</span>—generasi terbaru alat robotic untuk membantu berjalan dari Hocoma, Swiss—sebuah keajaiban teknologi yang dirancang khusus untuk membantu pasien stroke mendapatkan kembali kemampuan berjalan dengan pola yang mendekati normal.
            </p>
        </div>
    </div>
</section>

{{-- What is Lokomat Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" alt="Lokomat Pro Sensation Device" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Apa itu Lokomat® Pro Sensation?</h2>
                <p class="text-lg text-gray-800 leading-relaxed mb-4">
                    Lokomat® Pro Sensation bukan sekadar alat bantu jalan. Ini adalah sistem <span class="font-semibold">robotic gait training tercanggih</span> yang mengintegrasikan exoskeleton robotik dengan treadmill medis dan sistem penyangga berat badan dinamis.
                </p>
                <p class="text-lg text-gray-800 leading-relaxed">
                    Berbeda dengan perangkat robotik Lokomat biasa, seri <span class="font-semibold">Sensation</span> memberikan pengalaman sensorik yang jauh lebih mendalam, dalam harmoni untuk menciptakan memori gerak yang baru.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Why Lokomat Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos-once="true" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Mengapa Lokomat® Pro Sensation Menjadi Pilihan Utama Pasien?</h2>
            <p class="text-lg text-gray-800 max-w-4xl mx-auto">
                Keunggulan teknologi ini memberikan manfaat yang tidak bisa didapatkan dari fisioterapi konvensional saja
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Feature 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V9.03l7-3.11v7.07z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Pola Jalan yang Presisi & Alami</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lokomat memastikan setiap langkah Anda mengikuti fisiologi (cara dan mekanisme) berjalan manusia yang normal. Robot ini membimbing sendi pinggul, lutut, dan pergelangan kaki secara sinkron, mencegah pola jalan yang salah atau pincang yang sering terjadi pada pemulihan mandiri.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Umpan Balik Sensorik "Sensation"</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Teknologi Sensation pada model Pro ini memberikan tantangan visual dan sensorik yang disesuaikan. Melalui layar monitor, pasien terlibat dalam simulasi dunia nyata, yang menurut penelitian medis, secara drastis mempercepat pembentukan jalur saraf baru (neuroplasticity) di otak.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Feature 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Penyangga Berat Badan Dinamis</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Bagi pasien yang belum mampu menumpu berat badan sendiri, Lokomat memberikan sokongan otomatis. Hal ini memungkinkan pasien memulai latihan jalan lebih awal tanpa rasa takut jatuh, sehingga otot-otot kaki tidak mengalami atrofi (penyusutan).
                        </p>
                    </div>
                </div>
            </div>

            {{-- Feature 4 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Penyesuaian Beban Secara Real-Time</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Terapis kami dapat mengatur seberapa besar bantuan yang diberikan oleh robot. Seiring bertambahnya kekuatan Anda, bantuan robot akan dikurangi secara bertahap hingga Anda mampu melangkah dengan kekuatan sendiri.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Clinical Benefits Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-start">

            {{-- KIRI : JUDUL + DESKRIPSI --}}
            <div data-aos-once="true" data-aos="fade-right">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">
                    Terbukti Secara Klinis
                </h2>

                <p class="text-lg text-gray-800 leading-relaxed">
                    Dengan dukungan terapis dan dokter berpengalaman di Klinik Wijaya, penggunaan Lokomat® Pro Sensation terbukti secara klinis memberikan hasil yang signifikan:
                </p>
            </div>

            {{-- KANAN : CHECKLIST JADI CARD --}}
            <div data-aos-once="true" data-aos="fade-left">
                <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 space-y-5">

                    <div class="flex items-start">
                        <div class="w-5 h-5 bg-[#3F5499] rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-800">
                            Meningkatkan <span class="font-semibold">kecepatan berjalan dan keseimbangan</span> secara signifikan
                        </p>
                    </div>

                    <div class="flex items-start">
                        <div class="w-5 h-5 bg-[#3F5499] rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-800">
                            Meningkatkan <span class="font-semibold">daya tahan kardiovaskular</span> pasien pasca-stroke
                        </p>
                    </div>

                    <div class="flex items-start">
                        <div class="w-5 h-5 bg-[#3F5499] rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-800">
                            Memberikan <span class="font-semibold">data progresif yang dapat dicetak</span>, sehingga Anda dan keluarga dapat melihat perkembangan kekuatan otot setiap minggunya
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- Who Needs Lokomat Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos-once="true" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Siapa yang Membutuhkan Terapi Lokomat?</h2>
            <p class="text-lg text-gray-800 max-w-3xl mx-auto">
                Meskipun sangat efektif untuk pasien stroke, Lokomat® Pro Sensation di Klinik Wijaya juga menjadi solusi unggulan bagi berbagai kondisi neurologis
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Condition 1 --}}
            <div class="bg-white rounded-xl py-6 px-4 shadow-md transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-lg font-bold text-[#1d3175] text-center mb-2">Pasien Stroke</h3>
                <p class="text-gray-700 text-base text-center leading-relaxed">
                    Pemulihan fungsi berjalan dan keseimbangan pasca stroke
                </p>
            </div>

            {{-- Condition 2 --}}
            <div class="bg-white rounded-xl py-6 px-4 shadow-md transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-bold text-[#1d3175] text-center mb-2">Cedera Saraf Tulang Belakang</h3>
                <p class="text-gray-700 text-base text-center leading-relaxed">
                    Spinal Cord Injury dengan gangguan fungsi motorik tungkai
                </p>
            </div>

            {{-- Condition 3 --}}
            <div class="bg-white rounded-xl py-6 px-4 shadow-md transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-lg font-bold text-[#1d3175] text-center mb-2">Pasca Operasi</h3>
                <p class="text-gray-700 text-base text-center leading-relaxed">
                    Penggantian sendi atau trauma kaki berat yang memerlukan rehabilitasi intensif
                </p>
            </div>

            {{-- Condition 4 --}}
            <div class="bg-white rounded-xl py-6 px-4 shadow-md transition-all duration-300" data-aos-once="true" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-lg font-bold text-[#1d3175] text-center mb-2">Gangguan Neurologis</h3>
                <p class="text-gray-700 text-base text-center leading-relaxed">
                    Parkinson atau Multiple Sclerosis dengan gangguan keseimbangan
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Journey with Klinik Wijaya Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="items-center text-center">
            <div data-aos-once="true" data-aos="fade-up">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Melangkah Lebih Jauh Bersama Klinik Wijaya</h2>
                <p class="text-lg text-gray-800 leading-relaxed mb-1">
                    Pemulihan adalah perjalanan panjang, namun dengan teknologi yang tepat, perjalanan tersebut menjadi lebih singkat dan bermakna.
                </p>
                <p class="text-lg text-gray-800 leading-relaxed mb-6">
                    Klinik Wijaya mengundang Anda untuk merasakan sendiri kecanggihan Lokomat® Pro Sensation pertama dan terbaik di kelasnya.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
