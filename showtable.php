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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function run(){
    document.getElementById('tableid').onclick = function(event){
        event = event || window.event; //for IE8 backward compatibility
        var target = event.target || event.srcElement; //for IE8 backward compatibility
        while (target && target.nodeName != 'TR') {
            target = target.parentElement;
        }
        var cells = target.cells; //cells collection
        //var cells = target.getElementsByTagName('td'); //alternative
        if (!cells.length || target.parentNode.nodeName == 'THEAD') { // if clicked row is within thead
            return;
        }
        var f1,f2,f3,f4,f5,f6,f7;
		var noofpass = "<?php echo $_POST['noofpass'] ?>";
		var id = "<?php echo $_GET['id'] ?>";
        f1 = cells[0].innerHTML;
		f2 = cells[1].innerHTML;
        f3 = cells[2].innerHTML;
        f4 = cells[3].innerHTML;
        f5 = cells[4].innerHTML;
        f6 = cells[5].innerHTML;
		f7 = cells[6].innerHTML;		
		window.location="passenger.php?origin="+f1+"&destination="+f2+"&flightno="+f3+"&departure="+f4+"&arrival="+f5+"&fare="+f6+"&date="+f7+
		"&noofpass="+noofpass+"&id="+id;
	}
}
</script>
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
	cursor:pointer;
	border-collapse: collapse;
	border-bottom : 1px solid #ccccff;
}
.disabled{
	opacity: 0.6;
	cursor:not-allowed;
}
</style>
</head>
<body id="page5">
<?php
$id = $_GET['id'];
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
else
{
	$origin = $_GET['origin'];
	$destination = $_GET['destination'];
	$result = mysqli_query($con,"SELECT * FROM flight1 where origin ='$origin' AND destination = '$destination'");
}
$result = mysqli_query($con,"SELECT * FROM flight1 where origin = '$origin' AND destination = '$destination'");


if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
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
				<h1 id="H1"><a href="#" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li style="color:black;"><a href="index_new.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Home</a></li>
							<li><a href="index-1.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">About Us</a></li>
							<li><a href="index-2.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Account</a></li>
							<li><a href="index-3.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Feedback</a></li>
							<li><a href="login.html" style="height:35px;padding-top:7px;">Logout</a></li>
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
       <?php
	   if($count === 0){
	    echo "<br><br><br>No flights found!!!!!";
		return;
	   }
	   ?>
	   <li><a class="disabled" href="#">Passenger Details</a></li>
       <li><a class="disabled" href="#">Payment</a></li>
     </ul>
	</nav>
	
<div>
	<table id="tableid" style="color:black;border-style:groove; width:100%; margin-top: 40px; margin-bottom:30px;">
        <thead><tr style="color:black;background-color:#47478D; padding-top: 55px;">
		 <th>Origin</th>
		 <th>Destination</th>
		 <th>Flightno</th>
		 <th>Depart Time</th>
		 <th>Arrival Time</th>
		 <th>Fare</th>
		 <th>Date</th>
		</tr></thead>
		<?php
		    $i=0;
			echo "<tr id=\"kim\" onclick=\"run();\">
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
			echo "<tr id=\"kim\" onclick=\"run();\">
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
</div>
</section>
<!-- / content -->
</div>

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

