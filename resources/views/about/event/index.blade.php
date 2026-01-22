@extends('layout.article')

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

{{-- Events Grid --}}
<section class="py-6 md:py-12 max-w-7xl px-4 mx-auto">
    <div class="container mx-auto px-2 md:px-4">
        <div class="grid lg:grid-cols-4 gap-4 md:gap-8">
            {{-- Main Content --}}
            <div class="lg:col-span-3 w-full">
                <div class="flex items-center justify-between mb-4 md:mb-8">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Event Terbaru</h2>
                </div>

                {{-- Featured Event --}}
                @if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
                @php $featuredEvent = $upcomingEvents->first(); @endphp
                <div class="container mx-auto mb-6 md:mb-12">
                    <a href="{{ route('event.show', $featuredEvent->slug) }}" class="group">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="relative h-48 md:h-64 lg:h-full">
                                @if($featuredEvent->featured_image)
                                    <img src="{{ asset($featuredEvent->featured_image) }}" alt="{{ $featuredEvent->title }}" 
                                        class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                        <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                @if(\Carbon\Carbon::parse($featuredEvent->event_date)->isFuture())
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Segera
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4 md:p-8 flex flex-col justify-center">
                                <h2 class="text-xl md:text-3xl font-bold text-neutral-700 mb-2 group-hover:underline">
                                    {{ $featuredEvent->title }}
                                </h2>
                                <span class="text-teal-700 text-xs md:text-sm mb-1 flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ \Carbon\Carbon::parse($featuredEvent->event_date)->format('d M Y') }} • {{ $featuredEvent->location ?? 'Klinik Wijaya' }}
                                </span>
                                <p class="text-gray-600 text-sm md:text-base mb-2 line-clamp-3">
                                    {{ $featuredEvent->description ?? strip_tags(Str::limit($featuredEvent->content, 200)) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endif

                <div class="gap-4 md:gap-6 border-t border-neutral-100 py-6 md:py-12">
                    @forelse($events as $event)
                        <div class="container mx-auto mb-6 md:mb-12">
                            <a href="{{ route('event.show', $event->slug) }}" class="group">
                                <div class="grid md:grid-cols-3 gap-0">
                                    <div class="relative aspect-video h-48 md:h-full">
                                        @if($event->featured_image)
                                            <img src="{{ asset($event->featured_image) }}" alt="{{ $event->title }}" 
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4] flex items-center justify-center">
                                                <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                        @if(\Carbon\Carbon::parse($event->event_date)->isFuture())
                                            <div class="absolute top-3 right-3">
                                                <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    Mendatang
                                                </span>
                                            </div>
                                        @else
                                            <div class="absolute top-3 right-3">
                                                <span class="bg-gray-500 text-white px-2 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    Selesai
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="px-4 md:px-8 py-2 col-span-2 flex flex-col justify-center">
                                        <h2 class="text-lg md:text-3xl font-bold text-neutral-700 mb-2 group-hover:underline">
                                            {{ $event->title }}
                                        </h2>
                                        <span class="text-teal-700 text-xs md:text-sm mb-1 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }} • {{ $event->location ?? 'Klinik Wijaya' }}
                                        </span>
                                        <p class="text-neutral-500 text-sm md:text-base mb-2 line-clamp-1 md:line-clamp-2">
                                            {{ $event->description ?? strip_tags(Str::limit($event->content, 200)) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-span-2 text-center py-12">
                            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-gray-500 text-lg">Belum ada event tersedia</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="mt-6 md:mt-12">
                    {{ $events->links() }}
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1 mt-8 lg:mt-0">
                <div class="lg:sticky lg:top-24">
                    {{-- Upcoming Events --}}
                    <div class="bg-white shadow rounded-lg p-4 md:p-6 mb-6">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Event Mendatang
                        </h3>
                        @if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
                            <ul class="space-y-3">
                                @foreach($upcomingEvents->take(5) as $upcoming)
                                    <li>
                                        <a href="{{ route('event.show', $upcoming->slug) }}" 
                                            class="block group">
                                            <div class="flex gap-3">
                                                <div class="bg-[#3F5499] text-white px-2 py-1 rounded text-center flex-shrink-0">
                                                    <div class="text-lg font-bold leading-none">{{ \Carbon\Carbon::parse($upcoming->event_date)->format('d') }}</div>
                                                    <div class="text-[10px]">{{ \Carbon\Carbon::parse($upcoming->event_date)->format('M') }}</div>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-700 group-hover:text-[#3F5499] group-hover:underline line-clamp-2">
                                                        {{ $upcoming->title }}
                                                    </p>
                                                    <p class="text-xs text-gray-500 truncate">
                                                        {{ $upcoming->location ?? 'Klinik Wijaya' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-gray-500">Tidak ada event mendatang</p>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
