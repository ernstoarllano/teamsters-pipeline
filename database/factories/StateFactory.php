<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\State;

$factory->define(State::class, function (Faker $faker) {
    return [
        'id'    => 1,
        'state' => 'CA',
        'slug'  => 'california'
    ];
});
