<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Job;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'local_union'           => $faker->randomDigit,
        'job_notification_date' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        'contractor'            => $faker->company,
        'company'               => $faker->company,
        'state_id'              => 1,
        'work_description'      => $faker->text,
        'superintendent'        => $faker->name,
        'start_date'            => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        'slug'                  => $faker->uuid
    ];
});
