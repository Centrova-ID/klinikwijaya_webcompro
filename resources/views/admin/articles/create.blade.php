@extends('admin.layout')

@section('title', 'Tambah Artikel')
@section('header', 'Tambah Artikel Baru')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Judul Artikel *
            </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                Kategori *
            </label>
            <select name="category_id" id="category_id" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="excerpt">
                Ringkasan
            </label>
            <textarea name="excerpt" id="excerpt" rows="3"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">{{ old('excerpt') }}</textarea>
            <p class="text-gray-500 text-xs mt-1">Ringkasan singkat artikel untuk preview</p>
            @error('excerpt')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                Konten Artikel *
            </label>
            <div id="editor-container" style="height: 400px;"></div>
            <textarea name="content" id="content" style="display:none;" required>{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="featured_image">
                Gambar Utama
            </label>
            <input type="file" name="featured_image" id="featured_image" accept="image/*"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
            <p class="text-gray-500 text-xs mt-1">Format: JPG, PNG, GIF (Max 2MB)</p>
            @error('featured_image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                Status *
            </label>
            <select name="status" id="status" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
                <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
            </select>
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end space-x-4 pt-6 border-t">
            <a href="{{ route('admin.articles.index') }}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Batal
            </a>
            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white rounded-lg hover:shadow-lg transition-all duration-300">
                Simpan Artikel
            </button>
        </div>
    </form>
</div>

<!-- Quill Rich Text Editor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Quill initialization started...');
        
        // Inisialisasi Quill
        var quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['blockquote', 'code-block'],
                    ['link', 'image'],
                    ['clean']
                ]
            },
            placeholder: 'Tulis konten artikel di sini...'
        });

        console.log('Quill initialized successfully');

        // Get form dan textarea
        var form = document.querySelector('form');
        var textarea = document.querySelector('#content');

        console.log('Form:', form);
        console.log('Textarea:', textarea);

        // Update textarea setiap kali ada perubahan di Quill
        quill.on('text-change', function() {
            textarea.value = quill.root.innerHTML;
            console.log('Content updated:', textarea.value.substring(0, 100) + '...');
        });

        // Pastikan textarea ter-update saat form di-submit
        form.addEventListener('submit', function(e) {
            var content = quill.root.innerHTML;
            textarea.value = content;
            
            console.log('Form submitting...');
            console.log('Content length:', content.length);
            console.log('Textarea value:', textarea.value);
            console.log('Text length (no HTML):', quill.getText().trim().length);
            
            // Validasi konten tidak kosong
            if(quill.getText().trim().length === 0) {
                e.preventDefault();
                alert('Konten artikel tidak boleh kosong!');
                console.log('Form submission prevented: Empty content');
                return false;
            }
            
            console.log('Form submission allowed, content is valid');
        });
    });
</script>
@endsection
