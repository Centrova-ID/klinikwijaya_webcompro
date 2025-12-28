@extends('layout.article')

@section('title', $event->title)

@section('content')
{{-- Breadcrumb --}}
<section class="py-6">
    <div class="container mx-auto px-4">
        <nav class="flex items-center gap-2 text-sm text-gray-600">
            <a href="/" class="hover:text-[#3F5499]">Beranda</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="{{ route('event.index') }}" class="hover:text-[#3F5499]">Event</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-800 font-medium">{{ Str::limit($event->title, 50) }}</span>
        </nav>
    </div>
</section>

{{-- Event Content --}}
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="gap-8 max-w-3xl mx-auto">
            {{-- Main Content --}}
            <article>
                <div class="overflow-hidden">
                    {{-- Event Header --}}
                    <div class="pb-6">
                        <div class="flex items-center gap-3 mb-2 text-sm">
                            @if(\Carbon\Carbon::parse($event->event_date)->isFuture())
                                <span class="text-green-600 font-normal">Event Mendatang</span>
                            @else
                                <span class="text-gray-600">Event Selesai</span>
                            @endif
                        </div>
                        
                        {{-- Title --}}
                        <h1 class="text-[42px] font-extrabold text-neutral-800 mb-3 leading-tight tracking-tight">
                            {{ $event->title }}
                        </h1>

                        {{-- Sub Title / Description --}}
                        @if($event->description)
                            <p class="text-xl font-normal text-[#6B6B6B] leading-snug">
                                {{ $event->description }}
                            </p>
                        @endif

                        {{-- Event Meta Info --}}
                        <div class="py-4 border-y border-neutral-200 mt-8 space-y-2">
                            <div class="flex items-center gap-2 text-gray-700">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-sm font-medium">
                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y, H:i') }} WIB
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <svg class="w-5 h-5 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm font-medium">{{ $event->location ?? 'Klinik Wijaya' }}</span>
                            </div>
                        </div>

                        <div class="py-2 border-b border-neutral-200 flex justify-between items-center">
                            <span class="text-gray-500 text-sm">
                                Oleh {{ $event->user->name ?? 'Klinik Wijaya' }}
                            </span>
                            {{-- Share Buttons --}}
                            <div class="flex items-center gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($event->title) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-sky-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($event->title . ' - ' . request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Event Body --}}
                        <div class="mt-10">
                            {{-- Featured Image --}}
                            @if($event->featured_image)
                                <div>
                                    <img src="{{ asset($event->featured_image) }}" alt="{{ $event->title }}" 
                                        class="w-full h-auto rounded mb-8">
                                </div>
                            @endif

                            {{-- Event Content --}}
                            <div class="prose prose-lg max-w-none article-content text-neutral-800">
                                {!! $event->content !!}
                            </div>

                            <style>
                                .article-content img {
                                    max-width: 100%;
                                    height: auto;
                                    display: block;
                                    margin: 2rem auto;
                                    border-radius: 4px;
                                }
                            </style>
                        </div>

                        {{-- Registration CTA --}}
                        @if(\Carbon\Carbon::parse($event->event_date)->isFuture())
                            <div class="mt-10 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] rounded-xl p-8 text-white text-center">
                                <h3 class="text-2xl font-bold mb-2">Tertarik Mengikuti Event Ini?</h3>
                                <p class="mb-4 opacity-90">Daftarkan diri Anda sekarang juga!</p>
                                <a href="/buat-janji" 
                                    class="inline-block bg-white text-[#3F5499] px-8 py-3 rounded-lg font-bold hover:shadow-xl transition-all transform hover:scale-105">
                                    Daftar Sekarang
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Related Events --}}
                @if(isset($relatedEvents) && $relatedEvents->count() > 0)
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Event Lainnya</h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            @foreach($relatedEvents as $related)
                                <article onclick="window.location.href='{{ route('event.show', $related->slug) }}'" class="cursor-pointer group">
                                    <div class="relative h-40">
                                        @if($related->featured_image)
                                            <img src="{{ asset($related->featured_image) }}" alt="{{ $related->title }}" 
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4]"></div>
                                        @endif
                                    </div>
                                    <div class="py-2">
                                        <div class="flex items-center gap-1 text-xs text-gray-500 mb-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ \Carbon\Carbon::parse($related->event_date)->format('d M Y') }}
                                        </div>
                                        <h3 class="text-base font-semibold group-hover:underline text-gray-800 mb-2 line-clamp-2 group-hover:text-[#3F5499] transition-colors">
                                            <a href="{{ route('event.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif
            </article>
        </div>
    </div>
</section>

<style type="text/tailwindcss">
@layer components {
    .prose {
        @apply text-gray-800;
    }
    
    .prose h2 {
        @apply text-2xl font-bold mt-8 mb-4;
    }
    
    .prose h3 {
        @apply text-xl font-bold mt-6 mb-3;
    }
    
    .prose p {
        @apply mb-4 leading-relaxed;
    }
    
    .prose ul, .prose ol {
        @apply mb-4 ml-6;
    }
    
    .prose li {
        @apply mb-2;
    }
    
    .prose a {
        @apply text-[#3F5499] hover:underline;
    }
    
    .prose strong {
        @apply font-bold;
    }
    
    .prose blockquote {
        @apply border-l-4 border-[#3F5499] pl-4 italic my-4;
    }
}
</style>
@endsection
