@extends('admin.layout')

@section('title', 'Artikel')
@section('header', 'Manajemen Artikel')

@section('content')
<div class="bg-white rounded-lg shadow">
    <div class="p-6 border-b flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-800">Daftar Artikel</h3>
        <a href="{{ route('admin.articles.create') }}" class="px-4 py-2 bg-[#3F5499] text-white rounded hover:bg-[#7AC6E4] transition-colors">
            + Tambah Artikel
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($articles as $article)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ $article->title }}</div>
                            <div class="text-sm text-gray-500">{{ Str::limit($article->excerpt, 50) }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $article->user->name }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ $article->status === 'published' ? 'green' : 'yellow' }}-100 text-{{ $article->status === 'published' ? 'green' : 'yellow' }}-800">
                                {{ ucfirst($article->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $article->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4 text-sm font-medium space-x-2">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="text-[#3F5499] hover:text-[#7AC6E4]">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada artikel</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6 border-t">
        {{ $articles->links() }}
    </div>
</div>
@endsection
