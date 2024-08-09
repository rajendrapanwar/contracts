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
                <?php  
                if (session('isLoggedIn') && session('role')=='customer') {
                ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="d-block d-xl-none">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo-light.svg" alt="" /></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("customer-dashboard")?>" role="button" >Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("customer-dashboard")?>" role="button" >My Projects</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("add-project")?>" role="button" >Add Project</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("customer-dashboard")?>" role="button" >Test</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?=base_url("customer-dashboard")?>" role="button" >Rajendra Panwar</a>
                        </li>
                    
                    </ul>
                    
                </div>
                <div class="dashboard-header-btns d-flex gap-3">
              
                    <div class="d-none d-md-block">
                        <button class="dashboard-header-btn">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10V5C1 2.79086 2.79086 1 5 1H17C19.2091 1 21 2.79086 21 5V15C21 17.2091 19.2091 19 17 19H7M5 6L8.7812 8.5208C10.1248 9.41653 11.8752 9.41653 13.2188 8.5208L17 6M1 13H7M1 16H7" stroke="#06131C" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <span class="header-btn-badge">5</span>
                        </button>
                    </div>
                    <div class="dropdown d-none d-md-block">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="dashboard-header-btn dropdown-toggle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z" fill="#06131C"></path>
                        </svg>
                        <span class="header-btn-badge">8</span>
                        </button>
                        <div class="dropdown-menu">
                        <ul class="dashboard-notification">
                            <li class="notification-item dropdown-item d-flex gap-2">
                            <div class="notification-bell flex-shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z" fill="#22BE0D"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-dark-300">
                                New job proposal Jan 23, 2024
                                </p>
                                <span class="text-dark-200 text-14">10 minutes ago</span>
                            </div>
                            </li>
                            <li class="notification-item dropdown-item d-flex gap-2">
                            <div class="notification-bell flex-shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z" fill="#22BE0D"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-dark-300">
                                New job proposal Jan 23, 2024
                                </p>
                                <span class="text-dark-200 text-14">10 minutes ago</span>
                            </div>
                            </li>
                            <li class="notification-item dropdown-item d-flex gap-2">
                            <div class="notification-bell flex-shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z" fill="#22BE0D"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-dark-300">
                                New job proposal Jan 23, 2024
                                </p>
                                <span class="text-dark-200 text-14">10 minutes ago</span>
                            </div>
                            </li>
                            <li class="notification-item dropdown-item d-flex gap-2">
                            <div class="notification-bell flex-shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2395 8.97519L17.4943 9.05977L18.2395 8.97519ZM18.6867 12.9153L19.4319 12.8307V12.8307L18.6867 12.9153ZM5.31328 12.9153L4.56806 12.8307L4.56806 12.8307L5.31328 12.9153ZM5.76046 8.97519L6.50568 9.05977L5.76046 8.97519ZM4.44779 14.8721L3.87668 14.386H3.87668L4.44779 14.8721ZM19.5522 14.8721L18.9811 15.3583L19.5522 14.8721ZM14.2699 4.37366H13.5199C13.5199 4.69424 13.7237 4.97938 14.027 5.08322L14.2699 4.37366ZM9.73005 4.37366L9.973 5.08322C10.2763 4.97938 10.4801 4.69424 10.4801 4.37366H9.73005ZM15.7023 20.2632C15.8477 19.8753 15.6511 19.4431 15.2632 19.2977C14.8753 19.1523 14.4431 19.3489 14.2977 19.7368L15.7023 20.2632ZM9.7023 19.7368C9.55694 19.3489 9.12467 19.1523 8.7368 19.2977C8.34893 19.4431 8.15234 19.8753 8.2977 20.2632L9.7023 19.7368ZM17.7772 17.25H6.22281V18.75H17.7772V17.25ZM17.4943 9.05977L17.9415 12.9998L19.4319 12.8307L18.9848 8.89061L17.4943 9.05977ZM6.05849 12.9998L6.50568 9.05977L5.01525 8.89061L4.56806 12.8307L6.05849 12.9998ZM5.01889 15.3583C5.59621 14.6801 5.96028 13.8652 6.05849 12.9998L4.56806 12.8307C4.50519 13.3846 4.27067 13.9231 3.87668 14.386L5.01889 15.3583ZM17.9415 12.9998C18.0397 13.8652 18.4038 14.6801 18.9811 15.3583L20.1233 14.386C19.7293 13.9231 19.4948 13.3846 19.4319 12.8307L17.9415 12.9998ZM6.22281 17.25C5.56777 17.25 5.10443 16.926 4.89056 16.5492C4.68409 16.1854 4.68714 15.748 5.01889 15.3583L3.87668 14.386C3.11141 15.285 3.08777 16.4116 3.58598 17.2895C4.07679 18.1544 5.04947 18.75 6.22281 18.75V17.25ZM17.7772 18.75C18.9505 18.75 19.9232 18.1544 20.414 17.2895C20.9122 16.4116 20.8886 15.285 20.1233 14.386L18.9811 15.3583C19.3129 15.748 19.3159 16.1854 19.1094 16.5492C18.8956 16.926 18.4322 17.25 17.7772 17.25V18.75ZM15.0199 4.37366V4.26995H13.5199V4.37366H15.0199ZM18.9848 8.89061C18.7055 6.43026 16.8806 4.47476 14.5129 3.6641L14.027 5.08322C15.9441 5.73962 17.2913 7.27101 17.4943 9.05977L18.9848 8.89061ZM10.4801 4.37366V4.26995H8.98005V4.37366H10.4801ZM6.50568 9.05977C6.7087 7.27101 8.05587 5.73962 9.973 5.08322L9.48711 3.6641C7.11944 4.47476 5.29449 6.43026 5.01525 8.89061L6.50568 9.05977ZM12 2.75C12.8394 2.75 13.5199 3.4305 13.5199 4.26995H15.0199C15.0199 2.60208 13.6679 1.25 12 1.25V2.75ZM12 1.25C10.3321 1.25 8.98005 2.60208 8.98005 4.26995H10.4801C10.4801 3.4305 11.1606 2.75 12 2.75V1.25ZM14.2977 19.7368C13.975 20.5979 13.0846 21.25 12 21.25V22.75C13.6855 22.75 15.1516 21.7325 15.7023 20.2632L14.2977 19.7368ZM12 21.25C10.9154 21.25 10.025 20.5979 9.7023 19.7368L8.2977 20.2632C8.84835 21.7325 10.3145 22.75 12 22.75V21.25Z" fill="#22BE0D"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-dark-300">
                                New job proposal Jan 23, 2024
                                </p>
                                <span class="text-dark-200 text-14">10 minutes ago</span>
                            </div>
                            </li>
                        </ul>
                        <div class="text-center mx-2 mt-2">
                            <button class="see-notification-btn">See All</button>
                        </div>
                    </div>
                </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle dashboard-header-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/dashboard/heade-av.png" class="rounded-circle" alt="">
                        </button>
                        <ul class="dashboard-profile dropdown-menu">
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1801 20H5.8194C3.51066 20 1.63905 18.214 1.63905 16.0108V11.133C1.63905 10.4248 1.34423 9.74559 0.819444 9.2448C-0.396439 8.0845 -0.238375 6.16205 1.15226 5.19692L7.54099 0.762995C9.00683 -0.254332 10.9927 -0.254332 12.4585 0.762995L18.8472 5.19691C20.2379 6.16205 20.396 8.0845 19.1801 9.2448C18.6553 9.74559 18.3605 10.4248 18.3605 11.133V16.0108C18.3605 18.214 16.4889 20 14.1801 20ZM7.99976 15.25C7.58554 15.25 7.24976 15.5858 7.24976 16C7.24976 16.4142 7.58554 16.75 7.99976 16.75H11.9998C12.414 16.75 12.7498 16.4142 12.7498 16C12.7498 15.5858 12.414 15.25 11.9998 15.25H7.99976Z" fill="#22BE0D"></path></svg>Dashboard</a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2813 1.62818V19.3056C16.2813 19.5642 16.1381 19.8015 15.9092 19.9224C15.6803 20.0434 15.404 20.0276 15.19 19.8815L12.8687 18.2971L10.6739 19.8722C10.4106 20.062 10.0514 20.0443 9.80768 19.8303L8.14042 18.3724L6.47317 19.8303C6.2294 20.0443 5.87027 20.062 5.60697 19.8722L3.41218 18.2971L1.09086 19.8815C0.876869 20.0276 0.600544 20.0434 0.371668 19.9224C0.142792 19.8015 -0.000488281 19.5642 -0.000488281 19.3056V1.62818C-0.000488281 0.729426 0.728007 0 1.62769 0H14.6532C15.5528 0 16.2813 0.729426 16.2813 1.62818ZM4.41886 8.83871H11.862C12.2472 8.83871 12.5598 8.52609 12.5598 8.14091C12.5598 7.75573 12.2472 7.44312 11.862 7.44312H4.41886C4.03368 7.44312 3.72107 7.75573 3.72107 8.14091C3.72107 8.52609 4.03368 8.83871 4.41886 8.83871ZM4.41886 5.11715H11.862C12.2472 5.11715 12.5598 4.80453 12.5598 4.41935C12.5598 4.03417 12.2472 3.72156 11.862 3.72156H4.41886C4.03368 3.72156 3.72107 4.03417 3.72107 4.41935C3.72107 4.80453 4.03368 5.11715 4.41886 5.11715ZM4.41886 12.5603H8.14042C8.52561 12.5603 8.83822 12.2477 8.83822 11.8625C8.83822 11.4773 8.52561 11.1647 8.14042 11.1647H4.41886C4.03368 11.1647 3.72107 11.4773 3.72107 11.8625C3.72107 12.2477 4.03368 12.5603 4.41886 12.5603Z" fill="#22BE0D"></path>
                            </svg>
                            My Order</a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8331 0H3.49975C2.57235 0.00276977 1.68372 0.372408 1.02794 1.02819C0.372163 1.68396 0.00252563 2.57259 -0.000244141 3.5V12.8333C0.00252563 13.7607 0.372163 14.6494 1.02794 15.3052C1.68372 15.9609 2.57235 16.3306 3.49975 16.3333H12.8331C13.7605 16.3306 14.6491 15.9609 15.3049 15.3052C15.9607 14.6494 16.3303 13.7607 16.3331 12.8333V3.5C16.3303 2.57259 15.9607 1.68396 15.3049 1.02819C14.6491 0.372408 13.7605 0.00276977 12.8331 0ZM10.4997 9.33333H9.33307V10.5C9.33307 10.8094 9.21015 11.1062 8.99136 11.325C8.77257 11.5438 8.47583 11.6667 8.16641 11.6667C7.85699 11.6667 7.56024 11.5438 7.34145 11.325C7.12266 11.1062 6.99974 10.8094 6.99974 10.5V9.33333H5.83308C5.52366 9.33333 5.22691 9.21042 5.00812 8.99163C4.78933 8.77283 4.66641 8.47609 4.66641 8.16667C4.66641 7.85725 4.78933 7.5605 5.00812 7.34171C5.22691 7.12292 5.52366 7 5.83308 7H6.99974V5.83333C6.99974 5.52391 7.12266 5.22717 7.34145 5.00838C7.56024 4.78958 7.85699 4.66667 8.16641 4.66667C8.47583 4.66667 8.77257 4.78958 8.99136 5.00838C9.21015 5.22717 9.33307 5.52391 9.33307 5.83333V7H10.4997C10.8092 7 11.1059 7.12292 11.3247 7.34171C11.5435 7.5605 11.6664 7.85725 11.6664 8.16667C11.6664 8.47609 11.5435 8.77283 11.3247 8.99163C11.1059 9.21042 10.8092 9.33333 10.4997 9.33333Z" fill="#22BE0D"></path>
                                <path d="M15.1664 21H4.66642C4.357 21 4.06026 20.8771 3.84146 20.6583C3.62267 20.4395 3.49976 20.1428 3.49976 19.8333C3.49976 19.5239 3.62267 19.2272 3.84146 19.0084C4.06026 18.7896 4.357 18.6667 4.66642 18.6667H15.1664C16.0947 18.6667 16.9849 18.2979 17.6413 17.6415C18.2976 16.9852 18.6664 16.0949 18.6664 15.1667V4.66667C18.6664 4.35725 18.7893 4.0605 19.0081 3.84171C19.2269 3.62292 19.5236 3.5 19.8331 3.5C20.1425 3.5 20.4392 3.62292 20.658 3.84171C20.8768 4.0605 20.9997 4.35725 20.9997 4.66667V15.1667C20.9979 16.7132 20.3827 18.1958 19.2891 19.2894C18.1956 20.383 16.7129 20.9981 15.1664 21Z" fill="#22BE0D"></path>
                            </svg>
                            Post a job
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.697476 11.0306C0.364002 10.9022 -0.000244141 11.1448 -0.000244141 11.5021V16.9522C-0.000244141 19.1879 1.88016 21.0004 4.19976 21.0004H16.7998C19.1194 21.0004 20.9998 19.1879 20.9998 16.9522V11.5021C20.9998 11.1448 20.6355 10.9022 20.302 11.0306C18.9658 11.5451 17.249 12.0782 15.2285 12.432C14.4889 12.5616 13.9526 13.1742 13.6074 13.8179C13.0838 14.7943 12.0265 15.4618 10.8074 15.4618H10.192C8.97295 15.4618 7.91562 14.7943 7.39197 13.8178C7.04681 13.1742 6.51047 12.5615 5.77087 12.432C3.75047 12.0782 2.03364 11.5451 0.697476 11.0306Z" fill="#22BE0D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7998 4.80762H4.19976C1.88016 4.80762 -0.000244141 6.62005 -0.000244141 8.85581C-0.000244141 9.07497 0.109778 9.27756 0.300706 9.38516C1.18157 9.88157 3.94254 11.2774 7.87283 11.7474V12.2338C7.87283 13.3384 8.76827 14.2338 9.87284 14.2338H11.1264C12.231 14.2338 13.1264 13.3384 13.1264 12.2338V11.7474C17.0568 11.2775 19.8179 9.88158 20.6988 9.38516C20.8897 9.27756 20.9998 9.07497 20.9998 8.85581C20.9998 6.62005 19.1194 4.80762 16.7998 4.80762ZM9.51863 10.9753C9.40818 10.9753 9.31863 11.0649 9.31863 11.1753V12.1881C9.31863 12.6299 9.67681 12.9881 10.1186 12.9881H10.8808C11.3226 12.9881 11.6808 12.6299 11.6808 12.1881V11.1753C11.6808 11.0649 11.5912 10.9753 11.4808 10.9753H9.51863Z" fill="#22BE0D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.44971 1.51807C8.14493 1.51807 7.08721 2.53757 7.08721 3.79518V4.80723C7.08721 5.22643 6.73463 5.56626 6.29971 5.56626C5.86478 5.56626 5.51221 5.22643 5.51221 4.80723V3.79518C5.51221 1.69916 7.27509 0 9.44971 0H11.5497C13.7243 0 15.4872 1.69916 15.4872 3.79518V4.80723C15.4872 5.22643 15.1346 5.56626 14.6997 5.56626C14.2648 5.56626 13.9122 5.22643 13.9122 4.80723V3.79518C13.9122 2.53757 12.8545 1.51807 11.5497 1.51807H9.44971Z" fill="#22BE0D"></path>
                            </svg>
                            My jobs
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.6533 12.8013L18.7631 11.2919C18.787 11.0591 18.8076 10.787 18.8076 10.4991C18.8076 10.2113 18.7879 9.93915 18.7631 9.70639L20.6551 8.19615C21.0064 7.91265 21.1023 7.40951 20.8787 6.99042L18.913 3.5175C18.7031 3.12551 18.2429 2.92425 17.7759 3.10013L15.5455 4.01449C15.1179 3.69949 14.6697 3.4335 14.2061 3.22088L13.8668 0.805014C13.8111 0.3465 13.4204 0 12.9585 0H9.0169C8.55502 0 8.16517 0.3465 8.1103 0.798L7.77013 3.22264C7.32111 3.42915 6.87985 3.69165 6.4334 4.01625L4.19693 3.09926C3.77788 2.93389 3.2766 3.11936 3.06838 3.50962L1.10015 6.98689C0.867948 7.38765 0.963905 7.90826 1.32295 8.19878L3.21322 9.70815C3.18322 10.003 3.16868 10.2594 3.16868 10.5C3.16868 10.7407 3.18326 10.997 3.21322 11.2928L1.32122 12.803C0.96989 13.0874 0.874776 13.5905 1.09842 14.0088L3.06412 17.4816C3.27407 17.8728 3.72992 18.0758 4.20119 17.899L6.43167 16.9847C6.8584 17.2988 7.30653 17.5648 7.77013 17.7783L8.10946 20.1933C8.16513 20.6535 8.55502 21 9.01774 21H12.9594C13.4213 21 13.812 20.6535 13.8668 20.202L14.207 17.7783C14.656 17.5709 15.0964 17.3092 15.5437 16.9837L17.7802 17.9007C17.8882 17.9436 18.0004 17.9655 18.1161 17.9655C18.4486 17.9655 18.7545 17.78 18.9087 17.4912L20.883 14C21.1023 13.5905 21.0063 13.0874 20.6533 12.8013ZM10.9877 14C9.09743 14 7.56018 12.4302 7.56018 10.5C7.56018 8.56976 9.09743 7.00001 10.9877 7.00001C12.878 7.00001 14.4152 8.56976 14.4152 10.5C14.4152 12.4302 12.878 14 10.9877 14Z" fill="#22BE0D"></path></svg>Profile Settings
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0294457 3.51219L8.23549 9.48022C9.28744 10.2453 10.7126 10.2453 11.7645 9.48022L19.9706 3.51219C19.7299 1.53314 18.044 0 16 0H4C1.95599 0 0.270068 1.53314 0.0294457 3.51219ZM20 5.96377L12.9409 11.0977C11.1876 12.3728 8.81239 12.3728 7.05914 11.0977L0 5.96377V14C0 16.2091 1.79086 18 4 18H16C18.2091 18 20 16.2091 20 14V5.96377Z" fill="#22BE0D"></path>
                            </svg>
                            Inbox</a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.97808 5.57168H14.0218C14.0207 3.46643 12.2205 1.76012 9.99995 1.76012C7.77945 1.76012 5.97924 3.46643 5.97808 5.57168ZM15.8781 5.57168H15.8999C18.109 5.57168 19.8999 7.36254 19.8999 9.57168V17.9995C19.8999 20.2086 18.109 21.9995 15.8999 21.9995H4.09986C1.89072 21.9995 0.0998535 20.2086 0.0998535 17.9995V9.57168C0.0998535 7.36254 1.89071 5.57168 4.09985 5.57168H4.12183C4.12299 2.49434 6.75427 0 9.99995 0C13.2456 0 15.8769 2.49434 15.8781 5.57168ZM12.4749 13.787C12.4749 15.0831 11.3668 16.1338 9.99985 16.1338C8.63295 16.1338 7.52485 15.0831 7.52485 13.787C7.52485 12.4908 8.63295 11.4401 9.99985 11.4401C11.3668 11.4401 12.4749 12.4908 12.4749 13.787Z" fill="#22BE0D"></path>
                            </svg>
                            Update Password
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-profile-item dropdown-item d-flex gap-2" href="#"><svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.97808 5.57168H14.0218C14.0207 3.46643 12.2205 1.76012 9.99995 1.76012C7.77945 1.76012 5.97924 3.46643 5.97808 5.57168ZM15.8781 5.57168H15.8999C18.109 5.57168 19.8999 7.36254 19.8999 9.57168V17.9995C19.8999 20.2086 18.109 21.9995 15.8999 21.9995H4.09986C1.89072 21.9995 0.0998535 20.2086 0.0998535 17.9995V9.57168C0.0998535 7.36254 1.89071 5.57168 4.09985 5.57168H4.12183C4.12299 2.49434 6.75427 0 9.99995 0C13.2456 0 15.8769 2.49434 15.8781 5.57168ZM12.4749 13.787C12.4749 15.0831 11.3668 16.1338 9.99985 16.1338C8.63295 16.1338 7.52485 15.0831 7.52485 13.787C7.52485 12.4908 8.63295 11.4401 9.99985 11.4401C11.3668 11.4401 12.4749 12.4908 12.4749 13.787Z" fill="#22BE0D"></path>
                            </svg>
                            Logout
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <?php
                }else{
                ?>
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
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("about")?>">About Us</a>
                        </li>
                        
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
                <?php
                }
                ?>
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