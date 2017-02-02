<?php
$con = mysqli_connect("localhost","root","","wp");
$name= $_POST['name'];
$password = $_POST['password'];
$statment = "SELECT * from admin WHERE adminid='$name' AND adminpswd='$password' ";
$res = mysqli_query($con, $statment);
if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		//echo "Login Successful...";
		 header("Location: http://localhost/loginregistrationsystem/admin_page.php");
	}
}
$row= mysqli_num_rows($res);
if(!$row)
{
	echo "Invalid Login Details";
}
?>