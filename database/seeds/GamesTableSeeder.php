<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Shouldn't be used as no user is associated in the factory
        //factory(App\Game::class, 10)->create();
    }
}
