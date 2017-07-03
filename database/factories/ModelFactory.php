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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Kantoor::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'province' => $faker->state,
        'postalcode' => "8500",
        'city' => $faker->city,
        'phone' => $faker->phonenumber,
        'fax' => $faker->phonenumber,
        'morning_open_from' => '08:30',
        'morning_open_till' => '12:00',
        'afternoon_open_from' => '13:30',
        'afternoon_open_till' => '17:30'
    ];
});
