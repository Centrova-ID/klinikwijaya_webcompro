@extends('layout.main')

@section('title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')
@section('meta_title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')
@section('meta_description', 'Klinik Wijaya menyediakan layanan rehabilitasi stroke dengan terapi robotik pertama di Indonesia. Bagian dari Rumah Sakit Pondok Indah Group dengan tenaga medis profesional dan fasilitas modern.')
@section('meta_keywords', 'klinik wijaya, terapi robotik, stroke, rehabilitasi stroke jakarta, fisioterapi, pondok indah group, klinik stroke terbaik, terapi pasca stroke')
@section('canonical', url('/'))

@section('og_type', 'website')
@section('og_title', 'Klinik Wijaya - Terapi Robotik Pasca Stroke Pertama di Indonesia')
@section('og_description', 'Rehabilitasi stroke dengan teknologi terapi robotik pertama di Indonesia. Tenaga medis profesional, fasilitas modern, dan metode terkini.')
@section('og_image', asset('assts/img/hero-robotic-therapy.jpg'))

@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalClinic",
    "name": "Klinik Wijaya",
    "description": "Klinik rehabilitasi stroke dengan terapi robotik pertama di Indonesia",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('assts/logo/logo-klinik-wijaya.png') }}",
    "image": "{{ asset('assts/img/hero-robotic-therapy.jpg') }}",
    "telephone": "+62-21-XXXXXXX",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. Wijaya",
        "addressLocality": "Jakarta",
        "addressRegion": "DKI Jakarta",
        "postalCode": "12345",
        "addressCountry": "ID"
    },
    "medicalSpecialty": [
        "Kedokteran Rehabilitasi",
        "Terapi Fisik",
        "Rehabilitasi Stroke"
    ],
    "availableService": [
        {
            "@type": "MedicalProcedure",
            "name": "Terapi Robotik Pasca Stroke",
            "description": "Rehabilitasi stroke menggunakan teknologi robotik terkini"
        },
        {
            "@type": "MedicalTherapy",
            "name": "Fisioterapi",
            "description": "Layanan fisioterapi komprehensif untuk pemulihan fungsi tubuh"
        }
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "150"
    }
}
</script>
@endverbatim
@endpush

@section('content')
{{-- Hero Section - Image Background --}}
<section class="relative max-md:h-[600px] md:aspect-video bg-gray-900 overflow-hidden">
    {{-- Background Image with proper alt text for SEO --}}
    <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" 
         alt="Terapi Robotik Pasca Stroke di Klinik Wijaya - Teknologi Rehabilitasi Modern" 
         class="absolute inset-0 w-full h-full object-cover" 
         loading="eager"
         fetchpriority="high">
    
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/60"></div>
    
    {{-- Content --}}
    <div class="relative h-full flex items-center justify-center z-10">
        <div class="text-center text-white px-4" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">TERAPI ROBOTIK</h1>
            <p class="text-xl md:text-2xl drop-shadow-lg">Rehabilitasi Stroke pertama di Indonesia dengan metode TERAPI ROBOTIK</p>
        </div>
    </div>
</section>

