@extends('layout.main')

@section('title', 'Tentang Kami - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/tentang-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">TENTANG KAMI</h1>
                <p class="text-xl md:text-2xl text-white/90">Klinik Rehabilitasi Terpercaya di Jakarta</p>
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
            <span class="text-[#3F5499] font-semibold">Tentang Kami</span>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-gray-700 leading-relaxed text-xl">
                Klinik Wijaya adalah klinik terpercaya untuk rehabilitasi pasca stroke di Jakarta. Terletak di kawasan strategis Wijaya, Jakarta Selatan. Kami menyediakan program rehabilitasi yang mendukung kemandirian tiap pasien untuk meningkatkan kualitas hidup mereka setelah stroke.
            </p>
        </div>
    </div>
</section>

<!-- Alasan Memilih Kami Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Alasan Mengapa ANDA MEMILIH KAMI ?</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. VISI & MISI -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">VISI & MISI</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya memiliki visi menjadi Klinik Rehabilitasi Medik dengan teknologi yang terdepan. Dengan misi menyediakan teknologi robotik untuk mendukung proses rehabilitasi lebih efektif dan menyenangkan.
                </p>
            </div>

            <!-- 2. TERPERCAYA -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">TERPERCAYA</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya didirikan sejak tahun 2000, sehingga kami telah memiliki kurang lebih 19 tahun pengalaman dan menjadi klinik rehabilitasi yang dapat dipercaya.
                </p>
            </div>

            <!-- 3. MENGUTAMAKAN KEMANDIRIAN -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">MENGUTAMAKAN KEMANDIRIAN</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami memahami, bahwa pasien pasca stroke tidak hanya membutuhkan pemulihan tetapi juga mendapatkan kembali kemandirian, oleh karena itu kami telah memiliki program rehabilitasi untuk mengembalikan kemandirian.
                </p>
            </div>

            <!-- 4. PELAYANAN TERBAIK -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">PELAYANAN TERBAIK</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami selalu menjaga kualitas pelayanan untuk dapat melayani Anda dengan baik. Semua anggota KLinik Wijaya selalu mendapatkan update ilmu terbaru di bidangnya. Klinik Wijaya merupakan Klinik yang cocok untuk Anda dan keluarga.
                </p>
            </div>

            <!-- 5. MEMBERIKAN DUKUNGAN PENUH -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">MEMBERIKAN DUKUNGAN PENUH</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami memiliki dedikasi yang cukup tinggi untuk menjadikan pasien kami sebagian bagian dari keluarga Klinik Wijaya dengan selalu memberikan dukungan , harapan dan motivasi untuk mendapatkan peluang terbaik untuk pemulihan.
                </p>
            </div>

            <!-- 6. LOKASI STRATEGIS -->
            <div class="bg-white border border-gray-200 p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="mb-4">
                    <div class="w-12 h-1 bg-[#3F5499] mb-4"></div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">LOKASI STRATEGIS</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya berlokasi di Jl Wijaya II No 26, Melawai, Kebayoran Baru, Jakarta Selatan menjadi kawasan yang dapat dengan mudah dijangkau.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Counter 1 -->
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-6xl font-bold text-[#3F5499] mb-2">15+</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">MELAYANI ANDA</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Lebih dari 15 tahun kami menjadi mitra kesehatan Anda dan keluarga
                </p>
            </div>

            <!-- Counter 2 -->
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-6xl font-bold text-[#3F5499] mb-2">1000+</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">PASIEN PUAS</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kesehatan dan kenyamanan Anda dan keluarga adalah prioritas dari pelayanan kami
                </p>
            </div>

            <!-- Counter 3 -->
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-6xl font-bold text-[#3F5499] mb-2">10+</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Setiap Hari</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami bangga bisa melayani kesehatan Anda dan keluarga setiap saat.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
