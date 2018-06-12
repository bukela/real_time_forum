<?php

use App\User;
use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    $title = $faker->sentence(); // definise se kao var da bi mogao da se odradi slug
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'category_id' => function() {
            return Category::all()->random(); // ide kroz funkciju da bi pokupio realne id-jeve, a kod user_id isto tako
        },
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
