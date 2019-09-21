<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Job;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'local_union'       => $faker->randomDigit,
        'contractor'        => $faker->company,
        'company'           => $faker->company,
        'state_id'          => 1,
        'work_description'  => $faker->text,
        'superintendent'    => $faker->name,
        'slug'              => $faker->uuid
    ];
});
