<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Job;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'local_union'           => $faker->randomDigit,
        'job_notification_date' => $faker->date('Y-m-d H:i:s', 'now'),
        'contractor'            => $faker->company,
        'company'               => $faker->company,
        'state_id'              => $faker->numberBetween(1, 50),
        'work_description'      => $faker->text,
        'superintendent'        => $faker->name,
        'start_date'            => $faker->date('Y-m-d H:i:s', 'now'),
        'pay'                   => $faker->randomFloat(2, 1999, 4999),
        'slug'                  => $faker->uuid
    ];
});
