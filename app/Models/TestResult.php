<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TestResult
 * @package App\Models
 */
class TestResult extends Model
{
    const CREATED_STATUS = 'created';
    const IN_PROGRESS_STATUS = 'in_progress';
    const FINISHED = 'finished';

    protected $fillable = [
        'test_id',
        'user_id',
        'status',
        'answered_questions_count',
        'correct_answers_count',
    ];

    /**
     * @return array
     */
    public static function statuses()
    {
        return [
            self::CREATED_STATUS,
            self::IN_PROGRESS_STATUS,
            self::FINISHED,
        ];
    }
}
