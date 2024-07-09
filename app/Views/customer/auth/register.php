 <!-- inner hero section start -->
 <section class="inner-banner bg_img" style="background: url('assets/images/inner-banner/bg2.jpg') top;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Sign Up</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a href="<?=base_url('/')?>">Home</a></li>
          <li>Sign Up</li>
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
                <div class="account__form__wrapper sign-up">
                    <div class="logo"><a href="<?=base_url('/')?>">
                    <h1 style="font-size: 40px;color: #ffe400;">Build My Home</h1>
                        <!-- <img src="assets/images/logo.png" alt="logo"> -->
                    </a></div>
                    <form class="account__form form row g-4" id="register_form" method="post" action="<?=base_url('customer_register')?>">
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="fname" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="firstname" name="firstname" type="text" class="form--control form-control style--two" placeholder="Frist Name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="lname" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="lastname" name="lastname" type="text" class="form--control form-control style--two" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="address" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="address" name="address" type="text" class="form--control form-control style--two" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="city" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="city" name="city" type="text" class="form--control form-control style--two" placeholder="City" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="state" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="state" name="state" type="text" class="form--control form-control style--two" placeholder="State" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="zip" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="zip" name="zip" type="text" class="form--control form-control style--two" placeholder="Zipcode" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="country" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="country" name="country" type="text" class="form--control form-control style--two" placeholder="Country" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-text text--base style--two">+91</span>
                                <input type="text" name="phone" class="form--control form-control style--two" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="email" class="input-pre-icon"><i class="las la-envelope"></i></div>
                                <input id="email" name="email" type="email" class="form--control form-control style--two" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="username" class="input-pre-icon"><i class="las la-user"></i></div>
                                <input id="username" name="username" type="text" class="form--control form-control style--two" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="pass" class="input-pre-icon"><i class="las la-lock"></i></div>
                                <input id="password" name="password" type="password" class="form--control form-control style--two" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group">
                                <div for="pass" class="input-pre-icon"><i class="las la-lock"></i></div>
                                <input id="pass" name="confirm_password" type="password" class="form--control form-control style--two" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="cmn--btn active w-100 btn--round" type="submit" id="register_btn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="account__content__wrapper" >
                    <div class="content text-center text-white">
                        <h3 class="title text--base mb-4">Welcome to Build My Home</h3>
                        <p class="">Sign in your Account. Atque, fuga sapiente, doloribus qui enim tempora?</p>
                        <p class="account-switch mt-4">Already have an Account ? <a class="text--base ms-2" href="<?=base_url('customer_login')?>">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $('#register_form').submit(function(e){
    event.preventDefault(e);
    var formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: '<?=base_url('register')?>',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType:'json',
        success:function(res){
            if(res){
            alert('Registered Successfully.');
            }
        }
    });
    }); 
</script>

