<?php
use Faker\Generator as Faker;

$factory->define(App\UserAction::class, function (Faker $faker) {
    return [
        "user_id" => factory('App\User')->create(),
        "action" => $faker->name,
        "action_model" => $faker->name,
        "action_id" => $faker->randomNumber(2),
    ];
});
