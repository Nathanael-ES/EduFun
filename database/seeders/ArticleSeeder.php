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

        foreach (range(1, 8) as $i)
        {
            Article::create([
                'title'=> $faker->sentence,
                'content'=> $faker->paragraphs(5, true),
                'category'=> $faker->randomElement(['Interactive Multimedia', 'Software Engineering']),
                'writer_id' => $writers->random()->id,
                'published_at' => $faker->date(),
                'views' => $faker->numberBetween(0, 500),
            ]);
        }
    }
}
