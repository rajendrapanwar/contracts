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
    public function profile()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }

     
        $id=session('user_id');
        $data['user']=$this->userModel->getUserDetailsById($id);
        $data['countries']=$this->countryModel->getAllCountries();
        // echo "<pre>";
        // print_r($_SESSION);

        // die;
        return view('includes/header').
               view('contractor/profile/index',$data).
               view('includes/footer');  
    }

    public function chat()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }
        return view('includes/header').
               view('contractor/chat').
               view('includes/footer');  
    }
}