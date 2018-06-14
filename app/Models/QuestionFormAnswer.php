<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionFormAnswer
 * @package App\Models
 */
class QuestionFormAnswer extends Model
{
    protected $fillable = [
        'question_id',
        'question_form_id',
        'text_content',
        'is_correct_answer',
    ];

    protected $casts = [
        'is_correct_answer' => 'boolean',
    ];
}
