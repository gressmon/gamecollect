<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Game::class, function (Faker\Generator $faker) {
    $games = ['Final Fantasy', 'Dark Souls', 'Super Mario Bros', 'Doom'];

    return [
        'name' => $games[array_rand($games)].' '.rand(1,5),
        'console_id' => App\Console::orderByRaw("RAND()")->first()->id,
        'region_id' => App\Region::orderByRaw("RAND()")->first()->id,
        'state_id' => App\State::orderByRaw("RAND()")->first()->id,
        'completion_id' => App\Completion::orderByRaw("RAND()")->first()->id,
    ];
});
