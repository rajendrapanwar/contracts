<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracts- Online Bidding for Contracts</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/lib/bootstrap.min.css">
    <!-- Icon Link  -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/all.min.css"> 
    <link rel="stylesheet" href="<?=base_url()?>assets/css/line-awesome.min.css"> 
    <link rel="stylesheet" href="<?=base_url()?>assets/css/lib/animate.css"> 

    <!-- Plugin Link -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/lib/slick.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <script src="<?=base_url()?>assets/js/lib/jquery-3.6.0.min.js"></script>
</head>
    <body data-bs-spy="scroll" data-bs-offset="170" data-bs-target=".privacy-policy-sidebar-menu">

        <div class="overlay"></div>
        <div class="preloader">
            <div class="scene" id="scene">
                <input type="checkbox" id="andicator" />
                <div class="cube">
                    <div class="cube__face cube__face--front"><i></i></div>
                    <div class="cube__face cube__face--back"><i></i><i></i></div>
                    <div class="cube__face cube__face--right">
                        <i></i> <i></i> <i></i> <i></i> <i></i>
                    </div>
                    <div class="cube__face cube__face--left">
                        <i></i> <i></i> <i></i> <i></i> <i></i> <i></i>
                    </div>
                    <div class="cube__face cube__face--top">
                        <i></i> <i></i> <i></i>
                    </div>
                    <div class="cube__face cube__face--bottom">
                        <i></i> <i></i> <i></i> <i></i>
                    </div>
                </div>
            </div>
        </div>

    <div class="header">
    <div class="container">
        <div class="header-bottom">
            <div class="header-bottom-area align-items-center">
                <!-- <?php
                // if($_SESSION['user']){
                ?> -->
                <!-- <div class="logo"><a href="<?= base_url('/')?>"><h1 style="font-size: 40px;color: #ffe400;">Build My Home</h1></a></div>
                <ul class="menu">
                    
                        <li>
                            <a href="<?= base_url('/dashboard')?>">Dashboard</a>
                        </li>
                        <li>
                        <a href="<?= base_url('/about')?>">About</a>
                    </li>
                        <li>
                            <a href="<?= base_url('/contact')?>">Contact Us</a>
                        </li>
                        <button class="btn-close btn-close-white d-lg-none"></button>
                </ul> -->
                    <!-- <?php
                    // }else{
                    ?> -->
                     <div class="logo"><a href="<?= base_url('/dashboard')?>"><h1 style="font-size: 40px;color: #ffe400;">Build My Home</h1></a></div>
                <ul class="menu">
                    <li>
                            <a href="<?= base_url('/')?>">Home</a>
                        </li>
                    <li>
                        <a href="<?= base_url('/about')?>">About</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/contact')?>">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?= base_url('login')?>">Login</a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url('customer_login')?>">Customer</a></li>
                            <li><a href="<?= base_url('contractor_login')?>">Contractor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Register</a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url('customer_register')?>">Customer</a></li>
                            <li><a href="<?= base_url('contractor_register')?>">Contractor</a></li>
                            
                        </ul>
                    </li>
                    <button class="btn-close btn-close-white d-lg-none"></button>
                </ul>
                    <!-- <?php
                    // }
                    ?> -->
                    
                    
                    
                    <!-- <li>
                        <a href="#0">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="dashboard.html">User Dashboard</a>
                            </li>
                            <li>
                                <a href="game-details.html">Game Details</a>
                            </li>
                            <li>
                                <a href="policy.html">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="sign-in.html">Sign In</a>
                                
                            </li>
                            <li>
                                <a href="sign-up.html">Sign Up</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="#0">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                    
                    
                <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                    <div class="header-trigger me-4">
                        <span></span>
                    </div>
                    <a href="sign-in.html" class="cmn--btn active btn--md d-none d-sm-block">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>