@extends('layout.main')

@section('title', 'Artikel & Berita Kesehatan')

@section('content')
{{-- Hero Section --}}
<section class="relative bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] py-16">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Artikel & Berita Kesehatan</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Informasi terkini seputar kesehatan dan layanan Klinik Wijaya</p>
        </div>
    </div>
</section>

{{-- Featured Article --}}
@if($featuredArticle)
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <div class="grid md:grid-cols-2 gap-0">
                <div class="relative h-64 md:h-full">
                    @if($featuredArticle->featured_image)
                        <img src="{{ asset($featuredArticle->featured_image) }}" alt="{{ $featuredArticle->title }}" 
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                            Featured
                        </span>
                    </div>
                </div>
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="bg-[#7AC6E4] text-white px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $featuredArticle->category->name ?? 'Umum' }}
                        </span>
                        <span class="text-gray-500 text-sm">
                            {{ $featuredArticle->published_at?->format('d M Y') }}
                        </span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 hover:text-[#3F5499] transition-colors">
                        <a href="{{ route('artikel.show', $featuredArticle->slug) }}">
                            {{ $featuredArticle->title }}
                        </a>
                    </h2>
                    <p class="text-gray-600 mb-6 line-clamp-3">
                        {{ $featuredArticle->excerpt ?? strip_tags(Str::limit($featuredArticle->content, 200)) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>{{ $featuredArticle->user->name ?? 'Admin' }}</span>
                        </div>
                        <a href="{{ route('artikel.show', $featuredArticle->slug) }}" 
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                            Baca Selengkapnya
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- Articles Grid --}}
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-4 gap-8">
            {{-- Main Content --}}
            <div class="lg:col-span-3">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Artikel Terbaru</h2>
                    <div class="text-gray-600">
                        {{ $articles->total() }} Artikel
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @forelse($articles as $article)
                        <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="relative h-48">
                                @if($article->featured_image)
                                    <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" 
                                        class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute top-3 left-3">
                                    <span class="bg-white text-[#3F5499] px-3 py-1 rounded-full text-xs font-semibold shadow">
                                        {{ $article->category->name ?? 'Umum' }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ $article->published_at?->format('d M Y') }}</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-[#3F5499] transition-colors line-clamp-2">
                                    <a href="{{ route('artikel.show', $article->slug) }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ $article->excerpt ?? strip_tags(Str::limit($article->content, 150)) }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>{{ $article->user->name ?? 'Admin' }}</span>
                                    </div>
                                    <a href="{{ route('artikel.show', $article->slug) }}" 
                                        class="text-[#3F5499] hover:text-[#7AC6E4] font-semibold text-sm flex items-center gap-1">
                                        Baca
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="col-span-2 text-center py-12">
                            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <p class="text-gray-500 text-lg">Belum ada artikel tersedia</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">
                {{-- Categories --}}
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        Kategori
                    </h3>
                    <ul class="space-y-2">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('artikel.category', $category->slug) }}" 
                                    class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                                    <span class="text-gray-700 group-hover:text-[#3F5499] font-medium">
                                        {{ $category->name }}
                                    </span>
                                    <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">
                                        {{ $category->articles_count }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Info Box --}}
                <div class="bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl shadow-md p-6 text-white">
                    <svg class="w-12 h-12 mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h4 class="text-xl font-bold mb-2">Butuh Konsultasi?</h4>
                    <p class="text-sm mb-4 opacity-90">Hubungi kami untuk informasi lebih lanjut tentang layanan kesehatan</p>
                    <a href="/buat_janji" class="inline-block bg-white text-[#3F5499] px-4 py-2 rounded-lg font-semibold hover:shadow-lg transition-all">
                        Buat Janji
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
