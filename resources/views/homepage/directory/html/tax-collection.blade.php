<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tax Collection</title>
      <link rel="stylesheet" href="{{ asset('landingPage/css/faq.css') }}">
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('landingPage/img/favicon.png') }}" />
     <link rel="stylesheet"
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
              <h3 class="text-center mt-4 d-none d-lg-block">GOMBE STATE INTERNAL REVENUE SERVICE</h3>
  
              <h5 class="text-center d-block d-lg-none">GOMBE STATE INTERNAL REVENUE SERVICE</h5>
            </div>
            <div>
              <!-- <a class="text-dark text-decoration-none" href="#"
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
              <li class="nav-item">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  id="homeDropdownMenuLink"
                  href="{{ route('faq') }}"
                >
                  FAQs</a
                >
              </li>
              

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
    <section class="hero py-2">
      <div class="container position-relative">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0 justify-content-center pt-3">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Tax Collection</li>
        </ol>
        <h4 class="hero-heading" style="font-weight: lighter;">Tax Collection has been classified below under the 3 main tax collection bodies:</h4>
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    TAXES COLLECTED BY STATE GOVERNMENT
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ol>
                      <li>Personal Income Tax in respect of individuals resident in the State
                        (a)Pay-As-You-Earn(PAYE) (b)Direct Taxation(Self-Assessment)</li>
                      <li>Witholding Tax (Individuals Only)</li>
                      <li>Capital Gains Tax (Individuals Only)</li>
                      <li>Stamp Duties on instrument executed by individuals</li>
                      <li>Poola Betting, Lotteries Gaming and Casino Taxes</li>
                      <li>Road Taxes</li>
                      <li>Business premises registration fee in respect of urban and rural areas which includes registration fees and per annum for the renewals as fixed by each state</li>
                      <li>Development Levy (individuals only) not more than 100 per annum on all taxable individuals</li>
                      <li>Naming of street registration fees in the State Capital</li>
                      <li>Right of Occupancy fees on lands owned by the State Government in urban areas of the State</li>
                      <li>Market Taxes and Levies where State finance is involved</li>
                      <li>Land use Charge, where applicable</li>
                      <li>Entertainment Tax, where applicable</li>
                      <li>Environmental (Ecological) fee or levy</li>
                      <li>Mining, milling and quarrying fee, where applicable</li>
                      <li>Hotel, Restaurant or Event Centre Consumption Tax, where applicable</li>
                      <li>Animal Trade Tax, where applicable</li>
                      <li>Produce Sales Tax, where applicable</li>
                      <li>Slaughter or Abattoir fees, where applicable</li>
                      <li>Infrastructure Maintenance Charge or levy, where applicable</li>
                      <li>Fire Service Charge</li>
                      <li>Property Tax, where applicable</li>
                      <li>Economic Development Levy, where applicable</li>
                      <li>Social Services Contribution Levy, where applicable</li>
                      <li>Signage and Mobile Advertisment, jointly collected by the State and Local Government</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    TAXES AND LEVIES TO BE COLLECTED BY LOCAL GOVERNMENT
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ol>
                      <li>Shops and Kiosks rates</li>
                      <li>Tenement rates</li>
                      <li>On and Off Liquor License fees</li>
                      <li>Slaughter slab fees</li>
                      <li>Marriage, birth and death registration fees</li>
                      <li>Naming of street registration fees, excluding any street in the State Capital</li>
                      <li>Right of Occupancy fees on lands in the rural areas, excluding those collectible by the Federal  and State Governments.</li>
                      <li>Markets taxes and levies excluding any market where State finance is involved</li>
                      <li>Motor park levies</li>
                      <li>Domestic animal license fees</li>
                      <li>Bicycle, truck canoe wheelbarrow and cart fees, other than a mechanically propelled truck</li>
                      <li>Cattle tax payable by cattle farmers only</li>
                      <li>Merriment and road closure</li>
                      <li>Radio and television license fees (other than radio and television transmitter)</li>
                      <li>Vehicle radio license</li>
                      <li>Wrong parking charges</li>
                      <li>Public convenience, sewage and refuse disposal fees.</li>
                      <li>Customary burial grounds permit fees</li>
                      <li>Religious places establishment permit fees.</li>
                      <li>Signboard and Advertisement permit fees.</li>
                      <li>Wharf Landing Charge, where applicable</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    TAXES COLLECTED BY FEDERAL GOVERNMENT
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ol>
                      <li>Companies Income Tax</li>
                      <li>Witholding Tax on companies and residents of the Federal Capital Territory and non-resident individuals</li>
                      <li>Petroleum Profit Tax</li>
                      <li>Value Added Tax</li>
                      <li>Education Tax</li>
                      <li>Capital Gains Tax on the residents of the Federal Capital Territory, bodies corporate and non-resident individuals</li>
                      <li>Stamp Duties on bodies corporate and residents of the Federal Capital Territory</li>
                      <li>Personal Income Tax in respect of: (a)Members of the Armed Forces of the Federation (b)Members of the Nigerian Police Force (c)Residents of the Federal Capital Territory (d)Stahh of the Ministry of Foreign Affairs and non-resident individuals</li>
                      <li>National Information Technology Development Levy</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                GOMBE STATE INTERNAL REVENUE SERVICE
              </div>
              <img
                src="img/logo.jpg"
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
                    ><i class="fab fa-facebook"></i
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
                    <a class="text-muted" href="{{ route('home') }}">HOME</a>
                  </li>
                  <li><a class="text-muted" href="{{ route('about') }}">ABOUT</a></li>
                  <li><a class="text-muted" href="{{ route('verify') }}">VERIFY RECEIPT</a></li>
                  <li><a class="text-muted" href="{{ route('contact') }}">CONTACT US</a></li>
                  <li><a class="text-muted" href="{{ route('faq') }}">FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
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
