<?php

namespace App\Controllers\contractor;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\CountryModel;

class Main extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel=new UserModel();
        $this->countryModel=new CountryModel();
        
    }

    private function checkSession()
    {
        if ($this->session->has('isLoggedIn') && $this->session->get('role') != 'contractor') {
            // Redirect to login page if session does not exist
            return false;
        }
        return true;
    }


    public function dashboard()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }
        return view('includes/header').
               view('contractor/dashboard').
               view('includes/footer');  
               
              
    }
}