<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionForm
 * @package App\Models
 */
class QuestionForm extends Model
{
    const CHECKBOX_TYPE = 'checkbox';
    const RADIO_BUTTON_TYPE = 'radio_button';

    protected $fillable = [
        'type',
        'question_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(QuestionFormAnswer::class);
    }

    /**
     * @return string
     */
    public function getDisplayTypeAttribute()
    {
        return self::types()[$this->type];
    }

    /**
     * @return array
     */
    public static function types()
    {
        return [
            self::CHECKBOX_TYPE => 'Несколько правильных ответов',
            self::RADIO_BUTTON_TYPE => 'Один правильный ответ',
        ];
    }
}
