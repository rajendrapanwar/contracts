<?php

namespace App\Controllers\customer;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        return view('includes/header').
               view('customer/auth/login').
               view('includes/footer');
    }

    public function login_post()
    {
        return view('includes/header').
               view('customer/auth/login').
               view('includes/footer');
    }

    public function register()
    {
        return view('includes/header').
               view('customer/auth/register').
               view('includes/footer');
    }
    public function register_post()
    {
        // Check if form is submitted
        if ($this->request->getMethod() === 'post') {
            // Validate form input data
            $validationRules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
                'country' => 'required',
                'phone' => 'permit_empty|numeric',
                'email' => 'required|valid_email|is_unique[users.email]', // Adjust table name if necessary
                'username' => 'required|alpha_numeric|min_length[3]|is_unique[users.username]', // Adjust table name if necessary
                'password' => 'required|min_length[8]',
                'confirm_password' => 'matches[password]'
            ];

            if (!$this->validate($validationRules)) {
                // If validation fails, return to the form with errors
                return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
            }

            // If validation passes, proceed to save the data (example only, adjust as per your application logic)
            $userData = [
                'firstname' => $this->request->getPost('firstname'),
                'lastname' => $this->request->getPost('lastname'),
                'address' => $this->request->getPost('address'),
                'city' => $this->request->getPost('city'),
                'state' => $this->request->getPost('state'),
                'zip' => $this->request->getPost('zip'),
                'country' => $this->request->getPost('country'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                // Add any additional fields you want to save
            ];

            // Example: save data to database using Model
            $userModel = new \App\Models\UserModel(); // Adjust model name as per your application
            $userModel->save($userData);

            // Optionally, you can redirect to a success page or show a success message
            return redirect()->to('/success-page')->with('success_message', 'Registration successful!');
        }
    }
}
