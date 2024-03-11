<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phonebook;
use Faker\Generator as Faker;

$factory->define(Phonebook::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
