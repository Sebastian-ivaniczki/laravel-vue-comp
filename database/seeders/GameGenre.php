<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameGenre extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = Game::all();
        $genres = Genre::all();

        foreach ($games as $game) {
            $genresNum = rand(0, 4);

            $ranndGenres = $genres->random($genresNum);
            foreach ($ranndGenres as $genre) {
                $game->genres()->attach($genre);
            }
        }
    }
}
