<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            [
                'prefectures_name' => '北海道'
            ],
            [
                'prefectures_name' => '青森県'
            ],
        ]);
    }
}
