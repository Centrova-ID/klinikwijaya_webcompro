@extends('layout.main')

@section('title', 'Terapi Robotik - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/terapi-robotik-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Terapi Robotik</h1>
                <p class="text-xl md:text-2xl text-white/90">Teknologi Terdepan untuk Rehabilitasi Stroke</p>
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
            <span class="text-gray-500">Layanan</span>
            <span class="mx-2">/</span>
            <a href="{{ route('layanan.stroke-rehabilitation') }}" class="hover:text-[#3F5499]">Stroke Rehabilitation Center</a>
            <span class="mx-2">/</span>
            <span class="text-[#3F5499] font-semibold">Terapi Robotik</span>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div>
                <div class="flex items-center justify-center border border-gray-200">
                    <img src="{{ asset('assts/img/layanan/slider-terapi-robotik-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-16">
                <div class="space-y-6 text-gray-700 leading-relaxed text-center">
                    <p>
                    Sebagai pelopor terapi robotik untuk rehabilitasi medik pasca stroke di Indonesia klinik wijaya meyediakan berbagai fasilitas modern sabagai terobosan terkini dalam rehabilitasi medik pasca stroke dengan tujuan untuk meningkatkan fleksibilitas dan pengoptimalan gerak pasien pasca stroke.
                    </p>
                    <p>
                        Pengoptimalan gerak ini dibantu dengan teknologi robotik yang sudah terkomputerisasi dengan sistem, sehingga terapi menjadi efektif dan menyengangkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Jenis-Jenis Robot Section --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Jenis-Jenis Robotik Terapi</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Teknologi robotik canggih untuk mendukung pemulihan optimal pasien pasca stroke
            </p>
        </div>

        <div class="space-y-16">
            {{-- Robotik Armeo --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Robotik Armeo</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Pemulihan Fungsi Lengan Atas Pasca Stroke</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Melalui terapi Robotik Armeo ini, pasien dapat mengembalikan koordinasi otak dan otot lengan atas. Latihan dilengkapi dengan games yang menarik sehingga pasien tidak bosan selama menjalani latihan.
                        </p>
                    </div>
                    <div class="h-auto md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/robotik-armeo.png') }}" alt="Robotik Armeo" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Robotik Lokomat --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-auto md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/robotik-lokomat.png') }}" alt="Robotik Lokomat" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Robotik Lokomat</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Pemulihan Kemampuan Berjalan dan Keseimbangan Jalan</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Robotik Lokomat akan mempercepat waktu perkembangan kemampuan berjalan dan keseimbangan jalan. Pasien akan dilatih berjalan dengan menggunakan penyangga berat badan sehingga aman dan meningkatkan rasa percaya diri pasien untuk berjalan. Alat ini menggunakan simulasi permainan untuk memotivasi pasien berjalan dengan cara yang benar.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Robotik Andago --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Robotik Andago</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Terapi Lanjutan untuk Berjalan</p>
                        <p class="text-gray-600 leading-relaxed text-lg mb-4">
                            Alat ini berbentuk <em>Inverted U shape frame</em> dengan <em>body weight support</em> yang akan menyangga pasien selama berjalan. Andago diperuntukkan bagi pasien yang sudah memiliki pola jalan yang baik namun masih membutuhkan bantuan alat penyangga selama berjalan.
                        </p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Penggunaan alat ini akan mempercepat pasien yang untuk berjalan secara mandiri tanpa penyangga.
                        </p>
                    </div>
                    <div class="h-auto md:h-auto bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/robotik-andago.png') }}" alt="Robotik Andago" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Robotik Fourier --}}
            <div class="bg-white border border-gray-200">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="order-2 md:order-1 h-auto md:h-auto bg-gradient-to-br from-[#7AC6E4]/20 to-[#3F5499]/20 flex items-center justify-center">
                        <img src="{{ asset('assts/img/layanan/robotik-fourier.png') }}" alt="Robotik Fourier" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Robotik Fourier</h3>
                        <div class="w-16 h-1 bg-[#3F5499] mb-6"></div>
                        <p class="text-[#3F5499] font-semibold mb-4 text-lg">Melatih Gerakan Bahu, Lengan Atas dan Lengan Bawah</p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Robotik Fourier M2 berfungsi untuk melatih gerakan bahu, lengan atas dan lengan bawah. Alat ini juga menggunakan permainan untuk menstimulasi gerakan masing-masing sendi di bahu, siku dan sebagian gerakan pergelangan tangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
