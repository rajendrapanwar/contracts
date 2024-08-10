<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
class Auth extends BaseController
{

    public function __construct(){
        $this->userModel=new UserModel();
        $this->session = \Config\Services::session();
    }
    public function logout()
    {
        
        session_destroy();
        return redirect()->to('/');
    }
    public function forgotPassword()
    {
        return view('includes/header') .
            view('customer/auth/forgot-password') .
            view('includes/footer');
    }
    public function forgotPasswordPost()
    {
       $email_address=$this->request->getPost('email');
       $data['user']=$this->userModel->getUserByEmail($email_address);
       if(!$data['user']){

       }
       else{


            $id=$data['user']['id'];

            $link=base_url('reset-password').'/'.base64_encode($id).'/'.base64_encode($email_address);

            $title="Forgot Password";
            $content="<b>Hi ".$data['user']['first_name'].",</b><br>
            <p>We received a request to reset your password. To proceed, please click the link below to create a new password for your account:</p><br>
            <a href=".$link." target='_blank'>[Reset Password Link]</a><br>
            <p>If you did not request a password reset, please disregard this email. For security reasons, the link will expire in [Time Limit, e.g., 30 minutes]. If you have any questions or need further assistance, please contact our support team.</p>";

            echo getEmailTemplate($title,$content);
            die("ASdf");
       }
    }

}
