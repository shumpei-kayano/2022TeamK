<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => '大原太郎',
                    'email' => 'o-hara@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原花子',
                    'email' => 'hanako@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
                
            ]);

        factory(App\User::class, 3)->create();
    }
}
