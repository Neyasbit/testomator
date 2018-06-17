<?php

namespace App\Services\Question;

use App\Models\Question;
use App\Models\QuestionForm;
use App\Models\QuestionFormAnswer;
use Illuminate\Http\Request;

/**
 * Class CrudService
 * @package App\Services\Question
 */
class CrudService
{
    /**
     * @param Request $request
     * @param Question $question
     * @throws \Throwable
     */
    public function update(Request $request, Question $question)
    {
        \DB::transaction(function () use ($request, $question) {
            $question->update(['text_content' => $request->get('text_content')]);
            $formType = $request->get('form_type');
            $this->checkAnswers($formType, $request->get('answers'));
            $question->form->update(['type' => $formType]);
            $this->saveAnswers($question, $request->get('answers'));
        });
    }

    /**
     * @param $formType
     * @param $answers
     * @throws \Exception
     */
    private function checkAnswers($formType, $answers)
    {
        $correctAnswersCount = 0;

        foreach ($answers as $answer) {
            if ($answer['is_correct_answer']) {
                $correctAnswersCount++;
            }
        }

        if ($formType == QuestionForm::RADIO_BUTTON_TYPE and $correctAnswersCount > 1) {
            throw new \Exception('Не может быть несколько правильных ответов');
        }

        if ($correctAnswersCount < 1) {
            throw new \Exception('Должен быть как минимум один правильный ответ');
        }
    }

    /**
     * @param Question $question
     * @param $answers
     * @throws \Exception
     */
    private function saveAnswers(Question $question, $answers)
    {
        QuestionFormAnswer::whereNotIn('id', collect($answers)->pluck('id')->toArray())->delete();

        foreach ($answers as $answer) {
            if (empty($answer['text_content'])) {
                throw new \Exception('Текст ответа не может быть пустым');
            }

            if (isset($answer['id'])) {
                $question->formAnswers()->where('id', $answer['id'])->update([
                    'text_content' => $answer['text_content'],
                    'is_correct_answer' => $answer['is_correct_answer'],
                ]);
            } else {
                $question->formAnswers()->create([
                    'question_form_id' => $question->form->getKey(),
                    'text_content' => $answer['text_content'],
                    'is_correct_answer' => $answer['is_correct_answer'],
                ]);
            }
        }
    }
}
