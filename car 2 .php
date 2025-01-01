<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('2', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 2</title>
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

<center><strong><h2> Maruti Suzuki Swift</strong></center></h2>
<center><img src="car 2.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 5 LAKHS - 10 LAKHS/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> Maruti Suzuki <br/>
    <b>Model year:</b> 2024 <br/>
    <b>Color options:</b> 10 <br/>
    <b>Seater:</b> 4
  </li>
  <li>Maruti Suzuki Swift offers colors like red, blue, white, silver, grey. Engine options include a 1.2L petrol or 1.2L DualJet petrol, depending on the market, providing efficient performance and reliability.</li>
  <li>The Maruti Suzuki Swift is a 4 to 5-seater hatchback measuring 3845 mm in length, 1735 mm in width, 1530 mm in height, and a 2450 mm wheelbase. A ground clearance of 163 mm allows the Swift to handle rough patches of road with ease. It's available in both petrol and diesel variants, with engine options ranging from 1.2L to 1.3L, depending on the market. The Swift has gained a reputation for its nimble handling and comfortable ride, making it a popular choice among drivers worldwide.
  </li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
