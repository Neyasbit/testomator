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
