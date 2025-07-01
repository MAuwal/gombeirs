<?php
require 'connection.php';



if(isset($_GET['studentid'])){
    $studentid = $_GET['studentid'];
// Retrieve student information based on studentid
$sql = "SELECT * FROM studentInfo WHERE studentid = $studentid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  // Extract information from the fetched row
  $refNo = $row["refNo"];
  $firstName = $row["firstName"];
  $purpose = $row["purpose"];
  $amount = $row["amount"];
  $dateTime = $row["dateTime"];
  // ... other details
} else {
  echo "Error: Could not retrieve student information.";
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Receipt</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <style>
    h1, h3{
      text-align: center;
    }
    h4{
      text-align: right;
    }
    img{
      width: 120px;
      height: 100px
    }
    .head{
      dispaly: flex;
    }
    table{
    border-radius: 20px;
    border: 1px solid black;
    margin-top: 30px !important;
    width: 100% !important;
    background-color: rgba(255, 255, 255, 0.895) !important;
    padding: 50px;
    }
    td, th{
      border: 1px solid black;
      padding: 10px;
    }
   </style>
  </head>
<body>
    <div class="container">
      <div class="head">
      <img src="images/logo.png" alt="">
        <h1>College of Nursing Sciences</h1>
        <h3>Gombe, Nigeria</h3>
        <h4>Payment Receipt</h4>

      </div>
      

    
    
  <table>
    <tr>
      <td><b>Reference Number:</b></td>
      <td><?php echo $refNo; ?></td>
    </tr>
    <tr>
      <td><b>Student Name:</b></td>
      <td><?php echo $firstName; ?></td>
    </tr>
    <tr>
      <td><b>Purpose:</b></td>
      <td><?php echo $purpose; ?></td>
    </tr>
    <tr>
      <td><b>Amount Paid:</b></td>
      <td><?php echo $amount; ?></td>
    </tr>
    <tr>
      <td><b>Date:</b></td>
      <td><?php echo $dateTime; ?></td>
    </tr>
    <tr>
      <th>
        <b>
          Total (NGN):
        </b>
      </th>
      <th><?php echo $amount; ?></th>
    </tr>
  </table>

  </div>
  </body>
</html>
