<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('6', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 6</title>
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
    color: pink; /* Change color on hover */
  }
</style>
</head>
<body>

<center><strong><h2>Jeep Wrangler</strong></center></h2>
<center><img src="car 7.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 62 LAKHS - 66 LAKHS/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> Jeep <br/>
    <b>Model year:</b> 2024 <br/>
    <b>Color options:</b> 10 <br/>
    <b>Seater:</b> 5
  </li>
  <li>The Jeep Wrangler offers colors like Firecracker Red, Billet Silver, Granite Crystal, etc. Its engine options typically include a 3.6L V6 or a 2.0L turbocharged inline-four, providing rugged performance on and off-road.</li>
  <li>The Jeep Wrangler is a series of compact and mid-size four-wheel drive off-road SUVs manufactured by Jeep since 1986, and currently in its fourth generation. The Wrangler JL, the most recent generation, was unveiled in late 2017 and is produced at Jeep's Toledo Complex. The Wrangler is a direct progression from the World War II Jeep, through the CJ (Civilian Jeeps) produced by Willys, Kaiser-Jeep, and American Motors Corporation (AMC) from the mid-1940s through the 1980s. Although neither AMC nor Chrysler (after it purchased AMC in 1987) have claimed that the Wrangler was a direct descendant of the original military model — both the CJ Jeeps and the conceptually consistent Wrangler, with their solid axles and open top, have been called the Jeep model as central to Jeep's brand identity as the rear-engine 911 is to Porsche.</li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
