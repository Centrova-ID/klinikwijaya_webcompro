@extends('layout.main')

@section('title', 'Tentang Kami - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative aspect-video lg:aspect-[16/5] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/0/robotik_armeo/robotik_armeo-5.webp')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-slate-100/80"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex justify-center items-center">
            <div class="text-gray-800 max-w-3xl text-center">
                <h1 class="text-5xl md:text-6xl font-bold mt-24">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>  

{{-- Introduction Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
            <p class="text-gray-700 leading-relaxed text-xl">
                Klinik Wijaya adalah klinik terpercaya untuk rehabilitasi pasca stroke di Jakarta. Terletak di kawasan strategis Wijaya, Jakarta Selatan. Kami menyediakan program rehabilitasi yang mendukung kemandirian tiap pasien untuk meningkatkan kualitas hidup mereka setelah stroke.
            </p>
        </div>
    </div>
</section>

{{-- Alasan Memilih Kami Section --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-once="true">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Alasan Mengapa Anda Memilih Kami?</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- 1. VISI & MISI --} 
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi & Misi</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya memiliki visi menjadi Klinik Rehabilitasi Medik dengan teknologi yang terdepan. Dengan misi menyediakan teknologi robotik untuk mendukung proses rehabilitasi lebih efektif dan menyenangkan.
                </p>
            </div>

            {{-- 2. TERPERCAYA --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Terpercaya</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya didirikan sejak tahun 2000, sehingga kami telah memiliki kurang lebih 19 tahun pengalaman dan menjadi klinik rehabilitasi yang dapat dipercaya.
                </p>
            </div>

            {{-- 3. PELAYANAN TERBAIK --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Pelayanan Terbaik</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami selalu menjaga kualitas pelayanan untuk dapat melayani Anda dengan baik. Semua anggota Klinik Wijaya selalu mendapatkan update ilmu terbaru di bidangnya. Klinik Wijaya merupakan Klinik yang cocok untuk Anda dan keluarga.
                </p>
            </div>
            
            {{-- 4. LOKASI STRATEGIS --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Lokasi Strategis</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya berlokasi di Jl Wijaya II No 26, Melawai, Kebayoran Baru, Jakarta Selatan menjadi kawasan yang dapat dengan mudah dijangkau.
                </p>
            </div>
        </div>
    </div>
</section>  

{{-- Tim Dokter Section --}}
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        {{-- Single Doctor Card (centered) --}}
        <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="200" data-aos-once="true">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-4xl w-full flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2">
                    <img
                        src="{{ asset('assts/img/doctors/doctor (3).png') }}"
                        alt="Dr. Erik Setiawan, SpKFR"
                        class="w-full h-72 md:h-full object-cover"
                        loading="lazy"
                        onerror="this.src='{{ asset('assts/img/placeholder-doctor.jpg') }}'"
                    >
                </div>
                <div class="p-8 md:w-1/2 text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-gray-800">Dr. Erik Setiawan, SpKFR</h3>
                    <p class="text-gray-600 mt-2">Spesialis Kedokteran Fisik dan Rehabilitasi</p>
                </div>
            </div>
        </div>
    </div>
</Section>  


{{-- Google Maps Reviews Section --}}
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Section --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-[#3F5499] font-bold text-sm tracking-widest uppercase mb-3">Testimoni Pasien</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ulasan Google Maps</h3>
            <div class="w-24 h-1.5 bg-[#3F5499] mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kepercayaan Anda adalah prioritas kami. Berikut adalah pengalaman nyata dari mereka yang telah menjalani pemulihan di Klinik Wijaya.
            </p>
        </div>

        {{-- Widget Card --}}
        <div class="relative max-w-5xl mx-auto" data-aos="zoom-in" data-aos-delay="200">
            {{-- Background Decorative Element --}}
            <div class="absolute -top-6 -right-6 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-indigo-100 rounded-full blur-3xl opacity-50"></div>

            <div class="relative bg-white border border-gray-100 rounded-3xl shadow-2xl overflow-hidden">
                {{-- Top Bar: Google Info --}}
                <div class="bg-white px-8 py-6 border-b border-gray-50 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-gray-50 rounded-2xl">
                            <svg class="w-8 h-8" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xl font-bold text-gray-900">4.8</span>
                                <div class="flex text-yellow-400">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.966a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.966c.3.921-.755 1.688-1.54 1.118L10 13.347l-3.897 2.716c-.785.57-1.84-.197-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L2.12 9.393c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z"/></svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Berdasarkan 150+ Ulasan Pasien</p>
                        </div>
                    </div>
                    <a href="https://maps.google.com/?q=Klinik+Wijaya+Jakarta" target="_blank" class="px-5 py-2.5 bg-gray-900 text-white text-sm font-semibold rounded-xl hover:bg-gray-800 transition-all flex items-center gap-2">
                        Tulis Ulasan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                {{-- The Real Widget --}}
                <div class="p-4 md:p-8 min-h-[300px]">
                    <script defer async src='https://cdn.trustindex.io/loader-cert.js?f7d500664e515764f326a479870'></script>                
                </div>

                {{-- Bottom Info --}}
                <div class="bg-gray-50 px-8 py-4 flex items-center justify-center gap-6">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-xs font-bold text-gray-600 uppercase">Terverifikasi Google</span>
                    </div>
                    <div class="w-px h-4 bg-gray-300"></div>
                    <span class="text-xs text-gray-400">Powered by TrustIndex</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 