<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'password',
    ];

    // get user data
    public function getUserDetailsById($id)
    {
        return $this->where('id', $id)->get()->getRowArray();
    }
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->get()->getRowArray();
    }
    // update profile
    public function updateProfile($id, $data)
    {
        return $this->where('id', $id)->set($data)->update();
    }
}
