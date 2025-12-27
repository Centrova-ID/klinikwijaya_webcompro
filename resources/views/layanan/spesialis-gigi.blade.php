@extends('layout.main')

@section('title', 'Wijaya Dental Specialist - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/dental-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Wijaya Dental Specialist</h1>
                <p class="text-xl md:text-2xl text-white/90">Perawatan Gigi Spesialis dan Terpadu</p>
            </div>
        </div>
    </div>
</section>

{{-- Breadcrumb --}}
<section class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-[#3F5499]">Home</a>
            <span class="mx-2">/</span>
            <span class="text-gray-500">Services</span>
            <span class="mx-2">/</span>
            <span class="text-[#3F5499] font-semibold">Wijaya Dental Specialist</span>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div>
                <div class="flex items-center justify-center border border-gray-200">
                    <img src="{{ asset('assts/img/layanan/slider-dental-specialist.png') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-16">
                <div class="space-y-6 text-gray-700 leading-relaxed text-center">
                    <p class="max-w-5xl mx-auto">
                    Wijaya Dental Specialist menghadirkan perawatan gigi yang ditangani secara profesional oleh tim Dokter Gigi Spesialis yang berpengalaman di bidangnya.
                    </p>
                    <p>
                        Adapun layanan dokter gigi spesialis yang tersedia yaitu :
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Daftar Layanan Spesialis --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-12">
            {{-- 1. Ortodontik --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Ortodontik</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Perapihan Gigi</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Kami menyadari pentingnya untuk menjaga estetika posisi gigi, rahang dan wajah. Oleh karena itu Wijaya Dental Specialist menghadirkan Dokter Gigi Spesialis Ortodontik untuk menjaga estetika posisi gigi, rahang dan wajah dengan penggunaan kawat gigi.
                        </p>
                    </div>
                    <div class="h-80 md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/prostodonsis.jpg') }}" alt="Ortodontik" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 2. Pedodontik --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-80 md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/Gigi-Anak.jpg') }}" alt="Pedodontik" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Pedodontik</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Gigi Anak</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Perawatan gigi sejak dini sangat penting untuk anak-anak. Terkadang pergi ke dokter gigi menjadi sebuah ketakutan tersendiri bagi anak-anak, oleh karena itu Wijaya Dental Specialist menghadirkan Dokter Spesialis Anak yang sudah berpengalaman untuk segala macam keluhan gigi anak, salah satu contohnya adalah gigi berlubang.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 3. Endodontik --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Endodontik</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Syaraf Gigi</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Perawatan gigi spesialis syaraf gigi untuk merawat dan menyelamatkan gigi yang sudah non vital supaya dapat dipertahankan selama mungkin di dalam rongga mulut dan dapat berfungsi dengan baik. Dokter Spesialis Endodontik di Wijaya Dental Specialist melayani perawatan gigi vital dan non vital yang sudah mengenai pulpa gigi yang disebut perawatan syaraf gigi.
                        </p>
                    </div>
                    <div class="h-80 md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/klinik-wijaya-layanan-bedah-mulut.jpg') }}" alt="Endodontik" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 4. Periodontik --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-80 md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/slider-dental-specialist.png') }}" alt="Periodontik" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Periodontik</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Kesehatan Gusi</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Jika Anda memiliki permasalahan pada gusi seperti : Pembengkakan gusi, radang gusi, gigi goyang, penurunan gusi sampai ke perawatan gusi berdarah yang suka menimbulkan aroma tidak sedap di mulut. Tidak perlu khawatir, karena Dokter Spesialis Gusi di Wijaya Dental Specialist akan mengatasi permasalahan Anda.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 5. Prostodonsia --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Prostodonsia</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Gigi Tiruan</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Dokter gigi spesialis prostodonsia kami akan melakukan tindakan preventif dengan manajemen rongga mulut (MRM) dan tindakan kuratif bagi pasien dengan keluhan gigi lubang, gigi patah, kelainan bentuk gigi dan gigi telah dicabut. MRM diperlukan agar tindakan kuratif (perawatan dan perbaikan) dapat bertahan lebih lama.
                        </p>
                    </div>
                    <div class="h-80 md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/klinik-wijaya-spesialist-gigi-tiruan.png') }}" alt="Prostodonsia" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 6. Bedah Mulut --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-80 md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/bedahmulut.jpg') }}" alt="Bedah Mulut" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Bedah Mulut</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Spesialis Bedah Mulut</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Dokter Spesialis Bedah Mulut di Wijaya Dental Specialist akan menangani keluhan Anda, seperti : operasi gigi bungsu yang miring & pencabutan gigi yang sulit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
