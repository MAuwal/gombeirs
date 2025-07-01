<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Gombe State Internal Revenue Service</title>
		<meta charset="utf-8" />
		<meta name="description" content="GOMBE STATE" />
		<meta name="keywords" content="GOMBE STATE" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="GOMBE STATE" />
		<meta property="og:url" content="https:/gombeiers.com/" />
		<meta property="og:site_name" content="Gombe State"  />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="styles.css">
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<i class="ki-outline ki-abstract-14 fs-2hx"></i>
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->

									<img alt="Logo" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombeirs.png'))) }}" class="logo-default h-100px h-lg-100px" />
										<img alt="Logo" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombeirs.png'))) }}" class="logo-sticky h-100px h-lg-100px" />


									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-black menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<h1 class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="font-size: 21px" > Gombe State Internal Revenue Service</h1>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home </a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{ route('verify') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Verify Receipt</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">FAQs</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
								</div>
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('register') }}" class="btn btn-success">Register</a>
								</div>

								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->

						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-5 py-lg-0">
							<!--begin::Title--></br>

							<div id="carouselExample" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExample" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExample" data-slide-to="1"></li>
									<li data-target="#carouselExample" data-slide-to="2"></li>
									<li data-target="#carouselExample" data-slide-to="3"></li>
								</ol>

								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombe-1.png'))) }}" class="d-block w-100 mx-auto" alt="Image 1" style="max-height: 420px;">
										<div class="carousel-caption d-none d-md-block text-white bg-dark p-4 opacity-75">
											<h2>Every taxpayer is a stakeholder in the success story of Gombe State. </h2>
											<h2>Shape the destiny of Gombe State with your taxes</h2>
										</div>
									</div>
									<div class="carousel-item">
										<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombe-2.png'))) }}" class="d-block w-100 mx-auto" alt="Image 2" style="max-height: 420px;">
										<div class="carousel-caption d-none d-md-block text-white bg-dark p-4 opacity-75">
											<h2>Your taxes are the building blocks of a greater Gombe State.</h2>
											<h2>Contribute, and witness the transformation.</h2>
										</div>
									</div>
									<div class="carousel-item">
										<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/Gombe-3.png'))) }}" class="d-block w-100 mx-auto" alt="Image 3" style="max-height: 420px;">
										<div class="carousel-caption d-none d-md-block text-white bg-dark p-4 opacity-75">
											<h2>Your taxes are the key to unlocking a prosperous future for Gombe.</h2>
											<h2>Contribute, and witness the transformation</h2>
										</div>
									</div>
									<div class="carousel-item">
										<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombe-4.png'))) }}" class="d-block w-100 mx-auto" alt="Image 4" style="max-height: 420px;">
										<div class="carousel-caption d-none d-md-block text-white bg-dark p-4 opacity-75">
											<h2>Greatness is a collective effort, and your taxes are the foundation </h2>
											<h2>stones of Gombe's rise to prominence.</h2>
										</div>
									</div>
									<div class="carousel-item">
										<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/Gombe-5.png'))) }}" class="d-block w-100 mx-auto" alt="Image 4" style="max-height: 420px;">
										<div class="carousel-caption d-none d-md-block text-white bg-dark p-4 opacity-75">
											<h2>As you fulfill your tax obligations, you're not just funding services – </h2>
											<h2>you're fueling the rise of a greater Gombe State.</h2>
										</div>
									</div>
								</div>

								<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>

								<!-- Enable the carousel to slide automatically -->
								<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
								<script>
									$(document).ready(function(){
										$('#carouselExample').carousel({
											interval: 3000 // Adjust the interval (in milliseconds) as needed
										});
									});
									window.onbeforeunload = function () {
      						  window.scrollTo(0, 0);
    							};
								</script>

								<h1 class="" style="color: rgb(215, 215, 250);"><marquee behavior="scroll" direction="left">Your taxes are the threads weaving the tapestry of Gombe's success. Stitch by stitch, we create a masterpiece of prosperity.						<br />
									<span style="background: linear-gradient(to right, #eaeceb 10%, #6980c5 90%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
									</span></marquee></h1>
							</div>

						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->

							<!--end::Client-->
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>

			<!--begin: Carousel-->


						<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2" style="background-color: #e5e5ec;">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">What we do at Gombe IRS</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">Gombe State Internal Revenue Service diligently oversees the collection of various taxes, </br>including Personal Income Tax, Pay As You Earn (PAYE), and Withholding Tax.
							 This comprehensive approach</br> ensures the efficient and equitable administration of tax policies within the state, fostering compliance and transparency in revenue collection.</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->

					<div class="row g-lg-10 mb-10 mb-lg-20" style="background-color: rgb(241, 244, 246);">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<div class="col-md-4 px-5">
										<img src="assets/media/logos/gombe7.jpeg" class="mh-125px mb-9" alt="" />
									</div>
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-dark mb-3" style="background-color:  #d4d7e3;"><p>Personal Income Tax </p>
									</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">Personal Income Tax is a direct tax imposed on the income of individuals by the government. It is based on an individual's total earnings, which may include wages, salaries, bonuses, investment income, and other sources of revenue. The tax is progressive, meaning that individuals with higher incomes pay a higher percentage of their earnings in taxes. Individuals, whether employed or running small businesses under a business name or partnership, are subject to taxation. </div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->

													</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<div class="col-md-4 px-5">
										<img src="assets/media/logos/gombe6.jpeg" class="mh-125px mb-9" alt="" />
									</div>
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-dark mb-3" style="background-color:   #d4d7e3;">Withholding Tax
									<br />

								</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">Withholding Tax is a tax deduction system where a percentage of income is withheld by the payer at the source before payment to the recipient. This deducted tax is then remitted directly to the government on behalf of the income recipient. It is commonly applied to various types of income, and the responsibility for deduction lies with the payer, such as employers or clients. Withholding Tax simplifies tax collection, promotes transparency, and serves as a reliable revenue source for governments.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->

							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<div class="col-md-4 px-5">
										<img src="assets/media/logos/gombe5.jpeg" class="mh-125px mb-9" alt="" />
									</div>
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-dark mb-3" style="background-color:  #d4d7e3;">Direct Assessment Tax
									<br />  </div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">Direct Assessment Tax focuses on self-employed individuals, including professionals, contractors, traders, and landlords. This taxation approach stands in contrast to systems where taxes are deducted at the source or withheld by employers. Self-employed individuals under Direct Assessment are required to proactively report their annual income derived from independent economic activities. </div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->

							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
					</div>



				</div>
				<!--end::Container-->
			</div>



						<!--begin::Plans-->
						<div class="d-flex flex-column container pt-lg-20">
							<!--begin::Heading-->
							<!--end::Pricing-->
						</div>
						<!--end::Plans-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>

			<div class="container" style="background-color: rgb(237, 242, 245);"><br /><br /><br />
				<!--begin::Heading-->
					<!--begin::Title-->
					<h2 class="fs-2hx text-white fw-bold mb-5" style="background-color: #868695;">Our functions</h2>
					<!--end::Title-->
					<!--begin::Description-->
		<div class="text-gray-500 fw-semibold fs-4">
			Our organization is dedicated to providing services that add value, emphasizing </br>a commitment to fairness and firmness. We aim to establish a sustainable system that </br>fosters extensive voluntary tax compliance and enhances internally generated revenue.
