<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('7', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 7</title>
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
    color: pink; 
  }
</style>
</head>
<body>

<center><strong><h2>Mahindra Scorpio N</strong></center></h2>
<center><img src="car 8.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 13 LAKHS - 24 LAKHS/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> Mahindra <br/>
    <b>Model year:</b> 2023 <br/>
    <b>Color options:</b> 7 <br/>
    <b>Seater:</b> 6 to 8
  </li>
  <li>The Mahindra Scorpio N is offered in colors like Pearl White, Napoli Black, Molten Red, etc. Its engine is typically a 2.2L mHawk diesel, delivering robust performance and reliability.</li>
  <li>The Mahindra Scorpio is a mid-size SUV (in the Indian market) and Compact SUV (in the Global market) manufactured by the Indian automaker Mahindra & Mahindra since 2002. It was Mahindra's first model to be built for the global market. The Scorpio was conceptualized and designed by the in-house integrated design and manufacturing team of Mahindra & Mahindra. The car has been the recipient of three Indian awards, including the "Car of the Year" award from Business Standard Motoring as well as the "Best SUV of the Year" and the "Best Car of the Year" awards, both from BBC World's Wheels.</li>
</ul>
<center>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</center>
</body>
</html>
