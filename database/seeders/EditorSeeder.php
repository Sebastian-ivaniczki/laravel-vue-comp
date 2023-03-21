<?php

namespace Database\Seeders;

use App\Models\Editor;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $editors = [
            [
                'label' => 'Nintendo',
                'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSiQQm6uWIXXoqCmxHuC04HatunAHYWJvcTVUWTx3TI6rjdSvgipCKPh2AP7mCWgHg6Bc&usqp=CAU'
            ],
            [
                'label' => 'Electronic Arts',
                'url' => 'https://media.contentapi.ea.com/content/dam/eacom/it-it/common/october-ea-ring.png'
            ],
            [
                'label' => 'Activision',
                'url' => 'https://w7.pngwing.com/pngs/457/679/png-transparent-activision-blizzard-video-game-logo-mls-logo-angle-text-logo-thumbnail.png'
            ],
            [
                'label' => 'Ubisoft',
                'url' => 'https://static.miraheze.org/avidwiki/thumb/3/36/Ubisoft_%282021%29.png/725px-Ubisoft_%282021%29.png'
            ],
            [
                'label' => 'SEGA',
                'url' => 'https://logos-world.net/wp-content/uploads/2021/10/Sega-Logo-1975-1982.png'
            ],

        ];
        foreach ($editors as $editor) {
            $newEditor = new Editor();

            $newEditor->label = $editor['label'];
            $newEditor->logo = $editor['url'];

            $newEditor->save();
        }
    }
}
