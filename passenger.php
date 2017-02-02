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
<script type="text/javascript">
function run(){
	var f1 = "<?php echo $_GET['origin'] ?>";
	var f2 = "<?php echo $_GET['destination'] ?>";
	var f3 = "<?php echo $_GET['flightno'] ?>";
	var f4 = "<?php echo $_GET['departure'] ?>";
	var f5 = "<?php echo $_GET['arrival'] ?>";
	var f6 = "<?php echo $_GET['fare'] ?>";
	var f7 = "<?php echo $_GET['date'] ?>";
	var id = "<?php echo $_GET['id'] ?>";
		var v1 = document.getElementById("kim3").value;var v2 = document.getElementById("kim4").value;var v3 = document.getElementById("kim5").value;
		var v4 = document.getElementById("kim6").value;
		var v5 = document.getElementById("kim7").value;var v6 = document.getElementById("kim8").value;var v7 = document.getElementById("kim9").value;var v8 = document.getElementById("kim10").value;
		var v9 = document.getElementById("kim11").value;var v10 = document.getElementById("kim12").value;var v11 = document.getElementById("kim13").value;var v12 = document.getElementById("kim14").value;
		var v13 = document.getElementById("kim15").value;var v14 = document.getElementById("kim16").value;var v15 = document.getElementById("kim17").value;var v16 = document.getElementById("kim18").value;
		var v17 = document.getElementById("kim19").value;var v18 = document.getElementById("kim20").value;var v19 = document.getElementById("kim21").value;var v20 = document.getElementById("kim22").value;
		var count=0;
		var noofpass = "<?php echo $_GET['noofpass'] ?>"
		if(v1 && v2 && v3 && v4){
			count++;
		}
		if(v5 && v6 && v7 && v8){
			count++;
		}
		if(v9 && v10 && v11 && v12){
			count++;
		}
		if(v13 && v14 && v15 && v16){
			count++;
		}
		if(v17 && v18 && v19 && v20){
			count++;
		}
		if(noofpass != count)
		{
			switch(count){
				case 0: if(!v1){alert("FirstName not entered!!!");return;} 
						if(!v2){alert("LastName not entered!!!");return;}
						if(!v3){alert("Age not entered!!!");return;}
				break;
				case 1: if(!v5){alert("FirstName not entered!!!");return;}
						if(!v6){alert("LastName not entered!!!");return;}
						if(!v7){alert("Age not entered!!!");return;}
				break;
				case 2: if(!v9){alert("FirstName not entered!!!");return;}			
						if(!v10){alert("LastName not entered!!!");return;}
						if(!v11){alert("Age not entered!!!");return;}
				break;
				case 3: if(!v13){alert("FirstName not entered!!!");return;}
						if(!v14){alert("LastName not entered!!!");return;}
						if(!v15){alert("Age not entered!!!");return;}
				break;
				case 4: if(!v17){alert("FirstName not entered!!!");return;}
						if(!v18){alert("LastName not entered!!!");return;}
						if(!v19){alert("Age not entered!!!");return;}
				break;
			}
			alert("Passenger details doesn't match previously entered number!!!");
			return;
		}
		if(v3!="" && v3<4){
			if(v3>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("aInvalid age!!!!");return;
			}
		}
		if(v7!="" && v7<4){
			if(v7>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("bInvalid age!!!!");return;
			}
		}
		if(v11!="" && v11<4){
			if(v11>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("cInvalid age!!!!");return;
			}
		}
		if(v15!="" && v15<4){
			if(v15>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("dInvalid age!!!!");return;
			}
		}
		if(v19!="" && v19<4){
			if(v19>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("eInvalid age!!!!");return;
			}
		}
		var totalfare = f6 * count;
		
		var foodS,nightS;
		for (var i=0; i<document.aesthetic.food.length; i++)
		{
			if (document.aesthetic.food[i].checked)
			{
				foodS = document.aesthetic.food[i].value;
			}
		}
		for (var i=0; i<document.aesthetic.night.length; i++)
		{
			if (document.aesthetic.night[i].checked)
			{
				nightS = document.aesthetic.night[i].value;
			}
		}
	window.location="payment.php?origin="+f1+"&destination="+f2+"&flightno="+f3
		+"&departure="+f4+"&arrival="+f5+"&fare="+f6+"&date="+f7+"&v1="+v1+"&v2="+v2+"&v3="+v3+"&v4="+v4+"&v5="+v5+"&v6="+v6+"&v7="+v7+"&v8="+v8+"&v9="+v9
		+"&v10="+v10+"&v11="+v11+"&v12="+v12+"&v13="+v13+"&v14="+v14+"&v15="+v15+"&v16="+v16+"&v17="+v17+"&v18="+v18+"&v19="+v19+"&v20="+v20+
		"&food="+foodS+"&night="+nightS+"&id="+id+"&count="+count+"&totalfare="+totalfare;
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
	margin-bottom:30px;
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
	border-bottom : 1px solid #ccccff;
}
#kim1,#kim3,#kim4,#kim5,#kim6,#kim7,#kim8,#kim9,#kim10,#kim11,#kim12,#kim13,#kim14,#kim15,#kim16,#kim17,#kim18,#kim19,#kim20,#kim21,#kim22{
	text-align:center;
	border-collapse: collapse;
	border: 1px solid black;
}
#kim2{
	margin-top:3px;
	margin-bottom:3px;
	text-align:center;
	border-collapse: collapse;
	border: 1px solid black;
}

