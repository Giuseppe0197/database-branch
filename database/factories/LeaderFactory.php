<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'assumption' => $faker -> date(),
        'wage' => $faker -> numberBetween(1000, 3000),
        'team_name' => $faker -> word()
    ];
});