</br></br>
<b>Key responsibilities include:</b></br></br>
<ol type="a">
<li>Enforce the stipulations outlined in the State's Personal Tax Law.</li>
<li>Conducting assessment and collection of all State taxes, supervising revenue collection from other Ministries.</li>
<li> Oversee the gathering of all revenues owed to the State, including those collected by other Ministries or Departments.</li>
<li>Collaborate on tax and revenue issues with the FG and other State Governments via the Joint Tax Board.</li>
<li>Review and update all outdated rates within the Board's jurisdiction.</li>
</ol>
<p>In summary, our organization plays a pivotal role in promoting a robust and compliant tax system,</br>
contributing to the overall development and financial sustainability of the State.</p>
</div>
				</div>
				<!--begin::Highlight-->
					<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-6 p-lg-8 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #afaeb5 10%, #b1b6ca 90%);">
						<!--begin::Content-->
						<div class="my-2 me-5">
							<!--begin::Title-->
							<div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Some of the important documents that govern tax in the State: </br>
							<span class="fw-normal">
								<a href="/assets/media/books/TAX CODIFICATION.xlsx" download="TAX CODIFICATION" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2" ><b>GOMBE TAX CODIFICATION</b><i class="bi bi-download"></i></a>
<!-- Link to the second document -->
<a href="/assets/media/books/Gombe_disputes.pdf" download="Gombe State Dispute Resolution" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2"><b>GOMBE TAX DISPUTE RESOLUTION</b> <i class="bi bi-download"></i></a></span></div>
							<!--end::Title-->

					</div>
					</div>
					<!--end::Highlight-->
				</br></br>
