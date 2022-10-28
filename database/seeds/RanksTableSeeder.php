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
        $params = 
            [
                'rank' => 1,
                'requirement_experience' => ,
            ];
            DB::table('ranks')->insert($params);
    }
}
