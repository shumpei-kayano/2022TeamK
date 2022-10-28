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
        DB::table('ranks')->insert([
            [
                'rank' => 1,
                'requirement_experience' => 20,
            ],
            [
                'rank' => 2,
                'requirement_experience' => 200,
            ],
            [
                'rank' => 3,
                'requirement_experience' => 2000,
            ],
            [
                'rank' => 4,
                'requirement_experience' => 20000,
            ],
            [
                'rank' => 5,
                'requirement_experience' => 200000,
            ],
            [
                'rank' => 6,
                'requirement_experience' => 2000000,
            ],
            [
                'rank' => 7,
                'requirement_experience' => 20000000,
            ],
        ]);
    }
}
