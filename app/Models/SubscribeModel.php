<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscribeModel extends Model
{
    protected $table = 'subscribers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'email',
        'created_at',
    ];

    // get user data
    public function addNewSubscriber($data)
    {
        return $this->insert($data);
    }
    public function checkEmailExists($email)
    {
        return $this->where('email',$email)->get()->getRowArray();
    }

}
