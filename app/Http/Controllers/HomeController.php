<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Path relative to public root
        $galleryFolder = 'assts/img/gallery';
        
        // Cek path dari ENV atau fallback ke public_path() standar
        $publicPath = env('APP_PUBLIC_PATH') ?: public_path();
        $galleryPath = $publicPath . DIRECTORY_SEPARATOR . $galleryFolder;

        // Fallback otomatis untuk cPanel (public_html) jika path standar tidak ditemukan
        if (!File::exists($galleryPath) && !env('APP_PUBLIC_PATH')) {
            $cpanelPath = base_path('public_html' . DIRECTORY_SEPARATOR . $galleryFolder);
            if (File::exists($cpanelPath)) {
                $galleryPath = $cpanelPath;
            }
        }

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

        // Ambil 3 artikel terbaru yang published (Deactivated)
        /*
        $articles = Article::where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();
        */
        $articles = collect();

        return view('index', compact('galleryImages', 'articles'));
    }
}
