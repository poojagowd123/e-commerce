<?php
include 'config.php';
if(!isset($_COOKIE["username"])){
    header("Location: login page.php");
}else{
    session_start();
}
?>
<html>
<head>
<title>CARS</title>
<font face="Consolas" size=5 color="black">
<center><b><h2 class="rounded box">Cart</h2></b> <br/><br/></center>
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

  img {
    width: 150px;
    height: auto;
    border-radius: 10px; 
 box-shadow: 0 0 10px black; 
  }
</style>
</head>
<body>
<b>
<table border="1">
<tr>
<th>Image</th>
<th>Name</th>
<th>Model</th>
<th>Amount</th>
<th>Quantity</th>
<th></th>
</tr>
<?php
$sql = "SELECT * FROM cart WHERE cusid='".$_COOKIE["uid"]."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $pid = $row["pid"];
        $sql = "SELECT * FROM car WHERE carid='$pid'";
        $result2 = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result2) > 0){
            $row2 = mysqli_fetch_assoc($result2);
            echo "<tr>";
            echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row2['pic'] ).'" alt="car"/></td>';
            echo "<td><h5>".$row2["name"]."</h5></td>";
            echo "<td><h6>".$row2["model"]." Model</h6></td>";
            echo "<td><h6>₹".$row2["amount"]."</h6></td>";
            echo "<td><h6>".$row["qnty"]."</h6></td>";
            echo "<td><a href ='remove.php?cusid=".$_COOKIE["uid"]."&pid=".$pid."'>Remove</td>";
            echo "</tr>";
        }
    }
}
?>
</table>
</b>
</body>
</html>
