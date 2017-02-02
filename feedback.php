<?php 
$con = mysqli_connect("localhost","root","","wp");
$q1 = $_GET['q1'];
switch($q1)
{
	case '0': $statement1 = "update feedback set q1_1=q1_1 + 1";
	break;
    case '1': $statement1 = "update feedback set q1_2=q1_2 + 1";	
	break;	
	case '2': $statement1 = "update feedback set q1_3=q1_3 + 1";
	break;
}
$q2 = $_GET['q2'];
switch($q2)
{
	case '3': $statement2 = "update feedback set q2_1=q2_1 + 1";
	break;
    case '4': $statement2 = "update feedback set q2_2=q2_2 + 1";		
	break;
	case '5': $statement2 = "update feedback set q2_3=q2_3 + 1";
	break;
}
$q3 = $_GET['q3'];
switch($q3)
{
	case '6': $statement3 = "update feedback set q3_1=q3_1 + 1";
	break;
    case '7': $statement3 = "update feedback set q3_2=q3_2 + 1";		
	break;
	case '8': $statement3 = "update feedback set q3_3=q3_3 + 1";
	break;
}
$q4 = $_GET['q4'];
switch($q4)
{
	case '9': $statement4 = "update feedback set q4_1=q4_1 + 1";
	break;
    case '10': $statement4 = "update feedback set q4_2=q4_2 + 1";
	break;	
	case '11': $statement4 = "update feedback set q4_3=q4_3 + 1";
	break;
}
$q5 = $_GET['q5'];
switch($q5)
{
	case '12': $statement5 = "update feedback set q5_1=q5_1 + 1";
	break;
    case '13': $statement5 = "update feedback set q5_2=q5_2 + 1";		
	break;
	case '14': $statement5 = "update feedback set q5_3=q5_3 + 1";
	break;
}
$q6 = $_GET['q6'];
switch($q6)
{
	case '15': $statement6 = "update feedback set q6_1=q6_1 + 1";
	break;
    case '16': $statement6 = "update feedback set q6_2=q6_2 + 1";
	break;	
	case '17': $statement6 = "update feedback set q6_3=q6_3 + 1";
	break;
}
$q7 = $_GET['q7'];
switch($q7)
{
	case '18': $statement7 = "update feedback set q7_1=q7_1 + 1";
	break;
    case '19': $statement7 = "update feedback set q7_2=q7_2 + 1";
	break;	
	case '20': $statement7 = "update feedback set q7_3=q7_3 + 1";
	break;
}
$res1 = mysqli_query($con ,$statement1);
$res2 = mysqli_query($con ,$statement2);
$res3 = mysqli_query($con ,$statement3);
$res4 = mysqli_query($con ,$statement4);
$res5 = mysqli_query($con ,$statement5);
$res6 = mysqli_query($con ,$statement6);
$res7 = mysqli_query($con ,$statement7);
mysqli_close($con);
?>