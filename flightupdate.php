<?php 
$con = mysqli_connect("localhost","root","","wp");
$flightno = $_GET['flightno'];

$neworigin = $_GET['neworigin'];
$newdestination = $_GET['newdestination'];
$newdeparture = $_GET['newdeparture'];
$newarrival = $_GET['newarrival'];
$newfare = $_GET['newfare'];
$newdate = $_GET['newdate'];

if(isset($neworigin)){
	$stat = "UPDATE flight1 set origin='$neworigin' WHERE flightno = '$flightno'";
}
else if(isset($newdestination)){
	$stat = "UPDATE flight1 set destination='$newdestination' WHERE flightno = '$flightno'";
}
else if(isset($newdeparture)){
	$stat = "UPDATE flight1 set departure='$newdeparture' WHERE flightno = '$flightno'";
}
else if(isset($newarrival)){
	$stat = "UPDATE flight1 set arrival='$newarrival' WHERE flightno = '$flightno'";
}
else if(isset($newfare)){
	$stat = "UPDATE flight1 set fare='$newfare' WHERE flightno = '$flightno'";
}
else if(isset($newdate)){
	$stat = "UPDATE flight1 set date='$newdate' WHERE flightno = '$flightno'";
}

$res = mysqli_query($con ,$stat);

?>