<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $game = new Game();

            $game->title = $faker->word();
            $game->image = $faker->url();
            $game->description = $faker->text(250);
            $game->pusblished_year = $faker->year();

            $game->save();
        }
    }
}
