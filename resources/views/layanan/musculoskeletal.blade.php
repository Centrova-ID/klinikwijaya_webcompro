@extends('layout.main')

@section('title', 'Klinik Muskuloskeletal - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/muskul1.JPG') }}" alt="Layanan Muskuloskeletal - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Muskuloskeletal</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Solusi Terpadu untuk Gangguan Otot, Sendi dan Tulang</p>
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
            <span class="text-[#3F5499] font-semibold">Klinik Muskuloskeletal</span>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/muskul1.JPG') }}" alt="Layanan Muskuloskeletal Klinik Wijaya" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-neutral-800 mb-6">Tentang Layanan Muskuloskeletal</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Gangguan yang terjadi pada otot, sendi, jaringan ikat dan tulang merupakan salah satu masalah yang paling umum. Gejala yang sering dirasakan berupa nyeri dan kaku, gejala awal biasanya berupa pegal-pegal yang tidak berangsur membaik.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Para dokter spesialis kami akan mengevaluasi penyebab nyeri dan melakukan terapi yang sesuai. Terapi dilanjutkan dengan latihan untuk pemeliharaan sehingga keluhan nyeri tidak berulang.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Contoh Gangguan Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos-once="true" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Contoh Gangguan Muskuloskeletal</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Berbagai kondisi yang dapat ditangani oleh tim spesialis kami
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Gangguan Syaraf</h3>
                        <p class="text-gray-600 text-base leading-snug">Penanganan masalah pada sistem saraf yang mempengaruhi gerakan</p>
                    </div>
                </div>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="150">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Nyeri Pinggang, Leher, Bahu & Lutut</h3>
                        <p class="text-gray-600 text-base leading-snug">Terapi untuk berbagai nyeri pada area tubuh</p>
                    </div>
                </div>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Cedera Olahraga</h3>
                        <p class="text-gray-600 text-base leading-snug">Pemulihan dan rehabilitasi pasca cedera olahraga</p>
                    </div>
                </div>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="250">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Patah Tulang</h3>
                        <p class="text-gray-600 text-base leading-snug">Rehabilitasi dan pemulihan fungsi pasca patah tulang</p>
                    </div>
                </div>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Pengapuran Sendi</h3>
                        <p class="text-gray-600 text-base leading-snug">Penanganan osteoarthritis dan masalah sendi</p>
                    </div>
                </div>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="350">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mr-4 flex-shrink-0">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Cedera Ligamen & Postur Tubuh</h3>
                        <p class="text-gray-600 text-base leading-snug">Terapi untuk cedera ligamen dan koreksi postur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Daftar Layanan Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos-once="true" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Layanan Kami</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Berbagai metode terapi dan perawatan komprehensif untuk pemulihan optimal
            </p>
        </div>

        <div class="space-y-8">
            {{-- 1. Terapi Manual --}}
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Terapi Manual</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Terapi Manual merupakan jenis terapi yang berfokuskan pada struktur dan sistem dalam tubuh seperti tulang, persendian, jaringan lunak, peredaran darah, getah bening dan saraf. Jenis terapi yang dilakukan adalah: Peregangan, Pijat, Pelepasan Otot & Fasia dan Drainase Limfatik Manual Vodder.
                </p>
            </div>

            {{-- 2. Pembetulan Postur --}}
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="150">
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Pembetulan Postur</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Postur tubuh yang buruk akan memicu rasa nyeri pada leher, punggung dan pundak. Sehingga Klinik Wijaya akan membantu untuk mengembalikan dengan optimal postur tubuh yang baik dan sesuai.
                </p>
            </div>

            {{-- 3. Terapi Listrik --}}
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Terapi Listrik</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-white rounded-lg p-4 border border-gray-100">
                        <h4 class="text-lg font-semibold text-[#3F5499] mb-2">Terapi Gelombang Ultrasonik</h4>
                        <p class="text-gray-600 text-base leading-snug">
                            Terapi dengan menggunakan gelombang suara yang menimbulkan efek getaran gelombang suara. Berfungsi untuk mempercepat proses penyembuhan dengan memperlancar aliran darah di bagian tubuh yang mengalami gangguan.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-lg p-4 border border-gray-100">
                        <h4 class="text-lg font-semibold text-[#3F5499] mb-2">Terapi Gelombang Mikro</h4>
                        <p class="text-gray-600 text-base leading-snug">
                            Alat terapi yang memancarkan gelombang mikro untuk memanaskan jaringan di dalam kulit. Berfungsi untuk mengurangi kejang otot dan mengurangi nyeri.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-lg p-4 border border-gray-100">
                        <h4 class="text-lg font-semibold text-[#3F5499] mb-2">Stimulasi Saraf Listrik Transkutan</h4>
                        <p class="text-gray-600 text-base leading-snug">
                            Alat yang memanfaatkan rangsangan listrik untuk merangsang sistem saraf melalui permukaan kulit untuk mengurangi nyeri.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 4. Suntikan Terpandu USG --}}
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="250">
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Suntikan Terpandu USG</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Dengan bantuan USG Muskuloskeletal yang digunakan untuk mendeteksi titik nyeri pada bagian tertentu, agar pengobatan yang dilakukan dapat sesuai dengan sasaran atau posisi yang tepat sehingga proses pengobatan pada sendi menjadi lebih tepat dan akurat.
                </p>
            </div>

            {{-- 5. Latihan Pemeliharaan --}}
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6" data-aos-once="true" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Latihan Pemeliharaan</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Program latihan yang dikhususkan untuk melatih kekuatan serta kebugaran otot dan jantung paru.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-12 bg-gradient-to-r from-[#3F5499] to-[#389cc4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos-once="true" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Konsultasikan Keluhan Anda</h2>
        <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Tim dokter spesialis kami siap membantu Anda mengatasi masalah muskuloskeletal dengan terapi yang tepat dan efektif.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('buat-janji') }}" class="bg-white text-[#3F5499] px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors duration-300">
                Buat Janji Konsultasi
            </a>
        </div>
    </div>
</section>

@endsection
