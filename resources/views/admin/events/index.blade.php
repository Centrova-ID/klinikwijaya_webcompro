@extends('admin.layout')

@section('title', 'Event')
@section('header', 'MANAJEMEN EVENT')

@section('content')
<div class="bg-white border border-gray-300">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-300 flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-900">DAFTAR EVENT</h3>
        <a href="{{ route('admin.events.create') }}" class="bg-[#7AC6E4] text-gray-900 px-5 py-2.5 font-bold hover:bg-[#68b5d4]">
            + TAMBAH EVENT
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">JUDUL EVENT</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">TANGGAL & WAKTU</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">LOKASI</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">STATUS</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @forelse($events as $event)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-bold text-gray-900 text-base mb-1">{{ $event->title }}</div>
                            <div class="text-sm text-gray-700">{{ Str::limit($event->description, 60) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-gray-900">{{ $event->event_date->format('d M Y') }}</div>
                            <div class="text-xs text-gray-700 font-medium">{{ $event->event_date->format('H:i') }} WIB</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-gray-900">{{ $event->location ?? '-' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-bold px-3 py-1 {{ $event->status === 'published' ? 'bg-green-100 text-green-800 border border-green-300' : 'bg-yellow-100 text-yellow-800 border border-yellow-300' }}">
                                {{ strtoupper($event->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-2">
                                <a href="{{ route('admin.events.edit', $event) }}" class="text-[#7AC6E4] font-bold text-sm hover:underline">
                                    EDIT
                                </a>
                                <a href="{{ route('event.show', $event->slug) }}" target="_blank" class="text-gray-700 font-bold text-sm hover:underline">
                                    LIHAT
                                </a>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
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
                            <div class="text-gray-700 font-bold mb-3">BELUM ADA EVENT</div>
                            <a href="{{ route('admin.events.create') }}" class="inline-block bg-[#7AC6E4] text-gray-900 px-5 py-2.5 font-bold hover:bg-[#68b5d4]">
                                BUAT EVENT PERTAMA
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($events->count() > 0)
    <div class="px-6 py-4 border-t border-gray-300 bg-gray-50">
        <div class="flex justify-between items-center">
            <div class="text-sm font-bold text-gray-700">
                Menampilkan {{ $events->firstItem() }} - {{ $events->lastItem() }} dari {{ $events->total() }} event
            </div>
            <div class="flex gap-1">
                @if($events->onFirstPage())
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 font-bold text-sm">←</span>
                @else
                    <a href="{{ $events->previousPageUrl() }}" class="px-3 py-1 bg-[#7AC6E4] text-gray-900 font-bold text-sm hover:bg-[#68b5d4]">←</a>
                @endif
                
                @foreach(range(1, min(5, $events->lastPage())) as $page)
                    @if($page == $events->currentPage())
                        <span class="px-3 py-1 bg-[#7AC6E4] text-gray-900 font-bold text-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $events->url($page) }}" class="px-3 py-1 bg-gray-200 text-gray-700 font-bold text-sm hover:bg-gray-300">{{ $page }}</a>
                    @endif
                @endforeach
                
                @if($events->hasMorePages())
                    <a href="{{ $events->nextPageUrl() }}" class="px-3 py-1 bg-[#7AC6E4] text-gray-900 font-bold text-sm hover:bg-[#68b5d4]">→</a>
                @else
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 font-bold text-sm">→</span>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection