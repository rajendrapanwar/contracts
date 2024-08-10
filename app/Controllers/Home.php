<?php

namespace App\Controllers;
use App\Models\SubscribeModel;
class Home extends BaseController
{
    public function __construct(){
        $this->subscribeModel=new SubscribeModel();
    }
    public function index()
    {
        $data['latest_projects']=getLatestProjects();
        return view('includes/header').
               view('index',$data).
               view('includes/footer');
    }

    public function about()
    {
        return view('includes/header').
               view('about').
               view('includes/footer');
    }
    
    public function contact()
    {
        return view('includes/header').
               view('contact').
               view('includes/footer');
    }
    public function subscribe()
    {
        $email=$this->request->getPost('email');
        $data=[
            'email'=>$email
        ];

        // check if already exists
        $checkEmailExists=$this->subscribeModel->checkEmailExists($email);
        if($checkEmailExists){
            return redirect()->back()->with('info_message', 'You are already subscribed! Thank you for being a part of our community. We will continue to keep you updated with our latest content and offers.');
        }

        // Add new subscriber
        $addNewSubscriber=$this->subscribeModel->addNewSubscriber($data);
        if($addNewSubscriber){
            return redirect()->back()->with('success_message', 'Thank you for subscribing! You have successfully joined our community. Stay tuned for the latest updates, exclusive content, and special offers delivered straight to your inbox.');
        }
        else{
            return redirect()->back()->with('error_message', 'Server Error! Please try after some time');
        }   
    }
    public function searchProjects(){
        return view('includes/header').
               view('index').
               view('includes/footer');
    }
}
