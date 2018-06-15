<?php

use App\Models\Question;
use App\Models\Test;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Question::class, function (Faker $faker) {
    $test = factory(Test::class)->create();

    return [
        'text_content' => $faker->sentence,
        'test_id' => $test->getKey(),
    ];
});
