<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          'id' => '1',
          'name' => 'Pop'
        ],
        [
          'id' => '2',
          'name' => 'Rock'
        ],
        [
          'id' => '3',
          'name' => 'Hip Hop'
        ],
        [
          'id' => '4',
          'name' => 'R&B'
        ],
        [
          'id' => '5',
          'name' => 'Rap'
        ]
      ]);
    }
}
