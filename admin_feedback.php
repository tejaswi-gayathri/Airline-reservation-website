<?php
$con = mysqli_connect("localhost","root","","wp");
$statment = "select * from feedback";
$res = mysqli_query($con, $statment);
if($res){
	while($row = mysqli_fetch_array($res)) {
		$count1 = $row['q1_1'];$count2 = $row['q1_2'];$count3= $row['q1_3'];
		$count4 = $row['q2_1'];$count5 = $row['q2_2'];$count6 = $row['q2_3'];
		$count7 = $row['q3_1'];$count8 = $row['q3_2'];$count9 = $row['q3_3'];
		$count10 = $row['q4_1'];$count11 = $row['q4_2'];$count12 = $row['q4_3'];
		$count13 = $row['q5_1'];$count14 = $row['q5_2'];$count15 = $row['q5_3'];
		$count16 = $row['q6_1'];$count17 = $row['q6_2'];$count18 = $row['q6_3'];
		$count19 = $row['q7_1'];$count20 = $row['q7_2'];$count21 = $row['q7_3'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="sample.css" type="text/css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script>
	function toggle(id) {
    var e = document.getElementById(id);
    if (e.style.display == 'block') e.style.display = 'none';
    else e.style.display = 'block';
    }
</script>
<script>
	function run(){
		var flightno = document.getElementById("flightno").value;
		alert("Flightno selected: "+flightno);
		$.ajax({
			type: "GET",
			url: "admin_update.php",
			data: {flightno: flightno },
			success: function(html) {
			window.location.href = "admin_update.php?flightno="+flightno;
			}
			});
	}
</script>
<script>
	function run1(){
		var neworigin = document.getElementById("neworigin").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";	
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {neworigin: neworigin, flightno: flightno},
			success: function(html) {
			}
			});
	}
	function run2(){
		var newdestination = document.getElementById("newdestination").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {newdestination: newdestination, flightno: flightno},
			success: function(html) {
			}
			});
	}
	function run3(){
		var newdeparture = document.getElementById("newdeparture").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";		
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {newdeparture: newdeparture, flightno: flightno},
			success: function(html) {
			}
			});
	}
	
	function run4(){
		var newarrival = document.getElementById("newarrival").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";		
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {newarrival: newarrival, flightno: flightno},
			success: function(html) {
			}
			});
	}
	
	function run5(){
		var newfare = document.getElementById("newfare").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";		
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {newfare: newfare, flightno: flightno},
			success: function(html) {
			}
			});
	}
	
	function run6(){
		var newdate = document.getElementById("newdate").value;
		var flightno = "<?php echo $_GET['flightno'] ?>";	
		$.ajax({
			type: "GET",
			url: "flightupdate.php",
			data: {newdate: newdate, flightno: flightno},
			success: function(html) {
			}
			});
	}
</script>
<style>
input[type="text"]{
	      width:30%;
		  padding:10px;
		  margin:10px 10px 0px 0px;
		  box-sizing:border-box;
		  border-radius:10px;
		  background-color:#ffffff;
		  border:1px solid #000f1a;
	  }
input[type="submit"]{
		  width:20%;
		  padding:7px;
		  margin:10px 10px 0px 10px;
		  box-sizing:border-box;
		  border-radius:10px;
		  color:#ffffff;
		  background-color: #80aaff;
		  border:1px solid #000f1a;
	  }
input[type="email"]{
	      width:30%;
		  padding:10px;
		  margin:10px 10px 0px 0px;
		  box-sizing:border-box;
		  border-radius:10px;
		  background-color: #ffffff;
		  border:1px solid #000f1a;
	  }
input[type="password"]{
	      width:40%;
		  padding:10px;
		  margin:10px 10px 10px 40px;
		  box-sizing:border-box;
		  border-radius:10px;
		  background-color: #ffffff;
		  border:1px solid #000f1a;
	 }

</style>
</head>
<body id="page3">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1 id="H1"><a href="" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="login.html">Logout</a></li>
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
</div>
<!-- / header -->
<div class="main_2">
<!-- content -->
	<section id="content">
		<article class="col2 pad_left1">
			<div class="container">
				<div class="row">
				  <div class="col-sm-3">
					<div class="sidebar-nav">
					  <div class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<div class="navbar-collapse collapse sidebar-navbar-collapse">
						  <ul class="nav navbar-nav">
						    
							<li><a href="admin_page.php">Add flights</a></li>
							<li><a href="admin_update.php">Update flight details</a> </li>
							<li><a href="admin_delete.php">Delete flight details</a></li>
                            <li class="active"><a href="#">View Feedback</a></li>
						
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
		          </div>
				  <div class="col-sm-9">
				   <p class="account">Feedback of customers</p>
					<div>
						<table>
							<thead>
							 <tr><th>Question</th><th>Very Satisfied</th><th>Satisfied</th><th>Not Satisfied</th></tr>
							</thead>
							<tbody>
							 <tr>
								<td>Question1</td><td><?php echo $count1 ?></td><td><?php echo $count2 ?></td><td><?php echo $count3 ?></td>
							 </tr>
							 <tr>
								<td>Question2</td><td><?php echo $count4 ?></td><td><?php echo $count5 ?></td><td><?php echo $count6 ?></td>
							 </tr>
							 <tr>
								<td>Question3</td><td><?php echo $count7 ?></td><td><?php echo $count8 ?></td><td><?php echo $count9 ?></td>
							 </tr>
							 <tr>
								<td>Question4</td><td><?php echo $count10 ?></td><td><?php echo $count11 ?></td><td><?php echo $count12 ?></td>
							 </tr>
							 <tr>
								<td>Question5</td><td><?php echo $count13 ?></td><td><?php echo $count14 ?></td><td><?php echo $count15 ?></td>
							 </tr>
							 <tr>
								<td>Question6</td><td><?php echo $count16 ?></td><td><?php echo $count17 ?></td><td><?php echo $count18 ?></td>
							 </tr>
							 <tr>
								<td>Question7</td><td><?php echo $count19 ?></td><td><?php echo $count20 ?></td><td><?php echo $count21 ?></td>
							 </tr>							
							</tbody>
						</table>
					</div>	
				  </div>
				</div>
            </div>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>