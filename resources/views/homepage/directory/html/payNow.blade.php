<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pay Now</title>
    <link rel="stylesheet" href="{{ asset('landingPage/css/about.css') }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />-->

 <link href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
   

<style>
    .login {
  color: #000;
  text-transform: uppercase;
  letter-spacing: 2px;
  display: block;
  font-weight: bold;
  font-size: x-large;
}

.card {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 350px;
  width: 100%;
  flex-direction: column;
  gap: 35px;
  background: #e3e3e3;
  box-shadow: 16px 16px 32px #c8c8c8,
        -16px -16px 32px #fefefe;
  border-radius: 8px;
}

.card2 {
  display: flex;
  justify-content: center;
  align-items: left;
  min-height: 350px;
  width: 100%;
  padding: 30px;
  flex-direction: column;
  gap: 35px;
  background: #e3e3e3;
  box-shadow: 16px 16px 32px #c8c8c8,
        -16px -16px 32px #fefefe;
  border-radius: 8px;
}

.inputBox {
  position: relative;
  width: 80%;
}

.inputBox input, select, textarea {
  width: 100%;
  padding: 10px;
  outline: none;
  border: none;
  color: #000;
  font-size: 1em;
  background: transparent;
  border-left: 2px solid #000;
  border-bottom: 2px solid #000;
  transition: 0.1s;
  border-bottom-left-radius: 8px;
}

.inputBox span {
  margin-top: -10px;
  position: absolute;
  left: 0;
  transform: translateY(-4px);
  margin-left: 10px;
  padding: 10px;
  pointer-events: none;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 3px;
  border-radius: 8px;
}

