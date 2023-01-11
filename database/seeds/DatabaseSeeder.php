<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(RanksTableSeeder::class);
        // $this->call(PrefecturesTableSeeder::class);
        // $this->call(OccupationsTableSeeder::class);
        // $this->call(RankOfDifficultiesTableSeeder::class);
        // $this->call(DevelopmentLanguagesTableSeeder::class);
        $this->call(DevelopmentLanguage2sSeeder::class);
        $this->call(DevelopmentLanguage3sSeeder::class);
        $this->call(DevelopmentLanguage4sSeeder::class);
        $this->call(DevelopmentLanguage5sSeeder::class);
    }
}
