<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'category'])
            ->where('status', 'published')
            ->latest('published_at')
            ->paginate(12);
            
        $featuredArticle = Article::with(['user', 'category'])
            ->where('status', 'published')
            ->latest('published_at')
            ->first();
            
        $categories = Category::withCount('articles')->get();
        
        return view('about.artikel.index', compact('articles', 'featuredArticle', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::with(['user', 'category'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
            
        $relatedArticles = Article::with(['user', 'category'])
            ->where('status', 'published')
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return view('about.artikel.show', compact('article', 'relatedArticles'));
    }
    
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $articles = Article::with(['user', 'category'])
            ->where('status', 'published')
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->paginate(12);
            
        $categories = Category::withCount('articles')->get();
        
        return view('about.artikel.category', compact('articles', 'category', 'categories'));
    }
}
