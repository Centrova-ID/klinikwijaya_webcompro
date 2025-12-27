@extends('layout.main')

@section('title', 'Event & Kegiatan')

@section('content')
{{-- Hero Section --}}
<section class="relative bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] py-16">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Event & Kegiatan</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Ikuti berbagai kegiatan dan event menarik dari Klinik Wijaya</p>
        </div>
    </div>
</section>

{{-- Upcoming Events Highlight --}}
@if($upcomingEvents->count() > 0)
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Event Mendatang</h2>
            <p class="text-gray-600">Jangan lewatkan event-event menarik dari kami</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($upcomingEvents as $upcoming)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative h-48">
                        @if($upcoming->featured_image)
                            <img src="{{ asset($upcoming->featured_image) }}" alt="{{ $upcoming->title }}" 
                                class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        <div class="absolute top-4 right-4">
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Segera
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-[#3F5499] text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">{{ \Carbon\Carbon::parse($upcoming->event_date)->format('d') }}</div>
                                <div class="text-xs">{{ \Carbon\Carbon::parse($upcoming->event_date)->format('M Y') }}</div>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $upcoming->location ?? 'Klinik Wijaya' }}
                                </p>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-[#3F5499] transition-colors line-clamp-2">
                            <a href="{{ route('event.show', $upcoming->slug) }}">
                                {{ $upcoming->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $upcoming->description ?? strip_tags(Str::limit($upcoming->content, 100)) }}
                        </p>
                        <a href="{{ route('event.show', $upcoming->slug) }}" 
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition-all">
                            Detail Event
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- All Events --}}
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Semua Event</h2>
            <div class="text-gray-600">
                {{ $events->total() }} Event
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse($events as $event)
                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative h-48">
                        @if($event->featured_image)
                            <img src="{{ asset($event->featured_image) }}" alt="{{ $event->title }}" 
                                class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        @if(\Carbon\Carbon::parse($event->event_date)->isFuture())
                            <div class="absolute top-3 right-3">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    Upcoming
                                </span>
                            </div>
                        @else
                            <div class="absolute top-3 right-3">
                                <span class="bg-gray-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    Selesai
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="bg-[#7AC6E4] text-white px-3 py-2 rounded-lg text-center flex-shrink-0">
                                <div class="text-xl font-bold">{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</div>
                                <div class="text-xs">{{ \Carbon\Carbon::parse($event->event_date)->format('M') }}</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="truncate">{{ \Carbon\Carbon::parse($event->event_date)->format('H:i') }} WIB</span>
                                </div>
                                <div class="flex items-center gap-1 text-xs text-gray-500">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="truncate">{{ $event->location ?? 'Klinik Wijaya' }}</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-[#3F5499] transition-colors line-clamp-2">
                            <a href="{{ route('event.show', $event->slug) }}">
                                {{ $event->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $event->description ?? strip_tags(Str::limit($event->content, 100)) }}
                        </p>
                        <a href="{{ route('event.show', $event->slug) }}" 
                            class="text-[#3F5499] hover:text-[#7AC6E4] font-semibold text-sm flex items-center gap-1">
                            Lihat Detail
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center py-12">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-gray-500 text-lg">Belum ada event tersedia</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-12">
            {{ $events->links() }}
        </div>
    </div>
</section>
@endsection
