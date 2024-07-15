<?php

namespace App\Controllers\customer;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Projects extends BaseController
{
    public function add_project()
    {
        return view('includes/header').
               view('customer/projects/add_project').
               view('includes/footer');
    }
}