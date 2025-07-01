<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>GOMBE STATE INTERNAL REVENUE SERVICE</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{ asset('landingPage/vendor/nouislider/nouislider.css') }}" />
    <!-- Google fonts - Playfair Display-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700"
    />
    <!-- Google fonts - Poppins-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700"
    />
    <!-- swiper-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css"
    />
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="{{ asset('landingPage/vendor/magnific-popup/magnific-popup.css') }}" />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('landingPage/css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('landingPage/css/custom.css') }}" />
    <link rel="stylesheet" href="">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('landingPage/img/favicon.png') }}" />
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
    <!-- Font Awesome CSS-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    
    <style>
      .dropdown-toggle::after {
          margin-left: 0.8em;
      }
      .dropdown-toggle {
          background-color: transparent;
          border: none;
          color: #8f7a64;
      }
      .dropdown-toggle:hover {
          color: #12204b02;

      }
      .dropdown-menu {
          top: 2%;
          margin-top: 40px;
          left: 67%;
          margin-left: 0.8rem;
      }
      
      /* Style The Dropdown Button */
.dropbtnx {
  background-color: rgba(108, 117, 125, 1);
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  font-family: 'Roboto', 'Roboto', arial;
  font-weight: bold;
}
/* The container <div> - needed to position the dropdown content */
.dropdownx {
  position: relative;
  display: inline-block;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-contentx {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* Links inside the dropdown */
.dropdown-contentx a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
/* Change color of dropdown links on hover */
.dropdown-contentx a:hover {background-color: #f1f1f1}
/* Show the dropdown menu on hover */
.dropdownx:hover .dropdown-contentx {
  display: block;
}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdownx:hover .dropbtnx {
  background-color: #3e8e41;
}
  </style>
  </head>

  <body>
    <!-- Start Top Nav -->
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light d-lg-block"
      id="templatemo_nav_top"
    >
      <div class="container">
        <div class="w-100 d-flex justify-content-between">
          <div>
            <a
              class="navbar-sm-brand text-light text-decoration-none"
              href="index.html"
              ><img
                class="rounded-pill"
                src="{{ asset('landingPage/img/logo.jpg') }}"
                alt=""
                style="width: 60px"
            /></a>
          </div>
          <div>
            <h3 class="text-center mt-4 d-none d-lg-block">GOMBE STATE INTERNAL REVENUE SERVICE</h3>

            <h5 class="text-center d-block d-lg-none">GOMBE STATE INTERNAL REVENUE SERVICE</h5>
          </div>
          <div>
            <!-- <a class="text-dark text-decoration-none" href="#"
              ><small>CONTACT US</small></a
            >|
           <a
                    class="text-muted text-primary-hover"
                    href="https://www.facebook.com/GombeInternalRevenueService"
                    target="_blank"
                    title="facebook"
                    ><i class="fab fa-facebook"></i
                  ></a> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- Close Top Nav -->
    <header class="header">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg shadow navbar-gray bg-gray">
        <div class="container-fluid">
          <button
            class="navbar-toggler navbar-toggler-right bg-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa fa-bars te"></i>
          </button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="navbar-nav ms-auto mt-2">
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white mt-"
                  href="{{ route('home') }}"
                >
                  HOME</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  id="homeDropdownMenuLink"
                  href="{{ route('about') }}"
                >
                  ABOUT US</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('verify') }}"
                  >VERIFY RECEIPT</a
                >
              </li>
               <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('verifyTcc') }}"
                  >VERIFY TCC</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  id="homeDropdownMenuLink"
                  href="{{ route('contact') }}"
                >
                  CONTACT US</a
                >
              </li>
             <div class="dropdownx">
                <button class="dropbtnx">RESOURCES</button>
                <div class="dropdown-contentx">
                  <a class="dropdown-itemx" href="#videos">VIDEO GUIDES</a>
                                  <a class="dropdown-item" href="#tax_matters">TAX MATTERS</a>
                                  <a class="dropdown-item" href="{{ route('faq') }}">FAQs</a>
                </div>
              </div>
              
               <div class="dropdownx">
                <button class="dropbtnx">E-SERVICES</button>
                <div class="dropdown-contentx">
                  <a href="https://jewellevy.com.ng">DEVELOPMENT LEVY</a>
                </div>
              </div>
              

              <!-- <li class="nav-item">
                <a class="nav-link" href="login.html"
                  ><div class="btn btn-success text-light btn-sm btn-outline-light">
                    login
                  </div>
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"
                  ><div class="btn text-light btn-sm btn-outline-success" style="font-size: 12px;">
                    LOGIN/REGISTER
                  </div></a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('payNow') }}"
                  ><div class="btn btn-success text-light btn-sm">
                    PAY NOW
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- /Navbar -->
    </header>
    <!-- Hero Section-->
    <!-- <section class="hero py-6 py-lg-7 text-white dark-overlay"><img class="bg-image" src="img/photo/photo-1522143049013-2519756a52d4.jpg" alt="How can we help you today?">
      <div class="container overlay-content">
        <ol class="breadcrumb text-white justify-content-center no-border mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact                         </li>
        </ol>
        <h1 class="hero-heading">How can we help you today?</h1>
      </div>
    </section> -->


    <section class="py-6 bg-gray-100">
      <div class="container">
        <h2 class="h4 mb-5">Get in Touch</h2>
          <p>Thank you for visiting our website! if you have any questions, comments, or need assistance, please dont hesitate to reach out to us we're here to help</p>
        <div class="row">
          <div class="col-md- mb-5 mb-md-0">
            <form class="form" id="contact-form" method="POST" action="/contact.php">
              <div class="controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-4">
                      <label class="form-label" for="name">Your Name *</label>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Enter your Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-4">
                      <label class="form-label" for="email">Your email *</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Enter your  email" required="required">
                    </div>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="surname">Suggestions or Complaints *</label>
                  <input class="form-control" type="text" name="surname" id="surname" placeholder="Type your suggestions here" required="required">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="message">Your message for us *</label>
                  <textarea class="form-control" rows="4" name="message" id="message" placeholder="Enter your message" required="required"></textarea>
                </div>
