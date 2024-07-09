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
                <h2 class="section-title-light mb-2">Sign Up</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb w-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Signup
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
                  <a href="" class="w-form-btn">Contractor</a>
                </div>
              </div>
            </div>
          </div>
            <?php if(session()->has('validation_errors')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach(session('validation_errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif; ?>
          <div class="bg-white rounded-3 p-3">
            <div class="row g-4">
              <div class="col-lg-6 p-3 p-lg-5">
                <div class="mb-40">
                  <h2 class="section-title mb-2">Sign up</h2>
                  <p class="section-desc">Welcome to Build My Home</p>
                </div>
                <form method="post" action="<?=base_url("contractor_register")?>">
                <?= csrf_field() ?>
                  <div class="form-container">
                    <div class="row gy-3">
                      <div class="form-input col-lg-6">
                        <label for="fname" class="form-label">First Name
                          <span class="text-lime-300">*</span></label>
                        <input type="text" id="fname" name="first_name" placeholder="First Name" class="form-control shadow-none">
                      </div>
                      <div class="form-input col-lg-6">
                        <label for="lname" class="form-label">Last Name <span class="text-lime-300">*</span></label>
                        <input type="text" id="lname" name="last_name" placeholder="Last Name" class="form-control shadow-none">
                      </div>
                      <div class="form-input col-lg-6">
                        <label for="phone" class="form-label">Phone <span class="text-lime-300">*</span></label>
                        <input type="text" id="phone" name="phone" placeholder="01403817190" class="form-control shadow-none">
                      </div>
                      <div class="form-input col-lg-6">
                        <label for="phone" class="form-label">Email <span class="text-lime-300">*</span></label>
                        <input type="email" id="email" name="email" placeholder="demo@email.com" class="form-control shadow-none">
                      </div>
                      <div class="form-input col-lg-6">
                        <label for="country" class="form-label">Country <span class="text-lime-300">*</span></label>
                        <select class="form-select shadow-none" name="country" id="country">
                          <option value="1">Select Country</option>
                          <option value="2">Germany</option>
                          <option value="3">China</option>
                        </select>
                      </div>
                      <div class="form-input col-lg-6">
                        <label for="city" class="form-label">City <span class="text-lime-300">*</span></label>
                        <select class="form-select shadow-none" name="city" id="city">
                          <option value="1">Select City</option>
                          <option value="2">Berlin</option>
                          <option value="3">Beijing</option>
                        </select>
                      </div>
                      <div class="form-input col-lg-12">
                        <label for="password" class="form-label">Address <span class="text-lime-300">*</span></label>
                        <input type="text" id="password" name="address" placeholder="Address here" class="form-control shadow-none">
                      </div>
                      <div class="form-input col-lg-12">
                        <label for="password" class="form-label">Password <span class="text-lime-300">*</span></label>
                        <input type="text" id="password" name="password" placeholder="********" class="form-control shadow-none">
                      </div>
                    </div>
                    <div class="d-grid mt-4">
                      <button type="submit" class="w-btn-secondary-lg">Create Account</button>
                    </div>
                  </div>
                </form>
                <div class="mt-3">
                  <p class="text-center form-text">
                    Already have an account ? <a href="<?=base_url("contractor_login")?>"> Login </a>
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
    <!-- Maine End -->