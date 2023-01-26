<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    $int = 1;
    return [
        'user_id' => $int++,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'tel' => $faker->phoneNumber(),
        'educational_background' => '大原簿記公務員専門学校大分校',
        'development_language_id1' => rand(1,25),
        'development_year1' => rand(1,4),
        'development_language_id2' => rand(1,25),
        'development_year2' => rand(1,4),
        'development_language_id3' => rand(1,25),
        'development_year3' => rand(1,4),
        'development_language_id4' => rand(1,25),
        'development_year4' => rand(1,4),
        'self_pr' => $faker->realText(),
        'birthday' => now(),
    ];
});
