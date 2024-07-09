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
}
