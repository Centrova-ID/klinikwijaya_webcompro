@extends('layout.article')

@section('title', $article->title)

@section('content')
{{-- Breadcrumb --}}
<section class="py-6">
    <div class="container mx-auto px-4">
        <nav class="flex items-center gap-2 text-sm text-gray-600">
            <a href="/" class="hover:text-[#3F5499]">Beranda</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="{{ route('artikel.index') }}" class="hover:text-[#3F5499]">Artikel</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-800 font-medium">{{ Str::limit($article->title, 50) }}</span>
        </nav>
    </div>
</section>

{{-- Article Content --}}
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="gap-8 max-w-3xl mx-auto">
            {{-- Main Content --}}
            <article>
                <div class="overflow-hidden">
                    {{-- Article Header --}}
                    <div class="pb-6">
                        <div class="flex items-center gap-3 mb-2">
                            <a href="{{ route('artikel.category', $article->category->slug) }}" 
                                class="text-gray-700 hover:text-teal-700">
                                {{ $article->category->name ?? 'Umum' }}
                            </a>
                        </div>
                        
                        {{-- Title --}}
                        <h1 class="text-[42px] font-extrabold text-neutral-800 mb-3 leading-tight tracking-tight">
                            {{ $article->title }}
                        </h1>

                        {{-- Sub Title --}}
                        @if($article->excerpt)
                            <p class="text-xl font-normal text-[#6B6B6B] leading-snug">
                                {{ $article->excerpt }}
                            </p>
                        @endif

                        <div class="py-2 border-y border-neutral-200 flex justify-between items-center mt-8">
                            <span class="text-gray-500 text-sm">
                                {{ $article->published_at?->format('d F Y') }}
                            </span>
                            {{-- Share Buttons --}}
                            <div class="flex items-center gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-sky-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->fullUrl()) }}" 
                                    target="_blank"
                                    class="w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Article Body --}}
                        <div class="mt-10">
                            {{-- Featured Image --}}
                            @if($article->featured_image)
                                <div>
                                    <img src="{{ asset($article->featured_image) }}" alt="{{ $article->title }}" 
                                        class="w-full h-auto rounded mb-8">
                                </div>
                            @endif

                            {{-- Article Content --}}
                            <div class="prose prose-lg max-w-none article-content text-neutral-800">
                                {!! $article->content !!}
                            </div>

                            <style>
                                .article-content img {
                                    max-width: 100%;
                                    height: auto;
                                    display: block;
                                    margin: 2rem auto;
                                    border-radius: 4px;
                                }
                            </style>
                        </div>

                        <div class="flex items-center gap-4 pb-6 border-b border-gray-200 hidden">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center">
                                    <p class="text-sm text-gray-500">Ditulis oleh:</p>
                                    <p class="font-semibold text-sm ml-2 text-gray-800">{{ $article->user->name ?? 'Admin' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Related Articles --}}
                @if($relatedArticles->count() > 0)
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Artikel Terkait</h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            @foreach($relatedArticles as $related)
                                <article onclick="window.location.href='{{ route('artikel.show', $related->slug) }}'" class="cursor-pointer group">
                                    <div class="relative h-40">
                                        @if($related->featured_image)
                                            <img src="{{ asset($related->featured_image) }}" alt="{{ $related->title }}" 
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#3F5499] to-[#7AC6E4]"></div>
                                        @endif
                                    </div>
                                    <div class="py-2">
                                        <h3 class="text-base font-semibold group-hover:underline text-gray-800 mb-2 line-clamp-2 group-hover:text-[#3F5499] transition-colors">
                                            <a href="{{ route('artikel.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif
            </article>
        </div>
    </div>
</section>

