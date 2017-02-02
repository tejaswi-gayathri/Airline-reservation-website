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
							<li  class="active"><a href="#">Update flight details</a> </li>
							<li><a href="admin_delete.php">Delete flight details</a></li>
                            <li><a href="admin_feedback.php">View Feedback</a></li>
						
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
		          </div>
				  <div class="col-sm-9">
				   <p class="account">Update existing flight details</p>
				   <h3>Enter the flight number to be updated</h3>
				   <input id="flightno" type="text" name="flightno" placeholder="Flight no"/>
				   <a href="" class="button2" style="margin-right:190px;margin-top:17px;margin-bottom:15px" onClick="run();">Confirm</a>
					
					<div>
						 <p class="button" id="acc_but" onclick="toggle('chartdiv1')">Origin</p>
							 <div id="chartdiv1" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="neworigin" type="text" name="neworigin" placeholder="New Origin"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run1();">Confirm</a>
								</form>
							 </div>
							 
							 <p class="button" id="acc_but" onclick="toggle('chartdiv2')">Destination</p>
							 <div id="chartdiv2" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="newdestination" type="text" name="newdestination" placeholder="New Destination"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run2()">Confirm</a>
								</form>
							 </div>
							 
							 <p class="button" id="acc_but" onclick="toggle('chartdiv3')">Departure</p>
							 <div id="chartdiv3" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="newdeparture" type="text" name="newdeparture" placeholder="New departure"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run3()">Confirm</a>
								</form>
							 </div>
							 
							 <p class="button" id="acc_but" onclick="toggle('chartdiv4')">Arrival</p>
							 <div id="chartdiv4" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="newarrival" type="text" name="newarrival" placeholder="New Arrival"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run4()">Confirm</a>
								</form>
							 </div>
							 
							 <p class="button" id="acc_but" onclick="toggle('chartdiv5')">Fare</p>
							 <div id="chartdiv5" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="newfare" type="text" name="newfare" placeholder="New Fare"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run5()">Confirm</a>
								</form>
							 </div>
							 
							 <p class="button" id="acc_but" onclick="toggle('chartdiv6')">Date</p>
							 <div id="chartdiv6" style="max-width: 83%; background-color:#ffffff; display:none">
								<form action="" method="POST">
								<input id="newdate" type="text" name="newdate" placeholder="New Date"/>
								<a href="" class="button2" style="margin-top:17px">Cancel</a>
								<a href="" class="button2" style="margin-top:17px" onClick="run6()">Confirm</a>
								</form>
					        </div>
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