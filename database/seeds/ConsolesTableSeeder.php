<?php

use Illuminate\Database\Seeder;

class ConsolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            'wiiu' => 'Wii U',
            '3ds' => '3DS',
            'vita' => 'PlayStation Vita',
            'ps4' => 'PlayStation 4'
        ];

        foreach($values as $key => $value){
            App\Console::create(['code' => $key, 'name' => $value]);
        }
    }
}
