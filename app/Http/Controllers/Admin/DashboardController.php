<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $articlesCount = Article::count();
        $eventsCount = Event::count();
        $recentArticles = Article::with('user')->latest()->take(5)->get();
        $recentEvents = Event::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact('articlesCount', 'eventsCount', 'recentArticles', 'recentEvents'));
    }
}
