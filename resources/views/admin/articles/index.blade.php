@extends('admin.layout')

@section('title', 'Artikel')
@section('header', 'MANAJEMEN ARTIKEL')

@section('content')
<div class="bg-white border border-gray-300">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-300 flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-900">DAFTAR ARTIKEL</h3>
        <a href="{{ route('admin.articles.create') }}" class="bg-[#3F5499] text-white px-5 py-2.5 font-bold hover:bg-[#2A3A6E]">
            + TAMBAH ARTIKEL
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">JUDUL</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">PENULIS</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">STATUS</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">TANGGAL</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @forelse($articles as $article)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-bold text-gray-900 text-base mb-1">{{ $article->title }}</div>
                            <div class="text-sm text-gray-700">{{ Str::limit($article->excerpt, 60) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-gray-900">{{ $article->user->name }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-bold px-3 py-1 {{ $article->status === 'published' ? 'bg-green-100 text-green-800 border border-green-300' : 'bg-yellow-100 text-yellow-800 border border-yellow-300' }}">
                                {{ strtoupper($article->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-gray-900">{{ $article->created_at->format('d M Y') }}</div>
                            <div class="text-xs text-gray-700">{{ $article->created_at->format('H:i') }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-2">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="text-[#3F5499] font-bold text-sm hover:underline">
                                    EDIT
                                </a>
                                <a href="{{ route('artikel.show', $article->slug) }}" target="_blank" class="text-gray-700 font-bold text-sm hover:underline">
                                    LIHAT
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-700 font-bold text-sm hover:underline">
                                        HAPUS
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center">
                            <div class="text-gray-700 font-bold mb-3">BELUM ADA ARTIKEL</div>
                            <a href="{{ route('admin.articles.create') }}" class="inline-block bg-[#3F5499] text-white px-5 py-2.5 font-bold hover:bg-[#2A3A6E]">
                                BUAT ARTIKEL PERTAMA
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($articles->count() > 0)
    <div class="px-6 py-4 border-t border-gray-300 bg-gray-50">
        <div class="flex justify-between items-center">
            <div class="text-sm font-bold text-gray-700">
                Menampilkan {{ $articles->firstItem() }} - {{ $articles->lastItem() }} dari {{ $articles->total() }} artikel
            </div>
            <div class="flex gap-1">
                @if($articles->onFirstPage())
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 font-bold text-sm">←</span>
                @else
                    <a href="{{ $articles->previousPageUrl() }}" class="px-3 py-1 bg-[#3F5499] text-white font-bold text-sm hover:bg-[#2A3A6E]">←</a>
                @endif
                
                @foreach(range(1, min(5, $articles->lastPage())) as $page)
                    @if($page == $articles->currentPage())
                        <span class="px-3 py-1 bg-[#3F5499] text-white font-bold text-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $articles->url($page) }}" class="px-3 py-1 bg-gray-200 text-gray-700 font-bold text-sm hover:bg-gray-300">{{ $page }}</a>
                    @endif
                @endforeach
                
                @if($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}" class="px-3 py-1 bg-[#3F5499] text-white font-bold text-sm hover:bg-[#2A3A6E]">→</a>
                @else
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 font-bold text-sm">→</span>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection