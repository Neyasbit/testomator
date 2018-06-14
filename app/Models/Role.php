<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

/**
 * Class Role
 * @package App\Models
 */
class Role extends EntrustRole
{
    const ADMIN_ROLE = 'admin';
    const USER_ROLE = 'user';

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];
}
