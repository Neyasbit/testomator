<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * @package App\Models
 */
class Question extends Model
{
    protected $fillable = [
        'text_content',
        'test_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function form()
    {
        return $this->hasOne(QuestionForm::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formAnswers()
    {
        return $this->hasMany(QuestionFormAnswer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    /**
     * @return string
     */
    public function getTypeAttribute()
    {
        return $this->form->type;
    }

    /**
     * @return string
     */
    public function getDisplayTypeAttribute()
    {
        return $this->form->display_type;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|QuestionFormAnswer[]
     */
    public function getCorrectAnswersAttribute()
    {
        return $this->formAnswers()->where('is_correct_answer', true)->get();
    }
}
