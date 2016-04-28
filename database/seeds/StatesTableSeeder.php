<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['Complete','Digital','Incomplete','Shipped','Want','Loose'];

        foreach($values as $value){
            App\State::create(['code' => strtolower($value), 'name' => $value]);
        }
    }
}
