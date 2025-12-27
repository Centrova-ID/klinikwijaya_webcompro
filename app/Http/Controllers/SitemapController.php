<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Static pages dengan priority dan change frequency
        $staticPages = [
            [
                'url' => url('/'),
                'changefreq' => 'weekly',
                'priority' => '1.0',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('tentang-kami'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('layanan'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('layanan.terapi-robotik'),
                'changefreq' => 'monthly',
                'priority' => '0.9',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('layanan.fisioterapi'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('fasilitas'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
            [
                'url' => route('galeri'),
                'changefreq' => 'weekly',
                'priority' => '0.7',
                'lastmod' => Carbon::now()->toIso8601String(),
            ],
        ];

        // Dynamic pages - Articles
        $articles = Article::where('is_published', true)
            ->latest('updated_at')
            ->get()
            ->map(function ($article) {
                return [
                    'url' => route('artikel.show', $article->slug),
                    'changefreq' => 'weekly',
                    'priority' => '0.7',
                    'lastmod' => $article->updated_at->toIso8601String(),
                ];
            });

        // Dynamic pages - Events
        $events = Event::where('is_published', true)
            ->latest('updated_at')
            ->get()
            ->map(function ($event) {
                return [
                    'url' => route('event.show', $event->slug),
                    'changefreq' => 'weekly',
                    'priority' => '0.6',
                    'lastmod' => $event->updated_at->toIso8601String(),
                ];
            });

        // Merge all pages
        $urls = collect($staticPages)
            ->merge($articles)
            ->merge($events);

        // Generate XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($urls as $url) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . e($url['url']) . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . PHP_EOL;
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml')
            ->header('Cache-Control', 'public, max-age=3600'); // Cache for 1 hour
    }
}
