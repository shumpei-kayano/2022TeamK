<?php

use Illuminate\Database\Seeder;

class RankOfDifficultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rank_of_difficulties')->insert([
            [
                'rank' => 1,
                'max_experience' => 20,
            ],
            [
                'rank' => 2,
                'max_experience' => 200,
            ],
            [
                'rank' => 3,
                'max_experience' => 2000,
            ],
            [
                'rank' => 4,
                'max_experience' => 20000,
            ],
            [
                'rank' => 5,
                'max_experience' => 200000,
            ],
            [
                'rank' => 6,
                'max_experience' => 2000000,
            ],
            [
                'rank' => 7,
                'max_experience' => 20000000,
            ],
        ]);
    }
}
