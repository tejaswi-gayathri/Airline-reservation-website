<?php
$con = mysqli_connect("localhost","root","","wp");
$recharge = $_GET['recharge'];
$id = $_GET['id'];
if(isset($recharge)){
$statment = "UPDATE account set bal=bal+$recharge WHERE uid = '$id'";	
}
$res = mysqli_query($con, $statment);
?>