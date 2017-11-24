<?php

use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 1; $i < $limit; $i++) {
            DB::table('songs')->insert([
                'link' => $faker->url,
                'image_cover' => $faker->imageUrl,
                'lyric' => $faker->paragraph,
                'description' => $faker->paragraph,
                'rate_point' => '0',
                'genre_id' => rand(1,6),
                'singer_id' => rand(1,10),
                'is_hot' => '0',
            ]);
        }
    }
}
