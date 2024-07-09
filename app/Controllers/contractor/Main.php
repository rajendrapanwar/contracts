<?php

namespace App\Controllers\contractor;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Main extends BaseController
{
    public function dashboard()
    {
        return view('contractor/dashboard');
               
              
    }
}