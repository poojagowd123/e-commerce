<?php 
include 'config.php';

$sql = "DELETE FROM cart WHERE cusid = '".$_GET['cusid']."' AND pid = '".$_GET['pid']."'";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:cart.php");
}else{
    echo "<script>alert('Error occured')</script>";
}

?>