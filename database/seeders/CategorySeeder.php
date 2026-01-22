<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Layanan Medis',
                'slug' => 'layanan-medis',
                'description' => 'Informasi seputar layanan medis Klinik Wijaya'
            ],
            [
                'name' => 'Rehabilitasi',
                'slug' => 'rehabilitasi',
                'description' => 'Artikel tentang program rehabilitasi dan terapi'
            ],
            [
                'name' => 'Kesehatan Gigi',
                'slug' => 'kesehatan-gigi',
                'description' => 'Tips dan informasi kesehatan gigi'
            ],
            [
                'name' => 'Orthopedi',
                'slug' => 'orthopedi',
                'description' => 'Artikel seputar kesehatan tulang dan sendi'
            ],
            [
                'name' => 'Tips Kesehatan',
                'slug' => 'tips-kesehatan',
                'description' => 'Tips dan panduan hidup sehat'
            ],
            [
                'name' => 'Berita Klinik',
                'slug' => 'berita-klinik',
                'description' => 'Berita dan update terbaru dari Klinik Wijaya'
            ],
            [
                'name' => 'Event & Promo',
                'slug' => 'event-promo',
                'description' => 'Event dan promo menarik dari Klinik Wijaya'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
