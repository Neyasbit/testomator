<?php

use App\Models\Question;
use App\Models\QuestionForm;
use App\Models\QuestionFormAnswer;
use App\Models\Test;
use App\Models\Theme;
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
     * @throws Exception
     */
    public function run()
    {
        $theme = factory(Theme::class)->create();
        $test = factory(Test::class)->create([
            'theme_id' => $theme->getKey(),
        ]);

        $questions = factory(Question::class, 10)->create([
            'test_id' => $test->getKey(),
        ]);

        foreach ($questions as $question) {
            $questionForm = factory(QuestionForm::class)->create([
                'question_id' => $question->getKey(),
            ]);

            if ($questionForm->type == QuestionForm::RADIO_BUTTON_TYPE) {
                $this->createWithSingeCorrectAnswer($questionForm, $question);
            } else {
                $this->createWithSomeCorrectAnswers($questionForm, $question);
            }
        }

        Theme::where('id', '!=', $theme->getKey())->delete();
    }

    /**
     * @param QuestionForm $questionForm
     * @param Question $question
     */
    private function createWithSingeCorrectAnswer($questionForm, $question)
    {
        factory(QuestionFormAnswer::class, random_int(1, 3))->create([
            'question_id' => $question->getKey(),
            'question_form_id' => $questionForm->getKey(),
            'is_correct_answer' => false,
        ]);

        factory(QuestionFormAnswer::class)->create([
            'question_id' => $question->getKey(),
            'question_form_id' => $questionForm->getKey(),
            'is_correct_answer' => true,
        ]);
    }

    /**
     * @param QuestionForm $questionForm
     * @param Question $question
     */
    private function createWithSomeCorrectAnswers($questionForm, $question)
    {
        factory(QuestionFormAnswer::class, random_int(1, 3))->create([
            'question_id' => $question->getKey(),
            'question_form_id' => $questionForm->getKey(),
            'is_correct_answer' => false,
        ]);

        factory(QuestionFormAnswer::class, random_int(2, 4))->create([
            'question_id' => $question->getKey(),
            'question_form_id' => $questionForm->getKey(),
            'is_correct_answer' => true,
        ]);
    }
}
