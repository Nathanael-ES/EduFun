<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach(range(1,4) as $i)
        {
            Writer::create([
                'name' => $faker->name,
                'bio' => $faker->paragraph(2),
                'email' => $faker->safeEmail,
            ]);
        }
    }
}
