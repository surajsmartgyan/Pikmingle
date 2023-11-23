<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
    <link rel="stylesheet" href="include/style2.css"/>
</head>

<body class="register_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <div class="main" style="background-image: url('assets/images/bg/top1-bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
			<!-- Header start  -->
			<header class="ec-header" style="background:transparent;">
				<?php require 'include/header.php' ?>
			</header>
			<!-- Header End  -->
		</div>
    <!-- Header End  -->

    <!-- Start Register -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Sign Up</h2>
                        <h2 class="ec-title">Sign Up</h2>
                        <p class="sub-title mb-3"><span class="text-center">Already have an account?<a href="login"
                                    class="text-info sub-title1-signup" style="color: #3474d4; text-decoration: none;"> Log
                                    in</a></span>
                        </p>
                    </div>
                    <div class="ec-register-wrapper"
                        style="border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;">
                        <div class="ec-register-container" style="border-radius: 20px;">
                            <div class="ec-register-form">
                                <form action="#" method="post">
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>First Name*</label>
                                        <input type="text" name="firstname" placeholder="Enter your first name"
                                            required />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Last Name*</label>
                                        <input type="text" name="lastname" placeholder="Enter your last name"
                                            required />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="Enter your email add..."
                                            required />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Password*</label>
                                        <input type="password" name="password" placeholder="Enter your password..."
                                            value="" class="input form-control" id="password" required>
                                        <div class="Show-hide-signup">
                                            <span class="eye-icons" onclick="password_show_hide();">
                                                <i class="fas fa-eye" id="show_eye"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                        </input>
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Phone Number*</label>
                                        <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                            required />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Address</label>
                                        <input type="text" name="address" placeholder="Address Line 1" />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>City *</label>
                                        <span class="ec-rg-select-inner">
                                            <select name="ec_select_city" id="ec-select-city"
                                                class="ec-register-select">
                                                <option selected disabled>City</option>
                                                <option value="1">City 1</option>
                                                <option value="2">City 2</option>
                                                <option value="3">City 3</option>
                                                <option value="4">City 4</option>
                                                <option value="5">City 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Post Code</label>
                                        <input type="text" name="postalcode" placeholder="Post Code" />
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Country *</label>
                                        <span class="ec-rg-select-inner">
                                            <select name="ec_select_country" id="ec-select-country"
                                                class="ec-register-select">
                                                <option selected disabled>Country</option>
                                                <option value="1">Country 1</option>
                                                <option value="2">Country 2</option>
                                                <option value="3">Country 3</option>
                                                <option value="4">Country 4</option>
                                                <option value="5">Country 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="ec-register-wrap ec-register-half">
                                        <label>Region State</label>
                                        <span class="ec-rg-select-inner">
                                            <select name="ec_select_state" id="ec-select-state"
                                                class="ec-register-select">
                                                <option selected disabled>Region/State</option>
                                                <option value="1">Region/State 1</option>
                                                <option value="2">Region/State 2</option>
                                                <option value="3">Region/State 3</option>
                                                <option value="4">Region/State 4</option>
                                                <option value="5">Region/State 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="ec-register-wrap ec-recaptcha">
                                        <span class="g-recaptcha"
                                            data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                            data-callback="verifyRecaptchaCallback"
                                            data-expired-callback="expiredRecaptchaCallback"></span>
                                        <input class="form-control d-none" data-recaptcha="true" required
                                            data-error="Please complete the Captcha">
                                        <span class="help-block with-errors"></span>
                                    </span>
                                    <span class="ec-register-wrap ec-register-btn">
                                        <button class="btn text-light w-50" type="submit"
                                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; background:#dc3545; border-radius:8px;">Register</button>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Register -->

    <!-- Footer Start -->
    <footer class="ec-footer">
        <?php require 'include/footer.php' ?>
    </footer>
    <!-- Footer Area End -->

    <!-- JS Start -->
    <?php require 'include/jslink.php' ?>
    <!-- JS Area End -->
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</body>

</html>