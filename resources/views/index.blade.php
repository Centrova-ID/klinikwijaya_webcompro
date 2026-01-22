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
    <img src="{{ asset('assts/img/layanan/home1.JPG') }}" 
         alt="Terapi Robotik Pasca Stroke di Klinik Wijaya - Teknologi Rehabilitasi Modern" 
         class="absolute inset-0 w-full h-full object-cover" 
         loading="eager"
         fetchpriority="high">
    
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/60"></div>
    
    {{-- Content --}}
    <div class="relative h-full flex items-center justify-center z-10">
        <div class="text-center text-white px-4" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-[6rem] font-americana-bold font-bold mb-4 drop-shadow-lg">Klinik Wijaya</h1>
            <p class="text-xl md:text-2xl drop-shadow-lg">Melampaui Batas Pemulihan, Menghidupkan Kembali Harapan</p>
        </div>
    </div>
</section>

{{-- Intro Section - Brief Content with Frame Image --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="font-americana text-neutral-800 text-3xl mb-6 font-bold">Dedikasi Dua Dekade dalam Restorasi Kualitas Hidup Pasca-Stroke</h2>
                <p class="text-lg text-gray-800 leading-relaxed mb-4">
                    Selamat datang di Klinik Wijaya, pusat keunggulan rehabilitasi stroke yang telah menjadi mercu suar harapan di Jakarta Selatan. Kami memahami bahwa stroke bukan sekadar tantangan medis, melainkan titik balik kehidupan yang memerlukan penanganan komprehensif, teknologi mutakhir, dan empati yang mendalam.
                </p>
                <p class="text-lg text-gray-800 leading-relaxed">
                    Dengan warisan pengalaman selama lebih dari 20 tahun, Klinik Wijaya konsisten memadukan kemanusiaan dengan inovasi medis untuk membantu setiap individu menemukan kembali kemandirian mereka.
                </p>
            </div>
            
            <div class="relative" data-aos="fade-left">
                {{-- Main Image Frame --}}
                <img src="{{ asset('assts/img/0/home/home-8.webp') }}" alt="Terapi Robotik Klinik Wijaya" class="rounded-xl aspect-[6/5] object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Mengapa Memilih Klinik Wijaya?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Keunggulan kami terletak pada sinergi antara keahlian klinis dan standar pelayanan internasional yang telah diakui.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            {{-- Card 1 --}}
            <div class="rounded-xl border border-gray-200 p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Pengalaman Teruji & Terpercaya</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Lebih dari dua dekade melayani masyarakat, kami telah mendampingi lebih dari 5.000 pasien dalam perjalanan pemulihan mereka. Kepuasan dan keberhasilan pasien adalah bukti nyata dari dedikasi kami yang tak tergoyahkan.
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="rounded-xl border border-gray-200 p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Akreditasi & Standar Tertinggi</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Sebagai institusi yang telah terakreditasi resmi secara paripurna, Klinik Wijaya menjamin setiap prosedur dijalankan sesuai dengan protokol medis yang ketat, aman, dan akuntabel.
                </p>
            </div>

            {{-- Card 3 --}}
            <div class="rounded-xl border border-gray-200 p-6" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-[#3F5499]/10 flex items-center justify-center rounded-lg mb-4">
                    <svg class="w-6 h-6 text-[#1d3175]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 9V7c0-1.1-.9-2-2-2h-3c0-1.66-1.34-3-3-3S9 3.34 9 5H6c-1.1 0-2 .9-2 2v2c-1.66 0-3 1.34-3 3s1.34 3 3 3v4c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-4c1.66 0 3-1.34 3-3s-1.34-3-3-3zm-2 10H6V7h12v12z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1d3175] mb-3">Pelopor Rehabilitasi Robotik</h3>
                <p class="text-gray-600 text-base leading-snug">
                    Kami adalah pionir dalam mengintegrasikan Teknologi Robotik ke dalam program neuro rehabilitasi. Dengan presisi tinggi, teknologi ini mampu mempercepat neuroplastisitas otak dan memberikan hasil yang lebih terukur.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Methodology Section --}}
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div data-aos="fade-right">
                <h2 class="font-americana text-3xl font-bold text-gray-900 mb-6">Personalized Care</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Setiap pasien adalah unik. Di Klinik Wijaya, kami tidak hanya mengobati gejala, tetapi menangani manusia seutuhnya. Tim multidisiplin kami yang terdiri dari dokter spesialis saraf, dokter spesialis rehabilitasi medik, fisioterapis, dan tenaga pendukung yang bekerja secara kolaboratif untuk menyusun rencana terapi yang dipersonalisasi.
                    <br>
                    <br>
                    "Kami percaya bahwa setiap gerakan kecil yang berhasil diraih kembali adalah sebuah kemenangan besar bagi kehidupan."
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-[#7AC6E4]/20 rounded-lg"></div>
                <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-[#3F5499]/10 rounded-lg"></div>
                <div class="relative bg-gradient-to-br from-[#3F5499]/5 to-[#7AC6E4]/5 p-8 rounded-lg border border-gray-100">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-[#3F5499] mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Pendekatan Holistik</h3>
                        <p class="text-gray-600 text-sm">
                            Menggabungkan aspek fisik, emosional, dan sosial dalam program rehabilitasi untuk hasil yang optimal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Premium Facilities Section with Enhanced Mobile Scroll --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:grid lg:grid-cols-6 gap-8 lg:gap-10">
            {{-- Title Section --}}
            <div data-aos="fade-right" class="lg:col-span-2 mb-6 lg:mb-0 px-4 sm:px-6 lg:px-8">
                <h2 class="font-americana text-3xl lg:text-5xl font-bold text-gray-800 mb-4 lg:mb-6">Fasilitas Keunggulan</h2>
                <p class="text-gray-600 leading-relaxed text-base lg:text-xl">
                    Teknologi mutakhir yang mendukung pemulihan optimal pasien
                </p>
            </div>
            
            {{-- Cards Container --}}
            <div class="lg:col-span-4 w-full" data-aos="fade-left">
                {{-- Desktop Grid --}}
                <div class="hidden lg:grid lg:grid-cols-3 gap-6 lg:gap-7 px-4 sm:px-6 lg:px-8">
                    {{-- Desktop Cards (same as original) --}}
                    <div class="w-full flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200 hover:scale-105 transition duration-500">
                        <img src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" class="h-[75%] object-cover">
                        <div class="absolute w-full h-full flex flex-col justify-end p-4" style="background: linear-gradient(0deg, #f1f5fb 35%, #f1f5fb00 65%, #f1f5fb00);">
                            <h2 class="font-americana text-neutral-700 text-xl font-semibold">Robot-Assisted Gait Training</h2>
                            <p class="mt-3 text-neutral-600 text-sm">Teknologi mutakhir untuk melatih kembali kemampuan berjalan dengan presisi tinggi.</p>
                        </div>
                    </div>

                    <div class="w-full flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200 hover:scale-105 transition duration-500">
                        <img src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" class="h-[75%] object-cover">
                        <div class="absolute w-full h-full flex flex-col justify-end p-4" style="background: linear-gradient(0deg, #f1f5fb 35%, #f1f5fb00 65%, #f1f5fb00);">
                            <h2 class="font-americana text-neutral-700 text-xl font-semibold">Upper Limb Robotic Therapy</h2>
                            <p class="mt-3 text-neutral-600 text-sm">Fokus pada pemulihan motorik halus dan fungsional tangan dengan teknologi canggih.</p>
                        </div>
                    </div>

                    <div class="w-full flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200 hover:scale-105 transition duration-500">
                        <img src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" class="h-[75%] object-cover">
                        <div class="absolute w-full h-full flex flex-col justify-end p-4" style="background: linear-gradient(0deg, #f1f5fb 35%, #f1f5fb00 65%, #f1f5fb00);">
                            <h2 class="font-americana text-neutral-700 text-xl font-semibold">Lingkungan Terapeutik</h2>
                            <p class="mt-3 text-neutral-600 text-sm">Ruang rehabilitasi yang modern, nyaman, dan dirancang khusus untuk stimulasi sensorik pasien.</p>
                        </div>
                    </div>
                </div>

                {{-- Mobile Horizontal Scroll Container --}}
                <div class="lg:hidden relative">
                    {{-- Scrollable Container --}}
                    <div class="overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar" id="mobile-cards-scroll">
                        <div class="flex gap-4 pb-2 w-max px-4 sm:px-6 lg:px-8">
                            {{-- Mobile Card 1 --}}
                            <div class="snap-center flex-shrink-0 w-[85vw] max-w-[320px] flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200">
                                <img 
                                    src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" 
                                    alt="Robot-Assisted Gait Training"
                                    class="h-[75%] object-cover"
                                    loading="lazy"
                                >
                                <div class="absolute w-full h-full flex flex-col justify-end p-4 bg-gradient-to-t from-white via-white/90 to-transparent">
                                    <h2 class="font-americana text-neutral-700 text-xl font-semibold">Robot-Assisted Gait Training</h2>
                                    <p class="mt-3 text-neutral-600 text-sm">Teknologi mutakhir untuk melatih kembali kemampuan berjalan dengan presisi tinggi.</p>
                                </div>
                            </div>

                            {{-- Mobile Card 2 --}}
                            <div class="snap-center flex-shrink-0 w-[85vw] max-w-[320px] flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200">
                                <img 
                                    src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" 
                                    alt="Upper Limb Robotic Therapy"
                                    class="h-[75%] object-cover"
                                    loading="lazy"
                                >
                                <div class="absolute w-full h-full flex flex-col justify-end p-4 bg-gradient-to-t from-white via-white/90 to-transparent">
                                    <h2 class="font-americana text-neutral-700 text-xl font-semibold">Upper Limb Robotic Therapy</h2>
                                    <p class="mt-3 text-neutral-600 text-sm">Fokus pada pemulihan motorik halus dan fungsional tangan dengan teknologi canggih.</p>
                                </div>
                            </div>

                            {{-- Mobile Card 3 --}}
                            <div class="snap-center flex-shrink-0 w-[85vw] max-w-[320px] flex flex-col aspect-[10/16] relative rounded-xl overflow-hidden bg-neutral-200 border border-neutral-200">
                                <img 
                                    src="{{ asset('assts/img/0/robotik_lokomat/robotik_lokomat-12.webp') }}" 
                                    alt="Lingkungan Terapeutik"
                                    class="h-[75%] object-cover"
                                    loading="lazy"
                                >
                                <div class="absolute w-full h-full flex flex-col justify-end p-4 bg-gradient-to-t from-white via-white/90 to-transparent">
                                    <h2 class="font-americana text-neutral-700 text-xl font-semibold">Lingkungan Terapeutik</h2>
                                    <p class="mt-3 text-neutral-600 text-sm">Ruang rehabilitasi yang modern, nyaman, dan dirancang khusus untuk stimulasi sensorik pasien.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Scroll Indicator --}}
                    <div class="flex justify-center mt-4 space-x-2">
                        <div class="w-2 h-2 rounded-full bg-gray-300 scroll-indicator active"></div>
                        <div class="w-2 h-2 rounded-full bg-gray-300 scroll-indicator"></div>
                        <div class="w-2 h-2 rounded-full bg-gray-300 scroll-indicator"></div>
                    </div>
                    
                    {{-- Custom CSS for Scroll Behavior --}}
                    <style>
                        .no-scrollbar {
                            -ms-overflow-style: none;
                            scrollbar-width: none;
                        }
                        .no-scrollbar::-webkit-scrollbar {
                            display: none;
                        }
                        
                        /* Snap scrolling */
                        .snap-x {
                            scroll-snap-type: x mandatory;
                        }
                        .snap-center {
                            scroll-snap-align: center;
                        }
                        
                        /* Scroll indicator */
                        .scroll-indicator.active {
                            background-color: #3F5499;
                            transform: scale(1.2);
                        }
                    </style>
                    
                    {{-- JavaScript for Scroll Indicator --}}
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const scrollContainer = document.getElementById('mobile-cards-scroll');
                            const indicators = document.querySelectorAll('.scroll-indicator');
                            
                            if (scrollContainer && indicators.length > 0) {
                                scrollContainer.addEventListener('scroll', function() {
                                    const scrollPosition = scrollContainer.scrollLeft;
                                    const cardWidth = scrollContainer.querySelector('.snap-center').offsetWidth + 16; // + gap
                                    const activeIndex = Math.round(scrollPosition / cardWidth);
                                    
                                    indicators.forEach((indicator, index) => {
                                        if (index === activeIndex) {
                                            indicator.classList.add('active');
                                        } else {
                                            indicator.classList.remove('active');
                                        }
                                    });
                                });
                                
                                // Update indicators on load
                                indicators[0].classList.add('active');
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Artikel Kesehatan (Existing Section) --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Artikel Kesehatan</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Simak artikel kesehatan terbaru dari kami. Tinggalkan komentar jika Anda membutuhkan informasi menarik lainnya.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            @forelse($articles as $article)
            <a href="{{ route('artikel.show', $article->slug) }}" class="block hover:no-underline">
                <div>
                    @if($article->featured_image)
                    <div class="aspect-video rounded-xl overflow-hidden">
                        <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    @else
                    <div class="aspect-video rounded-xl bg-neutral-200 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    @endif
                    <div class="py-5">
                        <h3 class="text-xl font-semibold text-neutral-800 mb-2 leading-tight line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-sm text-neutral-600">{{ $article->published_at ? $article->published_at->format('F d, Y') : 'Draft' }}</p>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-gray-400">Belum ada artikel tersedia</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- Galeri Foto (Existing Section) --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="font-americana text-3xl font-bold text-neutral-800 mb-4">Galeri</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kami siap melayani Anda sepenuh hati
            </p>
        </div>
        
        <div class="grid grid-cols-3 gap-2 mt-10">
            @forelse($galleryImages as $index => $image)
                @if($index < 9)
                <div class="aspect-square overflow-hidden bg-gray-100 cursor-pointer rounded-lg" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
                    <img src="{{ asset($image) }}" 
                         alt="Gallery Image Klinik Wijaya" 
                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
                         width="400"
                         height="400"
                         loading="lazy"
                         onclick="openLightbox({{ $index }})">
                </div>
                @endif
            @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-gray-400">Belum ada foto di galeri</p>
                </div>
            @endforelse
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('galeri') }}" class="inline-block px-8 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300 rounded-lg">Lihat Foto Lainnya</a>
        </div>
    </div>
</section>

{{-- Lightbox Modal (Existing) --}}
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

{{-- CTA Section --}}
<section class="py-12 bg-gradient-to-r from-[#3F5499] to-[#389cc4]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-in">
        <h2 class="font-americana text-3xl md:text-4xl font-bold text-white mb-6">Mulailah Langkah Pemulihan Anda Hari Ini</h2>
        <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Jangan biarkan stroke membatasi masa depan Anda atau orang yang Anda cintai. Bergabunglah bersama ribuan pasien lainnya yang telah berhasil meraih kembali kualitas hidupnya di Klinik Wijaya.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('buat-janji') }}" class="bg-white text-[#3F5499] px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors duration-300">
                Coba Konsultasi
            </a>
        </div>
    </div>
</section>

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
// Ensure AOS animations run only once per element
window.addEventListener('load', function() {
    if (window.AOS && typeof AOS.init === 'function') {
        AOS.init({ once: true });
    }
});
</script>
@endpush

@endsection