<?php
session_start();
require 'connection.php';

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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>College of Nursing and Midwifery</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="index.html"
              ><img src="images/logo.png" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"
              ><img src="images/logo.png" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="images/faces/face5.jpg" alt="profile" />
                <span class="nav-profile-name">User</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a href="logout.php" class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>Welcome back,</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="overview-tab"
                          data-bs-toggle="tab"
                          href="#overview"
                          role="tab"
                          aria-controls="overview"
                          aria-selected="true"
                          >Overview</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div
                        class="tab-pane fade show active"
                        id="overview"
                        role="tabpanel"
                        aria-labelledby="overview-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                            <small class="mb-1 text-muted">Total Student</small>
                        <?php
$sql = "SELECT COUNT(*) AS total_students FROM studentinfo";
$query = $conn->prepare($sql);

if ($query) {
    $query->execute();
    $query->bind_result($total_students); // Bind result to variable

    if ($query->fetch()) {
        // Result fetched successfully
        // $total_students variable now holds the total number of students
    } else {
        // Handle error fetching result
        $total_students = 0;
    }
} else {
    // Handle error preparing query
    $total_students = 0;
}
?>

<h4><?php echo htmlentities($total_students); ?></h4>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Recent Purchases</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
  <thead>
    <tr>
      <th>Ref. No</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Purpose</th>
      <th>Date/Time</th>
      <th>Amount (NGN)</th>
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
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
