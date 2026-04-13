@extends('layout.main')

@section('title', '404 - Halaman Tidak Ditemukan | Klinik Wijaya')
@section('meta_title', '404 - Halaman Tidak Ditemukan | Klinik Wijaya')
@section('meta_description', 'Maaf, halaman yang Anda cari tidak dapat ditemukan di situs Klinik Wijaya.')
@section('robots', 'noindex, follow')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center py-20 bg-white px-4">
    <div class="max-w-4xl w-full text-center">
        {{-- Animated 404 Text --}}
        <div class="relative inline-block mb-8" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="text-[10rem] md:text-[15rem] font-americana-bold font-bold text-[#3F5499]/5 leading-none select-none">
                404
            </h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="space-y-2">
                     <svg class="w-24 h-24 md:w-32 md:h-32 text-[#3F5499] mx-auto animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h2 class="font-americana text-3xl md:text-5xl font-bold text-[#1d3175]">Halaman Tidak Ditemukan</h2>
                </div>
            </div>
        </div>

        {{-- Error Message --}}
        <div class="max-w-2xl mx-auto space-y-6" data-aos="fade-up" data-aos-delay="200">
            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                Maaf, sepertinya Anda tersesat. Halaman yang Anda tuju telah dipindahkan, dihapus, atau tidak pernah ada.
            </p>
            
            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-8 py-4 bg-[#3F5499] text-white font-bold rounded-xl hover:bg-[#1d3175] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Kembali ke Beranda
                </a>
                <a href="https://wa.me/628118062262" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-[#3F5499] text-[#3F5499] font-bold rounded-xl hover:bg-[#3F5499]/5 transition-all duration-300 transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>
        </div>

        {{-- Background Elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 opacity-10">
            <div class="absolute top-20 left-10 w-64 h-64 bg-[#7AC6E4] rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#3F5499] rounded-full blur-3xl"></div>
        </div>
    </div>
</section>

{{-- Additional Section for Quick Support --}}
<section class="py-12 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-[#3F5499]/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-americana-bold text-gray-900 mb-2">Bantuan Cepat</h3>
                <p class="text-gray-600 text-sm">Temukan jawaban atas pertanyaan Anda di halaman FAQ kami.</p>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 bg-[#3F5499]/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="font-americana-bold text-gray-900 mb-2">Layanan Kami</h3>
                <p class="text-gray-600 text-sm">Jelajahi berbagai layanan rehabilitasi robotik terbaik kami.</p>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="500">
                <div class="w-12 h-12 bg-[#3F5499]/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="font-americana-bold text-gray-900 mb-2">Lokasi Kami</h3>
                <p class="text-gray-600 text-sm">Kunjungi kami di Jakarta Selatan untuk konsultasi langsung.</p>
            </div>
        </div>
    </div>
</section>
@endsection
