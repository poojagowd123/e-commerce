<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('5', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?><!DOCTYPE html>
<html>
<head>
<title>CAR - 5</title>
<style>
  body {
    background-image: url('wallpaper 7.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial, sans-serif;
    color: black;
    text-align: center;
animation: slideFromLeft 1s ease;
  }
@keyframes slideFromLeft {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

  h2 {
    color: black;
    text-shadow: 2px 2px 4px white;
  }

  img {
    width: 300px;
    height: 250px;
    border-radius: 10px;
    box-shadow: 0 0 10px black; /* Adding a black box shadow */
  }

  ul {
    list-style-type: disc;
    text-align: left;
    margin-left: 30px; /* Indent the list */
  }

  h3 {
    color: black;
    text-shadow: 2px 2px 4px white; /* Adjusting the color of h3 elements */
  }

  a {
    color: purple;
    text-decoration: none;
    font-weight: bold;
  }

  a:hover {
    color: pink; /* Change color on hover */
  }
</style>
</head>
<body>

<center><strong><h2>Lamborghini Aventador</strong></center></h2>
<center><img src="car 6.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 5.01 CORES - 5.92 CORES/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> Lamborghini <br/>
    <b>Model year:</b> 2022 <br/>
    <b>Color options:</b> 15 <br/>
    <b>Seater:</b> 2
  </li>
  <li>The Lamborghini Aventador comes in various colors such as Rosso Mars, Blu Nethuns, Verde Ithaca, etc. It's powered by a naturally aspirated V12 engine delivering exhilarating performance and an unforgettable driving experience.</li>
  <li>As with the Murciélago model, the Maternal company Audi used the bullfight concept. In the advertising materials of Lamborghini, it was said that Aventador is a bull who became famous after one of the most bloody battles in Zaragoza, for which he received a "Trofeo de la Peña La Madroñera" which was prestigious award for courage in the arena. LP 700-4 means technical equipment of the car, where 700 is power in hp, and 4 is a full drive.</li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
