<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'postcode' => $faker->postcode,
        'phone' => $faker->phoneNumber,
        'available' => $faker->boolean($chanceOfGettingTrue = 50),
        'alerts' => $faker->boolean($chanceOfGettingTrue = 50),
        'last_called' => $faker->date('Y-m-d H:i:s', 'now'),
        'previous_job_state' => 1,
        'previous_contractor' => $faker->company,
        'job_id' => $faker->biasedNumberBetween(1, 50, 'sqrt'),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
