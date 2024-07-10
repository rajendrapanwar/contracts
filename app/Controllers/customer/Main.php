<?php

namespace App\Controllers\customer;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Main extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    private function checkSession()
    {
        if (!$this->session->has('isLoggedIn') && $this->session('role')!='customer' ) {
            // Redirect to login page if session does not exist
            return false;
        }
        return true;
    }

    public function dashboard()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/customer_login')->send();
        }
        return view('includes/header').
               view('customer/dashboard').
               view('includes/footer');         
    }

    public function profile()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/customer_login')->send();
        }
        return view('includes/header').
               view('customer/profile/index').
               view('includes/footer');  
    }

    public function chat()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/customer_login')->send();
        }
        return view('includes/header').
               view('customer/chat').
               view('includes/footer');  
    }
}