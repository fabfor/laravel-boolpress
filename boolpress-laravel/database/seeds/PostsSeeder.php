<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200 ; $i++) {

          DB::table('posts')->insert([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $faker->paragraph($nbSentences = 30, $variableNbSentences = true),
            'author_id' =>$faker->numberBetween($min = 1, $max = 20),
            'category_id' => $faker->numberBetween($min = 1, $max = 2),
            'created_at' => $faker->dateTime()
          ]);
        }
    }
}
