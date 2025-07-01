<?php
include 'connection.php';




$payment_successful = process_payment($_GET["studentid"], $_POST["payment_data"]); // Assuming payment data comes from a form

if ($payment_successful) {
  header("Location: receipt.php?id=<?php echo $sid?>" . $_GET["id"]);
} else {
  echo "Payment failed. Please try again.";
}





?>



