@extends('layout.main')

@section('title', 'Galeri Foto - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[400px] bg-gradient-to-r from-[#3F5499] to-[#7AC6E4]">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative h-full flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">GALERI FOTO</h1>
            <p class="text-xl md:text-2xl">Dokumentasi Fasilitas & Kegiatan Klinik Wijaya</p>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<section class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-[#3F5499]">Beranda</a>
            <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-[#3F5499] font-semibold">Galeri Foto</span>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Dokumentasi Kami</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg">Lihat fasilitas modern dan kegiatan di Klinik Wijaya</p>
        </div>

        @if(count($galleryImages) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[6px]">
            @foreach($galleryImages as $image)
            <div class="aspect-square overflow-hidden bg-gray-100 group cursor-pointer">
                <img src="{{ asset($image) }}" 
                     alt="Galeri Klinik Wijaya" 
                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
                     onclick="openLightbox('{{ asset($image) }}')">
            </div>
            @endforeach
        </div>

        <!-- Image Count -->
        <div class="text-center mt-12">
            <p class="text-gray-600">
                Menampilkan <span class="font-bold text-[#3F5499]">{{ count($galleryImages) }}</span> foto
            </p>
        </div>
        @else
        <div class="text-center py-20">
            <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <p class="text-gray-400 text-xl">Belum ada foto di galeri</p>
        </div>
        @endif
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4" onclick="closeLightbox()">
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
    <img id="lightbox-img" src="" alt="Gallery Image" class="max-w-full max-h-full object-contain">
</div>

@push('scripts')
<script>
function openLightbox(imageSrc) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    lightboxImg.src = imageSrc;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Close lightbox with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
});
</script>
@endpush

@endsection
