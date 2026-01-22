<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Debug: Log semua data yang diterima
        \Log::info('Article Store Request Data:', [
            'all_data' => $request->all(),
            'content_exists' => $request->has('content'),
            'content_value' => $request->input('content'),
            'content_length' => strlen($request->input('content', ''))
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $validated['user_id'] = Auth::id();
        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/articles'), $filename);
            $validated['featured_image'] = 'uploads/articles/' . $filename;
        }

        if ($validated['status'] === 'published' && !$request->published_at) {
            $validated['published_at'] = now();
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($article->featured_image && file_exists(public_path($article->featured_image))) {
                unlink(public_path($article->featured_image));
            }

            $image = $request->file('featured_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/articles'), $filename);
            $validated['featured_image'] = 'uploads/articles/' . $filename;
        }

        if ($validated['status'] === 'published' && !$article->published_at) {
            $validated['published_at'] = now();
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy(Article $article)
    {
        // Delete image if exists
        if ($article->featured_image && file_exists(public_path($article->featured_image))) {
            unlink(public_path($article->featured_image));
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/articles/content'), $filename);
                
                $url = asset('uploads/articles/content/' . $filename);
                
                return response()->json([
                    'success' => true,
                    'url' => $url
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Tidak ada gambar yang diupload'
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal upload gambar: ' . $e->getMessage()
            ], 500);
        }
    }
}
