<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Writer;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        $writers = Writer::all();
        if ($writers->count() == 0) {
            $this->call(WriterSeeder::class);
            $writers = Writer::all();
        }

        $interactiveArticles = [
            'Human and Computer Interaction',
            'User Experience',
            'User Experience for Digital Immersive Technology'
        ];

         $softwareArticles = [
            'Pattern Software Design',
            'Agile Software Development',
            'Code Reengineering'
        ];

        foreach (range(1, 50) as $i) {
            Article::create([
                'title' => $faker->randomElement($interactiveArticles),
                'content' => $faker->paragraphs(5, true),
                'category' => 'Interactive Multimedia',
                'writer_id' => $writers->random()->id,
                'published_at' => $faker->date(),
                'views' => $faker->numberBetween(100, 500),
            ]);
        }

        foreach (range(1, 50)as $i) {
            Article::create([
                'title' => $faker->randomElement($softwareArticles),
                'content' => $faker->paragraphs(5, true),
                'category' => 'Software Engineering',
                'writer_id' => $writers->random()->id,
                'published_at' => $faker->date(),
                'views' => $faker->numberBetween(100, 500),
            ]);
        }
    }
}
