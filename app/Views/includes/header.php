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
    <link href="assets/css/font-awesome-all.min.css" rel="stylesheet" />
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
                    </ul>
                    <div class="d-flex align-items-center gap-4 mt-4">
                        <div class="d-flex d-lg-none">
                            <a href="signin.html" class="header-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.5 7.55556C8.55134 7.55556 10.2143 5.86419 10.2143 3.77778C10.2143 1.69137 8.55134 0 6.5 0C4.44866 0 2.78571 1.69137 2.78571 3.77778C2.78571 5.86419 4.44866 7.55556 6.5 7.55556ZM6.5 17C10.0899 17 13 15.3086 13 13.2222C13 11.1358 10.0899 9.44444 6.5 9.44444C2.91015 9.44444 0 11.1358 0 13.2222C0 15.3086 2.91015 17 6.5 17Z"
                                        fill="white" /></svg>Login</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-right d-flex align-items-center gap-4">
                    <div class="header-dropdown d-none d-sm-flex gap-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <svg class="text-lime-300 flex-shrink-0 mt-n2" width="8" height="15" viewBox="0 0 8 15"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.14726 6.44268C5.54139 6.13511 4.89726 5.90077 4.2595 5.65765C3.8896 5.51704 3.53565 5.35301 3.22315 5.12453C2.60772 4.67342 2.7257 3.94112 3.44637 3.65112C3.65045 3.5691 3.86409 3.54274 4.08093 3.53102C4.91639 3.49002 5.7104 3.63062 6.46614 3.96455C6.84241 4.13152 6.96677 4.07879 7.09432 3.7185C7.22825 3.3377 7.33986 2.95104 7.46422 2.56731C7.54713 2.30954 7.44509 2.13964 7.18042 2.03126C6.69573 1.835 6.19828 1.6944 5.67532 1.61824C4.99292 1.52157 4.99292 1.51864 4.98973 0.888859C4.98654 0.0013019 4.98654 0.00130188 4.01716 0.00130188C3.87685 0.00130188 3.73654 -0.00162735 3.59624 0.00130188C3.14343 0.0130188 3.0669 0.0862495 3.05415 0.50513C3.04777 0.6926 3.05415 0.880071 3.05096 1.07047C3.04777 1.62702 3.04458 1.61824 2.46422 1.81157C1.06116 2.28024 0.193814 3.15901 0.10134 4.56504C0.0184316 5.80997 0.72634 6.65066 1.83922 7.26286C2.52481 7.64074 3.28374 7.86336 4.01078 8.15921C4.29458 8.27345 4.56563 8.40526 4.80159 8.58688C5.49994 9.11707 5.37239 9.99877 4.5433 10.3327C4.10006 10.5114 3.63131 10.5553 3.14981 10.4997C2.40682 10.4147 1.69573 10.236 1.02608 9.91675C0.633865 9.72928 0.519069 9.77907 0.385141 10.1687C0.270345 10.5055 0.168304 10.8453 0.0662633 11.1851C-0.0708541 11.6421 -0.019834 11.7504 0.455294 11.9643C1.06116 12.2338 1.70848 12.3714 2.36856 12.4681C2.88514 12.5443 2.90108 12.5648 2.90746 13.0569C2.91065 13.2795 2.91065 13.5051 2.91384 13.7277C2.91703 14.0089 3.06371 14.1729 3.3794 14.1788C3.73654 14.1846 4.09687 14.1846 4.45402 14.1758C4.74739 14.17 4.89726 14.0235 4.89726 13.7511C4.89726 13.4465 4.9132 13.1389 4.90045 12.8343C4.8845 12.5238 5.03119 12.3656 5.35644 12.2836C6.1058 12.0961 6.74356 11.727 7.23463 11.1763C8.59943 9.65312 8.07966 7.42397 6.14726 6.44268Z"
                                    fill="currentColor" />
                            </svg>
                            <select id="currency" class="select-dropdown border-0 shadow-none ps-1">
                                <option class="">BDT</option>
                                <option class="">USD</option>
                                <option class="">BDT</option>
                                <option class="">USD</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <svg class="text-lime-300 flex-shrink-0 mt-n2" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 14 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.4881 2.14377C5.2365 2.77789 5.03173 3.54816 4.89336 4.41291C5.56283 4.35158 6.27016 4.31894 7.00002 4.31894C7.72988 4.31894 8.43721 4.35158 9.10668 4.41291C8.96831 3.54816 8.76354 2.77789 8.51194 2.14377C8.27012 1.53428 7.99547 1.07703 7.71771 0.780915C7.441 0.485938 7.1983 0.386864 7.00002 0.386864C6.80174 0.386864 6.55903 0.485938 6.28233 0.780915C6.00456 1.07703 5.72992 1.53428 5.4881 2.14377ZM4.50048 1.7455C4.18655 2.53672 3.94567 3.48985 3.79803 4.54354C3.07129 4.6516 2.40808 4.79577 1.83286 4.96975C1.16357 5.17217 0.583188 5.42386 0.158263 5.72771C0.104579 5.7661 0.0515911 5.80668 3.20909e-05 5.84945C0.469066 2.9266 2.6958 0.597519 5.55163 8.85086e-07C5.53747 0.0145331 5.52342 0.0292256 5.50949 0.0440711C5.10854 0.471503 4.77196 1.06123 4.50048 1.7455ZM8.4484 0C8.46257 0.0145325 8.47662 0.0292253 8.49055 0.0440711C8.8915 0.471503 9.22807 1.06123 9.49956 1.7455C9.81349 2.53672 10.0544 3.48985 10.202 4.54354C10.9287 4.6516 11.592 4.79577 12.1672 4.96975C12.8365 5.17217 13.4168 5.42386 13.8418 5.72772C13.8955 5.7661 13.9484 5.80668 14 5.84945C13.531 2.92661 11.3042 0.597517 8.4484 0ZM14 8.15034C13.9485 8.19312 13.8955 8.2337 13.8418 8.2721C13.4168 8.57595 12.8365 8.82764 12.1672 9.03007C11.592 9.20404 10.9287 9.34822 10.202 9.45627C10.0544 10.51 9.81349 11.4631 9.49956 12.2543C9.22807 12.9386 8.8915 13.5283 8.49055 13.9557C8.47655 13.9707 8.46243 13.9854 8.44819 14C11.3042 13.4026 13.5311 11.0733 14 8.15034ZM5.55185 14C5.53761 13.9854 5.52349 13.9707 5.50949 13.9557C5.10854 13.5283 4.77196 12.9386 4.50048 12.2543C4.18655 11.4631 3.94567 10.51 3.79803 9.45627C3.07129 9.34822 2.40808 9.20404 1.83286 9.03007C1.16357 8.82764 0.583188 8.57595 0.158263 8.2721C0.104568 8.2337 0.0515691 8.19312 0 8.15034C0.468976 11.0733 2.69584 13.4026 5.55185 14ZM2.13851 8.00291C2.58965 8.13936 3.10872 8.25764 3.68083 8.35255C3.64845 7.91282 3.63163 7.46069 3.63163 6.99991C3.63163 6.53912 3.64845 6.08699 3.68083 5.64727C3.10872 5.74218 2.58965 5.86046 2.13851 5.9969C1.52453 6.1826 1.0664 6.39307 0.773646 6.60242C0.467074 6.82164 0.440533 6.96373 0.440533 6.99991C0.440533 7.03608 0.467074 7.17818 0.773646 7.3974C1.0664 7.60674 1.52453 7.81721 2.13851 8.00291ZM4.69533 6.99991C4.69533 7.51552 4.71763 8.01627 4.75957 8.4965C5.45881 8.56879 6.21241 8.60849 7.00002 8.60849C7.78763 8.60849 8.54123 8.56879 9.24047 8.4965C9.28241 8.01627 9.3047 7.51552 9.3047 6.99991C9.3047 6.4843 9.28241 5.98354 9.24047 5.50331C8.54123 5.43102 7.78763 5.39133 7.00002 5.39133C6.21241 5.39133 5.45881 5.43102 4.75957 5.50331C4.71763 5.98354 4.69533 6.4843 4.69533 6.99991ZM5.4881 11.856C5.2365 11.2219 5.03173 10.4517 4.89336 9.58691C5.56283 9.64823 6.27016 9.68087 7.00002 9.68087C7.72988 9.68087 8.43721 9.64823 9.10668 9.58691C8.96831 10.4517 8.76354 11.2219 8.51194 11.856C8.27012 12.4655 7.99547 12.9228 7.71771 13.2189C7.441 13.5139 7.1983 13.613 7.00002 13.613C6.80174 13.613 6.55903 13.5139 6.28233 13.2189C6.00456 12.9228 5.72992 12.4655 5.4881 11.856ZM11.8615 8.00291C11.4104 8.13936 10.8913 8.25764 10.3192 8.35255C10.3516 7.91282 10.3684 7.46069 10.3684 6.99991C10.3684 6.53912 10.3516 6.08699 10.3192 5.64727C10.8913 5.74218 11.4104 5.86046 11.8615 5.9969C12.4755 6.1826 12.9336 6.39307 13.2264 6.60242C13.533 6.82164 13.5595 6.96373 13.5595 6.99991C13.5595 7.03609 13.533 7.17818 13.2264 7.3974C12.9336 7.60674 12.4755 7.81721 11.8615 8.00291Z"
                                    fill="currentColor" />
                            </svg>
                            <select id="language" class="select-dropdown border-0 shadow-none ps-1">
                                <option value="">EN</option>
                                <option value="">BN</option>
                                <option value="">EN</option>
                                <option value="">BN</option>
                            </select>
                        </div>
                    </div>
                    <div class="align-items-center d-none d-lg-flex">
                        <a href="signin.html" class="w-btn-secondary-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.5 7.55556C8.55134 7.55556 10.2143 5.86419 10.2143 3.77778C10.2143 1.69137 8.55134 0 6.5 0C4.44866 0 2.78571 1.69137 2.78571 3.77778C2.78571 5.86419 4.44866 7.55556 6.5 7.55556ZM6.5 17C10.0899 17 13 15.3086 13 13.2222C13 11.1358 10.0899 9.44444 6.5 9.44444C2.91015 9.44444 0 11.1358 0 13.2222C0 15.3086 2.91015 17 6.5 17Z"
                                    fill="white" /></svg>Login</a>
                    </div>
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
    <div class="d-none d-xl-block secondary-nav-wrapper">
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
    </div>
    <!-- Secondary Nav End -->