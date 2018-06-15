<?php

use App\Models\QuestionFormAnswer;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(QuestionFormAnswer::class, function (Faker $faker) {
    $questionForm = factory(\App\Models\QuestionForm::class)->create();

    return [
        'question_id' => $questionForm->question->getKey(),
        'question_form_id' => $questionForm->getKey(),
        'text_content' => $faker->word,
        'is_correct_answer' => $faker->boolean,
    ];
});
