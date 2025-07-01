<?php
session_start();
require '../../connection.php';

// Redirect to login if not logged in
if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        <a class="navbar-brand brand-logo" href="../../index.php"><img class="w-40 h-50" src="../../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
        
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">User</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="../../logout.php" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/addStudent.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Student</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/makePayment.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Make Payment</span>
            </a>
          </li>
        </ul>
      </nav>

      <?php

// Function to generate random string with leading characters
function generateRefNo($prefix, $length) {
  $randomString = str_pad(rand(1, str_pad("", $length, "9")), $length, "0", STR_PAD_LEFT);
  return $prefix . $randomString;
}


// Generate reference number
$refNo = generateRefNo("ND", 12);

// Get current date and time
$dateTime = date("Y-m-d H:i:s"); // Format: YYYY-MM-DD HH:II:SS

// Pre-defined purpose
$purpose = "Screening Fees 2023/2024 Session (Basic Nursing ND/HND)";

// Check if form is submitted
if (isset($_POST['submit'])) {

  // Get form data
  $refNo = $_POST['refNo'];
  $fname = $_POST['fname'];
  $email = $_POST['mail']; // Assuming typo in your code, using mail here
  $purpose = $_POST['purpose'];
  $dateTime = $_POST['date/time'];
  $amt = $_POST['amt'];

   // Validation for existing email
   $email_check = "SELECT * FROM studentinfo WHERE email='$email'";
   $result = mysqli_query($conn, $email_check);
 
   if (mysqli_num_rows($result) > 0) {
     echo '<div class="alert alert-danger">Email already exists! Please use a different email.</div>';
   } else {
     // Prepare and execute SQL statement if email doesn't exist
     $query = "INSERT INTO studentinfo (`refNo`, `firstName`, `email`, `purpose`, `dateTime`, `amount`) VALUES('$refNo', '$fname', '$email', '$purpose', '$dateTime', '$amt')";
     $query_run = mysqli_query($conn, $query);


  if($query_run){

    echo '<div class="alert alert-success">Student Added Successfull <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
  
  }else{
      echo "Failed";
  }
  }
}

?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Student</h4>
                <form lass="mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

               

<script type="text/javascript">
        setTimeout(function () {

            // Closing the alert
            $('.alert').alert('close');
            }, 5000);
            $('#alert').on('closed.bs.alert', function () {
              window.location.href = "index.php";
            });

    </script>

                  <div class="mb-3 mt-3">
              <label for="refNo" class="form-label">Ref. No</label>
              <input type="text" class="form-control" name="refNo" value="<?php echo $refNo; ?>" readonly>
          </div>
                <div class="mb-3 mt-3">
                  <label for="fname" class="form-label">FullName</label>
                  <input type="text" class="form-control" name="fname">
                </div>
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="mail">
                </div>
                <div class="mb-3 mt-3">
                  <label for="purpose" class="form-label">Purpose</label>
                  <input type="text" class="form-control" name="purpose" value="<?php echo $purpose; ?>" readonly>
              </div>
                <div class="mb-3 mt-3">
                  <label for="date/time" class="form-label">Date/Time</label>
                  <input type="text" class="form-control" name="date/time" value="<?php echo $dateTime; ?>" readonly>
              </div>
                <div class="mb-3">
                  <label for="amt" class="form-label">Amount (NGN)</label>
                  <input type="text" class="form-control" name="amt">
                </div>
              
                <button type="submit" name="submit" class="btn btn-primary mt-5">Add Student</button>
              </form>
                </div>
              </div>
            </div>
           
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