{{-- Value Proposition Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Card 1: Academia --}}
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3">Academia Klinik Wijaya</h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Academia Klinik Wijaya didirikan untuk membangun lingkungan kerja yang profesional. Dokter, Terapis dan Karyawan akan terus mengembangkan ilmu dari segi soft skills dan hard skills. Hal ini dilakukan untuk mewujudkan komitmen kami untuk memberikan standar pelayanan yang terbaik kepada pasien.</p>
                    <a href="{{ route('tentang-kami') }}" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors" aria-label="Selengkapnya tentang Academia Klinik Wijaya">Selengkapnya →</a>
                </div>
            </div>

            {{-- Card 2: Robotic Therapy --}}
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20 9V7c0-1.1-.9-2-2-2h-3c0-1.66-1.34-3-3-3S9 3.34 9 5H6c-1.1 0-2 .9-2 2v2c-1.66 0-3 1.34-3 3s1.34 3 3 3v4c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-4c1.66 0 3-1.34 3-3s-1.34-3-3-3zm-2 10H6V7h12v12zm-9-6c-.83 0-1.5-.67-1.5-1.5S8.17 10 9 10s1.5.67 1.5 1.5S9.83 13 9 13zm7.5-1.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5zM8 15h8v2H8v-2z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3">Terapi Robotik Pertama di Indonesia</h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Kemajuan teknologi di bidang kesehatan semakin pesat, Klinik Wijaya sadar pentingnya peran teknologi dalam proses rehabilitasi medis, sehingga menjadikan Klinik Wijaya sebagai pelopor penggunaan teknologi robotik untuk rehabilitasi medis.</p>
                    <a href="{{ route('layanan.terapi-robotik') }}" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors" aria-label="Selengkapnya tentang Terapi Robotik">Selengkapnya →</a>
                </div>
            </div>

            {{-- Card 3: Advanced Technology --}}
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-5-6l-7 4V7z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3">Fasilitas Teknologi Canggih</h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Kami juga memiliki fasilitas seperti: Kolam hidro dengan sistem pengelolaan air osmosis balik sehingga aman bagi pasien. Ultrasonik untuk pengelolaan nyeri yang lebih akurat.</p>
                    <a href="{{ route('fasilitas') }}" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors" aria-label="Selengkapnya tentang Fasilitas">Selengkapnya →</a>
                </div>
            </div>

            {{-- Card 4: Senior Doctors --}}
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3">Dokter Berpengalaman</h2>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami memiliki dokter-dokter spesialis yang sudah berpengalaman di bidangnya. Selain itu, dokter kami berusaha untuk selalu mengembangkan ilmunya sehingga berguna untuk pasien.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Overview - Layanan Kami --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">LAYANAN KAMI</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            {{-- Service 1 --}}
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                <img src="https://klinikwijaya.com/wp-content/uploads/2019/07/klinik-wijaya-stroke-rehabilitasi-320x320.png" class="w-full aspect-square">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pusat Rehabilitasi Stroke</h3>
                    <p class="text-gray-600">Pusat Rehabilitasi Stroke dengan teknologi robotik paling modern.</p>
                </div>
            </div>

            {{-- Service 2 --}}
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <img src="https://klinikwijaya.com/wp-content/uploads/2019/06/klinik-wijaya-muskulokeletal-320x320.png" class="w-full aspect-square">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Muskuloskeletal</h3>
                    <p class="text-gray-600">Terapi nyeri untuk gangguan persendian, saraf, otot serta tulang belakang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Detail Layanan & Fasilitas --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-16">
            {{-- Hydrotherapy --}}
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div style="pointer-events: none; width: 560px; height: 315px; overflow: hidden;">
                  <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/bdCmDdKnJWg?autoplay=1&mute=1&controls=0&loop=1&playlist=bdCmDdKnJWg&modestbranding=1&rel=0&iv_load_policy=3&fs=0&color=white&disablekb=1" 
                    title="YouTube video player" 
                    frameborder="0" 
                    style="border:0;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                  </iframe>
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Hidroterapi</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Hidroterapi dengan kolam yang menggunakan sistem pengolahan air osmosis balik untuk menjaga kualitas dan kebersihan air sehingga selalu aman bagi pasien. Suhu air dibuat 33° agar nyaman bagi pasien dan membantu relaksasi otot saat terapi.</p>
                    <a href="{{ route('layanan.terapi-robotik') }}" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
            </div>

            {{-- Robotic Therapy --}}
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Terapi Robotik</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Rehabilitasi medis di Klinik Wijaya dilengkapi dengan teknologi robotik. Penggunaan alat robotik ini akan mempercepat terapi dan mendapatkan hasil yang optimal.</p>
                    <a href="{{ route('layanan.terapi-robotik') }}" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
                <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" alt="">
            </div>

            {{-- Musculoskeletal Clinic --}}
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="{{ asset('assts/img/layanan/muskuloskeletal.png') }}" alt="">
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Muskuloskeletal</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Muskuloskeletal membantu pasien untuk mengatasi permasalahan nyeri pada otot, sendi, jaringan ikat dan tulang. Pengelolaan nyeri dilakukan secara menyeluruh oleh dokter spesialis Neurologi, Rehabilitasi Medis dan Bedah Tulang kami sehingga nyeri dapat diketahui penyebabnya dan diatasi secara tepat. Penanganan nyeri akan disertai dengan terapi dan latihan untuk pemeliharaan agar permasalahan tidak berulang.</p>
                    <a href="{{ route('layanan.musculosceletal') }}" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Artikel Kesehatan --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4" data-aos="fade-down">
            <h2 class="text-4xl font-bold text-gray-900 mb-2">Artikel Kesehatan</h2>
            <p class="text-gray-600">Simak artikel kesehatan terbaru dari kami. Tinggalkan komentar jika Anda membutuhkan informasi menarik lainnya.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @forelse($articles as $article)
            <a href="{{ route('artikel.show', $article->slug) }}">
                <div class="bg-white border border-gray-200 overflow-hidden hover:shadow transition-shadow duration-300">
                    @if($article->featured_image)
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                    </div>
                    @else
                    <div class="h-48 bg-gradient-to-br from-[#3F5499]/20 to-[#7AC6E4]/20 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    @endif
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-900 mb-1 leading-tight line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-sm text-neutral-600">{{ $article->published_at ? $article->published_at->format('F d, Y') : 'Draft' }}</p>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-400">Belum ada artikel tersedia</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- Galeri Foto --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-4xl font-bold text-gray-900 mb-2">GALERI FOTO</h2>
            <p class="text-gray-600">Kami siap melayani Anda sepenuh hati</p>
        </div>
        
        <div class="grid grid-cols-3 gap-[6px] mt-12">
            @forelse($galleryImages as $index => $image)
                @if($index < 9)
                <div class="aspect-square overflow-hidden bg-gray-100 cursor-pointer" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}" data-aos-duration="800">
                    <img src="{{ asset($image) }}" 
                         alt="Gallery Image" 
                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
                         width="400"
                         height="400"
                         loading="lazy"
                         onclick="openLightbox({{ $index }})">
                </div>
                @endif
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-400">Belum ada foto di galeri</p>
                </div>
            @endforelse
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('galeri') }}" class="inline-block px-8 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Lihat Foto Lainnya</a>
        </div>
    </div>
