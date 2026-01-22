@extends('layout.main')

@section('title', 'Pusat Rehabilitasi Stroke - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/stroke.JPG') }}" alt="Pusat Rehabilitasi Stroke - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="font-americana-bold text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Pusat Rehabilitasi Stroke</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Pusat Rehabilitasi Stroke dengan Teknologi Robotik Terpadu</p>
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
            <span class="text-[#3F5499] font-semibold">Pusat Rehabilitasi Stroke</span>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos-once="true" data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/stroke2.JPG') }}" alt="Rehabilitasi Stroke Klinik Wijaya" class="w-500 h-500 object-cover">
                </div>
            </div>

            <div data-aos-once="true" data-aos="fade-left">
                <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-6">Tentang Pusat Rehabilitasi Stroke</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Kami berpengalaman selama <span class="font-bold text-[#3F5499]">20 tahun</span> sebagai Pusat Rehabilitasi Stroke yang terpadu. Fasilitas yang ada pada Pusat Rehabilitasi Stroke meliputi Terapi Manual, Terapi Robotik dan Hidroterapi.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Tim kami terdiri dari tenaga dokter spesialis neurologi, rehabilitasi medik, fisioterapis, dan terapis wicara yang telah menjalani pelatihan khusus untuk penanganan rehabilitasi stroke.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Types of Therapy Section --}}
<!-- <section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos-once="true" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Jenis Terapi</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Program rehabilitasi komprehensif dengan berbagai metode terapi modern dan terlatih
            </p>
        </div>

        <div class="space-y-8">
            {{-- Terapi Robotik --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="100">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-3">Terapi Robotik</h3>
                        <p class="text-gray-600 text-base leading-snug mb-6">
                            Sebagai pelopor terapi robotik untuk rehabilitasi medis pasca stroke di Indonesia, Klinik Wijaya menyediakan berbagai fasilitas modern sebagai terobosan terkini dalam rehabilitasi medis pasca stroke dengan tujuan untuk meningkatkan kelenturan dan pengoptimalan gerak pasien pasca stroke. Pengoptimalan gerak ini dibantu dengan teknologi robotik yang sudah terkomputerisasi dengan sistem, sehingga terapi menjadi efektif dan menyenangkan.
                        </p>
                        <div>
                            <a href="{{ route('layanan.terapi-robotik') }}" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300 rounded-lg">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                    <div class="h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" alt="Terapi Robotik" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Terapi Wicara --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="150">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-3">Terapi Wicara</h3>
                        <p class="text-gray-600 text-base leading-snug">
                            Terapi Wicara pada pasien Stroke bertujuan mengembalikan fungsi pemahaman bahasa dan berbicara serta mengembalikan fungsi menelan. Hal ini akan meningkatkan kualitas hidup pasien Stroke secara bermakna karena pasien dapat kembali makan tanpa tersedak. Pasien juga mampu berkomunikasi lebih baik sehingga meningkatkan rasa percaya diri pasien.
                        </p>
                    </div>
                    <div class="h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/wicara.jpg') }}" alt="Terapi Wicara" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Terapi Fisik --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/fisik.jpg') }}" alt="Terapi Fisik" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-3">Terapi Fisik</h3>
                        <p class="text-gray-600 text-base leading-snug">
                            Terapi fisik merupakan rangkaian proses peregangan, pemijatan dan latihan fisik yang berguna untuk meningkatkan kelenturan gerak anggota tubuh yang terganggu dan mengembalikan kekuatan otot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

{{-- CTA Section --}}
<section class="py-12 bg-gradient-to-r from-[#3F5499] to-[#389cc4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos-once="true" data-aos="zoom-in">
        <h2 class="font-americana text-3xl md:text-4xl font-bold text-white mb-6">Mulai Perjalanan Pemulihan Anda</h2>
        <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Tim rehabilitasi stroke kami siap membantu Anda atau orang yang Anda cintai untuk meraih kembali kualitas hidup.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('buat-janji') }}" class="bg-white text-[#3F5499] px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors duration-300">
                Buat Janji Konsultasi
            </a>
        </div>
    </div>
</section>

@endsection
