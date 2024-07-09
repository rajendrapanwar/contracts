
   <!-- inner hero section start -->
   <section class="inner-banner bg_img" style="background: url('assets/images/inner-banner/bg2.jpg') top;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Sign In</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a href="<?=base_url('/')?>">Home</a></li>
          <li>Sign In</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- inner hero section end -->


    <!-- Account Section Starts Here -->
    <section class="account-section overflow-hidden bg_img" style="background:url(assets/images/account/bg.jpg)">
        <div class="container">
            <div class="account__main__wrapper">
                <div class="account__form__wrapper">
                    <div class="logo"><a href="<?=base_url('/')?>"><h1 style="font-size: 40px;color: #ffe400;">Build My Home</h1></a></div>
                    <form class="account__form form row g-4" action="<?=base_url('customer_login')?>" method="post">
                        <div class="col-12">
                            <div class="form-group">
                                <div for="username" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="username" name="username" type="text" class="form--control form-control style--two" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div for="pass" class="input-pre-icon"><i class="las la-lock"></i></div>
                                <input id="pass" name="password" type="password" class="form--control form-control style--two" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button class="cmn--btn active w-100 btn--round" type="submit">Sign In</button>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between mt-5">
                            <div class="form--check d-flex align-items-center">
                                <input id="check1" type="checkbox" checked>
                                <label for="check1">Remember me</label>
                            </div>
                            <a href="#0" class="forgot-pass d-block text--base">Forgot Password ?</a>
                        </div>
                    </form>
                </div>
                <div class="account__content__wrapper" >
                    <div class="content text-center text-white">
                        <h3 class="title text--base mb-4">Welcome to Build My Home</h3>
                        <p class="">Sign in your Account. Atque, fuga sapiente, doloribus qui enim tempora?</p>
                        <p class="account-switch mt-4">Don't have an Account yet ? <a class="text--base ms-2" href="<?=base_url('customer_register')?>">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section Ends Here -->
    