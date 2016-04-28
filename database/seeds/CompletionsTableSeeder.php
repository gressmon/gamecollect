<?php

use Illuminate\Database\Seeder;

class CompletionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['Unplayed','Started','Finished','Unfinishable'];

        foreach($values as $value){
            App\Completion::create(['code' => strtolower($value), 'name' => $value]);
        }
    }
}
