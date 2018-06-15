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
     * @return array
     */
    public static function types()
    {
        return [
            self::CHECKBOX_TYPE,
            self::RADIO_BUTTON_TYPE,
        ];
    }
}
