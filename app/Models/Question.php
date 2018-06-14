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
}
