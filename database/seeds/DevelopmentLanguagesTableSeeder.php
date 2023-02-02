<?php

use Illuminate\Database\Seeder;

class DevelopmentLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('development_languages')->insert([
            [
                'language_name' => '言語不当'
            ],
            
            [
                'language_name' => 'Apex'
            ],
            
            [
                'language_name' => 'c'
            ],
            
            [
                'language_name' => 'c#'
            ],
            
            [
                'language_name' => 'c++'
            ],
            
            [
                'language_name' => 'Dart'
            ],
            
            [
                'language_name' => 'ElixirGo'
            ],
            
            [
                'language_name' => 'Java'
            ],
            
            [
                'language_name' => 'JavaScript'
            ],
            
            [
                'language_name' => 'Kotlin'
            ],
            
            [
                'language_name' => 'Objective'
            ],
            
            [
                'language_name' => 'Peal'
            ],
            
            [
                'language_name' => 'php'
            ],
            
            [
                'language_name' => 'Python'
            ],
            
            [
                'language_name' => 'R'
            ],
            
            [
                'language_name' => 'Ruby'
            ],
            
            [
                'language_name' => 'Rust'
            ],
            
            [
                'language_name' => 'Scala'
            ],
            
            [
                'language_name' => 'Swift'
            ],
            
            [
                'language_name' => 'TypeScript'
            ],
            
            [
                'language_name' => 'その他'
            ],
        ]);
    }
}
