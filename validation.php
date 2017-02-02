<?php
$con = mysqli_connect("localhost","root","","wp");
$name= $_POST['name'];
$password = $_POST['password'];
$password=md5($password);
$statment = "SELECT uid as id from register WHERE uname='$name' AND password='$password' ";

$res = mysqli_query($con, $statment);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		//echo $arr['id'];
		//echo "Login Successful...";
		header("Location: http://localhost/loginregistrationsystem/index_new.php?id=".$arr['id']);
	}
}
$row= mysqli_num_rows($res);
if(!$row)
{
	$message = "Wrong username/password combination...Try again.";
    echo "<script type='text/javascript'>alert('$message');window.location='http://localhost/loginregistrationsystem/login.html';</script>";
}
?>