<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        // Ambil semua gambar dari folder gallery
        $galleryPath = public_path('assts/img/gallery');
        $galleryImages = [];

        if (File::exists($galleryPath)) {
            $files = File::files($galleryPath);
            foreach ($files as $file) {
                // Hanya ambil file gambar (jpg, jpeg, png, gif)
                $extension = strtolower($file->getExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    $galleryImages[] = 'assts/img/gallery/' . $file->getFilename();
                }
            }
        }

        return view('galeri', compact('galleryImages'));
    }
}
