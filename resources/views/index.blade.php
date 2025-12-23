@extends('layout.main')

@section('title', 'Terapi Robotik Pasca Stroke - Klinik Wijaya')

@section('content')
<!-- Hero Section - Image Background -->
<section class="relative h-[600px] bg-gray-900 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('https://img.youtube.com/vi/bdCmDdKnJWg/maxresdefault.jpg');"></div>
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>
    
    <!-- Content -->
    <div class="relative h-full flex items-center justify-center z-10">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">TERAPI ROBOTIK</h1>
            <p class="text-xl md:text-2xl drop-shadow-lg">Rehabilitasi Stroke pertama di Indonesia dengan metode TERAPI ROBOTIK</p>
        </div>
    </div>
</section>

<!-- Value Proposition Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Academia -->
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Academia Klinik Wijaya</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Academia Klinik Wijaya didirikan untuk membangun lingkungan kerja yang profesional. Dokter, Terapis dan Karyawan akan terus mengembangkan ilmu dari segi soft skills dan hard skills. Hal ini dilakukan untuk mewujudkan komitmen kami untuk memberikan standar pelayanan yang terbaik kepada pasien.</p>
                    <a href="#" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors">Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 2: Robotic Therapy -->
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 9V7c0-1.1-.9-2-2-2h-3c0-1.66-1.34-3-3-3S9 3.34 9 5H6c-1.1 0-2 .9-2 2v2c-1.66 0-3 1.34-3 3s1.34 3 3 3v4c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-4c1.66 0 3-1.34 3-3s-1.34-3-3-3zm-2 10H6V7h12v12zm-9-6c-.83 0-1.5-.67-1.5-1.5S8.17 10 9 10s1.5.67 1.5 1.5S9.83 13 9 13zm7.5-1.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5zM8 15h8v2H8v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">The First Robotic Therapy in Indonesia</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Kemajuan teknologi di bidang kesehatan semakin pesat, Klinik Wijaya sadar pentingnya peran teknologi dalam proses rehabilitasi medik, sehingga menjadikan Klinik Wijaya sebagai pelopor penggunaan teknologi robotik untuk rehabilitasi medik.</p>
                    <a href="#" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors">Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 3: Advanced Technology -->
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-5-6l-7 4V7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Technology Facilities</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Kami juga memiliki fasilitas seperti: Hydro pool dengan sistem pengelolaan air Reverse Osmosis sehingga aman bagi pasien. Ultrasound untuk pain management yang lebih akurat.</p>
                    <a href="#" class="inline-block text-[#3F5499] font-semibold hover:text-[#7AC6E4] transition-colors">Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 4: Senior Doctors -->
            <div class="bg-white border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="h-1 bg-[#3F5499]"></div>
                <div class="p-6">
                    <div class="w-14 h-14 bg-[#7AC6E4]/20 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-[#3F5499]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Senior Doctors</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami memiliki dokter-dokter spesialis yang sudah berpengalaman di bidangnya. Selain itu, dokter kami berusaha untuk selalu mengembangkan ilmunya sehingga berguna untuk pasien.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview - Layanan Kami -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">LAYANAN KAMI</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="https://klinikwijaya.com/wp-content/uploads/2019/07/klinik-wijaya-stroke-rehabilitasi-320x320.png" class="w-full aspect-square">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Stroke Rehabilitation Center</h3>
                    <p class="text-gray-600">Pusat Rehabilitasi Stroke dengan teknologi robotik paling modern.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="https://klinikwijaya.com/wp-content/uploads/2019/06/klinik-wijaya-muskulokeletal-320x320.png" class="w-full aspect-square">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Musculoskeletal Clinic</h3>
                    <p class="text-gray-600">Terapi nyeri untuk gangguan persendian, saraf, otot serta tulang belakang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Layanan & Fasilitas -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-16">
            <!-- Hydrotherapy -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="{{ asset('assts/img/layanan/hydroterapi.png') }}" alt="">
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Hydrotherapy</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Hidroterapi dengan kolam yang menggunakan sistem pengolahan air reverse osmosis untuk menjaga kualitas dan kebersihan air sehingga selalu aman bagi pasien. Suhu air dibuat 33° agar nyaman bagi pasien dan membantu relaksasi otot saat terapi.</p>
                    <a href="#" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
            </div>

            <!-- Robotic Therapy -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Robotic Therapy</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Rehabilitasi medik di Klinik Wijaya dilengkapi dengan teknologi robotik. Penggunaan alat robotic ini akan mempercepat terapi dan mendapatkan hasil yang optimal.</p>
                    <a href="#" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
                <img src="{{ asset('assts/img/layanan/slider-terapi-robotik.png') }}" alt="">
            </div>

            <!-- Musculoskeletal Clinic -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="{{ asset('assts/img/layanan/muskuloskeletal.png') }}" alt="">
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Musculoskeletal Clinic</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Klinik Muskuloskeletal membantu pasien untuk mengatasi permasalahan nyeri pada otot, sendi, jaringan ikat dan tulang. Pengelolaan nyeri dilakukan secara komprehensif oleh dokter spesialis Neurologi, Rehabilitasi Medik dan Bedah Tulang kami sehingga nyeri dapat diketahui penyebabnya dan diatasi secara tepat. Penanganan nyeri akan disertai dengan terapi dan latihan untuk maintenance agar permasalahan tidak berulang.</p>
                    <a href="#" class="inline-block px-6 py-3 bg-[#3F5499] text-white font-semibold hover:bg-[#7AC6E4] transition-colors duration-300">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Kesehatan -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-2">Artikel Kesehatan</h2>
            <p class="text-gray-600">Simak artikel kesehatan terbaru dari kami. Tinggalkan komentar jika Anda membutuhkan informasi menarik lainnya.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @forelse($articles as $article)
            <div class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
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
                <div class="p-6">
                    <p class="text-sm text-[#7AC6E4] mb-2">{{ $article->published_at ? $article->published_at->format('F d, Y') : 'Draft' }}</p>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight line-clamp-2">{{ $article->title }}</h3>
                    <a href="{{ route('artikel.show', $article->slug) }}" class="text-[#3F5499] font-semibold hover:text-[#7AC6E4]">Baca Selengkapnya →</a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-400">Belum ada artikel tersedia</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Galeri Foto -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-2">GALERI FOTO</h2>
            <p class="text-gray-600">Kami siap melayani Anda sepenuh hati</p>
        </div>
        
        <div class="grid grid-cols-3 gap-[6px] mt-12">
            @forelse($galleryImages as $index => $image)
                @if($index < 9)
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset($image) }}" alt="Gallery Image" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
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
@endsection