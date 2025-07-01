<!DOCTYPE html>
<html lang="en">
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
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css" />
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
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" type="text/css"/>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('landingPage/css/style.default.css') }}" id="theme-stylesheet" type="text/css"/>
    <!-- Custom stylesheet - for your changes-->
    <link href="{{ asset('landingPage/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    	
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
            <h3 class="text-center d-none d-lg-block">GOMBE STATE INTERNAL REVENUE SERVICE</h3>
          </div>
          <div>
            <a class="text-dark text-decoration-none" href="#"
              ><small>CONTACT US</small></a
            >|
            <a
              class="text-dark"
              href="#"
              target="_blank"
              ><i class="fab fa-instagram fa-sm fa-fw me-2"></i
            ></a>
            <a class="text-dark" href="#" target="_blank"
              ><i class="fab fa-twitter fa-sm fa-fw me-2"></i
            ></a>
            <a
              class="text-dark"
              href="#"
              target="_blank"
              ><i class="fab fa-linkedin fa-sm fa-fw"></i
            ></a>
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
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white mt-"
                  href="index.html"
                >
                  Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  id="homeDropdownMenuLink"
                  href="index.html"
                >
                  About</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href=""
                  >Verify Receipt</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  id="homeDropdownMenuLink"
                  href="index.html"
                >
                  FAQs</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"
                  ><div class="btn btn-success text-light btn-outline-light">
                    login
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"
                  ><div class="btn text-light btn-outline-success">
                    Register
                  </div></a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- /Navbar -->
    </header>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="{{ asset('landingPage/img/GIRS images/GIRS images//hero-img.jpg') }}"
            alt="GIRS"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
        <div class="carousel-item">
          <img
            src="{{ asset('landingPage/img/GIRS images/GIRS images/direct assessment.jpg') }}"
            alt="GIRS"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
        <div class="carousel-item">
          <img
            src="{{ asset('landingPage/img/GIRS images/GIRS images/footer-img.jpg') }}"
            alt="GIRS"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <section class="py-6 bg-white">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="text-center">What We Do at <br> Gombe IRS</h2>
          </div>
        </div>
        <div class="row">
          <!-- blog item-->
          <div class="col-lg-4 col-sm-6 mb-4 hover-animate">
            <div class="card shadow border-0 h-50">
              <a href="#"
                ><img
                  class="img-fluid card-img-top"
                  src="{{ asset('landingPage/img/GIRS images/GIRS images/1665605265-Key-income-tax-changes-proposed-in-Inland-Revenue-Amendment-Bill-L-2.png') }}"
                  alt="..."
              /></a>
              <div class="card-body bg-white">
                <h5 class="my-2">
                  <a class="text-dark" href="post.html"
                    >Personal Income Tax
                  </a>
                </h5>
                <p class="my-2 text-muted text-sm">
                  Personal Income Tax is a Government-Impose Direct Tax on Individual's Income
                </p>
                <a class="btn btn-link ps-0" href="post.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- blog item-->
          <div class="col-lg-4 col-sm-6 mb-4 hover-animate">
            <div class="card shadow border-0 h-50">
              <a href="post.html"
                ><img
                  class="img-fluid card-img-top"
                  src="{{ asset('landingPage/img/GIRS images/GIRS images/images (4).jpeg') }}"
                  alt="..."
              /></a>
              <div class="card-body bg-white">
                <h5 class="my-2">
                  <a class="text-dark" href="post.html">Withholding Tax</a>
                </h5>
                <p class="my-2 text-muted text-sm">
                  Withholding Tax is a sax seduction system where a wercentage of Income is withheld by the payer at the source before payment to the recipeint
                </p>
                <a class="btn btn-link ps-0" href="post.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- blog item-->
          <div class="col-lg-4 col-sm-6 mb-4 hover-animate">
            <div class="card shadow border-0 h-50">
              <a href="post.html"
                ><img
                  class="img-fluid card-img-top"
                  src="{{ asset('landingPage/img/GIRS images/GIRS images/footer-img.jpg') }}"
                  alt="..."
              /></a>
              <div class="card-body bg-white">
                <h5 class="my-2">
                  <a class="text-dark" href="#"
                    >Direct Assessment Tax
                  </a>
                </h5>
                <p class="my-2 text-muted text-sm">
                  Direct Accessment Tax focuses on self-employed individuals, including professionals, contractors, traders and landlords.
                </p>
                <a class="btn btn-link ps-0" href="post.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-6 bg-gray-100">
      <div class="container">
        <div class="col-md-12 m-5">
          <div class="row mb-5">
            <h1 class="text-center m-0">Our Key</h1>
            <h1 class="text-center mb-4">Responsibilties</h2>

            <!-- card -->
            <div class="col-sm-1 col-md-1 col-lg-1"></div>

            <div class="col-sm-5 col-md-5 col-lg-2">
              <div
                class="card bg-primary mb-4 mt-5"
                style="width: 150px; height: 250px"
              >
                <img
                  class="card-img-top mt-5 p-4"
                  src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/octicon_law-24.png') }}"
                  alt="Card image"
                />
                <p class="text-center text-white">ENFORCE</p>
              </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-2">
              <!--col-md-4 begin-->
              <div
                class="card bg-primary mb-4 mt-5"
                style="width: 150px; height: 250px"
              >
                <img
                  class="card-img-top mt-5 p-4"
                  src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/fluent-mdl2_assessment-group-template.png') }}"
                  alt="Card image"
                />
                <p class="text-center text-white">CONDUCT</p>
              </div>
            </div>
            <!--col-md-4 finish-->

            <div class="col-sm-6 col-md-6 col-lg-2">
              <!--col-md-4 begin-->
              <div
                class="card bg-primary mb-4 mt-5"
                style="width: 150px; height: 250px"
              >
                <img
                  class="card-img-top mt-5 p-4"
                  src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/solar_hand-money-outline.png') }}"
                  alt="Card image"
                />
                <p class="text-center text-white">OVERSEE</p>
              </div>
            </div>
            <!--col-md-4 finish-->

            <div class="col-sm-6 col-md-6 col-lg-2">
              <!--col-md-4 begin-->
              <div
                class="card bg-primary mb-4 mt-5"
                style="width: 150px; height: 250px"
              >
                <img
                  class="card-img-top mt-5 p-4"
                  src="{{ asset('landingPage/icons/GIRS icons/GIRS iconS/material-symbols-light_handshake-outline.png') }}" 
                  alt="Card image"
                />
                <p class="text-center text-white">COLLABORATE</p>
              </div>
            </div>
            <!--col-md-4 finish-->

            <div class="col-sm-6 col-md-6 col-lg-2">
              <!--col-md-4 begin-->
              <div
                class="card bg-primary mb-4 mt-5"
                style="width: 150px; height: 250px"
              >
                <img
                  class="card-img-top mt-5 p-4"
                  src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/grommet-icons_update.png') }}"
                  alt="Card image"
                />
                <p class="text-center text-white">REVIEW</p>
              </div>
            </div>
            <!--col-md-4 finish-->

            <div class="col-md-1 col-lg-1"></div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Divider Section-->
    <section class="py-7 position-relative dark-overlay">
      <img
        class="bg-image"
        src="{{ asset('landingPage/img/GIRS images/GIRS images/footer-img.jpg') }}"
        alt=""
      />
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
          <h3 class="display-4 fw-bold text-serif text-shadow mb-5 text-center">
            Contribute,and witness the transformation.
          </h3>
        </div>
      </div>
    </section>

    <!-- Footer-->
    <footer class="position-relative z-index-10 d-print-none">
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-200 text-muted">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="fw-bold text-uppercase text-dark text-center">
                GOMBE INTERNAL REVENUE SERVICE
              </div>
              <img
                src="{{ asset('landingPage/img/logo.jpg') }}"
                class="rounded-pill m-4"
                alt=""
                width="100"
                height="100"
              />
              <h5 class="text-dark mb-3">FOLLOW US ON:</5>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a
                    class="text-muted text-primary-hover"
                    href="#"
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
                    ><i class="fab fa-facebook"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    class="text-muted text-primary-hover"
                    href="#"
                    target="_blank"
                    title="instagram"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </li>
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

            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3 text-center">
                QUICK LINKS
              </h6>
              <ul class="list-unstyled text-center">
                <li>
                  <a class="text-muted" href="">HOME</a>
                </li>
                <li><a class="text-muted" href="">ABOUT</a></li>
                <li><a class="text-muted" href="">VERIFY RECEIPT</a></li>
                <li><a class="text-muted" href="">FAQs</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">
                <!--SUBSCRIBE TO OUR NEWSLETTER-->
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
                &copy; 2024, GOMBE INTERNAL REVENUE SERVICE
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
      <script src="{{ asset('landingPage/js/script.js') }}"></script>
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
    <script src="js/theme.js"></script>
  </body>
</html>
