<!-- Main Start-->
<main>


  <!-- Freelancer Details -->
  <section class="bg-offWhite py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <?php if (session()->has('error_message')): ?>
            <div class="alert alert-danger">
                <?= session('error_message') ?>
            </div>
          <?php endif; ?>
          <?php if (session()->has('success_message')): ?>
            <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> <?= session('success_message') ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-3">
          <aside class="freelancer-details-sidebar d-flex flex-column gap-4">
            <div class="freelancer-sidebar-card p-4 rounded-4 bg-white position-relative">
              <div class="job-type-badge position-absolute d-flex flex-column gap-2">
                <!-- <p class="job-type-badge-tertiary">Top Seller</p> -->
                <!-- <p class="job-type-badge-secondary">$90/hr</p> -->
              </div>
              <div
                class="freelancer-sidebar-card-header d-flex flex-column justify-content-center align-items-center py-4">
                <img src="<?= $user['profile_image'] ?>" class="freelancer-avatar rounded-circle mb-4" alt="">
                <h3 class="fw-bold freelancer-name text-dark-300 mb-2">

                </h3> 
                <p class="text-dark-200 mb-1"><?= ucfirst($user['first_name'].' '.$user['last_name']) ?></p>
                <p>
                  
                  <span class="text-dark-200"> (<?= $user['email'] ?>)</span>
                </p>
                <span class="input-image">
                <!-- <div class="image-input">
                    
                </span> -->
              </div>
              <div class="d-flex gap-4 justify-content-between sidebar-rate-card bg-offWhite p-4 rounded-4">
                <div>
                  <p class="text-dark-300 fw-medium">Location</p>
                  <p class="text-dark-200"><?= $user['city'].','.$user['country'] ?></p>
                </div>
                <div>
                  <p class="text-dark-300 fw-medium">Rate</p>
                  <p class="text-dark-200">$90/hr</p>
                </div>
                <div>
                  <p class="text-dark-300 fw-medium">Jobs</p>
                  <p class="text-dark-200">560</p>
                </div>
              </div>
              <ul class="py-4">
                <li class="py-1 d-flex justify-content-between align-items-center">
                  <p class="text-dark-200">Location:</p>
                  <p class="text-dark-300 fw-medium"><?= $user['city'].','.$user['country'] ?></p>
                </li>
                <li class="py-1 d-flex justify-content-between align-items-center">
                  <p class="text-dark-200">Member Since:</p>
                  <p class="text-dark-300 fw-medium"><?= formatDate($user['created_at']); ?></p>
                </li>
                <li class="py-1 d-flex justify-content-between align-items-center">
                  <p class="text-dark-200">Gender:</p>
                  <p class="text-dark-300 fw-medium"><?= $user['gender'] ?></p>
                </li>
                
              </ul>
              <a href="contact.html" class="w-btn-secondary-lg w-100">
                Contact Me
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>
              </a>
            </div>
            <!-- <div class="freelancer-sidebar-card p-4 rounded-4 bg-white">
                  <div class="freelancer-single-info border-bottom pb-4">
                    <h4 class="freelancer-sidebar-title text-dark-300 fw-semibold">
                      About Description
                    </h4>
                    <p class="text-dark-200 fs-6">
                      There are many variations of passages of Lorem Ipsum our a
                      available, but the majority have oneks suffered alteration
                      in some form, ki by injected humour, or randomised tomar a
                      words which don't look even slightly believable. If you
                      are going to use a valas passage of Lorem Ipsum, you
                      need.Fusce eget pulvinar tor tor. Quisque suscipit ante ac
                      nisi a rutrumnec mollis nulla.
                    </p>
                  </div>
                  <div class="freelancer-single-info border-bottom py-4">
                    <h4 class="freelancer-sidebar-title text-dark-300 fw-semibold">
                      Skills
                    </h4>
                    <div class="freelancer-skills d-flex flex-wrap gap-3">
                      <span class="single-skill">UIUX Design</span>
                      <span class="single-skill">Logo Design</span>
                      <span class="single-skill">XD</span>
                      <span class="single-skill">App Design</span>
                      <span class="single-skill">Website Development</span>
                      <span class="single-skill">Figma Design</span>
                      <span class="single-skill">Flayer Design</span>
                    </div>
                  </div>
                  <div class="freelancer-single-info border-bottom py-4">
                    <h4 class="freelancer-sidebar-title text-dark-300 fw-semibold">
                      Education
                    </h4>
                    <div class="mb-4">
                      <h4 class="text-dark-300 freelancer-university-name fw-semibold mb-1">
                        North South University
                      </h4>
                      <p class="text-dark-200">
                        Aperiam deserunt dol, Burundi <br>
                        2015 - 2020
                      </p>
                    </div>
                    <div>
                      <h4 class="text-dark-300 freelancer-university-name fw-semibold mb-1">
                        Independent University BD
                      </h4>
                      <p class="text-dark-200">
                        Aperiam deserunt dol, Burundi <br>
                        2015 - 2020
                      </p>
                    </div>
                  </div>
                  <div class="freelancer-single-info pt-4">
                    <h4 class="freelancer-sidebar-title text-dark-300 fw-semibold">
                      Language
                    </h4>
                    <ul>
                      <li class="py-1 text-dark-200 fs-6">English</li>
                      <li class="py-1 text-dark-200 fs-6">Bangla</li>
                      <li class="py-1 text-dark-200 fs-6">Arabic</li>
                    </ul>
                  </div>
                </div> -->
          </aside>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div>
            <!-- Tab Nav -->
            <div class="bg-white d-flex gap-3 p-4 freelancer-tab mb-4" id="nav-tab" role="tablist">
              <button class="tab-btn active" id="nav-service-tab" data-bs-toggle="tab"
                data-bs-target="#nav-edit-profile" type="button" role="tab" aria-controls="nav-service"
                aria-selected="true">
                Edit Profile
              </button>
              <button class="tab-btn" id="nav-portfolio-tab" data-bs-toggle="tab" data-bs-target="#nav-change-password"
                type="button" role="tab" aria-controls="nav-portfolio" aria-selected="false" tabindex="-1">
                Change Password
              </button>

            </div>
            <div class="bg-white freelancer-tab-content">
              <div class="tab-content" id="nav-tabContent">
                <!-- Edit profile -->
                <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel"
                  aria-labelledby="nav-service-tab" tabindex="0">
                  <div class="row">
                    <div class="col-lg-12 p-lg-12">
                      <div class="mb-40">
                        <h3 class="section-title mb-2">Edit Profile</h3>
                        <!-- <p class="section-desc">Welcome to Work Zone</p> -->
                      </div>
                      <form id="updateProfileForm" method="POST" action="<?= base_url('update-profile') ?>" enctype="multipart/form-data">
                        <div class="form-container">
                          <div class="row gy-3">
                            <div class="form-input col-lg-6">
                              <label for="fname" class="form-label">First Name
                                <span class="text-lime-300">*</span></label>
                              <input type="text" id="fname" placeholder="First Name" name="first_name" class="form-control shadow-none" value="<?= $user['first_name'] ?>">
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="lname" class="form-label">Last Name <span
                                  class="text-lime-300">*</span></label>
                              <input type="text" id="lname" placeholder="Last Name" name="last_name" class="form-control shadow-none" value="<?= $user['last_name'] ?>">
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="phone" class="form-label">Phone <span class="text-lime-300">*</span></label>
                              <input type="text" id="phone" placeholder="01403817190" name="phone" class="form-control shadow-none" value="<?= $user['phone'] ?>">
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="phone" class="form-label">Email <span class="text-lime-300">*</span></label>
                              <input type="text" id="email" placeholder="demo@email.com"
                              name="email"  class="form-control shadow-none" value="<?= $user['email'] ?>" readonly disabled>
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="country" class="form-label">Country <span
                                  class="text-lime-300">*</span></label>
                              <select class="form-select shadow-none" name="country" id="country">
                                <?php if(isset($countries) && !empty($countries)): ?>
                                  <?php foreach($countries as $country): ?>
                                    <option value="<?= $country['alpha3Code'] ?>" <?php if($country['alpha3Code']==$user['country']): echo "selected";  endif; ?>><?= $country['name'] ?></option>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              </select>
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="city" class="form-label">City <span class="text-lime-300">*</span></label>
                              <input type="text" id="city" placeholder="demo@email.com"
                              name="city"  class="form-control shadow-none" value="<?= $user['city'] ?>">
                            </div>
                            <div class="form-input col-lg-12">
                              <label for="password" class="form-label">Address <span
                                  class="text-lime-300">*</span></label>
                              <input type="text" id="password" placeholder="Address here"
                              name="address"  class="form-control shadow-none" value="<?= $user['address'] ?>">
                            </div>
                            
                          </div>
                          <div class="d-grid mt-4">
                            <button type="submit" class="w-btn-secondary-lg">Update Profile</button>
                          </div>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
                <!-- Change Password -->
                <div class="tab-pane fade" id="nav-change-password" role="tabpanel" aria-labelledby="nav-portfolio-tab"
                  tabindex="0">
                  <div class="row g-4">
                  <div class="col-lg-12 p-lg-12">
                      <div class="mb-40">
                        <h3 class="section-title mb-2">Change Password</h3>
                        <!-- <p class="section-desc">Welcome to Work Zone</p> -->
                      </div>
                      <form id="changePasswordForm" method="POST" action="<?= base_url('update-password') ?>" enctype="multipart/form-data">
                        <div class="form-container">
                          <div class="row gy-3">
                            <div class="form-input col-lg-6">
                              <label for="fname" class="form-label">Current Password
                                <span class="text-lime-300">*</span></label>
                              <input type="text" id="current_password" placeholder="*************" name="current_password" class="form-control shadow-none" value="">
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="fname" class="form-label">New Password
                                <span class="text-lime-300">*</span></label>
                              <input type="text" id="new_password" placeholder="*************" name="new_password" class="form-control shadow-none" value="">
                            </div>
                            <div class="form-input col-lg-6">
                              <label for="fname" class="form-label">Confirm Password
                                <span class="text-lime-300">*</span></label>
                              <input type="text" id="confirm_password" placeholder="*************" name="confirm_password" class="form-control shadow-none" value="">
                            </div>
                          </div>
                          <div class="d-grid mt-4">
                            <button class="w-btn-secondary-lg" id="btn_update_pass">Update Password</button>
                          </div>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Freelancer Details End -->
</main>
<!-- Main End -->