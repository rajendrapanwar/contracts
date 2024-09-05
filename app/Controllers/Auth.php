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
    // channge password
    public function changePassword()
    {
        $current_password = $this->request->getPost('current_password');
        $new_password = $this->request->getPost('new_password');
        $confirm_password = $this->request->getPost('confirm_password');

        $id = session('user_id');
        $role=session('role');
        $data['user'] = $this->userModel->getUserDetailsById($id);
        $checkPassword = password_verify($current_password, $data['user']['password']);
        if (!$checkPassword) {
            return redirect()->to('customer-profile')->with('error_message', 'Current Password Is Incorrect');
        } else {
            $data=[
                'password'=>password_hash($new_password,PASSWORD_BCRYPT)
            ];
    

            $updateProfile = $this->userModel->updateProfile($id, $data);
            if ($updateProfile) {
                return redirect()->to($role.'-profile')->with('success_message', 'Password Changed Successfully');
            } else {
                return redirect()->to($role.'-profile')->with('error_message', 'Something went wrong! Please try after sometime');
            }
        }
    }
    public function updateProfile()
    {
        // print_r($_FILES);die;
        $id=session('user_id');
        $role=session('role');
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $phone = $this->request->getPost('phone');
        $country = $this->request->getPost('country');
        $city = $this->request->getPost('city');
        $address = $this->request->getPost('address');

        if($this->request->getFile('profile_image')!=''){

            $file = $this->request->getFile('profile_image');
            $newName = $file->getRandomName();
            $uploadPath = ROOTPATH . 'assets/img/users';
            $file->move($uploadPath, $newName);
            $data=[
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone'=>$phone,
                'country'=>$country,
                'city'=>$city,
                'address'=>$address,
                'profile_image'=>$newName
            ];
        }else {

            $data=[
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone'=>$phone,
                'country'=>$country,
                'city'=>$city,
                'address'=>$address
            ];
        }
        
        $updateProfile = $this->userModel->updateProfile($id, $data);
        if ($updateProfile) {
            return redirect()->to($role.'-profile')->with('success_message', 'Profile Updated Successfully');
        } else {
            return redirect()->to($role.'-profile')->with('error_message', 'Something went wrong! Please try after sometime');
        }

        
    }

}
