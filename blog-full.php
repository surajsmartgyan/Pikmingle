<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
</head>

<body class="blog_page">
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

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Blog Page</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Blog Page</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Blog page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blogs-rightside col-lg-12 col-md-12">

                    <!-- Blog content Start -->
                    <div class="ec-blogs-content">
                        <div class="ec-blogs-inner">
                            <div class="ec-blog-main-img">
                                <img class="blog-image" src="assets/images/blog-image/7.jpg" alt="Blog" />
                            </div>
                            <div class="ec-blog-date">
                                <p class="date">28 JUNE, 2021-2022 - </p><a href="javascript:void(0)">5 Comments</a>
                            </div>
                            <div class="ec-blog-detail">
                                <h3 class="ec-blog-title">The best fashion influencers.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s,</p>
                                <p class="blockquote">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do
                                    eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis
                                    nostrud.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog content End -->
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