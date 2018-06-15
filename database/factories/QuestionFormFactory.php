<?php

use App\Models\QuestionForm;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(QuestionForm::class, function (Faker $faker) {
    $question = factory(\App\Models\Question::class)->create();

    return [
        'type' => $faker->randomElement(QuestionForm::types()),
        'question_id' => $question->getKey(),
    ];
});
