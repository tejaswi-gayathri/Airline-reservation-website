<?php
$con = mysqli_connect("localhost","root","","wp");
$newfirstname = $_GET['newfirstname'];
$newlastname = $_GET['newlastname'];
$newaddrline1 = $_GET['newaddrline1'];
$newaddrline2 = $_GET['newaddrline2'];
$newcno = $_GET['newcno'];
$newmail = $_GET['newmail'];
$newuname = $_GET['newuname'];
$newpswd = $_GET['newpswd'];
$newpswd = md5($newpswd);
$id = $_GET['id'];

if(isset($newfirstname)){
$statment = "UPDATE register set fname='$newfirstname' WHERE uid = '$id'";
}
else if(isset($newlastname)){
$statment = "UPDATE register set lname='$newlastname' WHERE uid = '$id'";
}
else if(isset($newaddrline1)){
$statment = "UPDATE register set addr1='$newaddrline1' WHERE uid = '$id'";
}
else if(isset($newaddrline2)){
$statment = "UPDATE register set addr2='$newaddrline2' WHERE uid = '$id'";
}
else if(isset($newcno)){
$statment = "UPDATE register set cno='$newcno' WHERE uid = '$id'";
}
else if(isset($newmail)){
$statment = "UPDATE register set email='$newmail' WHERE uid = '$id'";
}
else if(isset($newuname)){
$statment = "UPDATE register set uname='$newuname' WHERE uid = '$id'";
}
else if(isset($newpswd)){
$statment = "UPDATE register set password='$newpswd' WHERE uid = '$id'";
}
$res = mysqli_query($con, $statment);	
?>