<style type="text/tailwindcss">
    /* Article Content Styling - Medium/Wattpad Style with Tailwind */
    .article-content {
        @apply leading-relaxed text-lg tracking-[-0.3px];
    }

    /* Headings */
    .article-content h1 {
        @apply text-4xl font-bold leading-tight mt-10 mb-6 tracking-tight;
    }

    .article-content h2 {
        @apply text-2xl font-bold leading-snug mt-10 mb-2 tracking-tight;
    }

    .article-content h3 {
        @apply text-xl font-bold leading-normal mt-5 mb-2;
    }

    .article-content h4 {
        @apply text-lg font-bold leading-normal mt-4 mb-2;
    }

    .article-content h5 {
        @apply text-lg font-bold leading-relaxed mt-6 mb-3;
    }

    .article-content h6 {
        @apply text-base font-bold leading-relaxed mt-6 mb-3 text-gray-500 uppercase tracking-wide;
    }

    /* Paragraphs */
    .article-content p {
        @apply mb-2 leading-relaxed text-base;
    }

    /* Bold & Italic */
    .article-content strong, .article-content b {
        @apply font-bold;
    }

    .article-content em, .article-content i {
        @apply italic;
    }

    .article-content strong em, .article-content b i {
        @apply font-bold italic;
    }

    /* Links */
    .article-content a {
        @apply text-[#3F5499] underline underline-offset-2 transition-colors hover:text-[#7AC6E4];
    }

    /* Ordered Lists - Numbering */
    .article-content ol {
        @apply my-2 pl-8 list-none text-base;
        counter-reset: item;
    }

    .article-content ol li {
        @apply mb-1.5 relative pl-1;
        counter-increment: item;
    }

    .article-content ol li::before {
        content: counter(item) ".";
        @apply absolute left-[-2rem] font-bold text-neutral-800 w-6 text-right;
    }

    /* Nested Ordered Lists */
    .article-content ol ol {
        @apply my-2;
    }

    .article-content ol ol li::before {
        content: counter(item, lower-alpha) ".";
    }

    /* Unordered Lists - Bullets */
    .article-content ul {
        @apply my-1 pl-8 list-none text-base;
    }

    .article-content ul li {
        @apply mb-1 relative pl-1;
    }

    .article-content ul li::before {
        content: "";
        @apply absolute left-[-1.5rem] top-[0.65em] w-1.5 h-1.5 bg-neutral-800 rounded-full;
    }

    /* Nested Unordered Lists - Different bullet styles */
    .article-content ul ul {
        @apply mt-3 mb-2 text-base;
    }

    .article-content ul ul li::before {
        @apply w-1.5 h-1.5 bg-transparent border-2 border-neutral-800 rounded-full;
    }

    .article-content ul ul ul li::before {
        @apply w-1.5 h-0.5 bg-neutral-800 rounded-none top-[0.75em];
    }

    /* Blockquotes */
    .article-content blockquote {
        @apply my-8 py-6 px-8 border-l-4 border-[#3F5499] bg-gray-50 italic rounded-r-lg;
    }

    .article-content blockquote p {
        @apply mb-2;
    }

    .article-content blockquote p:last-child {
        @apply mb-0;
    }

    /* Code Blocks */
    .article-content pre {
        @apply my-8 p-6 bg-gray-800 text-gray-50 rounded-lg overflow-x-auto text-[0.9375rem] leading-relaxed;
    }

    .article-content code {
        @apply font-mono;
    }

    .article-content pre code {
        @apply bg-transparent p-0;
    }

    /* Inline Code */
    .article-content :not(pre) > code {
        @apply bg-gray-100 text-red-600 px-1.5 py-1 rounded text-[0.9em] font-semibold;
    }

    /* Images */
    .article-content img {
        @apply my-8 mx-auto rounded max-w-full h-auto max-h-[460px];
    }

    /* Horizontal Rule */
    .article-content hr {
        @apply my-12 border-0 border-t border-gray-200;
    }

    /* Tables */
    .article-content table {
        @apply w-full my-8 border-collapse text-[0.9375rem];
    }

    .article-content table th {
        @apply bg-gray-50 font-semibold text-left py-3 px-4 border-b-2 border-gray-200;
    }

    .article-content table td {
        @apply py-3 px-4 border-b border-gray-200;
    }

    .article-content table tr:last-child td {
        @apply border-b-0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .article-content {
            @apply text-base;
        }
        
        .article-content h1 {
            @apply text-3xl;
        }
        
        .article-content h2 {
            @apply text-2xl;
        }
        
        .article-content h3 {
            @apply text-xl;
        }
        
        .article-content h4 {
            @apply text-lg;
        }
    }
</style>

@endsection
