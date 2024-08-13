<?php

namespace App\Controllers\customer;

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
        if (session('isLoggedIn') && session('role') != 'customer') {
            
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

     
        $id=session('user_id');
        $data['user']=$this->userModel->getUserDetailsById($id);
        $data['countries']=$this->countryModel->getAllCountries();
        // echo "<pre>";
        // print_r($_SESSION);

        // die;
        return view('includes/header').
               view('customer/profile/index',$data).
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