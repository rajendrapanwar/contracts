<!-- Main Start -->
<main>
      <!-- Breadcrumb -->
      <section class="w-breadcrumb-area" style="
          background: url('assets/img/common/breadcrumb-bg.png') no-repeat
            center center/cover;
        ">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <div class="position-relative z-2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                <h2 class="section-title-light mb-2">Sign In</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb w-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Login
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Breadcrumb End -->

      <!-- Login Form -->
      <section class="py-110 bg-offWhite">
        <div class="container">
          <div class="mb-5">
            <div class="row justify-content-center">
              <div class="col-auto">
                <div class="d-flex align-items-center gap-3">
                  <a href="" class="w-form-btn">Customer</a>
                  
                </div>
              </div>
            </div>
          </div>
          <?php if (session()->has('login_error')): ?>
            <div class="alert alert-danger">
                <?= session('login_error') ?>
            </div>
          <?php endif; ?>
          <div class="bg-white rounded-3 p-3">
            <div class="row g-4">
              <div class="col-lg-6 p-3 p-lg-5">
                <div class="mb-40">
                  <h2 class="section-title mb-2">Log in</h2>
                  <p class="section-desc">Welcome to Build My Home</p>
                </div>
                <form method="post" action="<?=base_url("customer_login")?>">
                  <div class="form-container d-flex flex-column gap-4">
                    <div class="form-input">
                      <label for="eamil" class="form-label">Email <span class="text-lime-300">*</span>
                      </label>
                      <input type="email" id="email" name="email" placeholder="example@gmail.com" class="form-control shadow-none">
                    </div>
                    <div class="form-input">
                      <label for="password" class="form-label">Password <span class="text-lime-300">*</span></label>
                      <input type="password" id="password" name="password" placeholder="********" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center gap-2 form-input">
                        <input type="checkbox" class="form-check">
                        <label class="form-check-label">Remember Me</label>
                      </div>
                      <div>
                        <a href="#" class="form-forget-pass">Forget Password</a>
                      </div>
                    </div>
                    <div class="d-grid">
                      <button type="submit" class="w-btn-secondary-lg">Log In</button>
                    </div>
                  </div>
                </form>
                <div class="py-5">
                  <div class="form-divider d-flex justify-content-center align-items-center">
                    <span class="form-divider-text">OR</span>
                  </div>
                </div>
                <div class="d-flex gap-3 justify-content-center align-items-center social-login">
                  <button class="social-login-item">
                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.26283 2.6C5.26283 4.03594 4.0847 5.2 2.63141 5.2C1.17812 5.2 0 4.03594 0 2.6C0 1.16406 1.17812 0 2.63141 0C4.0847 0 5.26283 1.16406 5.26283 2.6ZM5.26283 8.45V26H0V8.45H5.26283ZM9.21094 8.45001H14.4738V9.54385C15.2968 9.25641 16.1825 9.10001 17.1052 9.10001C21.465 9.10001 24.9994 12.5922 24.9994 16.9V26H19.7366V16.9C19.7366 15.4641 18.5585 14.3 17.1052 14.3C15.6519 14.3 14.4738 15.4641 14.4738 16.9V26H9.21094V16.9V8.45001Z" fill="currentColor"></path>
                    </svg>
                  </button>
                  <button class="social-login-item">
                    <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.3718 0C16.0451 0 13.3484 2.68629 13.3484 6C13.3484 6.50073 13.4099 6.98714 13.526 7.45211C10.3273 7.45211 5.50934 6.83862 1.4856 3.01441C0.95054 2.50588 -0.0360954 2.84588 0.00101806 3.56351C0.597337 15.094 5.80286 18.4574 8.48355 18.6667C6.75251 20.2885 4.23797 21.5687 1.70768 22.1433C1.03989 22.2949 0.874928 22.9884 1.52792 23.1899C3.33846 23.7485 5.92998 23.9637 7.32491 24C17.1931 24 25.2137 16.1207 25.3922 6.33344C26.6878 5.53417 27.5177 3.79875 27.984 2.56936C28.0976 2.26995 27.5803 1.92109 27.2706 2.04339C26.3028 2.42561 25.0741 2.51623 24.0274 2.19271C22.9227 0.853899 21.2474 0 19.3718 0Z" fill="currentColor"></path>
                    </svg>
                  </button>
                  <button class="social-login-item">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13 14.95V11.05L25.8547 11.05C25.9504 11.6861 26 12.3372 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13C0 5.8203 5.8203 0 13 0C16.5898 0 19.8398 1.45507 22.1924 3.80761L19.4347 6.56533C17.7879 4.91855 15.5129 3.9 13 3.9C7.97421 3.9 3.9 7.97421 3.9 13C3.9 18.0258 7.97421 22.1 13 22.1C17.3565 22.1 20.9979 19.0387 21.8906 14.95H13Z" fill="currentColor"></path>
                    </svg>
                  </button>
                </div>
                <div class="mt-4">
                  <p class="text-center form-text">
                    Don’t have an account ?
                    <a href="<?=base_url("customer_register")?>"> Create Account </a>
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="login-img">
                  <img src="assets/img/others/1.png" class="img-fluid w-100" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Login Form End -->
    </main>
    <!-- Main End -->