@extends('layout.main')

@section('title', 'Stroke Rehabilitation Center - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/stroke-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Stroke Rehabilitation Center</h1>
                <p class="text-xl md:text-2xl text-white/90">Pusat Rehabilitasi Stroke dengan Teknologi Robotik Terpadu</p>
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
            <span class="text-[#3F5499] font-semibold">Stroke Rehabilitation Center</span>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div>
                <div class="flex items-center justify-center border border-gray-200">
                    <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-16">
                <div class="space-y-6 text-gray-700 leading-relaxed text-center">
                    <p class="text-lg">
                        Kami berpengalaman selama <span class="font-bold text-[#3F5499]">20 tahun</span> sebagai Pusat Rehabilitasi Stroke yang terpadu. Fasilitas yang ada pada Pusat Rehabilitasi Stroke meliputi Terapi Manual, Terapi Robotik dan Hidroterapi.
                    </p>
                    <p class="text-lg">
                        Tim kami terdiri dari tenaga dokter spesialis neurologi, rehabilitasi medik, fisioterapis, dan terapis wicara yang telah menjalani pelatihan khusus untuk penanganan rehabilitasi stroke.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Types of Therapy Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Jenis Terapi</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Program rehabilitasi komprehensif dengan berbagai metode terapi modern dan terlatih
            </p>
        </div>

        <div class="space-y-12">
            <!-- Terapi Robotik -->
            <div class="bg-white border border-gray-200 overflow-hidden">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">Terapi Robotik</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Sebagai pelopor terapi robotik untuk rehabilitasi medik pasca stroke di Indonesia klinik wijaya meyediakan berbagai fasilitas modern sabagai terobosan terkini dalam rehabilitasi medik pasca stroke dengan tujuan untuk meningkatkan fleksibilitas dan pengoptimalan gerak pasien pasca stroke. Pengoptimalan gerak ini dibantu dengan teknologi robotik yang sudah terkomputerisasi dengan sistem, sehingga terapi menjadi efektif dan menyengangkan.
                        </p>
                        <div>
                            <a href="{{ route('layanan.terapi-robotik') }}" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                    <div class="h-80 md:h-auto  flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Terapi Wicara -->
            <div class="bg-white border border-gray-200 overflow-hidden">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">Terapi Wicara</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Terapi Wicara pada pasien Stroke bertujuan mengembalikan fungsi pemahaman Bahasa dan berbicara serta mengembalikan fungsi menelan. Hal ini akan meningkatkan kualitas hidup pasien Stroke secara bermakna karena pasien dapat kembali makan tanpa tersedak. Pasien juga mampu berkomunikasi lebih baik sehingga meningkatkan rasa percaya diri pasien.
                        </p>
                    </div>
                    <div class="h-80 md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/wicara.jpg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Terapi Fisik -->
            <div class="bg-white border border-gray-200 overflow-hidden">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-80 md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/fisik.jpg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">Terapi Fisik</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Terapi fisik merupakan rangkaian proses peregangan, pemijatan dan latihan fisik yang berguna untuk meningkatkan fleksibilitas gerak anggota tubuh yang terganggu dan mengembalikan kekuatan otot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
