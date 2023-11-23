<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/head.php' ?>
    <link rel="stylesheet" href="include/style2.css"/>
   
</head>

<body class="shop_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <div class="main"
        style="background-image: url('assets/images/bg/top1-bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <!-- Header start  -->
        <header class="ec-header" style="background:transparent;">
            <?php require 'include/header.php' ?>
        </header>
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row py-2">
                    <div class="header-logo text-center">
                        <a href="index">
                            <img src="assets/images/logo/whitelogo.png" alt="Site Logo" style="width:230px;" />
                            <img class="dark-logo" src="assets/images/logo/BLACK LOGO.png" alt="Site Logo"
                                style="display: none;" />

                        </a>
                    </div>
                </div>

                <section class="section ec-instagram-section">
                    <div class="row">
                        <h2 class="text-center text-white" style="font-family: Poppins, sans-serif;font-weight: 400;">
                            All the assets you need, in one place</h2>
                        <p class="text-center text-white"
                            style="font-family: Poppins, sans-serif;font-weight: 400;font-size: 20px;">Find and download
                            the best high-quality photos, designs, and mockups</p>
                    </div>
                    <!--<div class="owl-slider">
                        <div id="carousel" class="owl-carousel">-->

                    <div class="row p-4">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="align-self-center ec-header-search p-4">
                                <div class="header-search px-5">
                                    <form class="ec-search-group-form bg-white" action="#">
                                        <div class="ec-search-select-inner custom-select">
                                            <ul class="list-unstyled" id="ec-search-cat"
                                                style="color:black; font-family: 'Nunito', 'Font Awesome 5 Free', 'Font Awesome 5 Brands';font-weight: 200; width: 170px !important;">
                                                <li class="init"> &#xf02e; &nbsp; Assets</li>
                                                <li data-value="value 1"><i class="fa-solid fa-vector-square"></i>
                                                    &nbsp; Vectors</li>
                                                <li data-value="value 2">&#xf03e; &nbsp; Photos</li>
                                                <li data-value="value 3"><i class="fas fa-video-camera"
                                                        aria-hidden="true"></i> &nbsp; Videos</li>
                                                <li data-value="value 1">&#xf1c4; &nbsp; PSD</li>
                                                <li data-value="value 2">&#xf247; &nbsp; Icons</li>
                                                <li data-value="value 3" class="fa hrr">&#xf1c4; &nbsp; Free</li>
                                                <li data-value="value 3" class="fa">&#xf1cd; &nbsp; Premiums</li>
                                            </ul>
                                        </div>

                                        <input onkeyup="delet()" id="searchtxt" class="form-control"
                                            placeholder="Search" type="text">
                                        <button class="search_submit" type="reset"><img width="26" height="26"
                                                src="https://img.icons8.com/metro/26/delete-sign.png" alt="delete-sign"
                                                class="svg_img search_svg" id="deletebtn" /></button>
                                        <button class="search_submit" type="submit"><img
                                                src="assets/images/icons/search.svg" class="svg_img search_svg"
                                                alt="" /></button>
                                    </form>
                                </div>
                            </div>

                            <center>
                                <button class="btn btn-sm header-btn px-2 py-0 border-radius-0"
                                    style="border-radius:0;"> <i class="fas fa-search "></i>&nbsp; Offer</button>&nbsp;
                                <button class="btn header-btn px-2 py-0" style="border-radius:0;"> <i
                                        class="fas fa-search"></i>&nbsp; Certificate</button>&nbsp;
                                <button class="btn header-btn px-2 py-0" style="border-radius:0;"> <i
                                        class="fas fa-search"></i>&nbsp; Onam</button>
                            </center>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row pb-5">
                    </div>
                </section>
            </div>
        </div>
        <!-- Header End  -->
    </div>

    <!--serch baar section start -->
    <div class="container-fluid mb-5 mt-2">
        <div class="row sticky-top border bg-white">
            <div class="col-sm-3 border-end" id="col1">
                <div class="filter1 pb-2" id="myDiv2">
                    <span id="ft1"><i class="fa-solid fa-sliders fw-bold" aria-hidden="true"></i> Filters </span>
                    <button class="bg-light px-3 py-2" onclick="changeStyle()" id="bt1" style="border-radius: 5px;">
                        <i class="fa-solid fa-arrow-left fw-bold"></i>
                    </button>
                </div>
            </div>
            <div class="col-sm-9" id="col2">

                <div class="row mb-2">
                    <div class="col-md-2"><span id="ft2" onclick="changeStyle()"
                            style="display: none; padding:10px; background:#f8f9fa; margin-top:10px;border-radius: 5px; text-align:center;">
                            <i class="fa-solid fa-sliders fw-bold" aria-hidden="true"></i> Filters </span></div>
                    <div class="col-md-8 text-center" style="margin-top:10px;">
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">
                            All images</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">
                            Vectors</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">Video</a></a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">Photos</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">PSD</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Filter product section start -->
            <div class="col-sm-3 border-end pt-2" id="myDiv">
                <div class="ec-sidebar-heading">
                    <h1>Filter Products By</h1>
                </div>
                <h3 class="ec-sidebar-title"><i class="fa-brands fa-stack-overflow"></i> Category</h3>
                <div class="row mb-2 ">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">JPG</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">PNG</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">PSD</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">VECTORS</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">BACKGROUNDS</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">GIF</a>
                    </div>
                </div>
                <h3 class="ec-sidebar-title mt-4"><i class="fa-solid fa-crown"></i> License</h3>
                <div class="row mb-2 ">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">FREE</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;"><i class="fa-solid fa-crown text-warning "></i> PREMIUMS</a>
                    </div>
                </div>
                <h3 class="ec-sidebar-title mt-4"><i class="fa-brands fa-airbnb fw-bold"></i> AI-generated</h3>
                <div class="row mb-2 ">
                    <div class="col-md-12 ">
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">EXCLUDE AI-GENERATED</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">ONLY AI-GENERATED</a>
                    </div>
                </div>
                <h3 class="ec-sidebar-title mt-4"><i class="fa-solid fa-rotate-right"></i> Orientation</h3>
                <div class="row mb-2 ">
                    <div class="col-md-12 ">
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">HORIZONTAL</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">VERTICAL</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">SQUARE</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h"
                            style="border-radius: 10px;">PANORAMIC</a>
                    </div>
                </div>
            </div>
            <!-- Filter product section end -->
            <div class="col-sm-9 px-5" id="col3">
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <a href="fullview">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/product-image/smartest.webp"
                                            alt="Product" />
                                        <span class="percentage"><img
                                                src="https://img.icons8.com/external-others-ghozy-muhtarom/32/null/external-premium-award-flat-others-ghozy-muhtarom.png" /></span>
                                        <a href="#" class="quickview px-1 " data-link-action="quickview"
                                            title="Pikmingle" style="width: auto;">
                                            <!-- <span> Mr. Ravi </span> -->
                                            <img src="assets/images/logo/ONLY LOGO .png" class="svg_img pro_svg" alt="">
                                        </a>
                                        <div class="ec-pro-actions">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                    class="fa-brands fa-pinterest text-dark"></i></a>
                                            <button title="Add To Cart" class=" add-to-cart"><img
                                                    src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                                                Add To Cart</button>
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <a href="fullview">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/main-slider-banner/s2.jpg"
                                            alt="Product" />
                                        <!-- <span class="percentage"><img src="https://img.icons8.com/external-others-ghozy-muhtarom/32/null/external-premium-award-flat-others-ghozy-muhtarom.png" /></span> -->
                                        <a href="#" class="quickview px-1 " data-link-action="quickview"
                                            title="Pikmingle" style="width: auto;">
                                            <!-- <span> Mr. Ravi </span> -->
                                            <img src="assets/images/logo/ONLY LOGO .png" class="svg_img pro_svg" alt="">
                                        </a>
                                        <div class="ec-pro-actions">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                    class="fa-brands fa-pinterest text-dark"></i></a>
                                            <button title="Add To Cart" class=" add-to-cart"><img
                                                    src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                                                Add To Cart</button>
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <a href="fullview">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/instragram-image/4.jpg"
                                            alt="Product" />
                                        <span class="percentage"><img
                                                src="https://img.icons8.com/external-others-ghozy-muhtarom/32/null/external-premium-award-flat-others-ghozy-muhtarom.png" /></span>
                                        <a href="#" class="quickview px-1 " data-link-action="quickview"
                                            title="Pikmingle" style="width: auto;">
                                            <!-- <span> Mr. Ravi </span> -->
                                            <img src="assets/images/logo/ONLY LOGO .png" class="svg_img pro_svg" alt="">
                                        </a>
                                        <div class="ec-pro-actions">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                    class="fa-brands fa-pinterest text-dark"></i></a>
                                            <button title="Add To Cart" class=" add-to-cart"><img
                                                    src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                                                Add To Cart</button>
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <a href="fullview">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/instragram-image/2.jpg"
                                            alt="Product" />
                                        <!-- <span class="percentage"><img src="https://img.icons8.com/external-others-ghozy-muhtarom/32/null/external-premium-award-flat-others-ghozy-muhtarom.png" /></span> -->
                                        <a href="#" class="quickview px-1 " data-link-action="quickview"
                                            title="Pikmingle" style="width: auto;">
                                            <!-- <span> Mr. Ravi </span> -->
                                            <img src="assets/images/logo/ONLY LOGO .png" class="svg_img pro_svg" alt="">
                                        </a>
                                        <div class="ec-pro-actions">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                    class="fa-brands fa-pinterest text-dark"></i></a>
                                            <button title="Add To Cart" class=" add-to-cart"><img
                                                    src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                                                Add To Cart</button>
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <img class="main-image" src="assets/images/instragram-image/7.jpg" alt="Product">
                                    <span class="percentage bg-secondary bg-gradient fw-bold px-4">ADS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ec Pagination Start -->
                <div class="ec-pro-pagination mt-1">
                    <a href="#" class=" hvr-icon-wobble-horizontal"
                        style="background:#dc3545; border-radius:8px; padding:20px 40px ;">Next page</a>
                </div>
                <!-- Ec Pagination End -->
            </div>
        </div>
    </div>
    <!--serch baar section end -->

    <!--modals-->
    <?php require 'include/modal.php' ?>
    <!-- Footer Start -->
    <footer class="ec-footer">
        <?php require 'include/footer.php' ?>
    </footer>
    <!-- Footer Area End -->

    <!-- JS Start -->
    <?php require 'include/jslink.php' ?>
    <!-- JS Area End -->
    <!-- Search Bar scritp start -->
    <script>
        function changeStyle() {
            var ftt1 = document.getElementById("ft1");
            var ftt2 = document.getElementById("ft2");
            var btt1 = document.getElementById("bt1");
            var coll1 = document.getElementById("col1");
            var coll2 = document.getElementById("col2");
            var coll3 = document.getElementById("col3");
            var element = document.getElementById("myDiv");
            var element2 = document.getElementById("myDiv2");
            if (element.style.display !== "none" && element2.style.display !== "none") {
                element.style.display = "none";
                element2.style.display = "none";
                ftt2.style.display = "block";
                ftt2.style.cursor = "pointer";
                coll1.style.display = "none";
                coll2.style.marginLeft = "20%";
                    coll3.style.marginLeft = "16%";
                /* if (coll1.style.display = "none") {
                    coll2.style.marginLeft = "0%";
                    coll3.style.marginLeft = "0%";
                }
                else {
                    coll2.style.marginLeft = "20%";
                    coll3.style.marginLeft = "16%";
                } */

            }
            else {
                element.style.display = "block";
                ftt2.style.display = "none";
                ftt2.style.cursor = "pointer";
                element2.style.display = "block";
                element2.style.justifyContent = "space-between";
                element2.style.display = "flex";
                coll1.style.display = "block";
                coll2.style.marginLeft = "0";
                coll3.style.marginLeft = "0";
            }

        }

        function applyStylesBasedOnScreenSize() {
            var ftt1 = document.getElementById("ft1");
            var ftt2 = document.getElementById("ft2");
            var btt1 = document.getElementById("bt1");
            var coll1 = document.getElementById("col1");
            var coll2 = document.getElementById("col2");
            var coll3 = document.getElementById("col3");
            var element = document.getElementById("myDiv");
            var element2 = document.getElementById("myDiv2");
            if (window.innerWidth <= 280) {

                if (element.style.display !== "none" && element2.style.display !== "none") {
                    element.style.display = "none";
                    element2.style.display = "none";
                    ftt2.style.display = "block";
                    ftt2.style.cursor = "pointer";
                    coll1.style.display = "none";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";
                }
                else {
                    element.style.display = "block";
                    ftt2.style.display = "none";
                    ftt2.style.cursor = "pointer";
                    element2.style.display = "block";
                    element2.style.justifyContent = "space-between";
                    element2.style.display = "flex";
                    coll1.style.display = "block";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";
                }
            }
            else if (window.innerWidth <= 390) {

                if (element.style.display !== "none" && element2.style.display !== "none") {
                    element.style.display = "none";
                    element2.style.display = "none";
                    ftt2.style.display = "none";
                    ftt2.style.cursor = "pointer";
                    coll1.style.display = "none";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";
                }
                else {
                    element.style.display = "none";
                    ftt2.style.display = "none";
                    ftt2.style.cursor = "pointer";
                    element2.style.display = "none";
                    element2.style.justifyContent = "space-between";
                    element2.style.display = "flex";
                    coll1.style.display = "none";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";

                }
            }

            else if (window.innerWidth <= 768) {

            }
            else if (window.innerWidth < 820) {

            }
            else if (window.innerWidth <= 912) {

            }
            else if (window.innerWidth <= 1024) {

            }
            else {

            }
        }
        applyStylesBasedOnScreenSize();
        window.addEventListener('resize', applyStylesBasedOnScreenSize);
    </script>
    <!-- Search Bar script End -->

</body>

</html>