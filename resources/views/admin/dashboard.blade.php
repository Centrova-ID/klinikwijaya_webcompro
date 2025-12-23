@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard Admin')

@section('content')
<!-- Welcome Banner -->
<div class="bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] rounded-lg shadow-lg p-8 mb-8 text-white">
    <h1 class="text-3xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p class="text-white/90 text-lg">Kelola artikel dan event Klinik Wijaya dari sini</p>
</div>

<!-- Quick Actions -->
<div class="grid md:grid-cols-2 gap-6 mb-8">
    <a href="{{ route('admin.articles.create') }}" class="block bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow border-l-4 border-[#3F5499]">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Buat Artikel Baru</h3>
                <p class="text-gray-600">Tambah artikel kesehatan terbaru</p>
            </div>
            <div class="w-16 h-16 bg-[#3F5499]/10 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </div>
    </a>

    <a href="{{ route('admin.events.create') }}" class="block bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow border-l-4 border-[#7AC6E4]">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Buat Event Baru</h3>
                <p class="text-gray-600">Tambah event atau kegiatan baru</p>
            </div>
            <div class="w-16 h-16 bg-[#7AC6E4]/10 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-[#7AC6E4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </div>
    </a>
</div>

<!-- Statistics Cards -->
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Articles Count Card -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-[#3F5499]/10 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-[#3F5499]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-gray-500 text-sm mb-1">Total Artikel</p>
        <p class="text-3xl font-bold text-gray-900">{{ $articlesCount }}</p>
        <a href="{{ route('admin.articles.index') }}" class="text-[#3F5499] text-sm mt-2 inline-block hover:underline">Lihat semua →</a>
    </div>

    <!-- Events Count Card -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-[#7AC6E4]/10 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-[#7AC6E4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-gray-500 text-sm mb-1">Total Event</p>
        <p class="text-3xl font-bold text-gray-900">{{ $eventsCount }}</p>
        <a href="{{ route('admin.events.index') }}" class="text-[#7AC6E4] text-sm mt-2 inline-block hover:underline">Lihat semua →</a>
    </div>

    <!-- Published Articles -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
        <p class="text-gray-500 text-sm mb-1">Artikel Published</p>
        <p class="text-3xl font-bold text-gray-900">{{ \App\Models\Article::where('status', 'published')->count() }}</p>
    </div>

    <!-- Draft Articles -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
        <p class="text-gray-500 text-sm mb-1">Artikel Draft</p>
        <p class="text-3xl font-bold text-gray-900">{{ \App\Models\Article::where('status', 'draft')->count() }}</p>
    </div>
</div>

<div class="grid md:grid-cols-2 gap-6">
    <!-- Recent Articles -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-xl font-bold text-gray-900">Artikel Terbaru</h3>
            <a href="{{ route('admin.articles.index') }}" class="text-[#3F5499] hover:text-[#7AC6E4] text-sm font-semibold">Lihat Semua →</a>
        </div>
        <div class="p-6">
            @forelse($recentArticles as $article)
                <div class="mb-4 pb-4 border-b border-gray-100 last:border-0">
                    <h4 class="font-semibold text-gray-900 mb-2">{{ $article->title }}</h4>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-{{ $article->status === 'published' ? 'green' : 'yellow' }}-100 text-{{ $article->status === 'published' ? 'green' : 'yellow' }}-800 rounded-full text-xs font-semibold">
                            {{ ucfirst($article->status) }}
                        </span>
                        <span class="text-sm text-gray-500">{{ $article->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <p class="text-gray-500 mb-4">Belum ada artikel</p>
                    <a href="{{ route('admin.articles.create') }}" class="inline-block px-6 py-2 bg-[#3F5499] text-white rounded-lg hover:bg-[#7AC6E4] transition-colors">
                        Buat Artikel Pertama
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Recent Events -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-xl font-bold text-gray-900">Event Terbaru</h3>
            <a href="{{ route('admin.events.index') }}" class="text-[#7AC6E4] hover:text-[#3F5499] text-sm font-semibold">Lihat Semua →</a>
        </div>
        <div class="p-6">
            @forelse($recentEvents as $event)
                <div class="mb-4 pb-4 border-b border-gray-100 last:border-0">
                    <h4 class="font-semibold text-gray-900 mb-2">{{ $event->title }}</h4>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-{{ $event->status === 'published' ? 'green' : 'yellow' }}-100 text-{{ $event->status === 'published' ? 'green' : 'yellow' }}-800 rounded-full text-xs font-semibold">
                            {{ ucfirst($event->status) }}
                        </span>
                        <span class="text-sm text-gray-500">{{ $event->event_date->format('d M Y') }}</span>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <p class="text-gray-500 mb-4">Belum ada event</p>
                    <a href="{{ route('admin.events.create') }}" class="inline-block px-6 py-2 bg-[#7AC6E4] text-white rounded-lg hover:bg-[#3F5499] transition-colors">
                        Buat Event Pertama
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
