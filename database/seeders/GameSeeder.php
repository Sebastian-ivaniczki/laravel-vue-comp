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
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/-JVFIlZKyXazUpIIOOycpOtx0gsoCOh2zyTmc6w93I_7-7nbqTRIh0Thx9w7rQ1mug23WgGJcB0lofZYPOtTiwwo-WlcLT2vy-HFdcK3iA',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://lh3.googleusercontent.com/iE-nQwh2IbmDvO1vmIG8KGNJoruFi3aTLYiduYkh0k8pX9d-gCRPQerGax2WmQOZiHuzZaQsV6JRVg2sGeFpcr_XLmTpJuHso83mh5G_',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/XLz-0-Lg3g-IMAfq01QfAuclj9_gL3Va0QRHqtF1GNtVywoKCjuYIKVinYcmRIESrUl_Yqw5G7I3as3lzw28ukvj0I0Ntd-h4c90M2Y',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://lh3.googleusercontent.com/OQStm93Aak7FA_GcxlPzxTFIqWA8mtqg3RPjsQSyHVX_mGjOaPxRyKQwJXd7ifdPNVI6lvl2RxQ1EPlZIQXdN176jWgzKkXO9ZJfbO8',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/oNoSaY1S__1MRJjpcUdUNJ-bkjRnr9g-FLj81gov8_BlohFvhyS-xjVs7r6gYnQRt0oauuc0j6ASVPDQlUOmBIatXJ_W5PyFMIcnj0iQ2A',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://lh3.googleusercontent.com/vX6HUT8pJuQlb7SAbwJBp9zGzHa6B2T1YA3flwMIbu7uvrSTaVYhqbHxAoK58d8oLn2inDHmesU5bjgifpA450NFCMyyjIJs8v6SyEYV1A',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/zxQh4KOhxzSKotGSitanNfRZP6r_BQOYbi7DzjEW26a6Lh8F_heOtwnLBokKUS0GXRELkloy8-KZIT5lIxQDPzAyobMOKRJ1MKFMKamsAw',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://lh3.googleusercontent.com/zf8L-T1IY6gnuQQYD-OBdWcvG7wEd6dwLHTOXllUPiYzW3r12qnmCI3KPqfqokLi7J9jItg6rW9dzquDji1s8as4oLoRpzEu56H91SzQ',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/5Ua-Wnz9QMHRIaFg8fzKbpSmSaENaaLs_TriNZuoBm68VWonVhKr88EJyqvF4wvtk9-bbPeW37hjtGo5jU1yyZVOgvMCYAmc3YdrLIE',
                'video_trailer' => 'https://www.youtube.com/watch?v=JSJ5v_JScdc&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Hogwarts Legacy',
                'image' => 'https://lh3.googleusercontent.com/AivkCwEzeZMWAJbFUVVsOTHFavBS96bP5T5QRxG4cuketgw-hXv7tRmOmlUNHg3wGgUlAb_1kIzbBsz_wNts2vsqi-iNp8dYer0tO-xhJg',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/-JVFIlZKyXazUpIIOOycpOtx0gsoCOh2zyTmc6w93I_7-7nbqTRIh0Thx9w7rQ1mug23WgGJcB0lofZYPOtTiwwo-WlcLT2vy-HFdcK3iA',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://lh3.googleusercontent.com/iE-nQwh2IbmDvO1vmIG8KGNJoruFi3aTLYiduYkh0k8pX9d-gCRPQerGax2WmQOZiHuzZaQsV6JRVg2sGeFpcr_XLmTpJuHso83mh5G_',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/XLz-0-Lg3g-IMAfq01QfAuclj9_gL3Va0QRHqtF1GNtVywoKCjuYIKVinYcmRIESrUl_Yqw5G7I3as3lzw28ukvj0I0Ntd-h4c90M2Y',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://lh3.googleusercontent.com/OQStm93Aak7FA_GcxlPzxTFIqWA8mtqg3RPjsQSyHVX_mGjOaPxRyKQwJXd7ifdPNVI6lvl2RxQ1EPlZIQXdN176jWgzKkXO9ZJfbO8',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/oNoSaY1S__1MRJjpcUdUNJ-bkjRnr9g-FLj81gov8_BlohFvhyS-xjVs7r6gYnQRt0oauuc0j6ASVPDQlUOmBIatXJ_W5PyFMIcnj0iQ2A',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://lh3.googleusercontent.com/vX6HUT8pJuQlb7SAbwJBp9zGzHa6B2T1YA3flwMIbu7uvrSTaVYhqbHxAoK58d8oLn2inDHmesU5bjgifpA450NFCMyyjIJs8v6SyEYV1A',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/zxQh4KOhxzSKotGSitanNfRZP6r_BQOYbi7DzjEW26a6Lh8F_heOtwnLBokKUS0GXRELkloy8-KZIT5lIxQDPzAyobMOKRJ1MKFMKamsAw',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://lh3.googleusercontent.com/zf8L-T1IY6gnuQQYD-OBdWcvG7wEd6dwLHTOXllUPiYzW3r12qnmCI3KPqfqokLi7J9jItg6rW9dzquDji1s8as4oLoRpzEu56H91SzQ',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/5Ua-Wnz9QMHRIaFg8fzKbpSmSaENaaLs_TriNZuoBm68VWonVhKr88EJyqvF4wvtk9-bbPeW37hjtGo5jU1yyZVOgvMCYAmc3YdrLIE',
                'video_trailer' => 'https://www.youtube.com/watch?v=JSJ5v_JScdc&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Hogwarts Legacy',
                'image' => 'https://lh3.googleusercontent.com/AivkCwEzeZMWAJbFUVVsOTHFavBS96bP5T5QRxG4cuketgw-hXv7tRmOmlUNHg3wGgUlAb_1kIzbBsz_wNts2vsqi-iNp8dYer0tO-xhJg',
                'description' => 'The player character possesses the power to control a mysterious ancient magic and holds the key to an "ancient secret" that threatens the stability of the wizarding world. Their mission is to discover the reasons behind the resurgence of this forgotten magic and those who are trying to harness its power.
                ',
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/-JVFIlZKyXazUpIIOOycpOtx0gsoCOh2zyTmc6w93I_7-7nbqTRIh0Thx9w7rQ1mug23WgGJcB0lofZYPOtTiwwo-WlcLT2vy-HFdcK3iA',
                'video_trailer' => 'https://www.youtube.com/watch?v=1O6Qstncpnc&ab_channel=PlayStation'
            ],
            [
                'title' => 'Wild Hearts',
                'image' => 'https://lh3.googleusercontent.com/iE-nQwh2IbmDvO1vmIG8KGNJoruFi3aTLYiduYkh0k8pX9d-gCRPQerGax2WmQOZiHuzZaQsV6JRVg2sGeFpcr_XLmTpJuHso83mh5G_',
                'description' => "Wild Hearts is an action RPG from Koei Tecmo about hunters and kemono. It follows a story about your hunter and the city of Minato where you'd take on commissions from the people in it.
                ",
                'published_year' => '2023',
                'banner_image' => 'https://lh3.googleusercontent.com/XLz-0-Lg3g-IMAfq01QfAuclj9_gL3Va0QRHqtF1GNtVywoKCjuYIKVinYcmRIESrUl_Yqw5G7I3as3lzw28ukvj0I0Ntd-h4c90M2Y',
                'video_trailer' => 'https://www.youtube.com/watch?v=CKJW0P6DVGM&ab_channel=PlayStation'
            ],
            [
                'title' => 'FIFA 23',
                'image' => 'https://lh3.googleusercontent.com/OQStm93Aak7FA_GcxlPzxTFIqWA8mtqg3RPjsQSyHVX_mGjOaPxRyKQwJXd7ifdPNVI6lvl2RxQ1EPlZIQXdN176jWgzKkXO9ZJfbO8',
                'description' => 'FIFA 23 è un videogioco di calcio sviluppato da EA Sports disponibile per PlayStation 4, PlayStation 5, Xbox One, Xbox Series X e Series S, Microsoft Windows, Nintendo Switch e Google Stadia.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/oNoSaY1S__1MRJjpcUdUNJ-bkjRnr9g-FLj81gov8_BlohFvhyS-xjVs7r6gYnQRt0oauuc0j6ASVPDQlUOmBIatXJ_W5PyFMIcnj0iQ2A',
                'video_trailer' => 'https://www.youtube.com/watch?v=0tIW1X2dv0c&ab_channel=EASPORTSFIFA'
            ],
            [
                'title' => 'Elden Ring',
                'image' => 'https://lh3.googleusercontent.com/vX6HUT8pJuQlb7SAbwJBp9zGzHa6B2T1YA3flwMIbu7uvrSTaVYhqbHxAoK58d8oLn2inDHmesU5bjgifpA450NFCMyyjIJs8v6SyEYV1A',
                'description' => 'In the game, the player character is a Tarnished, one of a group of exiles from the Lands Between who are summoned back after the Shattering. As one of the Tarnished.
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/zxQh4KOhxzSKotGSitanNfRZP6r_BQOYbi7DzjEW26a6Lh8F_heOtwnLBokKUS0GXRELkloy8-KZIT5lIxQDPzAyobMOKRJ1MKFMKamsAw',
                'video_trailer' => 'https://www.youtube.com/watch?v=PouQ1NTgavE&ab_channel=FedericoCodaProduction'
            ],
            [
                'title' => 'Good of War ragnarok',
                'image' => 'https://lh3.googleusercontent.com/zf8L-T1IY6gnuQQYD-OBdWcvG7wEd6dwLHTOXllUPiYzW3r12qnmCI3KPqfqokLi7J9jItg6rW9dzquDji1s8as4oLoRpzEu56H91SzQ',
                'description' => 'God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. It was released worldwide on November 9, 2022, for the PlayStation 4 and PlayStation 5
                ',
                'published_year' => '2022',
                'banner_image' => 'https://lh3.googleusercontent.com/5Ua-Wnz9QMHRIaFg8fzKbpSmSaENaaLs_TriNZuoBm68VWonVhKr88EJyqvF4wvtk9-bbPeW37hjtGo5jU1yyZVOgvMCYAmc3YdrLIE',
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
