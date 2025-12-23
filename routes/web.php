<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Subdomain app.klinikwijaya.test - HARUS DI PALING ATAS
Route::domain('app.klinikwijaya.test')->group(function () {
    // Root subdomain - check auth and redirect
    Route::get('/', function () {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('login');
    })->name('app.home');
    
    // Auth routes untuk subdomain
    require __DIR__.'/auth.php';
    
    // Admin Routes di subdomain
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        
        // Article Management
        Route::prefix('articles')->name('admin.articles.')->group(function () {
            Route::get('/', [AdminArticleController::class, 'index'])->name('index');
            Route::get('/create', [AdminArticleController::class, 'create'])->name('create');
            Route::post('/', [AdminArticleController::class, 'store'])->name('store');
            Route::get('/{article}/edit', [AdminArticleController::class, 'edit'])->name('edit');
            Route::put('/{article}', [AdminArticleController::class, 'update'])->name('update');
            Route::delete('/{article}', [AdminArticleController::class, 'destroy'])->name('destroy');
        });
        
        // Event Management
        Route::prefix('events')->name('admin.events.')->group(function () {
            Route::get('/', [AdminEventController::class, 'index'])->name('index');
            Route::get('/create', [AdminEventController::class, 'create'])->name('create');
            Route::post('/', [AdminEventController::class, 'store'])->name('store');
            Route::get('/{event}/edit', [AdminEventController::class, 'edit'])->name('edit');
            Route::put('/{event}', [AdminEventController::class, 'update'])->name('update');
            Route::delete('/{event}', [AdminEventController::class, 'destroy'])->name('destroy');
        });
    });
});

// Main website routes (klinikwijaya.test)
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Layanan Routes
Route::prefix('layanan')->group(function () {
    Route::get('/pusat-rehabilitasi-stroke', [LayananController::class, 'pusatRehabilitasiStroke'])->name('layanan.stroke-rehabilitation');
    Route::get('/pusat-rehabilitasi-stroke/terapi-robotik', [LayananController::class, 'terapiRobotik'])->name('layanan.terapi-robotik');
    Route::get('/spesialis-gigi', [LayananController::class, 'spesialisGigi'])->name('layanan.spesialis-gigi');
    Route::get('/musculosceletal', [LayananController::class, 'musculosceletal'])->name('layanan.musculosceletal');
});

// Fasilitas Route
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');

// Tentang Kami Route
Route::get('/tentang-kami', [TentangController::class, 'index'])->name('tentang-kami');

// Gallery Route
Route::get('/gallery', [GalleryController::class, 'index'])->name('galeri');

// Buat Janji Route
Route::get('/buat-janji', function () {
    return view('buat_janji.index');
})->name('buat-janji');

// Artikel Routes
Route::prefix('artikel')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('artikel.index');
    Route::get('/kategori/{slug}', [ArticleController::class, 'category'])->name('artikel.category');
    Route::get('/{slug}', [ArticleController::class, 'show'])->name('artikel.show');
});

// Event Routes
Route::prefix('event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event.index');
    Route::get('/{slug}', [EventController::class, 'show'])->name('event.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Routes - Prefix /admin (alternatif tanpa subdomain)
Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', function() {
            return redirect()->route('admin.dashboard');
        });
    });
});
