@extends('layout.main')

@section('title', 'Galeri Foto - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative h-[400px] bg-gradient-to-r from-[#3F5499] to-[#7AC6E4]">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative h-full flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">GALERI FOTO</h1>
            <p class="text-xl md:text-2xl">Dokumentasi Fasilitas & Kegiatan Klinik Wijaya</p>
        </div>
    </div>
</section>

{{-- Breadcrumb --}}
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

{{-- Gallery Grid --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Dokumentasi Kami</h2>
            <div class="w-20 h-1 bg-[#3F5499] mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg">Lihat fasilitas modern dan kegiatan di Klinik Wijaya</p>
        </div>

        @if(count($galleryImages) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[6px]">
            @foreach($galleryImages as $index => $image)
            <div class="aspect-square overflow-hidden bg-gray-100 group cursor-pointer" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="{{ $index * 50 }}">
                <img src="{{ asset($image) }}" 
                     alt="Galeri Klinik Wijaya" 
                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
                     width="400"
                     height="400"
                     loading="lazy"
                     onclick="openLightbox({{ $index }})">
            </div>
            @endforeach
        </div>

        {{-- Image Count --}}
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
