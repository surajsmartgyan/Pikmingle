<!doctype html>
<html lang="en">

<head>
    <title>Sell_Content</title>
    <?php require 'include/head.php' ?>
    <!-- my css -->
    <link rel="stylesheet" href="include/dct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="include/style2.css"/>
   <style>
        .owl-carousel .owl-item {
            transition: all 0.3s ease-in-out;
        }

        .owl-carousel .owl-item .card {
            padding: 5px;
            position: relative;
        }

        .owl-carousel .owl-stage-outer {
            overflow-y: auto !important;
            padding-bottom: 40px;
        }

        .owl-carousel .owl-item img {
            height: 200px;
            object-fit: cover;
            border-radius: 3px;
            background-size: 100% 100%;
        }

        .owl-carousel .owl-item .card .name {
            position: absolute;
            bottom: -20px;
            left: 25%;
            color: black;
            font-size: 1.1rem;
            font-weight: 600;
            background-color: aquamarine;
            padding: 0.3rem 0.4rem;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .owl-carousel .owl-item .card {
            opacity: 0.2;
            transform: scale3d(0.8, 0.8, 0.8);
            transition: all 0.3s ease-in-out;
        }

        .owl-carousel .owl-item.active.center .card {
            opacity: 1;
            transform: scale3d(1, 1, 1);
        }

        .owl-carousel .owl-dots {
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .owl-theme .owl-dots .owl-dot span {
            height: 20px;
            background: #2a6ba3 !important;
            border-radius: 2px !important;
            opacity: 0.8;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            height: 13px;
            width: 13px;
            opacity: 1;
            transform: translateY(2px);
            background: #83b8e7 !important;
        }

        @media(min-width: 480.6px) and (max-width: 575.5px) {
            .owl-carousel .owl-item .card .name {
                left: 24%;
            }
        }

        @media(max-width: 360px) {
            .owl-carousel .owl-item .card .name {
                left: 30%;
            }
        }
        .nav-link-seller:hover{
            color:black !important;
        }
    </style>
</head>

<body>
    <header style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index">
                    <img src="assets/images/logo/BLACK LOGO.png" alt="" width="350" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <!-- <a class="nav-link nav-link-seller active" aria-current="page" href="index">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-seller" href="blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-seller" href="#">Help</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link nav-link-seller" href="seller_login" target="_blank"><i class="fa-solid fa-user"></i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-seller btn btn-primary btn-sm text-light px-4" href="seller_signup" target="_blank"style="background:#dc3545; border-radius:8px;">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="mx-3">
        <div class="container mt-5 mb-4">
            <div class="row justify-content-md-center mb-5">
                <div class="col-sm-6">
                    <h1>Sell photos, vectors & PSD designs on PikMingle</h1>
                    <p class="lh-lg">Become a PikMingle contributor and make money selling your images and designs online.</p>
                    <div class="row my-4">
                        <div class="col-2 my-auto">
                            <h2 class=" text-center text-danger"><i class="fa-solid fa-pen"></i></h2>
                        </div>
                        <div class="col-10">
                            <h6> <b>Create</b> photos, vectors, illustrations, mockups, etc. We embrace all types of creativity.</h6>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-2 my-auto">
                            <h2 class=" text-center text-primary"><i class="fa-solid fa-upload"></i></h2>
                        </div>
                        <div class="col-10">
                            <h6> <b>Upload</b> your graphic resources to PikMingle through our intuitive and easy-to-use tool.</h6>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-2 my-auto">
                            <h2 class="text-center text-warning"><i class="fa-solid fa-hand-holding-dollar"></i></h2>
                        </div>
                        <div class="col-10">
                            <h6> <b>Make money</b> per every download your resources get. As simple as that.</h6>
                        </div>
                    </div>
                    <a href="seller_signup" class="btn  text-light" style="background:#dc3545; border-radius:8px;">Become a contributor</a>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="assets/images/logo/seler.webp" class="img-fluid rounded-top" alt="">
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <h1 class="text-center">Enjoy creative freedom</h1>
            <p class="text-center">At PikMingle, there’s room for your creativity, whatever your talent is. <br> Choose the graphic
                resources you want to sell and upload them to our platform.</p>
            <div class="row my-5">
                <div class="col-md-6 my-auto">
                    <h1 class="text-secondary">Sell Photos</h1>
                    <p>Find your concept, capture it and make money selling outstanding stock photos online with PikMingle.</p>
                    <button type="button" class="btn" style="border:2px solid #dc3545;border-radius:8px;">Photo guidelines</button>
                </div>
                <div class="col-md-6 text-center mb-2">
                    <img src="assets/images/product-image/sell photo.webp" class="img-fluid rounded-top w-75" alt="" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                </div>

                <div class="col-md-6 text-center mb-2">
                    <img src="assets/images/product-image/Sell illustrations.webp" class="img-fluid rounded-top w-75" alt="" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                </div>
                <div class="col-md-6 my-auto">
                    <h1 class="text-secondary">Sell illustrations & vector art</h1>
                    <p>Create quality and useful designs that sell best online: banners, wedding invitations, backgrounds... There are countless options!</p>
                    <button type="button" class="btn" style="border:2px solid #dc3545;border-radius:8px;">Vectors guidelines</button>
                </div>

                <div class="col-md-6 my-auto">
                    <h1 class="text-secondary">Sell PSD designs</h1>
                    <p>Design unique and eye-catching mockups and templates that show your true potential and make you earn money online.</p>
                    <button type="button" class="btn" style="border:2px solid #dc3545;border-radius:8px;">PSD guidelines</button>
                </div>
                <div class="col-md-6 text-center mb-2">
                    <img src="assets/images/product-image/sell psd.webp" class="img-fluid rounded-top w-75 p-1" alt="" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <h2 class="text-center fw-bold">Why become a PikMingle contributor?</h2>
            <div class="row my-5 justify-content-around">
                <div class="col-md-3 bg-white py-4" style="border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h1 class="text-primary"><i class="fa-solid fa-hand-holding-dollar"></i></h1>
                    <p class="fw-bold lh-lg">Stable income</p>
                    <p class="text-justify">We offer you more than one way to make money selling your stock photography & designs. <b>Get paid for every download</b> your resources get and boost your earnings by participating in our special promos and Referral Program.</p>
                </div>
                <div class="col-md-3 bg-white py-4" style="border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h1 class="text-primary"><i class="fa-solid fa-earth-americas"></i></h1>
                    <p class="fw-bold lh-lg">Worldwide visibility</p>
                    <p>Contributors’ resources get over <b>75M downloads every day,</b> making PikMingle the best website for selling your photos, vector art & PSD files</p>
                </div>
                <div class="col-md-3 bg-white py-4" style="border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h1 class="text-primary"><i class="fa-solid fa-book"></i></h1>
                    <p class="fw-bold lh-lg">Tips & inspiration</p>
                    <p>Get <b>personalized guidance and support</b> along the process. Receive feedback before publishing your graphic resources and enjoy first-hand tips from our team to help you make money by selling your stock images with us.</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn text-light my-4" style="background:#dc3545;border-radius:8px;">Become a contributor</a>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <h2 class="text-center fw-bold">Intuitive tool designed to fit you</h2>
            <p class="text-center my-3">Manage your photos, vectors, and PSD files easily from one single place.</p>
            <div class="tab_container">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1"><i class="fa-solid fa-upload text-primary p-3" style="background: #d4f0fc; border-radius: 10px;"></i><br><span>Batch uploading</span></label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2"><i class="fa-solid fa-delete-left fa-rotate-180 text-danger p-3" style="background: #fcded4; border-radius: 10px;"></i><br><span>Add tags easily</span></label>

                <input id="tab3" type="radio" name="tabs">
                <label for="tab3"><i class="fa-solid fa-chart-column text-warning p-3" style="background: #fcefd4; border-radius: 10px;"></i><br><span>Services</span></label>

                <section id="content1" class="tab-content py-5" style="background: #eaf9ff;">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="assets/images/product-image/Batch uploading.webp" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="col-md-6 text-dark my-auto">
                            <h3 class="fw-bold my-2">Batch uploading</h3>
                            <p>Uploading resources to the contributor panel is fast and smooth. Save time by uploading a large number of resources at once.</p>
                            <p><b>Multiple resources:</b> Upload different types of resources at the same time (photos, illustrations, or PSD designs).</p>
                            <p><b>Background loading:</b> There’s no need to wait for your resources to be uploaded. Navigate the panel and check other information simultaneously.</p>
                            <a href="seller_signup" class="btn text-light my-3 px-4" style="background:#dc3545;border-radius:8px;">Sell now</a>
                        </div>
                    </div>
                </section>

                <section id="content2" class="tab-content py-5" style="background: #feefef;">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="assets/images/product-image/Add tags easily.webp" class="img-fluid rounded-top" alt="">
                        </div>
                        <div class="col-md-6 text-dark my-auto">
                            <h3 class="fw-bold my-2">Add tags easily</h3>
                            <p><b>Add tags to multiple files:</b> Streamline the tagging process by adding tags to more than one resource at the same time.</p>
                            <p><b>Metadata draft:</b> Customize your draft with the most common tags to use them in resources with similar metadata. Practical and fast.</p>
                            <p><b>CSV file:</b> Import a CSV file with the tags and titles associated with your resources and the system will automatically retrieve them.</p>
                            <a href="seller_signup" class="btn  text-light my-3 px-4" style="background:#dc3545;border-radius:8px;">Sell now</a>
                        </div>
                    </div>
                </section>

                <section id="content3" class="tab-content py-5" style="background: #fdf4e3;">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="assets/images/product-image/Measure your impact.webp" class="img-fluid rounded-top" alt="">
                        </div>
                        <div class="col-md-6 text-dark my-auto">
                            <h3 class="fw-bold my-2">Measure your impact</h3>
                            <p>From the contributor panel, you can track the status of your resources, monitor the downloads that your stock images & designs get, and check your earnings</p>
                            <p><b>Performance history:</b> Get an overview of how your resources are performing on PikMingle. Check the downloads, earnings, and statistics to make the most of your profile</p>
                            <p><b>Monitor your resources:</b> Keep track of the status of your resources. If any of your PSD resources, designs, or photos are rejected, you’ll also receive detailed feedback on how to optimize them.</p>
                            <p><b>CVS file:</b> Download all your statistics for more in-depth monitoring.</p>
                            <a href="seller_signup" class="btn  text-light my-3 px-4" style="background:#dc3545;border-radius:8px;">Sell now</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="container my-4 bg-primary py-5" style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;">
            <div class="row text-center py-4">
                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <h3 class="fw-bold text-light">
                            Join in on
                            something big
                        </h3>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <h3 class="fw-bold text-light">
                            + <span class="counter-count">34</span>k
                        </h3>
                    </div>
                    <h5 class="fw-bold">CONTRIBUTORS</h5>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <h3 class="fw-bold text-light">
                            <span class="counter-count">2</span>M
                        </h3>
                    </div>
                    <h5 class="fw-bold">DOWNLOADS/DAY</h5>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <h3 class="fw-bold text-light">
                            <span class="counter-count">50</span>M
                        </h3>
                    </div>
                    <h5 class="fw-bold">VISITS</h5>
                </div>
            </div>
        </div>

        <div class="container mb-4 my-5">
            <h2 class="text-center fw-bold">Discover the benefits of our community</h2>
            <p class="text-center my-3">PikMingle's contributor community is formed by thousands of photographers and designers from all over the world. Connect with other talented people and enjoy the benefits of our community.</p>
            <div class="row my-5 justify-content-around">
                <div class="col-md-6">
                    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <img src="assets/images/product-image/Referral Program.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Referral Program</h4>
                            <p class="card-text">Participate in our Referral Program: tell your friends about us and make more money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <img src="assets/images/product-image/Become a Brand Ambassador.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Become a Brand Ambassador</h4>
                            <p class="card-text">Spread the word about PikMingle’s contributor program in your community and enjoy awesome perks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-4 my-3">
            <h2 class="text-center fw-bold">Stories from our contributors</h2>
            <div class="row my-5 justify-content-around">
                <div class="col-md-3 p-2">
                    <div class="card p-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <img src="assets/images/product-image/contributors1.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-success">FEATURED ARTIST</h6>
                            <h5 class="card-title fw-bold my-3">PikMingle PROfiles: The Freelancer Life With Illustrator Alexander Gusev</h5>
                            <p class="card-text">by <b class="text-success">PikMingle</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card p-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <img src="assets/images/product-image/contributors2.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-success">FEATURED ARTIST</h6>
                            <h5 class="card-title fw-bold my-3">PikMingle PROfiles: How Prakasit Became the First Brand Ambassador</h5>
                            <p class="card-text">by <b class="text-success">PikMingle</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card p-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; height: 466px;">
                        <img src="assets/images/product-image/contributors2.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-success">FEATURED ARTIST</h6>
                            <h5 class="card-title fw-bold my-2">PikMingle PROfiles: The Key to Success with Graphic Designer Mari Carmen</h5>
                            <p class="card-text">by <b class="text-success">PikMingle</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="card p-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; height: 466px;">
                        <img src="assets/images/product-image/contributors3.webp" class="img-fluid rounded-top" alt="">
                        <div class="card-body my-5">
                            <h5 class="card-title fw-bold my-3">Get inspired by other contributors stories.</h5>
                            <p class="card-text">by <b class="text-success">PikMingle</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5 py-5" style="border-radius: 20px; background-color: #f0f0f0; background: url(assets/images/product-image/join.webp); background-size: 100% 100%;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="fw-bold">Join now as a PikMingle contributor.
                        <br> The world awaits your creativity
                    </h3>
                    <a href="seller_signup" class="btn btn-primary rounded mt-4">Become a contributor</a>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="text-center fw-bold">Testimonials</h2>
            <div class="owl-carousel owl-theme mt-5">
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="100">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name">
                            Denis Richie
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name">
                            Lisa Sthalekar
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name">
                            Elizabith Richie
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name">
                            Daniel Xavier
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/1832959/pexels-photo-1832959.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name">
                            Emma Watson
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="img-card">
                            <img src="https://images.pexels.com/photos/718261/pexels-photo-718261.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="w-100">
                        </div>
                        <div class="testimonial text-justify mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                            saepe quo natus aut accusantium alias blanditiis.
                        </div>
                        <div class="name" >
                            Mohammad Imran
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <h2 class="text-center fw-bold my-4">Frequently Asked Questions</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What can I sell on PikMingle?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                On PikMngle, we embrace all types of creativity. You can sell quality photographs, vectors, illustrations, mockups, and templates online once you become a PikMngle contributor. Millions of users download stock content from PikMngle every day, which means our site is the best place to sell your images and designs.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I become a PikMingel contributor?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You must register and create a contributor account. Once you’re registered, upload and send 10 resources—they can be vectors, illustrations, photos, or PSD files. Our team will review them and check if they meet our quality standards, so it’s important that they show your true potential. You’ll become a contributor and start making money once your resources are published.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I sell my photos online?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Register as a PikMingel contributor, upload quality stock photos, and make money. Read our photos guidelines to make sure they align with PikMingel technical and quality standards. We’ll guide you through the process, so selling photographs on PikMingel is easy even for beginners.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                How can I sell my vector art online?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To make money by selling your vectors and illustrations on Freepik, register as a contributor and upload your best designs. Read our guidelines to create quality vector art that sells best.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                How can I sell my PSD designs online?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                If you have quality mockups and templates in Photoshop Document’s file format, you can sell them online with Freepik. Register as a contributor and upload your PSD designs to start making money. Before putting your PSD files on sale, read our guidelines to ensure they meet our standards.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded m-2" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                How much do I earn?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Contributors get paid for every download their stock content gets. This is one of the reasons that makes Freepik the best place to sell your photos, vectors, and PSD designs online.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include('include/footer.php') ?>
    <!-- Footer -->
    <?php include('include/jslink.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var silder = $(".owl-carousel");
            silder.owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                items: 1,
                stagePadding: 20,
                center: true,
                nav: false,
                margin: 50,
                dots: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    575: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
    </script>
</body>

</html>