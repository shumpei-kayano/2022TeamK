<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $i = rand(0,1);
    $array = [$faker->name, $faker->company];
    return [
        'name' => $array[$i],
        // 'name' => $faker->randomElement($array = [$faker->name, $faker->company]),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => \Hash::make('o-hara'), // password
        'remember_token' => Str::random(10),
        'check' => $i,
        // 'check' => $faker->randomElement($array = [0, 1]),
    ];
    // DB::table('users')->insert([
    //     [
    //         'name' => '大原商事',
    //         'email' => 'o-hara@ac.jp',
    //         'email_verified_at' => '2023-01-11 10:44:01',
    //         'password' => \Hash::make('o-hara'),
    //         'check' => '1',
    //     ],

    //     [
    //         'name' => '大原花子',
    //         'email' => 'hanako@ac.jp',
    //         'email_verified_at' => '2023-01-11 10:44:01',
    //         'password' => \Hash::make('o-hara'),
    //         'check' => '',
    //     ],
        
    // ]);
});