.disabled{
	opacity: 0.6;
	cursor:not-allowed;
}
input[type="text"]{
	      width:100%;
		  height:30px;
		  padding:5px;
		  box-sizing:border-box;
		  border-radius:10px
}

</style>
</head>
<body>
<?php $id = $_GET['id'] ?>
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
<section id="content">
    <nav>
	 <ul id="new">
       <li><a href="showtable.php?origin=<?php echo $_GET['origin'] ?>&destination=<?php echo $_GET['destination'] ?>">Flight Details</a></li>
       <li><a class="active1" href="#">Passenger Details</a></li>
       <li><a class="disabled" href="#">Payment</a></li>
     </ul>
	</nav>
	
<div>
	<table style="color:black;border-style:groove;width:100%; margin-top: 40px; margin-bottom:30px;">
        <tr style="color:black;background-color:#47478D; padding-top:55px;">
		 <th>Origin</th>
		 <th>Destination</th>
		 <th>Flightno</th>
		 <th>Departure</th>
		 <th>Arrival</th>
		 <th>Fare</th>
		 <th>Date</th>
		</tr>
		<tbody>
		<?php
		    $origin = $_GET['origin'];
			$destination = $_GET['destination'];
			$flightno = $_GET['flightno'];
			$departure = $_GET['departure'];
			$arrival = $_GET['arrival'];
			$fare = $_GET['fare'];
			$date = $_GET['date'];
			echo "<tr id=\"kim\">
			<td id=\"kim\">$origin</td>
			<td id=\"kim\">$destination </td>
			<td id=\"kim\">$flightno </td>
			<td id=\"kim\">$departure</td>
			<td id=\"kim\">$arrival </td>
			<td id=\"kim\">$fare </td>
			<td id=\"kim\">$date </td>
			</tr>"; 
		?>		
		</tbody>	
    </table>
</div>
<div>
<table id="persontable" width="100%">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
             <tr id="kim1"><td><input id="kim3" type="text"></td><td><input id="kim4" type="text"></td><td><input id="kim5" type="text"></td><td><input id="kim6" type="text"></td></tr>
			 <tr id="kim1"><td><input id="kim7" type="text"></td><td><input id="kim8" type="text"></td><td><input id="kim9" type="text"></td><td><input id="kim10" type="text"></td></tr>
			 <tr id="kim1"><td><input id="kim11" type="text"></td><td><input id="kim12" type="text"></td><td><input id="kim13" type="text"></td><td><input id="kim14" type="text"></td></tr>
			 <tr id="kim1"><td><input id="kim15" type="text"></td><td><input id="kim16" type="text"></td><td><input id="kim17" type="text"></td><td><input id="kim18" type="text"></td></tr>
			 <tr id="kim1"><td><input id="kim19" type="text"></td><td><input id="kim20" type="text"></td><td><input id="kim21" type="text"></td><td><input id="kim22" type="text"></td></tr>
        </tbody>
	
</table>			
</div>
<div>
	<form name="aesthetic" action="" method="POST">
		<h3 style="margin-top:10px;">Please choose the preferred cuisine</h3>
		<input type="radio" name="food" value="Continental"> Continental<br>
		<input type="radio" name="food" value="South-Indian"> South-Indian<br>
		<input type="radio" name="food" value="North-Indian"> North-Indian<br>
		<input type="radio" name="food" value="Not Required"> Not Required<br>
		<h3 style="margin-top:10px;">Please choose your nightwear size</h3>
		<input type="radio" name="night" value="XS"> XS<br>
		<input type="radio" name="night" value="S"> S<br>
		<input type="radio" name="night" value="M"> M<br>
		<input type="radio" name="night" value="L"> L<br>
		<input type="radio" name="night" value="XL"> XL<br>
		<input type="radio" name="night" value="XXL"> XXL<br>
		<input type="radio" name="night" value="Not Required"> Not Required<br>
	</form>
</div>
<div>
<!--<td> <select size=\"1\" id=\"kim2\" name=\"gender\"> 
				<option value=\"Male\" selected=\"selected\">Male</option>
                <option value=\"Female\">Female</option>
                <option value=\"Third Gender\">Third Gender</option></td>-->
	<!--<a href="" class="button2" style="margin-bottom:17px; margin-top:17px; height:30px; text-align: centre; padding-top:10px;"
    >Submit</a>-->
	<button onclick="run()" style="margin-bottom:17px; margin-top:17px; height:30px; text-align: centre; padding-top:7px;" class="button2">Submit </button>
</div>
</section>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>