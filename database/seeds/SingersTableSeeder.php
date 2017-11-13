<?php

use Illuminate\Database\Seeder;

class SingersTableSeeder extends Seeder
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
        for ($i = 0; $i < $limit; $i++) {
            DB::table('singers')->insert([
                'name' => $faker->name,
                'gender' => rand(0,1),
                'country' => $faker->country,
                'description' => str_random(20),
            ]);
        }
    }
}
