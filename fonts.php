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
                    <div class="col-md-2"><span id="ft2" onclick="changeStyle()" style="display: none; padding:10px; background:#f8f9fa; margin-top:10px;border-radius: 5px; text-align:center;">
                    <i class="fa-solid fa-sliders fw-bold" aria-hidden="true"></i> Filters </span></div>
                    <div class="col-md-8 text-center" style="margin-top:10px;">
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h" style="border-radius: 10px;">
                            All fonts</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h" style="border-radius: 10px;">
                            Funny</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h"
                            style="border-radius: 10px;">Happy</a></a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h" style="border-radius: 10px;">Creative</a>
                        <a href="#" class="btn btn-sm border border-secondary font-icons-h" style="border-radius: 10px;">Brush</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 border-end pt-2" id="myDiv">
            <h3 class="ec-sidebar-title"><img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/sentence-case--v1.png" alt="sentence-case--v1"/> Type</h3>
                <div class="row mb-2 ">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">All fonts</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Serif</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Sans Serif</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Display</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Slab Serif</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Script</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Monospace</a></a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Creative</a>
                        <a href="#" class="btn btn-sm border border-secondary mb-2 font-icons-h" style="border-radius: 10px;">Brush</a>
                    </div>
                </div>
               
            </div>
            <div class="col-sm-9 px-5" id="col3">
                <div class="row pt-3">
                    <h3 class="text-center">Free Fonts</h3>
                    <p class="text-center px-5">Discover and install our selection of free fonts, include them in your
                        projects and make incredible designs! Book covers, merchandise, billboards, magazines. Start
                        creating now!</p>
                </div>
                <div class="row mt-4" id="row1">
                    <h6 class="fw-bold">Type something and try out our free fonts</h6>
                    <div class="row">
                        <div class="col-sm-5">
                            <input type="text"placeholder="The quick brown fox jumps over the lazy dog" style="border:1px solid #c9c9ca">
                        </div>
                        <div class="col-sm-4">
                        
                            <button>A <br/>24pt</button>
                            <button class="bg-light">A <br/>36pt</button>
                            <button>A <br/>48pt</button>
                            <button>A <br/>72pt</button>
                        </div>
                        <div class="col-sm-3 text-end pt-3">
                            <button class="border p-2 bg-light"><i class="fa-solid fa-th-list fw-bold" aria-hidden="true"></i></button>
                            <button class="border p-2"><i class="fa-solid fa-th fw-bold" aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
                <br/>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto">
                        <a href="font-view">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <img class="main-image" src="assets/images/fonts/fonts-img.webp" alt="font" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content my-auto" id="text1">
                        <p>Furry Monster <span class="text-secondary">1 style</span></p>
                        <a href="font-view">
                            <div class="ec-product-inner">
                                <img src="assets/images/fonts/font.webp" class="img-fluid" alt="">
                            </div>
                        </a>
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


    <!-- font page with searchbar start -->

    <!-- font page with searchbar end -->

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
    <!-- Filter  scritp start -->
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
            var txt1 = document.getElementById("text1");
            var rw1 = document.getElementById("row1");
            if (window.innerWidth <= 280) {

                if(element.style.display !== "none" && element2.style.display !== "none"){
                    element.style.display = "none";
                    element2.style.display = "none";
                    ftt2.style.display = "block";
                    ftt2.style.cursor = "pointer";
                    coll1.style.display = "none";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";
                }
                else{
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

                if(element.style.display !== "none" && element2.style.display !== "none"){
                    element.style.display = "none";
                    element2.style.display = "none";
                    ftt2.style.display = "none";
                    ftt2.style.cursor = "pointer";
                    coll1.style.display = "none";
                    coll2.style.display = "none";
                    coll2.style.marginLeft = "0";
                    coll3.style.marginLeft = "0";
                }
                else{
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

                rw1.style.fontSize="60%";
                text1.style.transform="translateY(-45px)";
            }
            else if (window.innerWidth < 820) {
                text1.style.transform="translateY(-55px)";
            }
            else if (window.innerWidth <= 912) {
                rw1.style.fontSize="60%";
                text1.style.transform="translateY(-55px)";
            }
            else if (window.innerWidth <= 1024) {

                text1.style.transform="translateY(-20px)";
            }
            else {

                text1.style.transform="translateY(0px)";
                rw1.style.fontSize="100%";
            }
        }
        applyStylesBasedOnScreenSize();
        window.addEventListener('resize', applyStylesBasedOnScreenSize);
    </script>
    <!-- Filter script End -->
</body>

</html>