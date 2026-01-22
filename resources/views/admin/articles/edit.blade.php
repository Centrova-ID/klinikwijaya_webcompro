@extends('admin.layout')

@section('title', 'Edit Artikel')

@section('content')
<!-- Medium-style Clean Writing Interface -->
<div class="min-h-screen bg-white">
    <!-- Top Bar - Minimal & Fixed -->
    <div class="fixed top-0 left-0 right-0 bg-white z-50">
        <div class="max-w-7xl mx-auto px-8 py-4 flex items-center justify-between">
            <a href="{{ route('admin.articles.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center gap-2 outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span class="text-sm font-medium">Kembali</span>
            </a>
            
            <div class="flex items-center gap-4">
                <!-- Auto Save Indicator -->
                <span id="save-status" class="text-sm text-gray-500">
                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                    Tersimpan
                </span>
                
                <!-- Update Button -->
                <button type="button" onclick="document.getElementById('article-form').submit()" 
                    class="px-5 py-2 bg-[#3F5499] hover:bg-[#7AC6E4] text-white rounded text-sm font-medium transition-all">
                    Update Artikel
                </button>
            </div>
        </div>
    </div>

    <!-- Main Writing Area -->
    <div>
        <div class="max-w-3xl mx-auto px-8">
            <form id="article-form" action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Metadata (Hidden) -->
                <input type="hidden" name="status" id="status-input" value="{{ old('status', $article->status) }}">
                
                <!-- Category Select - Minimal Style -->
                <div class="mb-8">
                    <select name="category_id" id="category_id" required
                        class="text-sm text-gray-500 border-0 border-b border-gray-200 focus:border-[#3F5499] focus:ring-0 px-0 py-2 bg-transparent">
                        <option value="">Pilih kategori...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Title - Large, Bold, Auto-resize -->
                <div class="mb-4">
                    <textarea 
                        name="title" 
                        id="title-input" 
                        placeholder="Judul artikel..."
                        maxlength="120"
                        required
                        rows="1"
                        class="w-full text-5xl font-bold text-gray-900 border-0 focus:ring-0 p-0 placeholder-gray-300 leading-tight tracking-tight resize-none overflow-hidden outline-none">{{ old('title', $article->title) }}</textarea>
                    <div class="flex justify-between items-center mt-1">
                        @error('title')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <span id="title-counter" class="text-xs text-gray-400 ml-auto">0/120</span>
                    </div>
                </div>

                <!-- Excerpt - Subtitle Style, Auto-resize -->
                <div class="mb-8">
                    <textarea 
                        name="excerpt" 
                        id="excerpt-input"
                        placeholder="Ringkasan artikel (opsional)..."
                        maxlength="440"
                        rows="2"
                        class="w-full text-xl text-gray-600 border-0 focus:ring-0 p-0 placeholder-gray-300 resize-none leading-snug overflow-hidden outline-none">{{ old('excerpt', $article->excerpt) }}</textarea>
                    <div class="flex justify-between items-center mt-1">
                        @error('excerpt')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <span id="excerpt-counter" class="text-xs text-gray-400 ml-auto">0/440</span>
                    </div>
                </div>

                <!-- Featured Image Upload - Clean Style -->
                <div class="mb-8">
                    <label for="featured_image" class="block">
                        <div id="featured-image-preview" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center cursor-pointer hover:border-[#3F5499] transition-colors">
                            @if($article->featured_image)
                                <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg mb-2">
                                <p class="text-sm text-gray-600">Klik untuk mengganti gambar</p>
                            @else
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-sm text-gray-600">Klik untuk menambahkan gambar utama</p>
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, GIF (Max 2MB)</p>
                            @endif
                        </div>
                    </label>
                    <input type="file" name="featured_image" id="featured_image" accept="image/*" class="hidden">
                    @error('featured_image')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Editor Area - Simple & Clean -->
                <div id="editor-wrapper" class="rounded-lg overflow-hidden bg-white">
                    <div id="editor-container" class="prose prose-lg max-w-none" style="min-height: 500px;"></div>
                </div>
                <textarea name="content" id="content-input" style="display:none;" required>{{ old('content', $article->content) }}</textarea>
                
                @error('content')
                    <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>

    <!-- Settings Panel (Floating) -->
    <div id="settings-panel" class="fixed right-8 top-24 bg-white rounded-lg shadow-lg p-6 border border-gray-200 hidden">
        <h3 class="font-bold text-gray-900 mb-4">Pengaturan Artikel</h3>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select id="status-select" class="w-full border-gray-300 rounded-lg text-sm">
                    <option value="draft" {{ $article->status === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $article->status === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Quill Editor - Reliable & Clean -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing editor...');
    
    // Auto-resize textarea function
    function autoResize(textarea) {
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    // Title textarea with character counter
    const titleInput = document.getElementById('title-input');
    const titleCounter = document.getElementById('title-counter');
    
    // Update counter and auto-resize for title
    function updateTitle() {
        const length = titleInput.value.length;
        titleCounter.textContent = `${length}/120`;
        
        // Change color when approaching limit
        if (length >= 110) {
            titleCounter.classList.add('text-red-500');
            titleCounter.classList.remove('text-gray-400');
        } else {
            titleCounter.classList.add('text-gray-400');
            titleCounter.classList.remove('text-red-500');
        }
        
        autoResize(titleInput);
    }
    
    titleInput.addEventListener('input', updateTitle);
    titleInput.addEventListener('focus', updateTitle);
    
    // Initialize title
    updateTitle();

    // Excerpt textarea with character counter
    const excerptInput = document.getElementById('excerpt-input');
    const excerptCounter = document.getElementById('excerpt-counter');
    
    // Update counter and auto-resize for excerpt
    function updateExcerpt() {
        const length = excerptInput.value.length;
        excerptCounter.textContent = `${length}/440`;
        
        // Change color when approaching limit
        if (length >= 430) {
            excerptCounter.classList.add('text-red-500');
            excerptCounter.classList.remove('text-gray-400');
        } else {
            excerptCounter.classList.add('text-gray-400');
            excerptCounter.classList.remove('text-red-500');
        }
        
        autoResize(excerptInput);
    }
    
    excerptInput.addEventListener('input', updateExcerpt);
    excerptInput.addEventListener('focus', updateExcerpt);
    
    // Initialize excerpt
    updateExcerpt();
    
    // Featured Image Preview
    const featuredImageInput = document.getElementById('featured_image');
    const featuredImagePreview = document.getElementById('featured-image-preview');
    
    featuredImageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                featuredImagePreview.innerHTML = `
                    <img src="${e.target.result}" class="w-full h-auto rounded-lg">
                    <p class="text-sm text-gray-600 mt-2">Klik untuk mengganti gambar</p>
                `;
            };
            reader.readAsDataURL(file);
        }
    });

    // Initialize Quill with clean toolbar and existing content
    const existingContent = document.getElementById('content-input').value;
    
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        placeholder: 'Mulai menulis artikel Anda...',
        modules: {
            toolbar: {
                container: [
                    [{ 'header': [2, 3, 4, false] }],
                    ['bold', 'italic', 'underline', 'link'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['blockquote', 'code-block'],
                    ['image'],
                    ['clean']
                ],
                handlers: {
                    image: imageHandler
                }
            }
        }
    });

    // Set existing content to editor
    if (existingContent && existingContent.trim()) {
        quill.root.innerHTML = existingContent;
    }

    console.log('Quill initialized with existing content');

    // Custom image handler with alt text
    function imageHandler() {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.click();

        input.onchange = async () => {
            const file = input.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran gambar terlalu besar! Maksimal 2MB');
                    return;
                }

                const formData = new FormData();
                formData.append('image', file);
                formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                try {
                    const response = await fetch('/admin/articles/upload-image', {
                        method: 'POST',
                        body: formData
                    });

                    const data = await response.json();
                    
                    if (data.success) {
                        const range = quill.getSelection();
                        const altText = prompt('Deskripsi gambar (alt text):', '');
                        
                        // Insert image
                        quill.insertEmbed(range.index, 'image', data.url);
                        
                        // Add alt text to the image
                        setTimeout(() => {
                            const images = document.querySelectorAll('#editor-container img');
                            const lastImage = images[images.length - 1];
                            if (lastImage && altText) {
                                lastImage.alt = altText;
                                lastImage.title = altText;
                            }
                        }, 100);
                        
                        quill.setSelection(range.index + 1);
                    } else {
                        alert('Gagal upload gambar');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Gagal upload gambar');
                }
            }
        };
    }

    // Auto-save indicator
    quill.on('text-change', function() {
        const saveStatus = document.getElementById('save-status');
        saveStatus.innerHTML = '<span class="inline-block w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>Mengetik...';
        
        setTimeout(() => {
            saveStatus.innerHTML = '<span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>Tersimpan';
            document.getElementById('content-input').value = quill.root.innerHTML;
        }, 500);
    });

    // Update status input when select changes
    const statusSelect = document.getElementById('status-select');
    const statusInput = document.getElementById('status-input');
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            statusInput.value = this.value;
        });
    }

    // Form Submit
    const form = document.getElementById('article-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const content = quill.root.innerHTML;
        document.getElementById('content-input').value = content;

        // Validate
        const title = document.getElementById('title-input').value.trim();
        const category = document.getElementById('category_id').value;

        if (!title) {
            alert('Judul artikel tidak boleh kosong!');
            titleInput.focus();
            return;
        }

        if (!category) {
            alert('Silakan pilih kategori!');
            document.getElementById('category_id').focus();
            return;
        }

        if (quill.getText().trim().length === 0) {
            alert('Konten artikel tidak boleh kosong!');
            return;
        }

        // Remove empty file input to prevent validation error
        const fileInput = document.getElementById('featured_image');
        if (fileInput && fileInput.files.length === 0) {
            fileInput.remove();
        }

        // Submit
        console.log('Submitting form...');
        form.submit();
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 's') {
            e.preventDefault();
            form.dispatchEvent(new Event('submit', { cancelable: true }));
        }
    });
});
</script>

