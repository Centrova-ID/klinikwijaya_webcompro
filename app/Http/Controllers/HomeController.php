<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua foto dari folder gallery
        $galleryPath = public_path('assts/img/gallery');
        $galleryImages = [];
        
        if (File::exists($galleryPath)) {
            $files = File::files($galleryPath);
            foreach ($files as $file) {
                $filename = $file->getFilename();
                // Filter hanya file gambar
                if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $filename)) {
                    $galleryImages[] = 'assts/img/gallery/' . $filename;
                }
            }
        }

        // Ambil 3 artikel terbaru yang published
        $articles = Article::where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('index', compact('galleryImages', 'articles'));
    }
}
