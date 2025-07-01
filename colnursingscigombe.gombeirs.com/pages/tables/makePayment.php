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
  <title>College of Nursing and Midwifery</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
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
            <a class="nav-link" href="../../pages/forms/addStudent.php">
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Make Payment</h4>
                  <div class="table-responsive">
                   <table class="table table-striped">
  <thead>
    <tr>
      <th>Ref. No</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Purpose</th>
      <th>Date/Time</th>
      <th>Amount (NGN)</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM studentinfo";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      // Error handling for failed query
      echo "Error: " . mysqli_error($conn);
    } else {
      // Fetching data from the result set
      while ($row = mysqli_fetch_assoc($result)) {
        $sid = $row['studentid'];
        $refNo = $row['refNo'];
        $fname = $row['firstName'];
        $email = $row['email'];
        $purpose = $row['purpose'];
        $dateTime = $row['dateTime'];
        $amt = $row['amount'];
    ?>
        <tr>
          <td><?php echo $refNo ?></td>
          <td><?php echo $fname ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $purpose ?></td>
          <td><?php echo $dateTime ?></td>
          <td><?php echo $amt ?></td>
          <td><button class="btn btn-success" onclick="initiatePayment(<?php echo $sid ?>, '<?php echo $refNo ?>', '<?php echo $amt ?>')">Make Payment</button></td>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>

                  </div>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
        
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
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
 
 
<script src="https://checkout.squadco.com/widget/squad.min.js"></script>
<script>
function initiatePayment(studentId, refNo, amount) {
    const squadInstance = new squad({
        onClose: () => console.log("Widget closed"),
        onLoad: () => console.log("Widget loaded successfully"),
        
        onSuccess: (response) => {
            console.log("Payment successful:", response);
            console.log("Payment Reference:", response.transaction_ref);

            // Update payment status using AJAX or other method
            // updatePaymentStatus(response.transaction_ref);
            updatePaymentStatus(refNo);
            
             openReceiptPage(response.transaction_ref);
            // You may want to send SMS here
            // sendSMS(response.amount, response.transaction_ref);
            
        },
        key: "pk_1b4d7652d5d7f4f2db2c2920093b42a78dd79e4d", // Your API key
        email: "payments@gombeirs.com", // Your email
        amount: amount * 100, // Convert amount to kobo (100 kobo = 1 NGN)
        transaction_ref: refNo, // Transaction reference
        customer_name: "", // You can add customer's name here if needed
        currency_code: "NGN", // Currency code
    });
    squadInstance.setup();
    squadInstance.open();
}

function openReceiptPage(transactionRef) {
    // Construct the URL for the receipt page
    const receiptUrl = `../../receipt.php?transaction_ref=${transactionRef}`;

    // Open a new window/tab with the receipt page URL
    window.open(receiptUrl, "_blank");
}
</script>

</body>

</html>
