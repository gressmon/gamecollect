<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['USA','PAL','JPN','CHN'];

        foreach($values as $value){
            App\Region::create(['code' => $value]);
        }
    }
}
