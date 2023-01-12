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
                    'rank' => 'E',
                    'requirement_experience' => 100,
                ],
                [
                    'id' => 2,
                    'rank' => 'D',
                    'requirement_experience' => 1000,
                ],
                [
                    'id' => 3,
                    'rank' => 'C',
                    'requirement_experience' => 10000,
                ],
                [
                    'id' => 4,
                    'rank' => 'B',
                    'requirement_experience' => 100000,
                ],
                [
                    'id' => 5,
                    'rank' => 'A',
                    'requirement_experience' => 1000000,
                ],
                [
                    'id' => 6,
                    'rank' => 'S',
                    'requirement_experience' => 10000000,
                ],
                [
                    'id' => 7,                    
                    'rank' => 'SS',
                    'requirement_experience' => 100000000,
                ],
            ]);
    }
}
