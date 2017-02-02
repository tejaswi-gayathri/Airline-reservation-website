<?php 
$con = mysqli_connect("localhost","root","","wp");

$flightno = $_GET['flightno'];

$statement = "delete from flight1 where flightno = '$flightno'";

$res = mysqli_query($con ,$statement);
mysqli_close($con);
?>