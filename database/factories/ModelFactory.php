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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Store::class, function (Faker\Generator $faker) {
    return [
        'store_name' => $faker->name,
        'store_description' => $faker->paragraph,
        'user_id' => rand(1, 5),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'product_name' => $faker->name,
        'product_description' => $faker->paragraph,
        'user_id' => rand(1, 5),
        'store_id' => rand(1, 30),
    ];
});
