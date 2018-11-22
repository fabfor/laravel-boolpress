<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
          DB::table('authors')->insert([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName,
            'twitter_handle' => $faker->lexify('@******'),
          ]);
        }
    }
}
