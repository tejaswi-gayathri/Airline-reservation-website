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
	function run1(){
		var id = "<?php echo $_GET['id'] ?>";
		var newfirstname = document.getElementById("newfirstname").value;
		alert("Your first name is changed to "+newfirstname);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newfirstname:newfirstname,id:id},
			success: function(html) {
			}
			});
	}
	function run2(){
		var id = "<?php echo $_GET['id'] ?>";
		var newlastname = document.getElementById("newlastname").value;
		alert("Your last name is changed to "+newlastname);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newlastname:newlastname,id:id},
			success: function(html) {
			}
			});
	}
	function run3(){
		var id = "<?php echo $_GET['id'] ?>";
		var newaddrline1 = document.getElementById("newaddressline1").value;
		alert("Your address is changed to "+newaddrline1);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newaddrline1:newaddrline1,id:id},
			success: function(html) {
			}
			});
	}
	
	function run4(){
		var id = "<?php echo $_GET['id'] ?>";
		var newaddrline2 = document.getElementById("newaddressline2").value;
		alert("Your address is changed to "+newaddrline2);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newaddrline2:newaddrline2,id:id},
			success: function(html) {
			}
			});
	}
	
	function run5(){
		var id = "<?php echo $_GET['id'] ?>";
		var newcno = document.getElementById("newnumber").value;
		alert("Your contact number is changed to "+newcno);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newcno:newcno,id:id},
			success: function(html) {
			}
			});
	}
	
	function run6(){
		var id = "<?php echo $_GET['id'] ?>";
		var newmail = document.getElementById("newmail").value;
		alert("Your email is now changed to "+newmail);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newmail:newmail,id:id},
			success: function(html) {
			}
			});
	}
	
	function run7(){
		var id = "<?php echo $_GET['id'] ?>";
		var newuname = document.getElementById("newusername").value;
		alert("Your username is changed to "+newuname);
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newuname:newuname,id:id},
			success: function(html) {
			}
			});
	}
	
	function run8(){
		var id = "<?php echo $_GET['id'] ?>";
		var newpswd = document.getElementById("newpassword").value;
		var confirmpswd = document.getElementById("confirmpassword").value;
		if(newpswd != confirmpswd){
			alert("Passwords do not match!!");
			return;
		}
		alert("Your password is changed to *******");
		$.ajax({
			type: "GET",
			url: "accupdate.php",
			data: {newpswd:newpswd,id:id},
			success: function(html) {
			}
			});
	}
</script>
<?php
	
?>
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
<?php
	$id = $_GET['id'];
?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1 id="H1"><a href="" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li><a href="index_new.php?id=<?php echo $id ?>">Home</a></li>
							<li><a href="index-1.php?id=<?php echo $id ?>">About Us</a></li>
							<li id="menu_active"><a href="index-2.php?id=<?php echo $id ?>">Account</a></li>
							<li><a href="index-3.php?id=<?php echo $id ?>">Feedback</a></li>
							<li><a href="login.html">Logout</a></li>
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
						    
							<li class="active"><a href="#">Edit Your Profile</a></li>
							<li><a href="index-22.php?id=<?php echo $id; ?>">Check Account Details</a> </li>
							<li><a href="index-21.php?id=<?php echo $id; ?>">Your E-Wallet</a></li>
							<li><a href="index-23.php?id=<?php echo $id; ?>">Booking History</a></li>
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
		          </div>
				  <div class="col-sm-9">
				   <p class="account">General Account Settings</p>
					<div>
						 <p class="button" id="acc_but" onclick="toggle('chartdiv1')">First Name</p>
                         <div id="chartdiv1" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input id="newfirstname" type="text" name="newfirstname" placeholder="New First Name"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run1();">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv2')">Last Name</p>
                         <div id="chartdiv2" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="text" id="newlastname" name="newlastname" placeholder="New Last Name"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run2()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv3')">Address Line1</p>
                         <div id="chartdiv3" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="text" name="newaddressline1" id="newaddressline1" placeholder="New Address Line1"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run3()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv4')">Address Line2</p>
                         <div id="chartdiv4" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="text" name="newaddressline2" id="newaddressline2" placeholder="New Address Line2"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run4()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv5')">Contact Number</p>
                         <div id="chartdiv5" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="text" name="newnumber" id="newnumber" placeholder="New Contact Number"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run5()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv6')">email-id</p>
                         <div id="chartdiv6" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="email" name="newmail" id="newmail" placeholder="New email-id"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run6()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv7')">Username</p>
                         <div id="chartdiv7" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="text" id="newusername" name="newusername" placeholder="New Username"/>
							<a href="" class="button2" style="margin-top:17px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px" onClick="run7()">Confirm</a>
							</form>
						 </div>
						 
						 <p class="button" id="acc_but" onclick="toggle('chartdiv8')">Password</p>
                         <div id="chartdiv8" style="max-width: 83%; background-color:#ffffff; display:none">
							<form action="" method="POST">
							<input type="password" id="newpassword" name="newpassword" placeholder="New password"/><br>
							<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm New Password"/><br>
							<a href="" class="button2" style="margin-top:17px;margin-bottom:15px">Cancel</a>
							<a href="" class="button2" style="margin-top:17px;margin-bottom:15px" onClick="run8()">Confirm</a>
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