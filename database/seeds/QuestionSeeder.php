<?php

use App\Models\Question;
use App\Models\QuestionForm;
use Illuminate\Database\Seeder;

/**
 * Class QuestionSeeder
 */
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = factory(Question::class, 10)->create();

        foreach ($questions as $question) {
            $questionForm = factory(QuestionForm::class)->create();
            factory(\App\Models\QuestionFormAnswer::class, random_int(2, 6))->create([
                'question_id' => $question->getKey(),
                'question_form_id' => $questionForm->getKey(),
            ]);
        }
    }
}