<!--                 <button class="btn btn-outline-success" type="submit">Send message</button> -->
                <input type="submit" name="send" class="btn btn-outline-success" value="Send Message" />
              </div>
            </form>
          </div>
          <!-- <div class="col-md-5">
            <div class="ps-lg-4 text-sm">
              <p class="text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
              <p class="text-muted">Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
              <div class="social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>


    <section class="py-6">
      <div class="container">       
        <div class="row">
          <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
            <div class="icon-rounded mb-4 bg-primary-light">
              <svg class="svg-icon w-2rem h-2rem text-primary">
                <use xlink:href="#map-location-1"> </use>
              </svg>
            </div>
            <h3 class="h5">Office</h3>
            <p class="text-muted">Opposite Custodian Hotel, Along Gombe-<br>Bauchi Road, <strong>Gombe State</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
            <div class="icon-rounded mb-4 bg-primary-light">
              <svg class="svg-icon w-2rem h-2rem text-primary">
                <use xlink:href="#landline-1"> </use>
              </svg>
            </div>
            <h3 class="h5">Phone</h3>
            <!-- <p class="text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            <p class="text-muted"><strong>+2348024945858</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
            <div class="icon-rounded mb-4 bg-primary-light">
              <svg class="svg-icon w-2rem h-2rem text-primary">
                <use xlink:href="#mail-1"> </use>
              </svg>
            </div>
            <h3 class="h5">Email</h3>
            <!-- <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p> -->
            <ul class="list-unstyled text-muted">
              <li>gombeirs1@gmail.com </li>
              <!-- <li>support@sell.com</li> -->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer class="position-relative z-index-10 d-print-none">
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-200 text-muted">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
              <div class="fw-bold text-uppercase text-dark text-left">
                GOMBE STATE INTERNAL REVENUE SERVICE
              </div>
              <center>
              <img
               src="{{ asset('landingPage/img/logo.jpg') }}"
                class="rounded-pill m-4"
                alt=""
                width="100"
                height="100"
              />
            </center>
                <!-- <li class="list-inline-item">
                  <a
                    class="text-muted text-primary-hover"
                    href="#"
                    target="_blank"
                    title="pinterest"
                    ><i class="fab fa-pinterest"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    class="text-muted text-primary-hover"
                    href="#"
                    target="_blank"
                    title="vimeo"
                    ><i class="fab fa-vimeo"></i
                  ></a>
                </li> -->
              </ul>
            </div>

            <!-- partners -->
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3 text-center">
                PARTNERS
              </h6>
              <div class="text-center flex gap-3">
             <a href="https://www.cac.gov.ng/"> <img class="rounded-pill "src="{{ asset('landingPage/img/partners/cac.jpg') }}" style="width: 70px;" alt=""></a>
               <a href="https://www.firs.gov.ng/"> <img class="rounded-pill "src="{{ asset('landingPage/img/partners/firslogo.jpeg') }}" style="width: 70px;" alt=""></a>
               <a href="#"> <img class="rounded-pill "src="{{ asset('landingPage/img/partners/gogis.jpg') }}" style="width: 70px;" alt="">
              <a href="#">  <img class="rounded-pill mt-1 "src="{{ asset('landingPage/img/partners/gosupda.jpg') }}" style="width: 70px;" alt=""></a>
            <a href="https://tinverification.jtb.gov.ng/">  <img class="rounded-pill "src="{{ asset('landingPage/img/partners/jtb.png') }}" style="width: 70px;" alt=""></a>
               <a href="https://www.usaid.gov/"> <img class="rounded-pill "src="{{ asset('landingPage/img/partners/usaid.png') }}" style="width: 70px;" alt=""></a>
               <a href="https://frsc.gov.ng/">  <img class="rounded mt-2 "src="{{ asset('landingPage/img/partners/frsc.png') }}" style="width: 70px;" alt=""></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3 text-center">
                QUICK LINKS
              </h6>
              <ul class="list-unstyled text-center">
                  <li>
                    <a class="text-muted" href="{{ route('home') }}">HOME</a>
                  </li>
                  <li><a class="text-muted" href="{{ route('about') }}">ABOUT</a></li>
                  <li><a class="text-muted" href="{{ route('verify') }}">VERIFY RECEIPT</a></li>
                  <li><a class="text-muted" href="{{ route('contact') }}">CONTACT US</a></li>
                  <li><a class="text-muted" href="{{ route('faq') }}">FAQs</a></li>
                </ul>
            </div>

            <!-- Subscription -->
            <div class="col-lg-3">
              <h6 class="text-uppercase text-dark mb-3">
                SUBSCRIBE TO OUR NEWSLETTER
              </h6>
              <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input
                    class="form-control bg-transparent border-dark"
                    type="email"
                    placeholder="Your Email Address"
                    aria-label="Your Email Address"
                  />
                </div>
                <button class="btn btn-success text-white" type="submit">
                  SUBSCRIBE
                </button>
              </form>
              <div>
                <h6 class="text-dark mt-4">FOLLOW US ON:</h6>
                  <ul class="list-inline">
                      <li class="list-inline-item">
                    <a
                      class="text-muted text-primary-hover"
                      href="https://x.com/gombeirs"
                      target="_blank"
                      title="twitter"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li>
                    <li class="list-inline-item">
                      <a
                        class="text-muted text-primary-hover"
                        href="https://www.facebook.com/GombeInternalRevenueService"
                        target="_blank"
                        title="facebook"
                        ><i class="fab fa-facebook fa-lg"></i
                      ></a>
                    </li>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 fw-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 text-center text-md-start">
              <p class="text-sm mb-md-0 text-center">
                &copy; Powered by Jewel ICT Hub
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
          var div = document.createElement("div");
          div.className = "d-none";
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        };
      }
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.svg');
      injectSvgSprite(
        "https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg"
      );
    </script>
    <!-- jQuery-->
    <script src="{{ asset('landingPage/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="{{ asset('landingPage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="{{ asset('landingPage/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth scroll-->
    <script src="{{ asset('landingPage/vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Bootstrap Select-->
    <script src="{{ asset('landingPage/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="{{ asset('landingPage/vendor/object-fit-images/ofi.min.js') }}"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>
      var basePath = "";
    </script>
    <!-- Main Theme JS file    -->
    <script src="{{ asset('landingPage/js/theme.js') }}"></script>
  </body>
</html>
