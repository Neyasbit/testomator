<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Theme
 * @package App\Models
 */
class Theme extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
