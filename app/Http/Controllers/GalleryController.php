<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
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
                // Hanya ambil file gambar (jpg, jpeg, png, gif, webp)
                $extension = strtolower($file->getExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $galleryImages[] = 'assts/img/gallery/' . $file->getFilename();
                }
            }
        }

        return view('galeri', compact('galleryImages'));
    }
}
