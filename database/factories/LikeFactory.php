<?php

use App\User;
use App\Model\Like;
use Faker\Generator as Faker;

$factory->define(App\Model\Like::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
