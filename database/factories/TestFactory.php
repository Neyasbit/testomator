<?php

use App\Models\Test;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Test::class, function (Faker $faker) {
    $theme = factory(\App\Models\Theme::class)->create();

    return [
        'name' => $faker->unique()->word,
        'description' => $faker->sentence,
        'theme_id' => $theme->getKey(),
    ];
});
