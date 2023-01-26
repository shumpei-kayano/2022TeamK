<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matter;
use Faker\Generator as Faker;

$factory->define(Matter::class, function (Faker $faker) {
    return [
        'prefectures_id' => rand(1,47),
        'matter_name' => 'テスト',
        'development_language_id1' => rand(1,25),
        'development_language_id2' => rand(1,25),
        'development_language_id3' => rand(1,25),
        'development_language_id4' => rand(1,25),
        'occupation_id' => rand(1,26),
        'remarks' => 'テスト',
        'success_fee' => rand(1,50)*10000,
        'deadline' => now(),
        'rank' => rand(1,7),
        'number_of_person' => rand(1,5),
        'tel' => $faker->phoneNumber(),
        'user_id' => rand(1,10),
        
    ];
});
