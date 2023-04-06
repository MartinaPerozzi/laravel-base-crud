<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $song = new Song;

        $song->title = 'Bohemian Rhapsody';
        $song->album = 'A Night at the Opera';
        $song->author = 'Queen';
        $song->editor = 'Roy Thomas Baker';
        $song->length = 09.00;
        $song->poster = "https://upload.wikimedia.org/wikipedia/it/8/8b/BohemianRhapsody.jpg";

        $song->save();

        $song = new Song;

        $song->title = 'For Now I Am Winter';
        $song->album = 'For Now I Am Winter';
        $song->author = 'Ólafur Arnalds';
        $song->editor = 'Erased Tapes Records';
        $song->length = 05.09;
        $song->poster = "https://picsum.photos/200/200";

        $song->save();

        for ($i = 0; $i < 20; $i++) {

            $song = new Song;

            $song->title = $faker->streetName();
            $song->album = $faker->streetName();
            $song->author = $faker->firstName();
            $song->editor = $faker->company();
            $song->length = $faker->randomFloat(2, 1, 50);
            $song->poster = "https://picsum.photos/200/200";

            $song->save();
        };
    }
}
