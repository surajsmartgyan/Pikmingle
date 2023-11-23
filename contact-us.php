<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
</head>

<body class="contact_us_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>
	<!-- Header start  -->
		<div class="main" style="background-image: url('assets/images/bg/top1-bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
			<!-- Header start  -->
			<header class="ec-header" style="background:transparent;">
				<?php require 'include/header.php' ?>
			</header>
			<!-- Header End  -->
		</div>
		<!-- Ec breadcrumb start -->
    <!-- breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Contact Us</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Contact Us</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- Ec Contact Us page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-common-wrapper">
                <div class="ec-contact-rightside">
                        <p class="text-justify"> Please enter the details of your request and, if you have any questions regarding our Terms of Use, please include specific samples of the usage you wish to give our resouces. If you’re reporting a problem, make sure to include as much information as possible. Please include any screenshots or videos of issues since this will also help us resolve problems much sooner. Once your request is submitted, a member of our support staff will respond as soon as possible.</p>
                        <p><b>Basic information on Data Protection:</b> <span class="text-success fw-bold">PikMingle</span> Company collects your data to be able to answer to questions, suggested, or complaints filed. +Info <a href="" style="color: #3474d4;"> Privacy Policy</a></p>
                        <div class="ec_contact_map">
                           
                        </div>
                       
                    </div>
                    <div class="ec-contact-leftside">
                        <div class="ec-contact-container">
                            <div class="ec-contact-form">
                                <form action="#" method="post">
                                    <span class="ec-contact-wrap">
                                        <label>Name*</label>
                                        <input type="text" name="firstname" placeholder="Enter your first name" required />
                                    </span>
                                    <span class="ec-contact-wrap">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="Enter your email address" required />
                                    </span>
                                    <span class="ec-contact-wrap">
                                        <label>Phone Number*</label>
                                        <input type="text" name="phonenumber" placeholder="Enter your phone number" required />
                                    </span>
                                    <span class="ec-contact-wrap">
                                        <label>Comments/Questions*</label>
                                        <textarea name="address" placeholder="Write us a message"></textarea>
                                    </span>
                                    <span class="ec-contact-wrap ec-recaptcha">
                                        <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></span>
                                        <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                        <span class="help-block with-errors"></span>
                                    </span>
                                    <span class="ec-contact-wrap ec-contact-btn">
                                        <button class="btn text-light"style="background:#d51c3f;border-radius:8px;" type="submit">Submit</button>
                                    </span>
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
</body>

</html>