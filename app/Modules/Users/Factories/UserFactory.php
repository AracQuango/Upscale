<?php

use Upscale\Modules\Users\Models\User;
use Faker\Generator as Faker;


$factory->define(User::class, function (Faker $faker) {

    static $password;

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => password_hash($password ?? 'secret', PASSWORD_DEFAULT),
    ];
});
