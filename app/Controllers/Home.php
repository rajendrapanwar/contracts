<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('includes/header').
               view('index').
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
}
