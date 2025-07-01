<?php

$host = "localhost";
$dbname = "colnursingsci";
$username = "abdulrahman";
$password = "wluRdwf9ZvQ{";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed: " .mysqli_connect_error());
}

?>