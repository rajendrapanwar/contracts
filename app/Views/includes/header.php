<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home One - Work Zone HTML</title>
    <!-- GLightBox -->
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/aos.css" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!-- Quill CSS -->
    <link href="assets/css/quill.core.css" rel="stylesheet" />
    <link href="assets/css/quill.snow.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font-awesome CSS -->
    <!-- <link href="assets/css/font-awesome-all.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link href="assets/css/resposive.css" rel="stylesheet" />
</head>

<body>
    <!-- Menu Start -->
    <header class="header-primary">
        <div class="container">
            <nav class="navbar navbar-expand-xl justify-content-between">
                <a href="<?=base_url("/")?>">
                    <img src="assets/img/logo/logo-light.svg" alt="" />
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="d-block d-xl-none">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo-light.svg" alt="" /></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("/")?>" role="button" >Home</a>
                            
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Freelancer</a>
                            <div class="dropdown-menu">
                                <div class="d-flex flex-column flex-xl-row">
                                    <ul>
                                        <li>
                                            <a href="freelancers.html"
                                                class="dropdown-item"><span>Freelancers</span></a>
                                        </li>

                                        <li>
                                            <a href="freelancer-details.html" class="dropdown-item"><span>Freelancer
                                                    Details</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("about")?>">About Us</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="services.html" class="dropdown-item"><span>Services</span></a>
                                </li>
                                <li>
                                    <a href="service-details.html" class="dropdown-item"><span>Service
                                            Details</span></a>
                                </li>
                                <li>
                                    <a href="job-posts.html" class="dropdown-item"><span>Job Post</span></a>
                                </li>
                                <li>
                                    <a href="job-details.html" class="dropdown-item"><span>Job Details</span></a>
                                </li>
                                <li>
                                    <a href="seller-dashboard.html" class="dropdown-item"><span>Seller
                                            Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="buyer-dashboard.html" class="dropdown-item"><span>Buyer
                                            Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="buyer-details.html" class="dropdown-item"><span>Buyer Details</span></a>
                                </li>
                                <li>
                                    <a href="terms-conditions.html" class="dropdown-item"><span>Terms and
                                            Policy</span></a>
                                </li>
                                <li>
                                    <a href="faqs.html" class="dropdown-item"><span>Faq</span></a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" class="dropdown-item"><span>Privacy and
                                            Policy</span></a>
                                </li>
                                <li>
                                    <a href="price.html" class="dropdown-item"><span>Pricing</span></a>
                                </li>

                                <li>
                                    <a href="404.html" class="dropdown-item"><span>404 Page</span></a>
                                </li>
                                <li>
                                    <a href="signin.html" class="dropdown-item"><span>Signin Page</span></a>
                                </li>
                                <li>
                                    <a href="signup.html" class="dropdown-item"><span>Signup Page</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blogs.html" class="dropdown-item"><span>Blog</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html" class="dropdown-item"><span>Blog Details</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("contact")?>">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Login</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=base_url("customer_login")?>" class="dropdown-item"><span>Customer</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url("contractor_login")?>" class="dropdown-item"><span>Contractor</span></a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">Register</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=base_url("customer_register")?>" class="dropdown-item"><span>Customer</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url("contractor_register")?>" class="dropdown-item"><span>Contractor</span></a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                    
                </div>
                <div class="navbar-right d-flex align-items-center gap-4">
                    
                    
                    <button class="navbar-toggler d-block d-xl-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <!-- Menu End -->

    <!-- Secondary Nav -->
    <!-- <div class="d-none d-xl-block secondary-nav-wrapper">
        <div class="container">
            <div class="position-relative">
                <nav class="secondary-nav-container bg-white position-absolute w-100 start-0 z-3 border-top">
                    <ul class="secondary-nav d-flex justify-content-between align-items-center">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Graphics</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Writing</a></li>
                        <li><a href="#">Translation</a></li>
                        <li><a href="#">Animation</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Website</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Business</a></li>
                        <li>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="19" fill="#F7F5F0" />
                                    <path
                                        d="M17 19C17 20.0178 17.8283 20.8461 18.8462 20.8461C19.864 20.8461 20.6923 20.0178 20.6923 19C20.6923 17.9821 19.864 17.1538 18.8462 17.1538C17.8283 17.1538 17 17.9821 17 19Z"
                                        fill="#06131C" />
                                    <path
                                        d="M17 25.1538C17 26.1716 17.8283 26.9999 18.8462 26.9999C19.864 26.9999 20.6923 26.1716 20.6923 25.1538C20.6923 24.1359 19.864 23.3076 18.8462 23.3076C17.8283 23.3076 17 24.1359 17 25.1538Z"
                                        fill="#06131C" />
                                    <path
                                        d="M17 12.8462C17 13.864 17.8283 14.6923 18.8462 14.6923C19.864 14.6923 20.6923 13.864 20.6923 12.8462C20.6923 11.8283 19.864 11 18.8462 11C17.8283 11 17 11.8283 17 12.8462Z"
                                        fill="#06131C" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> -->
    <!-- Secondary Nav End -->