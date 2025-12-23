@extends('layout.main')

@section('title', $article->title)

@section('content')
<!-- Breadcrumb -->
<section class="bg-gray-50 py-6">
    <div class="container mx-auto px-4">
        <nav class="flex items-center gap-2 text-sm text-gray-600">
            <a href="/" class="hover:text-[#3F5499]">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="{{ route('artikel.index') }}" class="hover:text-[#3F5499]">Artikel</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-800 font-medium">{{ Str::limit($article->title, 50) }}</span>
        </nav>
    </div>
</section>

<!-- Article Content -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <article class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <!-- Article Header -->
                    <div class="p-8 pb-6">
                        <div class="flex items-center gap-3 mb-4">
                            <a href="{{ route('artikel.category', $article->category->slug) }}" 
                                class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all">
                                {{ $article->category->name ?? 'Umum' }}
                            </a>
                            <span class="text-gray-500 text-sm">
                                {{ $article->published_at?->format('d F Y') }}
                            </span>
                        </div>
                        
                        <h1 class="text-4xl font-bold text-gray-800 mb-6 leading-tight">
                            {{ $article->title }}
                        </h1>
                        
                        <div class="flex items-center gap-4 pb-6 border-b border-gray-200">
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Ditulis oleh</p>
                                    <p class="font-semibold text-gray-800">{{ $article->user->name ?? 'Admin' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    @if($article->featured_image)
                        <div class="px-8">
                            <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" 
                                class="w-full h-auto rounded-xl shadow-md mb-8">
                        </div>
                    @endif

                    <!-- Article Body -->
                    <div class="px-8 pb-8">
                        @if($article->excerpt)
                            <div class="bg-[#7AC6E4] bg-opacity-10 border-l-4 border-[#3F5499] p-6 rounded-r-lg mb-8">
                                <p class="text-lg text-gray-700 italic">
                                    {{ $article->excerpt }}
                                </p>
                            </div>
                        @endif

                        <div class="prose prose-lg max-w-none">
                            {!! $article->content !!}
                        </div>
                    </div>

                    <!-- Share Buttons -->
                    <div class="px-8 pb-8 border-t border-gray-200 pt-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-gray-800">Bagikan Artikel:</h3>
                            <div class="flex items-center gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}" 
                                    target="_blank"
                                    class="w-10 h-10 bg-sky-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Articles -->
                @if($relatedArticles->count() > 0)
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Artikel Terkait</h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            @foreach($relatedArticles as $related)
                                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                                    <div class="relative h-40">
                                        @if($related->featured_image)
                                            <img src="{{ asset($related->featured_image) }}" alt="{{ $related->title }}" 
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4]"></div>
                                        @endif
                                    </div>
                                    <div class="p-4">
                                        <p class="text-xs text-gray-500 mb-2">{{ $related->published_at?->format('d M Y') }}</p>
                                        <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#3F5499] transition-colors">
                                            <a href="{{ route('artikel.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                        <a href="{{ route('artikel.show', $related->slug) }}" 
                                            class="text-[#3F5499] text-sm font-semibold flex items-center gap-1 hover:text-[#7AC6E4]">
                                            Baca Artikel
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <!-- Author Box -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Tentang Penulis</h3>
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">{{ $article->user->name ?? 'Admin' }}</p>
                            <p class="text-sm text-gray-500">Klinik Wijaya</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Box -->
                <div class="bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] rounded-xl shadow-md p-6 text-white mb-6">
                    <svg class="w-12 h-12 mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h4 class="text-xl font-bold mb-2">Butuh Konsultasi?</h4>
                    <p class="text-sm mb-4 opacity-90">Buat janji dengan dokter spesialis kami</p>
                    <a href="/buat_janji" class="inline-block bg-white text-[#3F5499] px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all">
                        Buat Janji Sekarang
                    </a>
                </div>

                <!-- Latest Articles Sidebar -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Artikel Terbaru
                    </h3>
                    <div class="space-y-4">
                        @foreach($relatedArticles->take(5) as $latest)
                            <a href="{{ route('artikel.show', $latest->slug) }}" 
                                class="block p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                                <p class="text-sm font-semibold text-gray-800 group-hover:text-[#3F5499] line-clamp-2 mb-1">
                                    {{ $latest->title }}
                                </p>
                                <p class="text-xs text-gray-500">{{ $latest->published_at?->format('d M Y') }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
