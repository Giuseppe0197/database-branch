<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'description' => $faker -> lastName(),
        'priority' => $faker -> numberBetween(1, 10),
        'date_start' => $faker -> date(),
        'date_end' => $faker -> date()
    ];
});
