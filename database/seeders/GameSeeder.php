<?php

namespace Database\Seeders;

use App\Models\Editor;
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
        $editors = Editor::all();
        $games = [
            [
                'title' => 'Hogwarts Legacy',
                'image' => 'https://lh3.googleusercontent.com/AivkCwEzeZMWAJbFUVVsOTHFavBS96bP5T5QRxG4cuketgw-hXv7tRmOmlUNHg3wGgUlAb_1kIzbBsz_wNts2vsqi-iNp8dYer0tO-xhJg',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'pusblished_year' => '2023'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://lh3.googleusercontent.com/iE-nQwh2IbmDvO1vmIG8KGNJoruFi3aTLYiduYkh0k8pX9d-gCRPQerGax2WmQOZiHuzZaQsV6JRVg2sGeFpcr_XLmTpJuHso83mh5G_',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'pusblished_year' => '2023'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://lh3.googleusercontent.com/OQStm93Aak7FA_GcxlPzxTFIqWA8mtqg3RPjsQSyHVX_mGjOaPxRyKQwJXd7ifdPNVI6lvl2RxQ1EPlZIQXdN176jWgzKkXO9ZJfbO8',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'pusblished_year' => '2022'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://lh3.googleusercontent.com/vX6HUT8pJuQlb7SAbwJBp9zGzHa6B2T1YA3flwMIbu7uvrSTaVYhqbHxAoK58d8oLn2inDHmesU5bjgifpA450NFCMyyjIJs8v6SyEYV1A',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'pusblished_year' => '2022'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://lh3.googleusercontent.com/zf8L-T1IY6gnuQQYD-OBdWcvG7wEd6dwLHTOXllUPiYzW3r12qnmCI3KPqfqokLi7J9jItg6rW9dzquDji1s8as4oLoRpzEu56H91SzQ',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'pusblished_year' => '2022'
            ],
        ];
        foreach ($games as $game) {
            $newGame = new Game();

            $newGame->title = $game['title'];
            $newGame->image = $game['image'];
            $newGame->description = $game['description'];
            $newGame->pusblished_year = $game['pusblished_year'];
            $newGame->editor_id = $editors->random()->id;
            $newGame->save();
        }
    }
}