<!-- Clean Editor Styling -->
<style>
    .ql-container {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }

    .ql-editor {
        min-height: 500px;
        padding: 2rem;
        color: #262626;
    }

    .ql-editor.ql-blank::before {
        color: #9CA3AF;
        font-style: normal;
        font-size: 1.125rem;
    }

    /* Toolbar styling */
    .ql-toolbar.ql-snow {
        border: none;
        border-bottom: 1px solid #E5E7EB;
        padding: 1rem 2rem;
        background: #F9FAFB;
    }

    .ql-snow .ql-stroke {
        stroke: #6B7280;
    }

    .ql-snow .ql-fill {
        fill: #6B7280;
    }

    .ql-snow .ql-picker-label {
        color: #6B7280;
    }

    .ql-toolbar button:hover,
    .ql-toolbar button.ql-active {
        color: #3F5499 !important;
    }

    .ql-toolbar button:hover .ql-stroke,
    .ql-toolbar button.ql-active .ql-stroke {
        stroke: #3F5499;
    }

    .ql-toolbar button:hover .ql-fill,
    .ql-toolbar button.ql-active .ql-fill {
        fill: #3F5499;
    }

    /* Content styling to match show.blade.php */
    .ql-editor h2 {
        font-size: 1.875rem;
        font-weight: bold;
        margin-top: 2.5rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .ql-editor h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .ql-editor h4 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
    }

    .ql-editor p {
        margin-bottom: 1rem;
        line-height: 1.75rem;
    }

    .ql-editor blockquote {
        margin: 2rem 0;
        padding: 1.5rem 2rem;
        border-left: 4px solid #3F5499;
        background: #F9FAFB;
        border-radius: 0 0.5rem 0.5rem 0;
        font-style: italic;
    }

    .ql-editor ol,
    .ql-editor ul {
        margin: 1rem 0;
        padding-left: 2rem;
    }

    .ql-editor li {
        margin-bottom: 0.5rem;
        line-height: 1.75rem;
    }

    .ql-editor pre {
        background: #1F2937;
        color: #F3F4F6;
        padding: 1.5rem;
        border-radius: 0.5rem;
        margin: 2rem 0;
    }

    .ql-editor img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        margin: 2rem 0;
    }

    .ql-editor a {
        color: #3F5499;
        text-decoration: underline;
    }

    .ql-editor a:hover {
        color: #7AC6E4;
    }
</style>
@endsection