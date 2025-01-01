<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('1', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 1</title>
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

  h1 {
    color: black;
    text-shadow: 2px 2px 4px white;
  }

  img {
    width: 300px;
    height: 250px;
    border-radius: 10px;
    box-shadow: 0 0 10px black; 
  }

  ul {
    list-style-type: disc;
    text-align: left;
    margin-left: 30px; 
  }

  h3 {
    color: black;
    text-shadow: 2px 2px 4px white; 
  }

  a {
    color: purple;
    text-decoration: none;
    font-weight: bold;
  }

  a:hover {
    color: pink; /
  }
</style>
</head>
<body>

<b><center><strong><h1> Hyundai Creta</strong></b></center></h1>
<center><img src="car 3.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 4 LAKHS - 24 LAKHS/-</h3>
<ul>
<h3>Car Description</h3>
<li><b>Company:</b> Hyundai <br/>
    <b>Model year:</b> 2024 <br/>
    <b>Color options:</b> 4 <br/>
    <b>Seater:</b> 5
</li>
<li>Blue - 1.5L petrol, Black - 1.5L diesel, White - 1.4L turbo petrol. Engine options vary by region.</li>
<li>The 2024 Hyundai Creta comes equipped with a 10.25-inch touchscreen infotainment system with Apple CarPlay/Android Auto, a 10.25-inch digital driver's display, dual-zone climate control, a panoramic sunroof, cruise control, and ventilated front seats. It also features connected car tech and a wireless phone charger.</li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
