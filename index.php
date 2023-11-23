<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'include/csslink.php' ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="include/style2.css"/>
</head>

<body>

	<div id="ec-overlay"><span class="loader_img"></span></div>
	<div class="main"
		style="background-image: url('assets/images/bg/top1-bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
		<!-- Header start  -->
		<header class="ec-header" style="background:transparent;">
			<?php require 'include/header.php' ?>
		</header>
		<!-- Header End  -->
		<?php //require 'include/slider.php';?>
		<!---- top-nav-bar ----->
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
												<li class="init target" onclick="handleItemClick(this)"><i
														class="fa-solid fa-shapes"></i>&nbsp; Assets</li>
												<li data-value="value 1" onclick="handleItemClick(this)"><i
														class="fa-solid fa-vector-square"></i> &nbsp; Vectors</li>
												<li data-value="value 2" onclick="handleItemClick(this)"><i
														class="fa fa-image"></i> &nbsp; Photos</li>
												<li data-value="value 3" onclick="handleItemClick(this)"><i
														class="fas fa-video-camera" aria-hidden="true"></i> &nbsp;
													Videos</li>
												<li data-value="value 1" onclick="handleItemClick(this)"><i
														class="fa fa-file-powerpoint"></i> &nbsp; PSD</li>
												<li data-value="value 2" onclick="handleItemClick(this)"> <i
														class="fa fa-dot-circle"></i> &nbsp; Icons</li>
												<li data-value="value 3" class="fa hrr target"
													onclick="handleItemClick(this)"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5
													 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 
													32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg> &nbsp;
													Free</li>
												<li data-value="value 3" onclick="handleItemClick(this)"
													class="target fa"><!--<i class="fa fa-square"></i>--> <i
														class='fas fa-crown text-warning'></i> &nbsp; Premium</li>
											</ul>
										</div>

										<input onkeyup="delet()" class="form-control text-dark" id="searchContent"
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
						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg"
										class="hvr-grow w-100" style="height: 90px; border-radius: 13px;"></a>
								<p class="text-center text-white pt-1">JPG Images</p>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/product-image/video-gif.gif"
										class="hvr-grow w-100" style="height: 90px;border-radius: 13px;"></a>
								<p class="text-center text-white pt-1">Video</p>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/product-image/psd.gif"
										class="hvr-grow w-100" style="height: 90px; border-radius: 13px"></a>
								<p class="text-center text-white pt-1">PSD</p>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/product-image/Textures.gif"
										class="hvr-grow w-100" style="height: 90px; border-radius: 13px;"></a>
								<p class="text-center text-white pt-1">PNG</p>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/product-image/Vectors.gif"
										class="hvr-grow w-100" style="height: 90px; border-radius: 17px;"></a>
								<p class="text-center text-white pt-1">Vectors</p>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="item">
								<a href="#" target="_blank"><img src="assets/images/product-image/Illustration.gif"
										class="hvr-grow w-100" style="height: 90px; border-radius: 17px;"></a>
								<p class="text-center text-white pt-1">Illustration</p>
							</div>
						</div>
					</div>
				
				</section>


			</div>
		</div>
	</div>
<!-- signup btn start -->
<section>
<div class="container-fluid" style="background:#cdf7d9">
<div class="row py-4 text-center">
	<div class="col-sm-12 col-md-12 col-xl-12">
		<span style="font-size:15px;">Create an account to enjoy more free downloads</span>
		<span class="ec-offer-btn hvr-grow ms-2"><a href="seller" class="btn btn-lg btn-primary"
								style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; background-color: #d51c3f;border-radius:8px;">
								SignUp Now <i class="ecicon eci-angle-double-right"
									aria-hidden="true"></i></a></span>
	</div>
</div>
</div>
</section>

