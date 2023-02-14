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
        
                [
                    'name' => '大原かいと',
                    'email' => 'kaito@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原雅',
                    'email' => 'miyabi@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原虎之介',
                    'email' => 'tora@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原弘太郎',
                    'email' => 'koutaro@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原郁人',
                    'email' => 'ikuto@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
        
                [
                    'name' => '大原健太',
                    'email' => 'kenta@ac.jp',
                    'email_verified_at' => now(),
                    'password' => \Hash::make('o-hara'),
                    'remember_token' => Str::random(10),
                    'check' => '0',
                ],
                
            ]);

        factory(App\User::class, 8)->create();
    }
}
