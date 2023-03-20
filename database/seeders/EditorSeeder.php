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
        for ($i = 0; $i < 5; $i++) {
            $editor = new Editor();

            $editor->label = $faker->word();
            $editor->logo = $faker->url();

            $editor->save();
        }
    }
}
