@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard Admin')

@section('content')
{{-- Welcome Banner --}}
<div class="bg-[#3F5499] text-white px-6 py-5 mb-6 border-b-4 border-[#2A3A6E]">
    <h1 class="text-2xl font-bold mb-1">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p class="text-white font-medium">Kelola artikel dan event klinik dari dashboard ini</p>
</div>

{{-- Statistics Cards --}}
<div class="grid md:grid-cols-4 gap-4 mb-8">
    {{-- Total Articles --}}
    <div class="bg-white border border-gray-300 px-5 py-4">
        <div class="mb-3">
            <p class="text-sm text-gray-700 font-semibold mb-1">TOTAL ARTIKEL</p>
            <p class="text-3xl font-bold text-gray-900">{{ $articlesCount }}</p>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="text-[#3F5499] font-bold hover:underline block">
            LIHAT SEMUA →
        </a>
    </div>

    {{-- Total Events --}}
    <div class="bg-white border border-gray-300 px-5 py-4">
        <div class="mb-3">
            <p class="text-sm text-gray-700 font-semibold mb-1">TOTAL EVENT</p>
            <p class="text-3xl font-bold text-gray-900">{{ $eventsCount }}</p>
        </div>
        <a href="{{ route('admin.events.index') }}" class="text-[#7AC6E4] font-bold hover:underline block">
            LIHAT SEMUA →
        </a>
    </div>

    {{-- Published Articles --}}
    <div class="bg-white border border-gray-300 px-5 py-4">
        <div class="mb-3">
            <p class="text-sm text-gray-700 font-semibold mb-1">PUBLISHED</p>
            <p class="text-3xl font-bold text-gray-900">{{ \App\Models\Article::where('status', 'published')->count() }}</p>
        </div>
        <span class="text-sm font-bold text-green-700">
            STATUS: LIVE
        </span>
    </div>

    {{-- Draft Articles --}}
    <div class="bg-white border border-gray-300 px-5 py-4">
        <div class="mb-3">
            <p class="text-sm text-gray-700 font-semibold mb-1">DRAFT</p>
            <p class="text-3xl font-bold text-gray-900">{{ \App\Models\Article::where('status', 'draft')->count() }}</p>
        </div>
        <span class="text-sm font-bold text-yellow-600">
            STATUS: DRAFT
        </span>
    </div>
</div>

{{-- Quick Actions --}}
<div class="grid md:grid-cols-2 gap-4 mb-8">
    <div class="bg-[#3F5499] text-white px-6 py-5">
        <div class="mb-3">
            <h3 class="text-xl font-bold mb-2">BUAT ARTIKEL BARU</h3>
            <p class="text-white/95">Tulis artikel kesehatan terbaru untuk website klinik</p>
        </div>
        <a href="{{ route('admin.articles.create') }}" class="inline-block bg-white text-[#3F5499] px-5 py-2.5 font-bold hover:bg-gray-100">
            BUAT ARTIKEL
        </a>
    </div>

    <div class="bg-[#7AC6E4] text-gray-900 px-6 py-5">
        <div class="mb-3">
            <h3 class="text-xl font-bold mb-2">BUAT EVENT BARU</h3>
            <p class="text-gray-900">Jadwalkan event atau kegiatan klinik</p>
        </div>
        <a href="{{ route('admin.events.create') }}" class="inline-block bg-white text-gray-900 px-5 py-2.5 font-bold hover:bg-gray-100">
            BUAT EVENT
        </a>
    </div>
</div>

<div class="grid md:grid-cols-2 gap-6">
    {{-- Recent Articles --}}
    <div class="bg-white border border-gray-300">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-300">
            <h3 class="text-lg font-bold text-gray-900">ARTIKEL TERBARU</h3>
        </div>
        <div class="divide-y divide-gray-300">
            @forelse($recentArticles as $article)
                <div class="px-6 py-4">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="font-bold text-gray-900 text-base">{{ $article->title }}</h4>
                        <div class="text-right">
                            <span class="text-xs font-bold px-2 py-1 {{ $article->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ strtoupper($article->status) }}
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-700 font-medium">{{ $article->created_at->format('d M Y, H:i') }}</span>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="text-[#3F5499] font-bold text-sm hover:underline">
                                EDIT
                            </a>
                            <a href="{{ route('artikel.show', $article->slug) }}" target="_blank" class="text-gray-700 font-bold text-sm hover:underline">
                                LIHAT
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="px-6 py-8 text-center">
                    <p class="text-gray-700 mb-4 font-medium">BELUM ADA ARTIKEL</p>
                    <a href="{{ route('admin.articles.create') }}" class="inline-block bg-[#3F5499] text-white px-5 py-2.5 font-bold hover:bg-[#2A3A6E]">
                        BUAT ARTIKEL PERTAMA
                    </a>
                </div>
            @endforelse
        </div>
        <div class="px-6 py-4 border-t border-gray-300 bg-gray-50">
            <a href="{{ route('admin.articles.index') }}" class="text-[#3F5499] font-bold hover:underline">
                LIHAT SEMUA ARTIKEL →
            </a>
        </div>
    </div>

    {{-- Recent Events --}}
    <div class="bg-white border border-gray-300">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-300">
            <h3 class="text-lg font-bold text-gray-900">EVENT TERBARU</h3>
        </div>
        <div class="divide-y divide-gray-300">
            @forelse($recentEvents as $event)
                <div class="px-6 py-4">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="font-bold text-gray-900 text-base">{{ $event->title }}</h4>
                        <div class="text-right">
                            <span class="text-xs font-bold px-2 py-1 {{ $event->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ strtoupper($event->status) }}
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-700 font-medium">{{ $event->created_at->format('d M Y, H:i') }}</span>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-[#7AC6E4] font-bold text-sm hover:underline">
                                EDIT
                            </a>
                            <a href="{{ route('event.show', $event->slug) }}" target="_blank" class="text-gray-700 font-bold text-sm hover:underline">
                                LIHAT
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="px-6 py-8 text-center">
                    <p class="text-gray-700 mb-4 font-medium">BELUM ADA EVENT</p>
                    <a href="{{ route('admin.events.create') }}" class="inline-block bg-[#7AC6E4] text-gray-900 px-5 py-2.5 font-bold hover:bg-[#68b5d4]">
                        BUAT EVENT PERTAMA
                    </a>
                </div>
            @endforelse
        </div>
        <div class="px-6 py-4 border-t border-gray-300 bg-gray-50">
            <a href="{{ route('admin.events.index') }}" class="text-[#3F5499] font-bold hover:underline">
                LIHAT SEMUA EVENT →
            </a>
        </div>
    </div>
</div>
@endsection