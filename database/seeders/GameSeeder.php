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
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202208/0921/dR9KJAKDW2izPbptHQbh3rnj.png',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/hogwarts-legacy-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/2615/fb9fe7JhjCL5vOsWY3wpSOm8.png',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/Wild-hearts-hero-desktop-01-en-25oct22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202212/1622/vhAPz1nMVWUzxBIkYTsnbGfX.png',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/fifa-23-standard-edition-hero-banner-desktop-01-ps4-ps5-en-05jul22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/0Jz6uJLxOK7JOMMfcfHFBi1D.png',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/elden-ring-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/god-of-war-raganok-clean-keyart-01-en-10mar22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=JSJ5v_JScdc&ab_channel=FedericoCodaProduction'
            ],
                    [
                'title' => 'Hogwarts Legacy',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202208/0921/dR9KJAKDW2izPbptHQbh3rnj.png',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/hogwarts-legacy-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/2615/fb9fe7JhjCL5vOsWY3wpSOm8.png',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/Wild-hearts-hero-desktop-01-en-25oct22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202212/1622/vhAPz1nMVWUzxBIkYTsnbGfX.png',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/fifa-23-standard-edition-hero-banner-desktop-01-ps4-ps5-en-05jul22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/0Jz6uJLxOK7JOMMfcfHFBi1D.png',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/elden-ring-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/god-of-war-raganok-clean-keyart-01-en-10mar22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=JSJ5v_JScdc&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Hogwarts Legacy',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202208/0921/dR9KJAKDW2izPbptHQbh3rnj.png',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/hogwarts-legacy-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/2615/fb9fe7JhjCL5vOsWY3wpSOm8.png',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/Wild-hearts-hero-desktop-01-en-25oct22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202212/1622/vhAPz1nMVWUzxBIkYTsnbGfX.png',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/fifa-23-standard-edition-hero-banner-desktop-01-ps4-ps5-en-05jul22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/0Jz6uJLxOK7JOMMfcfHFBi1D.png',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/elden-ring-hero-banner-desktop-01-en-24jan22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://gmedia.playstation.com/is/image/SIEPDC/god-of-war-raganok-clean-keyart-01-en-10mar22?$1200px$',
                'video_trailer' => 'https://www.youtube.com/watch?v=JSJ5v_JScdc&ab_channel=FedericoCodaProduction'
            ],
        ];
        foreach ($games as $game) {
            $newGame = new Game();

            $newGame->title = $game['title'];
            $newGame->image = $game['image'];
            $newGame->description = $game['description'];
            $newGame->published_year = $game['published_year'];
            $newGame->banner_image = $game['banner_image'];
            $newGame->video_trailer = $game['video_trailer'];
            $newGame->editor_id = $editors->random()->id;
            $newGame->vote = $faker->randomFloat(2, 0, 9);
            $newGame->sell_price = $faker->randomFloat(2, 10, 90);
            $newGame->save();
        }
    }
}
