<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
    <link rel="stylesheet" href="include/style2.css"/>
</head>

<body>
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

    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3"><span class="text-center">Don’t you have an account?<a href="SignUp" class="text-info text-color-login" style="color: #3474d4; text-decoration: none;"> Sign up</a></span></p>
                    </div>
                    <div class="ec-login-wrapper" style="border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;">
                        <div class="ec-login-container" style="border-radius: 20px;">
                            <div class="ec-login-form">
                                <form action="user" method="post">
                                    <span class="ec-login-wrap">
                                        <label>Email Address*</label>
                                        <input type="text" name="name" placeholder="Enter your email add..." required />
                                    </span>
                                    <span class="ec-login-wrap">
                                        <label>Password*</label>
                                        <input type="password" name="password" placeholder="Enter your password" value="" class="input form-control" id="password" required />
                                        <div class="Show-hide-login">
                                            <span class="eye-icons" onclick="password_show_hide();">
                                                <i class="fas fa-eye" id="show_eye"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </span>
                                    <span class="ec-login-wrap ec-login-fp">
                                        <label><a href="recoverpassword" class="text-color-login">Forgot Password?</a></label>
                                    </span>
                                    <span class="ec-login-wrap ec-login-btn mb-3">
                                        <button class="btn text-light w-100 " type="submit" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; background:#dc3545; border-radius:8px;">Login</button>
                                    </span>
                                    <!-- google login -->
                                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-1073648387%3A1679473516491830&continue=https%3A%2F%2Faccounts.google.com%2Fgsi%2Fselect%3Fclient_id%3D705648808057-3chuddbr6oahbebib1uh693k02sgfl30.apps.googleusercontent.com%26ux_mode%3Dpopup%26ui_mode%3Dcard%26as%3DGRpmswHGS6LWB9UfHrcf7A%26channel_id%3Dc14c017a9ece5cd332415effe96830c1670a7ab545511ae55c9d00acde5264c9%26origin%3Dhttps%3A%2F%2Fid.freepikcompany.com&faa=1&ifkv=AQMjQ7Q532civjTqefwoz42WQtiAPKafXfPC0ScARVJisbvqP6V_gMiv8EBh6EDt9dmxzXGmLtnHGg&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="text-dark text-center border text-color-login" style="border-radius:8px;">
                                        <span><img src="https://img.icons8.com/color/48/null/google-logo.png" style="width: 8%;" /> Continue with Google</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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