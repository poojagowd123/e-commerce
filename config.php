<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,"cars");
if (!$conn) {
    echo "<script>alert('Unable to connect');</script>";
  }
?>