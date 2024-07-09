<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'firs_tname',
        'last_name',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'password',
    ];
}
