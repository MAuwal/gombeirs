<?php
// Fetch the watermark from the API
function getWatermark() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://getproict.com.ng/watermark/api',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS =>'{"paymentdate":"2024-06-25","phone":"07066101434","gtin":"6101434333"}',
        CURLOPT_HTTPHEADER => array(
            'authkey: ^LnWuuMz',
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    if ($response) {
        $data = json_decode($response, true);
        return $data['watermark'] ?? null;
    }

    return null;
}

$watermark = getWatermark();

if ($watermark) {
    $mimeType = 'image/jpeg';
    $base64ImageString = 'data:' . $mimeType . ';base64,' . $watermark;
} else {
    $base64ImageString = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABUTH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .watermark {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.1; /* Adjust opacity as needed */
            background-image: url('<?php echo $base64ImageString; ?>');
            background-size: cover;
            z-index: -1; /* Ensure it is behind the text */
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    no-tdirect-heading.
                    <div class="d-inline-flex align-items-center">
                        <!-- <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Shika, Zaria.</p> -->
                        <!-- <span class="text-body">|</span> -->
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i> 07081750333</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@abuth.gov.ng</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body pe-3" href=""><i class="fa fa-map-marker-alt text-primary me-3"></i>Shika, Zaria.</a>

                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <!-- <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>ABUTH</h1> -->
                    <img  src="img/LOGO.jpeg" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link"> ABUTH Home</a>
                        
                        <a href="search.html" class="nav-item nav-link">Patient Care</a>
                        <a href="blog.html" class="nav-item nav-link">News & Events</a>
                        <a href="health.html" class="nav-item nav-link">Health</a>
                        <a href="detail.html" class="nav-item nav-link">Schools</a>
                        <a href="about.html" class="nav-item nav-link active">About</a>
                        <a href="service.html" class="nav-item nav-link">Departments</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="search.html" class="dropdown-item">Search</a>
                            </div>
                        </div> -->
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="watermark"></div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h1>Welcome to ABUTH</h1>
                        <p>This is the about page content with a watermark background.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>