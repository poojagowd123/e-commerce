<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO cart (pid, cusid, qnty) VALUES ('3', '".$_COOKIE["uid"]."', '$quantity')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Added to cart');</script>";
    } else {
        echo "<script>alert('Failed to add to cart');</script>";
    }
}
?>
<html>
<head>
<title>CAR - 3</title>
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
    color: pink;
  }
</style>
</head>
<body>

<center><strong><h2> BMW 3 Series</strong></center></h2>
<center><img src="car 4.jpg" width="300" height="250"><br/></center>
<h3>Price: ₹ 41 LAKHS - 52 LAKHS/-</h3>
<ul>
  <h3>Car Description</h3>
  <li>
    <b>Company:</b> BMW <br/>
    <b>Model year:</b> Series 3 <br/>
    <b>Color options:</b> 8 <br/>
    <b>Seater:</b> 5
  </li>
  <li>BMW 3 Series offers colors like Alpine White, Black Sapphire, Mediterranean Blue, and Sunset Orange. Engine options include petrol and diesel variants ranging from 2.0L to 3.0L, providing dynamic performance and efficiency.</li>
  <li>The BMW 3 Series is a renowned luxury compact executive car known for its performance, comfort, and technology. It offers a range of engines including petrol, diesel, and hybrid variants, delivering a balance of power and efficiency. With its elegant design, advanced features, and dynamic driving characteristics, the BMW 3 Series remains a benchmark in its segment, appealing to enthusiasts and practical buyers alike. BMW 3 Series is a 5-seater Sedan with the last recorded price of Rs. 41.40 - 52.90 Lakh. It is available in 9 variants, 1995 to 1998 cc engine options and 1 transmission option: Automatic. The 3 Series is available in 8 colours.
  </li>
</ul>
<p><a href="cars.php">Go Back</a></p>
<form action="#" method="POST">
  <input type="text" name="quantity" value="1" placeholder="Quantity">
  <input type="submit" value="Add to Cart">
</form>
</body>
</html>
