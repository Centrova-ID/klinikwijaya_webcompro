@extends('admin.layout')

@section('title', 'Edit Event')

@section('content')
<!-- Medium-style Clean Writing Interface -->
<div class="min-h-screen bg-white">
    <!-- Top Bar - Minimal & Fixed -->
    <div class="fixed top-0 left-0 right-0 bg-white z-50">
        <div class="max-w-7xl mx-auto px-8 py-4 flex items-center justify-between">
            <a href="{{ route('admin.events.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center gap-2 outline-none">
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
                <button type="button" onclick="document.getElementById('event-form').submit()" 
                    class="px-5 py-2 bg-[#3F5499] hover:bg-[#7AC6E4] text-white rounded text-sm font-medium transition-all">
                    Update Event
                </button>
            </div>
        </div>
    </div>

    <!-- Main Writing Area -->
    <div class="pt-24">
        <div class="max-w-3xl mx-auto px-8">
            <form id="event-form" action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Metadata (Hidden) -->
                <input type="hidden" name="status" id="status-input" value="{{ old('status', $event->status) }}">
                
                <!-- Event Date & Location - Minimal Style -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <input type="datetime-local" name="event_date" id="event_date" value="{{ old('event_date', $event->event_date->format('Y-m-d\TH:i')) }}" required
                            class="text-sm text-gray-500 border-0 border-b border-gray-200 focus:border-[#3F5499] focus:ring-0 px-0 py-2 bg-transparent w-full">
                        @error('event_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" placeholder="Lokasi event..."
                            class="text-sm text-gray-500 border-0 border-b border-gray-200 focus:border-[#3F5499] focus:ring-0 px-0 py-2 bg-transparent w-full">
                        @error('location')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Title - Large, Bold, Auto-resize -->
                <div class="mb-4">
                    <textarea 
                        name="title" 
                        id="title-input" 
                        placeholder="Judul event..."
                        maxlength="120"
                        required
                        rows="1"
                        class="w-full text-5xl font-bold text-gray-900 border-0 focus:ring-0 p-0 placeholder-gray-300 leading-tight tracking-tight resize-none overflow-hidden outline-none">{{ old('title', $event->title) }}</textarea>
                    <div class="flex justify-between items-center mt-1">
                        @error('title')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <span id="title-counter" class="text-xs text-gray-400 ml-auto">0/120</span>
                    </div>
                </div>

                <!-- Description - Subtitle Style, Auto-resize -->
                <div class="mb-8">
                    <textarea 
                        name="description" 
                        id="description-input"
                        placeholder="Deskripsi singkat event (opsional)..."
                        maxlength="440"
                        rows="2"
                        class="w-full text-xl text-gray-600 border-0 focus:ring-0 p-0 placeholder-gray-300 resize-none leading-snug overflow-hidden outline-none">{{ old('description', $event->description) }}</textarea>
                    <div class="flex justify-between items-center mt-1">
                        @error('description')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <span id="description-counter" class="text-xs text-gray-400 ml-auto">0/440</span>
                    </div>
                </div>

                <!-- Featured Image Upload - Clean Style -->
                <div class="mb-8">
                    <label for="featured_image" class="block">
                        <div id="featured-image-preview" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center cursor-pointer hover:border-[#3F5499] transition-colors">
                            @if($event->featured_image)
                                <img src="{{ asset($event->featured_image) }}" alt="{{ $event->title }}" class="w-full h-auto rounded-lg mb-2">
                                <p class="text-sm text-gray-600">Klik untuk mengganti gambar</p>
                            @else
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-sm text-gray-600">Klik untuk menambahkan gambar event</p>
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
                <textarea name="content" id="content-input" style="display:none;" required>{{ old('content', $event->content) }}</textarea>
                
                @error('content')
                    <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>

    <!-- Settings Panel (Floating) -->
    <div id="settings-panel" class="fixed right-8 top-24 bg-white rounded-lg shadow-lg p-6 border border-gray-200 hidden">
        <h3 class="font-bold text-gray-900 mb-4">Pengaturan Event</h3>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select id="status-select" class="w-full border-gray-300 rounded-lg text-sm">
                    <option value="draft" {{ $event->status === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $event->status === 'published' ? 'selected' : '' }}>Published</option>
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
    
    // Title auto-resize and counter
    const titleInput = document.getElementById('title-input');
    const titleCounter = document.getElementById('title-counter');
    
    titleInput.addEventListener('input', function() {
        autoResize(this);
        titleCounter.textContent = `${this.value.length}/120`;
    });
    autoResize(titleInput);
    titleCounter.textContent = `${titleInput.value.length}/120`;
    
    // Description auto-resize and counter
    const descriptionInput = document.getElementById('description-input');
    const descriptionCounter = document.getElementById('description-counter');
    
    if (descriptionInput && descriptionCounter) {
        descriptionInput.addEventListener('input', function() {
            autoResize(this);
            descriptionCounter.textContent = `${this.value.length}/440`;
        });
        autoResize(descriptionInput);
        descriptionCounter.textContent = `${descriptionInput.value.length}/440`;
    }
    
    // Featured Image Preview
    const featuredImageInput = document.getElementById('featured_image');
    const featuredImagePreview = document.getElementById('featured-image-preview');
    
    featuredImageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                featuredImagePreview.innerHTML = `
                    <img src="${e.target.result}" alt="Preview" class="w-full h-auto rounded-lg mb-2">
                    <p class="text-sm text-gray-600">Klik untuk mengganti gambar</p>
                `;
            };
            reader.readAsDataURL(file);
        }
    });
    
    // Initialize Quill Editor
    try {
        const contentInput = document.getElementById('content-input');
        const existingContent = contentInput.value;
        
        const quill = new Quill('#editor-container', {
            theme: 'snow',
            placeholder: 'Tulis detail event di sini...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['blockquote', 'code-block'],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });
        
        // Load existing content
        if (existingContent) {
            quill.root.innerHTML = existingContent;
        }
        
        console.log('Quill initialized successfully');
        
        // Sync Quill content to hidden textarea
        quill.on('text-change', function() {
            document.getElementById('content-input').value = quill.root.innerHTML;
        });
        
        // Status selector
        document.getElementById('status-select').addEventListener('change', function() {
            document.getElementById('status-input').value = this.value;
        });
        
    } catch (error) {
        console.error('Error initializing Quill:', error);
    }
});
</script>
@endsection