</section>

{{-- Lightbox Modal --}}
<div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4" onclick="closeLightbox(event)">
    {{-- Close Button --}}
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors z-60">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
    
    {{-- Previous Button --}}
    <button onclick="prevImage(event)" class="absolute left-6 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-60 bg-black/50 p-3 rounded-full">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    
    {{-- Next Button --}}
    <button onclick="nextImage(event)" class="absolute right-6 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-60 bg-black/50 p-3 rounded-full">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
    
    {{-- Zoom Controls --}}
    <div class="absolute top-6 left-6 flex gap-2 z-60">
        <button onclick="zoomIn(event)" class="text-white hover:text-gray-300 transition-colors bg-black/50 p-3 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
            </svg>
        </button>
        <button onclick="zoomOut(event)" class="text-white hover:text-gray-300 transition-colors bg-black/50 p-3 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7"/>
            </svg>
        </button>
        <button onclick="resetZoom(event)" class="text-white hover:text-gray-300 transition-colors bg-black/50 p-3 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
        </button>
    </div>
    
    {{-- Image Counter --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white bg-black/50 px-4 py-2 rounded-full z-60">
        <span id="current-image">1</span> / <span id="total-images">{{ count($galleryImages) }}</span>
    </div>
    
    {{-- Image Container --}}
    <div class="relative max-w-full max-h-full overflow-hidden" onclick="event.stopPropagation()">
        <img id="lightbox-img" src="" alt="Gallery Image" class="max-w-full max-h-[80vh] object-contain transition-transform duration-300" style="cursor: zoom-in;">
    </div>
</div>

@push('scripts')
<script>
// Gallery images array
const galleryImages = @json(array_values($galleryImages));
let currentImageIndex = 0;
let zoomLevel = 1;

function openLightbox(index) {
    currentImageIndex = index;
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    
    lightboxImg.src = "{{ asset('') }}" + galleryImages[currentImageIndex];
    updateImageCounter();
    resetZoom();
    
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeLightbox(event) {
    if (event) event.stopPropagation();
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.style.overflow = 'auto';
    resetZoom();
}

function prevImage(event) {
    event.stopPropagation();
    currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    updateLightboxImage();
}

function nextImage(event) {
    event.stopPropagation();
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    updateLightboxImage();
}

function updateLightboxImage() {
    const lightboxImg = document.getElementById('lightbox-img');
    lightboxImg.src = "{{ asset('') }}" + galleryImages[currentImageIndex];
    updateImageCounter();
    resetZoom();
}

function updateImageCounter() {
    document.getElementById('current-image').textContent = currentImageIndex + 1;
}

function zoomIn(event) {
    event.stopPropagation();
    const lightboxImg = document.getElementById('lightbox-img');
    zoomLevel = Math.min(zoomLevel + 0.25, 3);
    lightboxImg.style.transform = `scale(${zoomLevel})`;
    lightboxImg.style.cursor = zoomLevel > 1 ? 'zoom-out' : 'zoom-in';
}

function zoomOut(event) {
    event.stopPropagation();
    const lightboxImg = document.getElementById('lightbox-img');
    zoomLevel = Math.max(zoomLevel - 0.25, 0.5);
    lightboxImg.style.transform = `scale(${zoomLevel})`;
    lightboxImg.style.cursor = zoomLevel > 1 ? 'zoom-out' : 'zoom-in';
}

function resetZoom(event) {
    if (event) event.stopPropagation();
    const lightboxImg = document.getElementById('lightbox-img');
    zoomLevel = 1;
    lightboxImg.style.transform = `scale(1)`;
    lightboxImg.style.cursor = 'zoom-in';
}

// Toggle zoom on image click
document.getElementById('lightbox-img').addEventListener('click', function(e) {
    e.stopPropagation();
    if (zoomLevel === 1) {
        zoomIn(e);
    } else {
        resetZoom(e);
    }
});

// Keyboard controls
document.addEventListener('keydown', function(e) {
    const lightbox = document.getElementById('lightbox');
    if (lightbox.classList.contains('flex')) {
        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                prevImage(e);
                break;
            case 'ArrowRight':
                nextImage(e);
                break;
            case '+':
            case '=':
                zoomIn(e);
                break;
            case '-':
            case '_':
                zoomOut(e);
                break;
            case '0':
                resetZoom(e);
                break;
        }
    }
});
</script>
@endpush

@endsection