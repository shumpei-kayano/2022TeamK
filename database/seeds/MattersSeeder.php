<?php

use Illuminate\Database\Seeder;

class MattersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Matter::class, 100)->create();
    }
}
