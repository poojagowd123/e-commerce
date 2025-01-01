<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('4', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 4</title>
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

<center><strong><h2> Wagon R</strong></center></h2>
<center><img src="car 5.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹6 LAKHS - 8 LAKHS/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> Maruti Suzuki <br/>
    <b>Model year:</b> 2024 <br/>
    <b>Color options:</b> 9 <br/>
    <b>Seater:</b> 4
  </li>
  <li>Wagon R is available in colors like Superior White, Silky Silver, Magma Grey, etc. It typically comes with a 1.0L or 1.2L petrol engine, offering a blend of efficiency and performance.</li>
  <li>The Maruti Suzuki Wagon R (or WagonR) is a city car manufactured and marketed by Suzuki through its subsidiary Maruti Suzuki primarily for the Indian market since 1999. The Wagon R was launched in India on 18 December 1999, and has since undergone several upgrades. The second-generation Wagon R model and styling was also shared with the Karimun Wagon R for the Indonesian market and the Wagon R for the Pakistani market, despite several differences. While initially the Maruti-built Wagon R shared its platform from the Japanese market Wagon R kei car, the third generation Maruti-built Wagon R is unrelated with the later versions of the Wagon R sold in Japan. Instead, the car was built from ground up above the HEARTECT platform.
  </li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
