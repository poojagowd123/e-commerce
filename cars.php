<?php 
include 'config.php';
if (!isset($_COOKIE["username"])) {
    header("Location: login page.php");
}else{
    session_start();
}
?>

<html>
<head>
<title>CARS</title>
<font face="Consolas" size=5 color="black">
<center><b><h2 class="rounded box">Types Of Cars Available</h2></b> <br/><br/></center>
</font>
<style>
h2 {
  color: black;
  text-shadow: 2px 2px 4px white;
}
.rounded {
  border-radius: 100px;
}

.box {
  border: 1px solid black;
  box-shadow: 2px 2px 2px black;
  transition: box-shadow 0.3s ease-in-out;
}

  body {
     background-image: url('wallpaper 6.jpg');
  background-repeat: no-repeat; 
  background-size: cover; 
  font-family: Consolas;
  font-size: 16px;
  color: black;
 animation: fadeInAnimation ease 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
  }
@keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
 
            100% {
                opacity: 1;
            }
        }

  table {
    width: 80%;
    margin: auto;
    border-collapse: collapse;
  }

  td {
    padding: 20px;
    text-align: center;
  }

  td a {
    text-decoration: underline;
    color: black;
  }

  td a:hover {
    color: red; 
  }

  td:hover {
    background-color: lightblue
  }

  img {
    width: 100%;
    height: auto;
    border-radius: 10px; 
 box-shadow: 0 0 10px black; 
  }

  h5, h6 {
    margin: 5px 0;
  }

  button {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: red; 
  }
</style>
</head>
<body>
<b>

<table border="1">
<tr>
<td><a href="car 1 .php"><img src="car 3.jpg" alt="Hyundai Creta"><h5>Hyundai Creta</h5></a><h6>Price: ₹4,00,000</h6></td>
<td><a href="car 2 .php"><img src="car 2.jpg" alt="Maruti Suzuki Swift"><h5>Maruti Suzuki Swift</h5></a><h6>Price: ₹5,00,000/-</h6></td>
<td><a href="car 3 .php"><img src="car 4.jpg" alt="BMW 3 Series"><h5>BMW 3 Series</h5></a><h6>Price: ₹41,00,000</h6></td>
</tr>
<tr>
<td><a href="car 4.php"><img src="Car 5.jpg" alt="Wagon R"><h5>Wagon R</h5></a><h6>Price: ₹5,00,000/-</h6></td>
<td><a href="car 5.php"><img src="car 6.jpg" alt="Lamborghini Aventador"><h5>Lamborghini Aventador</h5></a><h6>Price: ₹50,00,000</h6></td>
<td><a href="car 6.php"><img src="car 7.jpg" alt="Jeep Wrangler"><h5>Jeep Wrangler</h5></a><h6>Price: ₹62,00,000 /-</h6></td>
</tr>
<tr>
<td><a href="car 7.php"><img src="car 8.jpg" alt="Mahindra Scorpio N"><h5>Mahindra Scorpio N</h5></a><h6>Price: ₹15,00,00/-</h6></td>
</table>
<a href="main.html"><button type="button">Click here to go back to main page</button></a>
</b>
</body>
</html>
