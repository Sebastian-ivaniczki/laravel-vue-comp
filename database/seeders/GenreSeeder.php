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
        $genres = ['Action RPG', 'FPS arena', 'FPS', 'MMORPG', 'MOBA', 'Open world', 'Otome', 'Roguelike'];
        foreach ($genres as $genreName) {
            $newGenre = new Genre();

            $newGenre->label = $genreName;
            $newGenre->color = $faker->hexColor();

            $newGenre->save();
        }
    }
}
