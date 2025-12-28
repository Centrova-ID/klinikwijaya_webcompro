@extends('layout.article')

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

{{-- Articles Grid --}}
<section class="py-6 md:py-12 max-w-7xl px-4 mx-auto">
    <div class="container mx-auto px-2 md:px-4">
        <div class="grid lg:grid-cols-4 gap-4 md:gap-8">
            {{-- Main Content --}}
            <div class="lg:col-span-3 w-full">
                <div class="flex items-center justify-between mb-4 md:mb-8">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Artikel Terbaru</h2>
                </div>

                {{-- Featured Article --}}
                @if($featuredArticle)
                <div class="container mx-auto mb-6 md:mb-12">
                    <a href="{{ route('artikel.show', $featuredArticle->slug) }}" class="group">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="relative h-48 md:h-64 lg:h-full">
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
                            </div>
                            <div class="p-4 md:p-8 flex flex-col justify-center">
                                <h2 class="text-xl md:text-3xl font-bold text-neutral-700 mb-2 group-hover:underline">
                                    {{ $featuredArticle->title }}
                                </h2>
                                <span class="text-teal-700 text-xs md:text-sm mb-1">
                                    {{ $featuredArticle->category->name ?? 'Umum' }}
                                </span>
                                <p class="text-gray-600 text-sm md:text-base mb-2 line-clamp-3">
                                    {{ $featuredArticle->excerpt ?? strip_tags(Str::limit($featuredArticle->content, 200)) }}
                                </p>
                                <span class="text-gray-500 text-xs">
                                    {{ $featuredArticle->published_at?->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                @endif

                <div class="gap-4 md:gap-6 border-t border-neutral-100 py-6 md:py-12">
                    @forelse($articles as $article)
                        <div class="container mx-auto mb-6 md:mb-12">
                            <a href="{{ route('artikel.show', $article->slug) }}" class="group">
                                <div class="grid md:grid-cols-3 gap-0">
                                    <div class="relative aspect-video h-48 md:h-full">
                                        @if($article->featured_image)
                                            <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" 
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                                <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="px-4 md:px-8 py-2 col-span-2 flex flex-col justify-center">
                                        <h2 class="text-lg md:text-3xl font-bold text-neutral-700 mb-2 group-hover:underline">
                                            {{ $article->title }}
                                        </h2>
                                        <span class="text-teal-700 text-xs md:text-sm mb-1">
                                            {{ $article->category->name ?? 'Umum' }}
                                        </span>
                                        <p class="text-neutral-500 text-sm md:text-base mb-2 line-clamp-1 md:line-clamp-2">
                                            {{ $article->excerpt ?? strip_tags(Str::limit($article->content, 200)) }}
                                        </p>
                                        <span class="text-gray-500 text-xs hidden">
                                            {{ $article->published_at?->format('d M Y') }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
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
                <div class="mt-6 md:mt-12">
                    {{ $articles->links() }}
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1 mt-8 lg:mt-0">
                <div class="lg:sticky lg:top-24">
                    {{-- Categories --}}
                    <div class="bg-white shadow rounded-lg p-4 md:p-6 mb-6">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        Kategori
                    </h3>
                    <ul class="space-y-2">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('artikel.category', $category->slug) }}" 
                                    class="flex items-center justify-between px-2 py-1.5 md:py-1 group">
                                    <span class="text-sm md:text-base text-gray-700 group-hover:text-[#3F5499] group-hover:underline font-medium">
                                        {{ $category->name }}
                                    </span>
                                    <span class="bg-gray-100 text-gray-600 px-2 py-0.5 min-w-[24px] min-h-[24px] flex justify-center items-center rounded-full text-xs">
                                        {{ $category->articles_count }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
