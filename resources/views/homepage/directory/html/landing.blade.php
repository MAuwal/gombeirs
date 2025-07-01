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
    <link rel="stylesheet" href=" {{ asset('landingPage/vendor/magnific-popup/magnific-popup.css') }}" />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('landingPage/css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('landingPage/css/custom.css') }}" />
    <link rel="stylesheet" href="">
    <!-- Favicon-->
    <link rel="shortcut icon" href=" {{ asset('landingPage/img/favicon.png') }}" />
 
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
          
          <!--<div><p style="color: #fff; font-size: 12px; margin-top: 20px; font-weight: 700;">WELCOME GOMBE STATE INTERNAL REVENUE SERVICE</p></div>-->
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
                  <!--<a href="#">PAYEE</a>-->
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
           src="{{ asset('landingPage/img/GIRS images/GIRS images//banner4.jpg') }}"
            alt="Los Angeles"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
        <div class="carousel-item">
          <img
           src="{{ asset('landingPage/img/GIRS images/GIRS images/banner5.jpg') }}"
            alt="New York"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
        <div class="carousel-item ">
          <img
           src="{{ asset('landingPage/img/GIRS images/GIRS images/banner2.jpg') }}"
            alt="Chicago"
            class="d-block"
            style="width: 100%; height: 500px"
          />
        </div>
        <!--<div class="carousel-item ">-->
        <!--  <img-->
        <!--   src="{{ asset('landingPage/img/GIRS images/GIRS images/banner6.jpg') }}"-->
        <!--    alt="people"-->
        <!--    class="d-block"-->
        <!--    style="width: 100%; height: 500px"-->
        <!--  />-->
        <!--</div>-->
      
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

    <section class="py-5 bg-white">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-12">

            <h2 class="text-center">Our Services At GIRS</h2>

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
                  <a class="text-dark" href="about.html"
                    >Personal Income Tax
                  </a>
                </h5>
                <p class="my-2 text-muted text-sm">
                  Personal Income Tax is a government imposed direct tax on individual income

                </p>
                <!-- <a class="btn btn-link ps-0" href="about.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a> -->
              </div>
            </div>
          </div>

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

                  Direct Assessment Tax focuses on self employed, including professionals, contractors, traders and landlords.

                </p>
                <!-- <a class="btn btn-link ps-0" href="post.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a> -->
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
                  Withholding Tax is a Tax Deduction system where a percentage of income is withheld by the payer at the source before payment to the recipient.
                </p>
                <!-- <a class="btn btn-link ps-0" href="post.html"
                  >Read more<i class="fa fa-long-arrow-alt-right ms-2"></i
                ></a> -->
              </div>
            </div>
          </div>
          <!-- blog item-->
          
        </div>
      </div>
    </section>
    
     <section class="container py-2">
    <div class="row">

      <h2 id="videos" class="text-center">Video Guides</h2>
        <div class="col-md-6 col-lg-6 pb-5">
          <video width="100%" height="100%" controls>
            <source src="{{ asset('landingPage/HausaFull.mp4') }}" type="video/mp4">
          </video>

          <h5 class="text-center pb-4">Hausa Version</h5>
        </div>

        <div class="col-md-6 col-lg-6 pb-5">
          <video width="100%" height="100%" controls>
            <source src="{{ asset('landingPage/CompilationEnglish.mp4') }}" type="video/mp4">
          </video>

          <h5 class="text-center pb-4">English Version</h5>
          </div>

    </div>
</section>

   <section class="py-4 bg-gray-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="text-center mb-5">Our Key Responsibilities At GIRS</h1>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="card bg-green mb-4">
              <img
              class="card-img-top mt-5 p-4"
             src="{{ asset('landingPage/./icons/GIRS icons/GIRS icons/icons8-justice-100.png') }}"
              alt="Card image"
            />
              <p class="text-center text-white">ENFORCE</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="card bg-green mb-4">
              <img
                  class="card-img-top mt-5 p-4"
                 src="{{ asset('landingPage/./icons/GIRS icons/GIRS icons/icons8-assessment-100.png') }}"
                  alt="Card image"
                />
              <p class="text-center text-white">CONDUCT</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="card bg-green mb-4">
              <img
              class="card-img-top mt-5 p-4"
             src="{{ asset('landingPage/./icons/GIRS icons/GIRS icons/icons8-manage-100.png') }}"
              alt="Card image"
            />
              <p class="text-center text-white">OVERSEE</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="card bg-green mb-4">
              <img
                  class="card-img-top mt-5 p-4"
                 src="{{ asset('landingPage/./icons/GIRS icons/GIRS icons/icons8-collaborate-100.png') }}"
                  alt="Card image"
                />
              <p class="text-center text-white">COLLABORATE</p>
            </div>
          </div>
    
            <div class="col-lg-2 col-md-3 col-sm-4">
              <div class="card bg-green mb-4">
                <img
                class="card-img-top mt-5 p-4"
               src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/icons8-refresh-100 (1).png') }}"
                alt="Card image"
              />
                <p class="text-center text-white">REVIEW</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Start Section -->
    <section id="tax_matters" class="container py-5">
      <div class="row text-center pt-5 pb-3">
          <div class="col-lg-6 m-auto">
              <h1 class="h1 mb-4">Tax Matters</h1>
              <!-- <p>
                  
              </p> -->
          </div>
      </div>
      <div class="row">

          <div class="col-md-6 col-lg-4 pb-5">
            <a class="text-dark" href="{{ route('taxDocument') }}">
              <div class="h-100 py-5 services-icon-wap shadow">
                  <div class="h1 text-success text-center"><img src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/GIRS_ tax documents.png') }}" alt=""></div>
                  <h2 class="h5 mt-4 text-center">Tax Forms</h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 pb-5">
              <a class="text-dark" href="{{ route('taxCollection') }}">
                <div class="h-100 py-5 services-icon-wap shadow">
                  <div class="h1 text-success text-center"><div class="h1 text-success text-center"><img src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/GIRS_ tax collection.png') }}" alt=""></div></div>
                  <h2 class="h5 mt-4 text-center">Tax Collection</h2>
              </div>
              </a>
          </div>

          <div class="col-md-6 col-lg-4 pb-5">
            <a class="text-dark" href="{{ route('taxSystem') }}">
              <div class="h-100 py-5 services-icon-wap shadow">
                  <div class="h1 text-success text-center"><div class="h1 text-success text-center"><img src="{{ asset('landingPage/icons/GIRS icons/GIRS icons/GIRS_ tax systems.png') }}" alt=""></div></div>
                  <h2 class="h5 mt-4 text-center">Tax Systems</h2>
              </div>
            </a>
          </div>

      </div>
  </section>
  <!-- End Section -->

   <!-- Start Section -->
   <section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1 mb-4">Important Documents</h1>
            <!-- <p>
                
            </p> -->
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-6 pb-5">
          <a class="text-dark" href="{{ asset('landingPage/download/CODIFICATION.xlsx') }}" class="text-black" Download>
            <div class="h-70 py-5 services-icon-wap" style="border: 2px solid rgb(80, 239, 0); border-radius: 10px;">
                <!-- <div class="h1 text-success text-center"><i class="fa fa-file fa-lg"></i></div> -->
                <h2 class="h5 mt-4 text-center">GOMBE STATE CODIFICATION</h2>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-6 pb-5">
            <a class="text-dark" href="{{ asset('landingPage/download/Gombe_disputes.pdf') }}" class="text-black" Download>
              <div class="h-70 py-5 services-icon-wap" style="border: 2px solid rgb(80, 239, 0); border-radius: 10px;">
                <!-- <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div> -->
                <h2 class="h5 mt-4 text-center">GOMBE TAX DISPUTE RESOLUTION</h2>
            </div>
            </a>
          </div>

    </div>
</section>
<!-- End Section -->

    <!-- Divider Section-->
    <section class="py-7 position-relative dark-overlay">
      <img
        class="bg-image"
       src="{{ asset('landingPage/img/GIRS images/GIRS images/banner1.jpg') }}"
        alt=""
      />
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
          <h3 class="display-4 fw-bold text-serif text-shadow mb-5 text-center">
            Contribute and witness the transformation in Gombe State.
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
    
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
