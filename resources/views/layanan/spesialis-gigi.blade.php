@extends('layout.main')

@section('title', 'Spesialis Gigi Wijaya - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900 overflow-hidden">
    <img src="{{ asset('assts/img/layanan/slider-dental-specialist.png') }}" alt="Spesialis Gigi Wijaya - Klinik Wijaya" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">Spesialis Gigi Wijaya</h1>
                <p class="text-xl md:text-2xl drop-shadow-lg">Perawatan Gigi Spesialis dan Terpadu</p>
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
            <span class="text-[#3F5499] font-semibold">Spesialis Gigi Wijaya</span>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ asset('assts/img/layanan/slider-dental-specialist.png') }}" alt="Spesialis Gigi Wijaya" class="w-full h-full object-cover">
                </div>
            </div>

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-neutral-800 mb-6">Tentang Spesialis Gigi Wijaya</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Spesialis Gigi Wijaya menghadirkan perawatan gigi yang ditangani secara profesional oleh tim Dokter Gigi Spesialis yang berpengalaman di bidangnya.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Adapun layanan dokter gigi spesialis yang tersedia yaitu:
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Daftar Layanan Spesialis --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-neutral-800 mb-4">Layanan Spesialis Gigi</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Tim dokter gigi spesialis yang berpengalaman siap melayani kebutuhan perawatan gigi Anda
            </p>
        </div>

        <div class="space-y-8">
            {{-- 1. Ortodonti --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Ortodonti</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Perapihan Gigi</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Kami menyadari pentingnya untuk menjaga keindahan posisi gigi, rahang dan wajah. Oleh karena itu Spesialis Gigi Wijaya menghadirkan Dokter Gigi Spesialis Ortodonti untuk menjaga keindahan posisi gigi, rahang dan wajah dengan penggunaan kawat gigi.
                        </p>
                    </div>
                    <div class="h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/prostodonsis.jpg') }}" alt="Ortodonti" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 2. Kedokteran Gigi Anak --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/Gigi-Anak.jpg') }}" alt="Kedokteran Gigi Anak" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Kedokteran Gigi Anak</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Gigi Anak</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Perawatan gigi sejak dini sangat penting untuk anak-anak. Terkadang pergi ke dokter gigi menjadi sebuah ketakutan tersendiri bagi anak-anak, oleh karena itu Spesialis Gigi Wijaya menghadirkan Dokter Spesialis Gigi Anak yang sudah berpengalaman untuk segala macam keluhan gigi anak, salah satu contohnya adalah gigi berlubang.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 3. Konservasi Gigi --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Konservasi Gigi</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Saluran Akar Gigi</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Perawatan gigi spesialis saluran akar gigi untuk merawat dan menyelamatkan gigi yang sudah tidak vital supaya dapat dipertahankan selama mungkin di dalam rongga mulut dan dapat berfungsi dengan baik. Dokter Spesialis Konservasi Gigi di Spesialis Gigi Wijaya melayani perawatan gigi vital dan tidak vital yang sudah mengenai pulpa gigi yang disebut perawatan saluran akar gigi.
                        </p>
                    </div>
                    <div class="h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/klinik-wijaya-layanan-bedah-mulut.jpg') }}" alt="Konservasi Gigi" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 4. Periodonsia --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="250">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/slider-dental-specialist.png') }}" alt="Periodonsia" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Periodonsia</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Kesehatan Gusi</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Jika Anda memiliki permasalahan pada gusi seperti: pembengkakan gusi, peradangan gusi, gigi goyang, penurunan gusi sampai ke perawatan gusi berdarah yang suka menimbulkan aroma tidak sedap di mulut. Tidak perlu khawatir, karena Dokter Spesialis Gusi di Spesialis Gigi Wijaya akan mengatasi permasalahan Anda.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 5. Prostodonsia --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Prostodonsia</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Gigi Tiruan</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Dokter gigi spesialis prostodonsia kami akan melakukan tindakan pencegahan dengan manajemen rongga mulut dan tindakan penyembuhan bagi pasien dengan keluhan gigi berlubang, gigi patah, kelainan bentuk gigi dan gigi telah dicabut. Manajemen rongga mulut diperlukan agar tindakan penyembuhan (perawatan dan perbaikan) dapat bertahan lebih lama.
                        </p>
                    </div>
                    <div class="h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/klinik-wijaya-spesialist-gigi-tiruan.png') }}" alt="Prostodonsia" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- 6. Bedah Mulut --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-delay="350">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-64 md:h-auto flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/bedahmulut.jpg') }}" alt="Bedah Mulut" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-6 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-[#1d3175] mb-2">Bedah Mulut</h3>
                        <p class="text-[#3F5499] font-semibold mb-3 text-base">Spesialis Bedah Mulut</p>
                        <p class="text-gray-600 text-base leading-snug">
                            Dokter Spesialis Bedah Mulut di Wijaya Dental Specialist akan menangani keluhan Anda, seperti : operasi gigi bungsu yang miring & pencabutan gigi yang sulit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-12 bg-gradient-to-r from-[#3F5499] to-[#389cc4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Konsultasikan Kesehatan Gigi Anda</h2>
        <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Tim dokter gigi spesialis kami siap membantu Anda mendapatkan senyum yang sehat dan indah.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('buat-janji') }}" class="bg-white text-[#3F5499] px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors duration-300">
                Buat Janji Konsultasi
            </a>
        </div>
    </div>
</section>

@endsection