</br>
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<!--<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">-->
								<!--begin::Block-->
							<!--	<div class="rounded landing-dark-border p-9 mb-10">-->
									<!--begin::Title-->
							<!--		<h2 class="text-white">You can contact us via the email below:</h2>-->
									<!--end::Title-->
									<!--begin::Text-->
							<!--		<span class="fw-normal fs-4 text-gray-700">-->
							<!--		<a href="#/support" class="text-white opacity-50 text-hover-primary">support@gombeirs.com</a></span>-->
									<!--end::Text-->
							<!--	</div>-->
								<!--end::Block-->
								<!--begin::Block-->
							<!--	<div class="rounded landing-dark-border p-9">-->
									<!--begin::Title-->
							<!--		<h2 class="text-white">How About a Custom Project?</h2>-->
									<!--end::Title-->
									<!--begin::Text-->
							<!--		<span class="text-white">Use Our Custom Development Service.-->
							<!--		<a href="../../demo25/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>-->
									<!--end::Text-->
							<!--	</div>-->
								<!--end::Block-->
							<!--</div>-->
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<!--<div class="d-flex fw-semibold flex-column me-20">-->
										<!--begin::Subtitle-->
									<!--	<h4 class="fw-bold text-gray-400 mb-6">Links</h4>-->
										<!--end::Subtitle-->
										<!--begin::Link-->
									<!--	<a href="#/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>-->
										<!--end::Link-->
										<!--begin::Link-->
									<!--	<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentations</a>-->
										<!--end::Link-->
										<!--begin::Link-->
									<!--	<a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Downloads</a>-->
										<!--end::Link-->
										<!--begin::Link-->
									<!--	<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">News</a>-->
										<!--end::Link-->
										<!--begin::Link-->
									<!--	<a href=#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>-->
										<!--end::Link-->
										<!--begin::Link-->
									<!--	<a href="#/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>-->
										<!--end::Link-->
									<!--</div>-->
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-semibold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="https://www.facebook.com/GombeInternalRevenueService" class="mb-6">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->

										<!--begin::Link-->
										<a href="https://twitter.com/" class="mb-6">
											<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->

										<!--begin::Link-->
										<a href="https://www.instagram.com/" class="mb-6">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="../../demo25/dist/landing.html">
									<img alt="Logo" src="assets/media/logos/gombeirs.png" class="h-80px h-md-80px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="#">&copy; 2024 Gombe Internal Revenue Service</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<!--<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">-->
							<!--	<li class="menu-item">-->
							<!--		<a href="#" target="_blank" class="menu-link px-2">About</a>-->
							<!--	</li>-->
							<!--	<li class="menu-item mx-5">-->
							<!--		<a href="#" target="_blank" class="menu-link px-2">Support</a>-->
							<!--	</li>-->

							<!--</ul>-->
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-outline ki-arrow-up"></i>
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
