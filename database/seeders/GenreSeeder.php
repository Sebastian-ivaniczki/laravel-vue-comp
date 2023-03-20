<?php

namespace Database\Seeders;

use App\Models\Genre;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 7; $i++) {
            $genre = new Genre();

            $genre->label = $faker->word();
            $genre->color = $faker->hexColor();

            $genre->save();
        }
    }
}
