<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
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
                    'id' => 1,
                    'rank' => 1,
                    'requirement_experience' => 100,
                ],
                [
                    'id' => 2,
                    'rank' => 2,
                    'requirement_experience' => 1000,
                ],
                [
                    'id' => 3,
                    'rank' => 3,
                    'requirement_experience' => 10000,
                ],
                [
                    'id' => 4,
                    'rank' => 4,
                    'requirement_experience' => 100000,
                ],
                [
                    'id' => 5,
                    'rank' => 5,
                    'requirement_experience' => 1000000,
                ],
                [
                    'id' => 6,
                    'rank' => 6,
                    'requirement_experience' => 10000000,
                ],
                [
                    'id' => 7,                    
                    'rank' => 7,
                    'requirement_experience' => 100000000,
                ],
            ]);
    }
}
