<?php

namespace App\Controllers\customer;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\CountryModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->countryModel = new CountryModel();
    }
    public function login()
    {
        
        // session_destroy();
        return view('includes/header') .
            view('customer/auth/login') .
            view('includes/footer');
    }

    public function login_post()
    {
        $validationRules = [
            'email' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, return to login with errors
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // Get input data
        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $username)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            // Invalid credentials
            return redirect()->back()->withInput()->with('login_error', 'Invalid username or password');
        }

        // Valid credentials, set user session
        $session = session();
        $session->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            'username' => $user['first_name'] . ' ' . $user['last_name'],
            'role' => $user['role'],
            // Add more user data to session as needed
        ]);

        // Redirect to dashboard or desired page
        return redirect()->to('customer-dashboard')->with('success_message', 'Logged in successfully');

    }

    public function register()
    {
        $data['countries']=$this->countryModel->getAllCountries();
        return view('includes/header') .
            view('customer/auth/register',$data) .
            view('includes/footer');
    }
    public function register_post()
    {

        // Check if form is submitted

        // Validate form input data
        $validationRules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'permit_empty|numeric',
            'email' => 'required|valid_email|is_unique[users.email]', // Adjust table name if necessary
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, return to the form with errors
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // If validation passes, proceed to save the data (example only, adjust as per your application logic)
        $userData = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'address' => $this->request->getPost('address'),
            'city' => $this->request->getPost('city'),
            'country' => $this->request->getPost('country'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'customer'
        ];


        // Example: save data to database using Model
        $userModel = new UserModel();
        $userModel->save($userData);

        // Optionally, you can redirect to a success page or show a success message
        return redirect()->to('customer_login')->with('success_message', 'Registration successful!');

    }

    // channge password
    public function changePassword()
    {
        $current_password = $this->request->getPost('current_password');
        $new_password = $this->request->getPost('new_password');
        $confirm_password = $this->request->getPost('confirm_password');

        $id = session('user_id');

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
                return redirect()->to('customer-profile')->with('success_message', 'Password Changed Successfully');
            } else {
                return redirect()->to('customer-profile')->with('error_message', 'Something went wrong! Please try after sometime');
            }
        }
    }
    public function updateProfile()
    {
        // print_r($_FILES);die;
        $id=session('user_id');
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
            return redirect()->to('customer-profile')->with('success_message', 'Profile Updated Successfully');
        } else {
            return redirect()->to('customer-profile')->with('error_message', 'Something went wrong! Please try after sometime');
        }

        
    }
}
