@extends('layout.main')

@section('title', 'Fasilitas - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[500px] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/facilities/fasilitas-hero.jpg')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">FASILITAS</h1>
                <p class="text-xl md:text-2xl text-white/90">Fasilitas Modern untuk Kenyamanan Anda</p>
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
            <span class="text-[#3F5499] font-semibold">Facilities</span>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-gray-700 leading-relaxed text-lg">
                Klinik wijaya menyediakan berbagai fasilitas penunjang terbaik untuk memastikan perawatan dan kenyamanan pasien selama menjalani terapi dan pengobatan, diantaranya :
            </p>
        </div>
    </div>
</section>

<!-- Gallery Grid Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. Ruang Tunggu -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assts/img/facilities/ruang-tunggu.jpg') }}" loading="lazy" alt="Ruang Tunggu" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Ruang Tunggu</h3>
                </div>
            </div>

            <!-- 2. Ruang Terapi -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('assts/img/facilities/ruang-terapi.jpg') }}" loading="lazy" alt="Ruang Terapi" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Ruang Terapi</h3>
                </div>
            </div>

            <!-- 3. Kafetaria -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assts/img/facilities/kafetaria.jpg') }}" loading="lazy" alt="Kafetaria" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Kafetaria</h3>
                </div>
            </div>

            <!-- 4. Ruang Terapi Robotik -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assts/img/facilities/ruang-robotik.jpg') }}" loading="lazy" alt="Ruang Terapi Robotik" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Ruang Terapi Robotik</h3>
                </div>
            </div>

            <!-- 5. Kolam Hidroterapi -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assts/img/facilities/ruang-hidroterapi.jpg') }}" loading="lazy" alt="Kolam Hidroterapi" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Kolam Hidroterapi</h3>
                </div>
            </div>

            <!-- 6. Gymnasium -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assts/img/facilities/gymnasium.jpg') }}" loading="lazy" alt="Gymnasium" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 text-center">Gymnasium</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