<!-- signup btn end  -->
	<!--- top-nav-bar end--------->

	<section class="section ec-ser-spe-section section-space-p mobile1 mb-5" style="background:#f7f7f7;">
		<div class="container py-4" data-animation="fadeIn">
			<h2 class="ec-title text-center">Explore trending <span class="text-success">categories on PikMingle</span>
			</h2>
			<p class="text-center">Check what’s popular on PikMingle and make your project look trendy and professional.
			</p>
			<div class="row">
				<div class="col-md-6 my-auto">
					<div class="ec-spe-pro-image" id="mob1">
						<img class="img-responsive w-100 text-center" src="assets/images/offer-image/4.jpg" alt="top"
							style=" height:330px; background-size: 100% 100%; border-radius: 15px 0 0 15px;">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image" style="position: relative;overflow:hidden;">
								<video class="w-100 rounded hvr-grow" autoplay muted loop playsinline preload="metadata"
									style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
									<source
										src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
										type="video/mp4">
								</video>
								<span class="percentage"
									style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
									<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
								</span>
							</div>
						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image" style="position: relative;overflow:hidden;">
								<video class="w-100 rounded hvr-grow" autoplay muted loop playsinline preload="metadata"
									style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
									<source src="assets/images/offer-image/dog.mp4" type="video/mp4">
								</video>
								<span class="percentage"
									style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
									<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
								</span>
							</div>
						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image" style="position: relative;overflow:hidden;">
								<video class="w-100 rounded hvr-grow" autoplay muted loop playsinline preload="metadata"
									style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
									<source src="assets/images/offer-image/sport.mp4" type="video/mp4">
								</video>
								<span class="percentage"
									style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
									<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
								</span>
							</div>

						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image" style="position: relative;overflow:hidden;">
								<video class="w-100 rounded hvr-grow" autoplay muted loop playsinline preload="metadata"
									style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
									<source src="assets/images/offer-image/cat.mp4" type="video/mp4">
								</video>
								<span class="percentage"
									style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
									<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>		
	</section>
	<section class="section ec-instagram-section section-space-pt mobile" style="background">
		<h3 class="ec-title fw-bold my-4">Explore trending categories on <span class="text-success"> PikMingle</span>
		</h3>
		<div class="ec-insta-wrapper" data-animation="fadeIn">
			<div class="ec-insta-outer">
				<div class="insta-auto py-4">
					<div class="ec-insta-item">
						<div class="ec-inner">
							<a href="#"><img src="assets/images/offer-image/4.jpg" class="hvr-grow"
									style="height: 150px;">
							</a>
						</div>
					</div>
					<div class="ec-insta-item">
						<div class="ec-inner">
							<a href="#"><img src="assets/images/instragram-image/3.jpg" class="hvr-grow"
									style="height: 150px;">
							</a>
						</div>
					</div>
					<div class="ec-insta-item">
						<div class="ec-inner">
							<a href="#"><img src="assets/images/instragram-image/3.jpg" class="hvr-grow"
									style="height: 150px;">
							</a>
						</div>
					</div>
					<div class="ec-insta-item">
						<div class="ec-inner">
							<a href="#"><img src="assets/images/instragram-image/3.jpg" class="hvr-grow"
									style="height: 150px;">
							</a>
						</div>
					</div>
					<div class="ec-insta-item">
						<div class="ec-inner">
							<a href="#"><img src="assets/images/instragram-image/3.jpg" class="hvr-grow"
									style="height: 150px;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	 <section class="ec-banner section section-space-p">
		<div class="container" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 20px;">
			<div class="row py-4 px-4">
				<div class="col-sm-6 my-auto">
					<h4>Access captivating footage and motions 
					Create moving stories with videos</h4>
					<a href="seller" class="btn btn-lg text-light m-2 "
						style="background-color: #d51c3f;border-radius:8px;">Discover videos <i
							class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-sm-6">
					<video class="w-100 rounded hvr-grow" autoplay muted loop playsinline preload="metadata"
						style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
						<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
							type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</section> 

	 <section class="section ec-ser-spe-section section-space-p">
		<div class="container" data-animation="fadeIn">
			<div class="row mx-4">
				<div class="col-md-6 my-auto">
					<div class="row">
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image opacity" style="position: relative;">
								<img class="img-responsive w-100 text-center rounded-3"
									src="assets/images/instragram-image/7.jpg" alt=""
									style="background-size: 100% 100%;  height: 230px;">
								<span class="percentage1" style="margin:50% 10%">
									<p class="text-white"><span class="fs-2">Travel</span><a href=""><span
												class=" px-2 py-2"> <i
													class="fa-solid fa-arrow-right fw-bold fs-3 my-auto text-white"></i>
											</span></a></p>
								</span>
							</div>
						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image opacity" style="position: relative;">
								<img class="img-responsive w-100 text-center rounded-3"
									src="assets/images/instragram-image/6.jpg" alt=""
									style="background-size: 100% 100%;  height: 230px;">
								<span class="percentage1" style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
			<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
			</span> 
							</div>
						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image opacity" style="position: relative;">
								<img class="img-responsive w-100 text-center rounded-3"
									src="assets/images/instragram-image/5.jpg" alt=""
									style=" background-size: 100% 100%;  height: 230px;">
								 <span class="percentage1" style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
			<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
			</span> 
							</div>
						</div>
						<div class="col-md-6 p-2">
							<div class="ec-spe-pro-image opacity" style="position: relative;">
								<img class="img-responsive w-100 text-center rounded-3"
									src="assets/images/instragram-image/4.jpg" alt=""
									style="background-size: 100% 100%;  height: 230px;">
								 <span class="percentage1" style="background-color: black; border-top-right-radius:15px; border-bottom-right-radius:15px;">
			<h4 class="fa-solid fa-video text-light pt-1 fs-6"></h4>
			</span> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 p-2">
					<div class="ec-spe-pro-image opacity" style="position: relative;">
						<img class="img-responsive w-100 text-center rounded-3" src="assets/images/offer-image/4.jpg"
							alt=""
							style="height: 475px; background-size: 100% 100%; ">
						<span class="percentage1">
							<p class="my-5 lh-lg text-dark"><span class="fs-1 fw-bold">Travel</span><br> Lorem ipsum
								dolor sit amet consectetur, adipisicing elit. Quaerat nam aspernatur reprehenderit error
								impedit fugit ipsa placeat aliquam... <br> <br><a href=""><span
										class="px-2 py-2 my-5"> <i
											class="fa-solid fa-arrow-right fw-bold fs-3 my-auto text-white"></i>
									</span></a></p>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section> 
	<section class="section--collections flex-section">
		<div class="flex-section--content px-3">
			<div class="flex-title">
				<div>
					<h2 class="ec-title text-left">Unlock your <span class="text-success">inner creator</span> </h2>
					<p class="text-left">Get the inspiration you need with these collections carefully selected to boost
						your project’s engagement.</p>
				</div>
			</div>
			<ul class="flex-section--carousel caption-list--double">
				<li>
					<a class="caption-list--item" href="https://www.freepik.com/collection/artificial-realities/5314907"
						data-id="5314907">
						<img class="caption-list--background"
							src="https://img.freepik.com/free-photo/elder-man-sitting-surrounded-by-flamingos_23-2150490394.jpg?size=626&ext=jpg"
							title="Artificial Realities" loading="lazy">
						<div class="caption-list--wrapper">
							<img class="caption-list--image"
								src="https://img.freepik.com/free-photo/elder-man-sitting-surrounded-by-flamingos_23-2150490394.jpg?size=626&ext=jpg"
								title="Artificial Realities" loading="lazy">
							<p class="caption-list--title overflow-lines">Artificial Realities</p>
							<p class="caption-list--subtitle">
								140 resources </p>
						</div>
					</a>
				</li>
				<li>
					<a class="caption-list--item" href="https://www.freepik.com/collection/quote-that/277"
						data-id="277">
						<img class="caption-list--background"
							src="https://img.freepik.com/free-vector/hand-drawn-chill-out-lettering_52683-86390.jpg?size=626&ext=jpg"
							title="Quote that" loading="lazy">
						<div class="caption-list--wrapper">
							<img class="caption-list--image"
								src="https://img.freepik.com/free-vector/hand-drawn-chill-out-lettering_52683-86390.jpg?size=626&ext=jpg"
								title="Quote that" loading="lazy">
							<p class="caption-list--title overflow-lines">Quote that</p>
							<p class="caption-list--subtitle">
								110 resources </p>
						</div>
					</a>
				</li>
				<li>
					<a class="caption-list--item" href="https://www.freepik.com/collection/top-devices-mockups/5375563"
						data-id="5375563">
						<img class="caption-list--background"
							src="https://img.freepik.com/premium-psd/device-stand-mockup-presentation_23-2150082413.jpg?size=626&ext=jpg"
							title="Top Devices Mockups" loading="lazy">
						<div class="caption-list--wrapper">
							<img class="caption-list--image"
								src="https://img.freepik.com/premium-psd/device-stand-mockup-presentation_23-2150082413.jpg?size=626&ext=jpg"
								title="Top Devices Mockups" loading="lazy">
							<p class="caption-list--title overflow-lines">Top Devices Mockups</p>
							<p class="caption-list--subtitle">
								70 resources </p>
						</div>
					</a>
				</li>
				<li>
					<a class="caption-list--item" href="https://www.freepik.com/collection/still-life/772654"
						data-id="772654">
						<img class="caption-list--background"
							src="https://img.freepik.com/premium-photo/still-life-with-small-decorative-objects-with-vivid-colors_52683-100432.jpg?size=626&ext=jpg"
							title="Still life" loading="lazy">
						<div class="caption-list--wrapper">
							<img class="caption-list--image"
								src="https://img.freepik.com/premium-photo/still-life-with-small-decorative-objects-with-vivid-colors_52683-100432.jpg?size=626&ext=jpg"
								title="Still life" loading="lazy">
							<p class="caption-list--title overflow-lines">Still life</p>
							<p class="caption-list--subtitle">
								140 resources </p>
						</div>
					</a>
				</li>
				<li>
					<a class="caption-list--item" href="/collections">
						<button class="caption-list--wrapper caption-list--more button--arrow button--arrow-right">
							<span>Explore <i class="icon icon--lg icon--right-small"></i></span>
						</button>
					</a>
				</li>
			</ul>
		</div>
	</section>


	<section class="section ec-new-test-product section-space-p">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-title">
						<h2 class="ec-title">The smartest choice for <span class="text-success">creatives like
								you</span> </h2>
						<p>Whether you’re looking for designs or photographs, you’ll find the perfect asset on
							PikMingle.</p>
					</div>
				</div>
				<div class="main-block">
					<div class="row">
						<div class="pt-2 col-lg-6 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30"
							data-animation="slideInLeft">
							<div class="col-sm-12 ec-all-product-block m-2">
								<div class="ec-all-product-inner border-none"
									style="border:none;background:#fefef9b3 !important;">
									<div class="ec-pro-image-outer text-center">
										<div class="ec-pro-image py-3"
											style=" box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.14); background-image: url(assets/images/bg/buttombg.jpg);border-radius:10px;">
											<a href="javascript:void(0)" class="image py-2">
												<h4 class="m-auto text-success p-0"><i class="fa-regular fa-star"></i>
												</h4>
											</a>
										</div>
									</div>
									<div class="ec-pro-content">
										<h5 class="ec-pro-title">High-quality stock content</h5>
										<p>Download scroll-stopping images of the best quality to make your projects
											look
											professional.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 ec-all-product-block m-2">
								<div class="ec-all-product-inner border-none"
									style="border:none;background:#fefef9b3 !important;">
									<div class="ec-pro-image-outer text-center">
										<div class="ec-pro-image py-3"
											style=" box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.14); background-image: url(assets/images/bg/buttombg.jpg);border-radius:10px;">
											<a href="javascript:void(0)" class="image py-2">
												<h4 class="m-auto text-success p-0"><i
														class="fa-regular fa-thumbs-up"></i></h4>
											</a>
										</div>
									</div>
									<div class="ec-pro-content">
										<h5 class="ec-pro-title">Ready-to-use assets</h5>
										<p>Access thousands of images and designs ready-to-publish and get your project
											ready double quick.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 ec-all-product-block m-2">
								<div class="ec-all-product-inner border-none"
									style="border:none;background:#fefef9b3 !important;">
									<div class="ec-pro-image-outer text-center">
										<div class="ec-pro-image py-3"
											style=" box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.14); background-image: url(assets/images/bg/buttombg.jpg);border-radius:10px;">
											<a href="javascript:void(0)" class="image py-2">
												<h4 class="m-auto text-success p-0"><i
														class="fa-solid fa-magnifying-glass"></i></h4>
											</a>
										</div>
									</div>
									<div class="ec-pro-content">
										<h5 class="ec-pro-title">Guaranteed search results</h5>
										<p>There’s an image and style for every project, whatever your needs are.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 ec-all-product-block m-2 bg-transparent">
								<div class="ec-all-product-inner border-none"
									style="border:none;background:#fefef9b3 !important;">
									<div class="ec-pro-image-outer text-center">
										<div class="ec-pro-image py-3"
											style=" box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.14); background-image: url(assets/images/bg/buttombg.jpg);border-radius:10px;">
											<a href="javascript:void(0)" class="image">
												<h4 class="m-auto text-success p-0"><i
														class="fa-solid fa-arrows-rotate"></i></h4>
											</a>
										</div>
									</div>
									<div class="ec-pro-content">
										<h5 class="ec-pro-title">Fresh content everyday</h5>
										<p>Our library is updated on a daily basis so you can find the newest and
											trendiest
											photos and designs.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30"
							data-animation="slideInLeft">
							<img class="main-image" src="assets/images/product-image/smartest.webp" alt="Product" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start creating with ai start -->
	<section>
		<div id="content_banner_home_fpc" class="section--content-autopromo ad-manager-height">

			<div class="content_banner_home_fpc">
				<a href="#" target="_blank"
					title="pikingle"
					onclick="window.top.dataLayer.push({'event': 'ga4event','event_name': 'content_banner','location': 'content_banner_home_fpc','interaction_type': 'onclick','action': 'click','campaign_name': 'mkt_AI_image_generator_0523',});">
					<div class="container">
						<div class="container--main">
							<div>
								<div class="texts">
									<h5 class="title">Bring your own world to life</h5>
									<h6 class="text"><b>Craft unique images with the <span class="inline-block">new AI
												image generator</span></b></h6>
								</div>
								<span class="ec-offer-btn hvr-grow"><button class="btn text-light btn-lg" style="border-radius:8px; background-color:#1c9600;">Start creating with AI</button></span>
							</div>
						</div>
						<div class="container--image-right">
							<img class="img image image-01"
								src="https://static-gcp.freepikcompany.com/freepik/ai-image-generator-2023/gam/right-01.svg"
								width="1331" height="1130" alt="pikmingle"
								loading="lazy">
							<div class="image image-02">
								<picture class="image image-02-1">
									<img class="img" src="assets/images/bg/lifedoor.png"
										srcset="assets/images/bg/lifedoor.png 2x" style="width:135px;height:78px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
								<picture class="image image-02-2">
									<img class="img" src="assets/images/bg/home.png"
										srcset="assets/images/bg/home.png 2x" style="width:168px;height:148px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
								<picture class="image image-02-3">
									<img class="img" src="assets/images/bg/statue.png"
										srcset="assets/images/bg/statue.png 2x" style="width:135px;height:143px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
								<picture class="image image-02-4">
									<img class="img" src="assets/images/bg/fairy.png"
										srcset="assets/images/bg/fairy.png 2x" style="width:169px;height:193px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
								<picture class="image image-02-5">
									<img class="img" src="assets/images/bg/unicorn.png"
										srcset="assets/images/bg/unicorn.png 2x" style="width:195px;height:243px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
								<picture class="image image-02-6">
									<img class="img" src="assets/images/bg/himalya.png"
										srcset="assets/images/bg/himalya.png 2x" style="width:137px;height:136px;"
										alt="AI Image Generator - Free Text to Image | Freepik" loading="lazy">
								</picture>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- end creating with ai end -->


	<!-- join creator community start  -->
	<section>
		<div class="row my-5 mx-5">
			<div class="container-fluid p-0 my-5" style='background:#e8eefd;border-radius:20px;border:1px solid sliver;'
				data-animation="fadeIn">
				<div class="row px-2 mx-auto py-auto">
					<div class=" col-sm-6 col-md-6  col-xl-6 p-5">
						<h2 class="ec-offer-title text-dark mt-5">Join <span class="text-danger">PikMingle</span>
							creator
							community</h2>
						<span class="ec-offer-desc fw-bold white-space text-dark">Behind every stock image, there’s a
							creative mind. You can also create content and sell it on PikMingle</span><br /></br>
						<span class="ec-offer-btn hvr-grow"><a href="seller" class="btn btn-lg btn-primary"
								style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; background-color: #d51c3f;border-radius:8px;">Sell
								all categories <i class="ecicon eci-angle-double-right"
									aria-hidden="true"></i></a></span>
					</div>
					<div class=" col-sm-6 col-md-6 col-xl-6 text-center">
						<img src="assets/images/Join pikmingle/community.webp" alt="" style="height:350px;" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- join creator community end -->

	<!-- Footer Start -->
	<footer class="ec-footer">
		<?php require 'include/footer.php' ?>
	</footer>
	<!-- Footer Area End -->

	<!-- JS Start -->
	<?php require 'include/jslink.php' ?>
	<!-- JS Area End -->
	<script src="jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		jQuery("#carousel").owlCarousel({
			autoplay: true,
			rewind: true,
			/* use rewind if you don't want loop */
			margin: 20,
			/*
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			*/
			responsiveClass: true,
			autoHeight: true,
			// autoplayTimeout: 2000,
			smartSpeed: 800,
			nav: true,
			responsive: {
				0: {
					items: 2
				},

				600: {
					items: 4
				},

				1024: {
					items: 6
				},

				1366: {
					items: 8
				}
			}
		});
	</script>


	<script>
		function handleItemClick(item) {
			// Do something when an item is clicked
			// alert(item.textContent);
			document.getElementById('searchContent').placeholder = 'Search For ' + $.trim(item.textContent);
			document.getElementById('searchContent1').placeholder = 'Search For ' + $.trim(item.textContent);
		}
	</script>
	<!--End of Tawk.to Script-->
</body>

</html>