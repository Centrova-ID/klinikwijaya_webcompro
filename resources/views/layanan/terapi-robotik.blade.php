@extends('layout.main')

@section('title', 'Terapi Robotik - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/robot2.JPG') }}" alt="Terapi Robotik - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Rehabilitasi Robotik</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Masa Depan Pemulihan Saraf (Neuro-Recovery)</p>
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
            <span class="text-[#3F5499] font-semibold">Rehabilitasi Robotik</span>
        </div>
    </div>
</section>

{{-- Intro Banner --}}
<section class="py-10 bg-neutral-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-800" data-aos="fade-up">
            <h2 class="font-americana text-3xl md:text-4xl font-bold mb-4">Presisi Teknologi. Kecepatan Pemulihan. Standar Emas Baru.</h2>
            <p class="text-lg md:text-xl opacity-80">
                Klinik Wijaya dengan bangga memperkenalkan era baru dalam kedokteran fisik dan rehabilitasi. 
                Sebagai pelopor rehabilitasi robotik di Indonesia, kami menghadirkan solusi bagi pasien yang 
                menginginkan hasil pemulihan motorik yang lebih cepat, lebih terukur, dan lebih efektif.
            </p>
        </div>
    </div>
</section>

{{-- Why Robotic Technology Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Mengapa Teknologi Robotik Diperlukan?</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Dalam rehabilitasi stroke konvensional, tantangan terbesar adalah inkonsistensi gerakan dan keterbatasan tenaga manusia dalam melakukan repetisi.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Card 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 7v10h16V7H4zm14 8h-4v-4h4v4zM6 9h4v6H6V9zm0 8h4v2H6v-2zm10 2h-4v-2h4v2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Intensitas & Repetisi Tinggi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Robot memungkinkan pasien melakukan ribuan gerakan presisi dalam satu sesi, yang mustahil dilakukan secara manual. Repetisi adalah kunci utama memicu Neuroplastisitas (kemampuan otak untuk membentuk jalur saraf baru).
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-4 6V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Biofeedback Real-Time</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sensor canggih memberikan data instan mengenai kekuatan otot dan jangkauan gerak pasien, sehingga terapis dapat menyesuaikan tingkat kesulitan secara otomatis.
                </p>
            </div>

            {{-- Card 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:border-[#3F5499]/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Visualisasi Motivasi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dilengkapi dengan layar interaktif (gamifikasi), membuat sesi terapi terasa seperti bermain, meningkatkan motivasi serta keterlibatan mental pasien dalam proses penyembuhan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Introduction Section (Existing) --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/lokomat.JPG') }}" alt="Terapi Robotik Klinik Wijaya" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Tentang Terapi Robotik</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Sebagai pelopor terapi robotik untuk rehabilitasi medis pasca stroke di Indonesia, Klinik Wijaya menyediakan berbagai fasilitas modern sebagai terobosan terkini dalam rehabilitasi medis pasca stroke dengan tujuan untuk meningkatkan kelenturan dan pengoptimalan gerak pasien pasca stroke.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Pengoptimalan gerak ini dibantu dengan teknologi robotik yang sudah terkomputerisasi dengan sistem, sehingga terapi menjadi efektif dan menyenangkan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Premium Instruments Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Instrumen Unggulan Kami</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Klinik Wijaya mengintegrasikan perangkat robotik kelas dunia yang dirancang khusus untuk berbagai tahapan pemulihan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Instrument 1 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">1</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Robotik Ekstremitas Bawah<br><span class="text-base font-normal text-gray-600">(Gait Training)</span></h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Membantu pasien yang kehilangan kemampuan berjalan untuk merasakan kembali pola langkah yang natural. Teknologi ini menopang berat badan pasien secara dinamis, memberikan rasa aman tanpa risiko terjatuh.
                </p>
            </div>

            {{-- Instrument 2 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">2</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Robotik Ekstremitas Atas<br><span class="text-base font-normal text-gray-600">(Arm & Hand Recovery)</span></h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Fokus pada pemulihan fungsional lengan dan jari. Sangat efektif untuk pasien yang mengalami kekakuan (spastisitas) atau kelemahan otot agar mampu kembali melakukan aktivitas harian seperti makan atau menulis.
                </p>
            </div>

            {{-- Instrument 3 --}}
            <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold text-[#3F5499] mb-2">3</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Robotic Balance System</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sistem cerdas untuk melatih keseimbangan dan koordinasi tubuh guna mencegah risiko jatuh di masa depan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Comparison Table Section --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Perbedaan Utama: Robotik vs Konvensional</h2>
            <p class="text-gray-600">Pilih metode yang memberikan hasil terbaik untuk pemulihan Anda</p>
        </div>

        <div class="bg-white overflow-hidden shadow-sm" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white">
                            <th class="py-4 px-6 text-left font-semibold text-lg">FITUR</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">REHABILITASI KONVENSIONAL</th>
                            <th class="py-4 px-6 text-left font-semibold text-lg">REHABILITASI ROBOTIK KLINIK WIJAYA</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Jumlah repetisi</td>
                            <td class="py-4 px-6 text-gray-600">Terbatas (tergantung fisik terapis)</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Maksimal</span> (ribuan gerakan per sesi)</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Pengukuran data</td>
                            <td class="py-4 px-6 text-gray-600">Estimasi manual</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Data digital akurat</span> dan obyektif</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Keamanan</td>
                            <td class="py-4 px-6 text-gray-600">Risiko jatuh tinggi</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Sistem suspense</span> dan pengaman otomatis</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-gray-900">Keterlibatan pasien</td>
                            <td class="py-4 px-6 text-gray-600">Cepat Lelah/ bosan</td>
                            <td class="py-4 px-6 text-gray-600"><span class="font-semibold text-[#3F5499]">Menarik</span> dengan stimulasi visual</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Callout Text --}}
        <div class="mt-10 text-center" data-aos="fade-up" data-aos-delay="300">
            <div>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Pemulihan stroke adalah perlombaan melawan waktu. Dengan pengalaman lebih dari 20 tahun dan teknologi robotik terdepan, kami siap membantu Anda atau orang terkasih melampaui keterbatasan fisik.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Jenis-Jenis Robot Section (Existing) --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos-once="true" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Jenis-Jenis Robotik Terapi</h2>
        </div>

        {{-- grid kolom 5--}}
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            {{-- Robotik Armeo --}}
            <div class="bg-white overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                        <div style="width: 100%; aspect-ratio: 9 / 16; border-radius: 12px; overflow: hidden;">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/t-yjXB2ySAQ" title="Robotik Armeo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-[12px]">
                            <h3 class="text-lg font-bold text-white mb-1">Robotik Armeo</h3>
                            <p class="text-sm text-gray-200">Pemulihan Fungsi Lengan Atas Pasca Stroke</p>
                            <a href="{{ route('layanan.armeo-spring') }}" class="inline-flex mt-5 text-sm items-center justify-center px-5 py-2.5 bg-[#1d3175] text-white rounded-lg">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
            </div>

            {{-- Robotik Lokomat --}}
            <div class="bg-white overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="150">
                        <div style="width: 100%; aspect-ratio: 9 / 16; border-radius: 12px; overflow: hidden;">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nBDrtafX5ag" title="Robotik Lokomat" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-[12px]">
                            <h3 class="text-lg font-bold text-white mb-1">Robotik Lokomat</h3>
                            <p class="text-sm text-gray-200">Pemulihan Kemampuan Berjalan dan Keseimbangan Jalan</p>
                            <a href="{{ route('layanan.lokomat-pro-sensation') }}" class="inline-flex mt-5 text-sm items-center justify-center px-5 py-2.5 bg-[#1d3175] text-white rounded-lg">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
            </div>

            {{-- Robotik Andago --}}
            <div class="bg-white overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                        <div style="width: 100%; aspect-ratio: 9 / 16; border-radius: 12px; overflow: hidden;">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MZmifMxP-vg" title="Robotik Andago" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-[12px]">
                            <h3 class="text-lg font-bold text-white mb-1">Robotik Andago</h3>
                            <p class="text-sm text-gray-200">Terapi Lanjutan untuk Berjalan</p>
                            <a href="{{ route('layanan.andago') }}" class="inline-flex mt-5 text-sm items-center justify-center px-5 py-2.5 bg-[#1d3175] text-white rounded-lg">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
            </div>

            {{-- Robotik m2 --}}
            <div class="bg-white overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="250">
                        <div style="width: 100%; aspect-ratio: 9 / 16; border-radius: 12px; overflow: hidden;">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/olBiErQdUTY" title="Arm Motus M2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-[12px]">
                            <h3 class="text-lg font-bold text-white mb-1">Arm Motus M2</h3>
                            <p class="text-sm text-gray-200">Melatih Gerakan Bahu, Lengan Atas dan Lengan Bawah</p>
                            <a href="{{ route('layanan.arm-motus-m2') }}" class="inline-flex mt-5 text-sm items-center justify-center px-5 py-2.5 bg-[#1d3175] text-white rounded-lg">
                        Pelajari Lebih Lanjut
                            </a>
                        </div>
            </div>
            {{-- Robotik C-mill --}}
            <div class="bg-white overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                
                        <div style="width: 100%; aspect-ratio: 9 / 16; border-radius: 12px; overflow: hidden;">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lDyfB2XbF3E" title="Robotik C-mill" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-[12px]">
                            <h3 class="text-lg font-bold text-white mb-1">Robotik C-mill</h3>
                            <p class="text-sm text-gray-200">Pemulihan Fungsi Lengan Atas Pasca Stroke</p>
                            <a href="{{ route('layanan.cmill-vr-plus') }}" class="inline-flex mt-5 text-sm items-center justify-center px-5 py-2.5 bg-[#1d3175] text-white rounded-lg">
                        Pelajari Lebih Lanjut
                            </a>
                        </div>
            </div>
        </div>
    </div>
</section>

@endsection