.inputBox input:valid~span,
.inputBox input:focus~span {
  transform: translateX(113px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: green;
  letter-spacing: 0.2em;
  color: #fff;
  border: 2px;
}
.inputBox textarea:valid~span,
.inputBox textarea:focus~span {
  transform: translateX(113px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: green;
  letter-spacing: 0.2em;
  color: #fff;
  border: 2px;
}
.inputBox .choices__inner:focus-within,
    .inputBox .choices__inner.valid {
      border: 2px solid #000;
      border-radius: 8px;
    }

     .choices__inner:focus-within~span,
     .choices__inner.valid~span {
      transform: translateX(113px) translateY(-15px);
      font-size: 0.8em;
      padding: 5px 10px;
      background: green;
      letter-spacing: 0.2em;
      color: #fff;
      border: 2px solid transparent;
    }

.inputBox input:valid,
.inputBox input:focus {
  border: 2px solid #000;
  border-radius: 8px;
}
.inputBox textarea:valid,
.inputBox textarea:focus {
  border: 2px solid #000;
  border-radius: 8px;
}


.enter {
  height: 45px;
  width: 100px;
  border-radius: 5px;
  border: 2px solid green;
  cursor: pointer;
  background-color: transparent;
  transition: 0.5s;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 2px;
  margin-bottom: 1em;
}

.enter:hover {
  background-color: rgb(0, 0, 0);
  color: white;
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
            <h3 class="text-center d-none d-lg-block">GOMBE STATE INTERNAL REVENUE SERVICE</h3>

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
    <header class="header pb-3">
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

    <div class="container">
            <form action="/generate-rrr" method="post">
                 @csrf
             <div class="card">
                 
        <a class="login">Pay Now</a>
        <div class="inputBox">
            <input type="text" placeholder="" id="taxpayerName" name="taxpayer_name" autocomplete="off" required>
            <span class="user">Tax Payer</span>
        </div>
      <div class="inputBox">
    <select name="agency_id" id="agencyId" required>
        <option value="">Agency Name</option>
        @foreach($agencies as $id => $agencyName)
        <option value="{{ $id }}">{{ $agencyName }}</option>
        @endforeach
    </select>
    <!--<span class="user">Select Agency Name</span>-->
</div>

<div class="inputBox">
    <select name="revenue_item_id" id="revenueItemId" required>
        <option> Select </option>
    </select>
    <span class="user">Revenue Item Name</span>
</div>

        <div class="inputBox" style="display: none;">
            <input type="number" placeholder="" id="gtin" name="gtin" autocomplete="off" required>
            <span class="user">GTIN</span>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="" id="phoneNumber" name="phoneNumber" autocomplete="off" required>
            <span class="user">Phone Number</span>
        </div>
        <div class="inputBox">
            <input type="email" placeholder="" id="email" name="email" autocomplete="off" required>
            <span class="user">Email</span>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="" id="address" name="address" autocomplete="off" required>
            <span class="user">Address</span>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="" id="amount1" name="amount" autocomplete="off" maxlength="15" required>
            <span class="user">Amount</span>
        </div>
        <div class="inputBox">
            <textarea placeholder="" id="details" name="details" autocomplete="off" required></textarea>
            <span class="user">Details</span>
        </div>

        <button class="enter" type="button" id="kt_new_password_submit" onclick="generateRRR()">Pay</button>
    </div>
        </div>
        </form>

        <div class="container" style="display: none;">
            <div class="card2">
                <div id="invoiceDetailsSection">
                            
                    <h4>Taxpayer Name: <span id="Name"></span></h4>
                    <h4>Revenue Item Name: <span id="revenueItemName"></span></h4>
                    <h4>Agency Name: <span id="agencyName"></span></h4>
                    <h4>Amount: <span id="amount"></span></h4>
                    <h4>Status: <span id="status"></span></h4>
                </div>
            </div>
        </div>
     
    </div>

   






     <!-- Footer-->
     <footer class="position-relative z-index-10 d-print-none mt-3">
        <!-- Main block - menus, subscribe form-->
        <div class="py-6 bg-gray-200 text-muted">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="fw-bold text-uppercase text-dark text-center">
                  GOMBE STATE INTERNAL REVENUE SERVICE
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

      <script>var hostUrl = "assets/";</script>
      <!--begin::Global Javascript Bundle(mandatory for all pages)-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>-->
      <script src="assets/plugins/global/plugins.bundle.js"></script>
      <script src="assets/js/scripts.bundle.js"></script>
      <script src="https://checkout.squadco.com/widget/squad.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
      
      

    
      <script type="text/javascript">
     
      
      $(document).ready(function() {
    $(document).on('change', '[name="agency_id"]', function () {
        console.log('Agency dropdown change event triggered');
        var agencyId = $(this).val();
        var $revenueItemDropdown = $('#revenueItemId'); // Directly target the revenue item dropdown
        var $agencyDropdown = $(this); // Reference to the agency dropdown

        // Make an AJAX request to fetch revenue items based on the selected agency
        $.ajax({
            url: '/get-revenue-item', // Change this URL to your actual route
            method: 'POST',
            data: { agency_id: agencyId, _token: '{{ csrf_token() }}' },
            success: function (data) {
                console.log('AJAX request successful. Response:', data);
                

                // Ensure the data has the expected structure
                if (Array.isArray(data) && data.length > 0) {
                    // Clear existing options in the revenue item dropdown
                    $revenueItemDropdown.empty();

                    // Populate revenue items
                    data.forEach(function (revenueItem) {
                        // Ensure 'revenue_item' property exists before appending
                        if (revenueItem.revenue_item) {
                            $revenueItemDropdown.append('<option value="' + revenueItem.id + '">' + revenueItem.revenue_item + '</option>');
                        }
                    });

                    // Update the selected agency name in the dropdown
                    var selectedAgencyName = $agencyDropdown.find('option:selected').text(); // Retrieve the text of the selected option
                    console.log('Selected agency name:', selectedAgencyName);
                    var $selectedOption = $agencyDropdown.find('option:selected');
                    $selectedOption.val(selectedAgencyName).text(selectedAgencyName);
                    console.log('Agency dropdown updated');
                    
                   
                    
                } else {
                    console.error('Unexpected data structure or empty data array:', data);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX request failed:', status, error);
            }
        });
    });
});







      
      document.addEventListener('DOMContentLoaded', function () {
    const element = document.getElementById('agencyId');
    const choices = new Choices(element, {
      searchEnabled: true,
      itemSelectText: '',
      noResultsText: 'No results found',
      noChoicesText: 'No choices available',
    });
});
      
      function generateUniqueNumber() {
            var randomNumber = Math.floor(Math.random() * 10000000); // Generate a random number
            var formattedNumber = ('0000000' + randomNumber).slice(-7); // Ensure the number has 7 digits
            return formattedNumber;
        }

        window.onload = function() {
            var generatedNumber = generateUniqueNumber();
            var inputField = document.getElementById('gtin');
            inputField.value = generatedNumber; // Set the input field value to the generated number
        };
      
function initiatePayment() {
    
      
     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Retrieve form data
    const taxpayerName = document.getElementById("taxpayerName").value;
    const agencyId = document.getElementById("agencyId").value;
    const revenueItemId = document.getElementById("revenueItemId").value;
    const gtin = document.getElementById("gtin").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const email = document.getElementById("email").value;
    const address = document.getElementById("address").value;
    const amount = document.getElementById("amount1").value;
    
   

    // Send AJAX request to Laravel route
    $.ajax({
        url: "{{ route('process.payment') }}",
        type: "POST",
        data: {
            taxpayerName: taxpayerName,
            agencyId: agencyId,
            revenueItemId: revenueItemId,
            revenue: revenue,
            gtin: gtin,
            phoneNumber: phoneNumber,
            email: email,
            address: address,
            amount: amount,
        },
         headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        dataType: "json",
        success: function(response) {
            // Handle success response
            console.log(response);
            // Initialize payment with the sanitized transaction reference
            initializePayment(response.transactionRef);
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error(error);
        }
    });
}


function initializePayment(transactionRef) {
    // Initialize payment with the provided transaction reference
    const squadInstance = new squad({
        onClose: () => console.log("Widget closed"),
        onLoad: () => console.log("Widget Sq loaded successfully"),
        onSuccess: (response) => {
            // Update payment status using AJAX or other method
            updatePaymentStatus(transactionRef);
            // Send SMS
            sendSMS(response.amount, response.transaction_ref);
        },
        key: "pk_1b4d7652d5d7f4f2db2c2920093b42a78dd79e4d",
        email: document.getElementById("email").value,
        amount: document.getElementById("amount1").value * 100, // Multiply by 100 if amount is in NGN
        transaction_ref: transactionRef,
        customer_name: document.getElementById("taxpayerName").value,
        currency_code: "NGN", // Adjust currency code if needed
    });

    // Open payment widget
    squadInstance.setup();
    squadInstance.open();
}

function generateRRR() {
    // Collect user input
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var taxpayerName = document.getElementById('taxpayerName').value;
    var agencyId = document.getElementById('agencyId').value;
    var revenueItemId = document.getElementById('revenueItemId').value;
    var gtin = document.getElementById('gtin').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var amount = document.getElementById('amount1').value;
    var details = document.getElementById('details').value;
    
    
     if (!email) {
        email = "info@gombeirs.com";
    }
    
    if(!details){
        details = "Making Tax Payment"
    }

    // Prepare data object to be sent in the request
    var requestData = {
        taxpayerName: taxpayerName,
        agencyId: agencyId,
        revenueItemId: revenueItemId,
        gtin: gtin,
        phoneNumber: phoneNumber,
        email: email,
        address: address,
        amount: amount,
        details: details
    };

    // Make AJAX POST request to your backend
    $.ajax({
        url: '/generate-rrr', // Replace with your backend endpoint URL
        type: 'POST',
        data: requestData,
        dataType: 'json',
        headers: {
        'X-CSRF-TOKEN': csrfToken
    },
        success: function(response) {
           
        
            console.log("RRR generated successfully:", response);
             window.location.href = response.invoice_url;
        },
        error: function(xhr, status, error) {
            // Handle error response from backend
            console.error("Error generating RRR:", error);
            // Display error message to the user or take appropriate action
        }
    });
}



        //   $(document).ready(function () {
        //       $("#kt_new_password_submit").click(function () {
        //           var invoiceId = $("input[name='receipt_reference']").val();
      
        //           $.ajax({
        //               url: '/receipt/' + invoiceId,
        //               type: 'GET',
        //               success: function (response) {
        //                   if (response.success) {
        //                       // Update the displayed details
        //                       $("#agencyName").text(response.invoice.agency_name);
        //                       $("#revenueItemName").text(response.invoice.revenue_item_name);
        //                       $("#Name").text(response.invoice.taxpayer_name);
                             
        //                       $("#status").text(response.invoice.status);
        //                       $("#amount").text(response.invoice.rate);
                              
      
        //                       // Show the details section
        //                       $("#invoiceDetailsSection").show();
        //                   } else {
        //                       alert('Invoice not found');
        //                   }
        //               },
        //               error: function (xhr, status, error) {
        //                   alert('Error: ' + error);
        //               }
        //           });
        //       });
        //   });
        
      </script>
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
  
