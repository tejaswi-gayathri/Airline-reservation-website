<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<style>
#content ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

#new li a {
    display: block;
    color: #404040;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#new li a:hover:not(.active1) {
    background-color: gray;
}

#new li a.active1 {
    color: white;
    background-color: #404040;
}
table {
	border-collapse: collapse;
	width:100%;
	border:1px solid white;
	text-align:center;
}
th{
	padding:15px;
	padding-bottom: 1.0em;
	padding-top : 1.0em;
    text-align:center;
}
  #kim{
	padding:15px;
	padding-bottom: 1.0em;
	padding-top : 1.0em;
    text-align:center;
	border-collapse: collapse;
	border-bottom : 1px solid ;
}
.disabled{
	opacity: 0.6;
	cursor:not-allowed;
}
</style>
</head>
<body id="page5">
<?php
$con = mysqli_connect("localhost","root","","wp");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!empty($_POST)){
if(isset($_POST['origin'])){ $origin = $_POST['origin'];}
if(isset($_POST['destination'])){ $destination = $_POST['destination'];}
if(isset($_POST['departdate'])){ $departdate = $_POST['departdate'];}
if(isset($_POST['returndate'])){ $returndate = $_POST['returndate'];}
if(isset($_POST['noofpass'])){ $noofpass = $_POST['noofpass'];}
}

$result = mysqli_query($con,"SELECT * FROM flight1 where origin = '$origin' AND destination = '$destination'");
$origin = array();
$destination = array();
$flightno = array();
$departure = array();
$arrival = array();
$fare = array();
$date = array();

$i=0;$count=0;
while($rowval = mysqli_fetch_array($result))
{
$origin[$i]= $rowval['origin'];
$destination[$i]= $rowval['destination'];
$flightno[$i]= $rowval['flightno'];
$departure[$i]= $rowval['departure'];
$arrival[$i]= $rowval['arrival'];
$fare[$i]= $rowval['fare'];
$date[$i]= $rowval['date'];
$i++;
$count=$i;
}  
mysqli_close($con);
?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li style="color:black;"><a href="index_guest.html" style="height:25px;padding-top:7px;">Home</a></li>
							<li><a href="index_guest_about.html" style="height:25px;padding-top:7px;">About Us</a></li>
							<li><a href="login.html" style="height:25px;padding-top:7px;">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			COMFORT<span>Guaranteed</span><p></p>
		</div>
	</div>
<!-- / header -->
</div>

<div class="main">
<!-- content -->
	<section id="content">
    <nav>
	 <ul id="new">
       <li><a class="active1" href="#">Flight Details</a></li>
     </ul>
	</nav>
	
<div>
	<table style="color:black;border-style:groove; height:150px;width:100%; margin-top: 40px; margin-bottom:30px;">
        <tr style="color:black;background-color:#47478D; padding-top: 55px;">
		 <th>Origin</th>
		 <th>Destination</th>
		 <th>Flightno</th>
		 <th>Depart Time</th>
		 <th>Arrival Time</th>
		 <th>Fare</th>
		 <th>Date</th>
		</tr>
		<?php
		    $i=0;
			echo "<tr id=\"kim\">
			<td id=\"kim\"> $origin[$i]</td>
			<td id=\"kim\"> $destination[$i]</td>
			<td id=\"kim\"> $flightno[$i]</td>
			<td id=\"kim\"> $departure[$i]</td>
			<td id=\"kim\"> $arrival[$i]</td>
			<td id=\"kim\"> $fare[$i]</td>
			<td id=\"kim\"> $date[$i]</td>
			</tr>";
			$i++;
			while($i<$count){
			echo "<tr id=\"kim\">
			<td id=\"kim\"> $origin[$i]</td>
			<td id=\"kim\"> $destination[$i]</td>
			<td id=\"kim\"> $flightno[$i]</td>
			<td id=\"kim\"> $departure[$i]</td>
			<td id=\"kim\"> $arrival[$i]</td>
			<td id=\"kim\"> $fare[$i]</td>
			<td id=\"kim\"> $date[$i]</td>
			</tr>";
			$i++;
			}
		?>		
    </table>
	<h2>You have to login to book tickets and enjoy further comforts of our website.</h2>
</div>
</section>
<!-- / content -->
</div>

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

