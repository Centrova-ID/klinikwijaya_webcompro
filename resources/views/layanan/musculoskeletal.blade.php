@extends('layout.main')

@section('title', 'Musculosceletal Clinic - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/musculoskeletal-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Musculosceletal Clinic</h1>
                <p class="text-xl md:text-2xl text-white/90">Solusi Terpadu untuk Gangguan Otot, Sendi dan Tulang</p>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<section class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-[#3F5499]">Home</a>
            <span class="mx-2">/</span>
            <span class="text-gray-500">Services</span>
            <span class="mx-2">/</span>
            <span class="text-[#3F5499] font-semibold">Musculosceletal Clinic</span>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div>
                <div class="flex items-center justify-center border border-gray-200">
                    <img src="{{ asset('assts/img/layanan/muskuloskeletal.png') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-16">
                <div class="space-y-6 text-gray-700 leading-relaxed text-center">
                    <p>
                    Gangguan yang terjadi pada otot, sendi, jaringan ikat dan tulang marupakan salah satu masalah yang paling umum. Gejala yang sering dirasakan berupa nyeri dan kaku (stiffness), gejala awal biasanya berupa pegal pegal yang tidak berangsur membaik.
                    </p>
                    <p>
                        Para dokter spesialis kami akan mengevaluasi penyebab nyeri dan melakukan terapi yang sesuai. Terapi dilanjutkan dengan latihan untuk maintenance sehingga keluhan nyeri tidak berulang.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contoh Gangguan Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col">
        <div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('assts/img/layanan/muskuloskeletal-2.png') }}" alt="" class="w-[800px] max-md:w-full h-full object-cover">
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Berikut contoh gangguan Muskuloskeletal antara lain :</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-12"></div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Gangguan syaraf</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Nyeri pinggang, leher, bahu & lutut</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Cedera olahraga</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Patah tulang</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Pengapuran sendi</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Cedera ligamen</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-6 md:col-span-2">
                    <div class="flex items-start">
                        <div class="w-2 h-2 bg-[#3F5499] mt-2 mr-4 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">Postur tubuh yang kurang baik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Daftar Layanan Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Layanan Kami</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Berbagai metode terapi dan perawatan komprehensif untuk pemulihan optimal
            </p>
        </div>

        <div class="space-y-12">
            <!-- 1. Manual Therapy -->
            <div class="bg-gray-50 border border-gray-200 p-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Manual Therapy</h3>
                <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Terapi Manual merupakan jenis terapi yang berfokuskan pada struktur dan sistem dalam tubuh seperti tulang, persendian, jaringan lunak, peredaran darah, limfe dan saraf. Jenis terapi yang dilakukan adalah : Stretching, Massage, Muscle & Fascia Release dan MLDV (Manual Lymphatic Drainage Vodder)
                </p>
            </div>

            <!-- 2. Postural Correction -->
            <div class="bg-gray-50 border border-gray-200 p-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Postural Correction</h3>
                <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Postur tubuh yang buruk akan memicu rasa nyeri pada leher, punggung dan pundak. Sehingga Klinik Wijaya akan membantu untuk mengembalikan dengan optimal postur tubuh yang baik dan sesuai.
                </p>
            </div>

            <!-- 3. Electrotherapy -->
            <div class="bg-gray-50 border border-gray-200 p-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Electrotherapy</h3>
                <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                
                <div class="space-y-6">
                    <div>
                        <h4 class="text-xl font-bold text-[#3F5499] mb-3">USD (Ultrasound Diathermy)</h4>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Terapi dengan menggunakan gelombang suara yang menimbulkan efek getaran gelombang suara. USD berfungsi untuk mempercepat proses penyembuhan dengan memperlancar aliran darah di bagian tubuh yang mengalami gangguan.
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold text-[#3F5499] mb-3">MWD (Microwave Diathermy)</h4>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Alat terapi yang memancarkan gelombang micro (Microwave), untuk memanaskan jaringan di dalam kulit. MWD berfungsi untuk mengurangi spasme otot (kejang otot) dan mengurangi nyeri.
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold text-[#3F5499] mb-3">TENS (Transcutaneus Electrical Nerve Simulation)</h4>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Alat yang memanfaatkan stimulasi elektrik untuk merangsang sistem saraf melalui permukaan kulit untuk mengurangi nyeri.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 4. Ultrasound Guided Injection -->
            <div class="bg-gray-50 border border-gray-200 p-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Ultrasound Guided Injection</h3>
                <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Dengan bantuan USG Muskuloskeletal yang digunakan untuk mendeteksi titik nyeri pada bagian tertentu, agar pengobatan yang dilakukan dapat sesuai dengan target atau posisi yang tepat sehingga proses pengobatan pada sendi menjadi lebih tepat dan akurat.
                </p>
            </div>

            <!-- 5. Conditioning Exercise -->
            <div class="bg-gray-50 border border-gray-200 p-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Conditioning Exercise</h3>
                <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Program latihan yang dikhususkan untuk melatih kekuatan serta kebugaran otot dan jantung paru.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
