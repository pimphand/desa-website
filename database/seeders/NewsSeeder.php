<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            News::create([
                'title' => "News Title $i",
                'content' => "This is the content for news $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'image' => "news_image_$i.jpg", // Pastikan file gambar ada di storage atau gunakan Faker untuk random images
                'slug' => Str::slug("news-title-$i"),
                'is_published' => rand(0, 1),
                'published_at' => now()->subDays(rand(1, 30)), // Random date in the last 30 days
            ]);
        }
    }
}
