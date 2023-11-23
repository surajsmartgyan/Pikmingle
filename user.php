<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
   
</head>

<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>
    <!-- Header start  -->
    <div class="main"
        style="background-image: url('assets/images/bg/top1-bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <!-- Header start  -->
        <header class="ec-header" style="background:transparent;">
            <?php require 'include/header.php' ?>
        </header>
        <!-- Header End  -->
    </div>
    <!-- Ec breadcrumb start -->

    <!-- User profile section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12 mb-3">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <div class="ec-vendor-block-bg"></div>
                                <div class="ec-vendor-block-detail text-center rounded p-1"
                                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <img class="v-img rounded-circle" src="assets/images//instragram-image/4.jpg"
                                        alt="vendor image">
                                    <h3 class="text-center mt-2"><span>User Name</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <form action="" method="post">
                            <div class="ec-vendor-card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ec-vendor-block-profile">
                                            <div class="ec-vendor-block-img space-bottom-30">
                                                <h4 class="fw-bold">Account data</h4>
                                                <div class="row p-2">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div
                                                            class="ec-vendor-detail-block ec-vendor-block-email space-bottom-30">
                                                            <div class="mb-3">
                                                                <input type="text" name="fname" id="fnaem"
                                                                    class="form-control" placeholder="Enart First Name"
                                                                    value="User First Name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="text" name="lname" id="lnaem"
                                                                    class="form-control" placeholder="Enart Last Name"
                                                                    value="User Last Name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="email" name="email" id="email"
                                                                    class="form-control" placeholder="Enart Your Email"
                                                                    value="example@gmail.com">
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="number" name="number" id="number"
                                                                    class="form-control" placeholder="Enart Nmber"
                                                                    value="123456780">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div
                                                            class="ec-vendor-detail-block ec-vendor-block-contact space-bottom-30">
                                                            <div class="ec-tab-wrapper ec-tab-wrapper-3">
                                                                <div class="ec-single-pro-tab-wrapper">
                                                                    <div class="ec-single-pro-tab-nav">
                                                                        <ul class="nav nav-tabs">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#ec-spt-nav-details-3"
                                                                                    role="tablist">Upload Picture</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-bs-toggle="tab"
                                                                                    data-bs-target="#ec-spt-nav-info-3"
                                                                                    role="tablist">Set Password</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-content  ec-single-pro-tab-content">
                                                                        <div id="ec-spt-nav-details-3"
                                                                            class="tab-pane fade show active">
                                                                            <div class="ec-single-pro-tab-desc">
                                                                                <input name="file1" type="file"
                                                                                    class="dropify" data-height="100" />
                                                                            </div>
                                                                        </div>
                                                                        <div id="ec-spt-nav-info-3"
                                                                            class="tab-pane fade">
                                                                            <div class="ec-single-pro-tab-moreinfo">
                                                                                <p><b>Update your password through the
                                                                                        button below</b> You will be
                                                                                    redirected to a new page and must
                                                                                    follow the instructions.</p>
                                                                                <a href="update-password"
                                                                                    class="border border-2 border-primary rounded-pill p-2 mt-2 setup-password"
                                                                                    target="_blank"
                                                                                    style="text-decoration: none;">
                                                                                    Set New Pasword <i
                                                                                        class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="reset" class="btn border border-2 " style="border-radius:8px;">Cancel
                                </button>
                                <button type="reset" class="btn text-light"
                                    style="border-radius:8px;background:#d51c3f;">Save Changes </button>
                            </div>
                        </form>
                    </div>
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <form action="" method="post">
                            <div class="ec-vendor-card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ec-vendor-block-profile">
                                            <div class="ec-vendor-block-img space-bottom-30">
                                                <h4 class="fw-bold">My Subscriptions </h4>
                                                <div class="row p-2">
                                                    <p>Current Plan</p>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <h6 class="card-title fw-bold pt-2">Pikmingle <span
                                                                            class="text-warning"><i
                                                                                class="fa-solid fa-crown"></i>
                                                                            Premium</span></h6>
                                                                    <br>
                                                                    <p class="card-text">Next payment 1,200.00 INR on
                                                                        Jun 16th, 2023. (VAT may apply)</p>
                                                                    <p class="card-text">Automatc renewl every month</p>
                                                                </div>
                                                                <div class="col-md-3 my-auto">

                                                                    <br>
                                                                    <a href="Cancel-renewal" class="text-info setup-password">Cancel
                                                                        renewal</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End User profile section -->



    <!-- Footer Start -->
    <footer class="ec-footer">
        <?php require 'include/footer.php' ?>
    </footer>
    <!-- Footer Area End -->


    <!-- JS Start -->
    <?php require 'include/index-js.php' ?>
    <!-- JS Area End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();
    </script>
</body>

</html>