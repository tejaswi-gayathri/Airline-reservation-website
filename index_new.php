<!DOCTYPE html>
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
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
	function validateForm() {
		var origin = $.trim($("#origin").val());
		var destination = $.trim($("#destination").val());
		var departdate = $.trim($("#departdate").val());
		var returndate = $.trim($("#returndate").val());
		var noofpass = $.trim($("#noofpass").val());
		if (origin == "") {
		  alert("Departure city should not be nil");
		  $("#origin").focus();
		  return false;
		} else if((origin%1) == 0) {
		  alert("Enter valid departure city without numbers");
		  $("#origin").focus();
		  return false;
		}
		if (destination == "") {
		  alert("Enter a valid destination");
		  $("#destination").focus();
		  return false;
		}else if((destination%1) == 0) {
		  alert("Enter valid destination city without numbers");
		  $("#origin").focus();
		  return false;
		}
		if (noofpass == "") {
		  alert("Enter valid no. of passengers");
		  $("#noofpass").focus();
		  return false;
		}else if((noofpass%1) != 0){
		  alert("Enter an integer for no of passengers.");
		  $("#noofpass").focus();
		  return false;
		}
	}
</script>
</head>
<body id="page1">
<?php
	$id = $_GET['id'];
?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="" id="logo"></a><span id="slogan">Domestic Airlines</span>
				</h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="index_new.php?id=<?php echo $id ?>">Home</a></li>
							<li><a href="index-1.php?id=<?php echo $id ?>">About Us</a></li>
							<li><a href="index-2.php?id=<?php echo $id ?>">Account</a></li>
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
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Search Flights</h2>
				<form id="form_1" action="showtable.php?id=<?php echo $id ?>" onsubmit="return validateForm();" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<!--<a id="round-trip-button" href="javascript:void(0);" onclick>-->
							<input type="radio" name="name1">Round Trip<br>
							
						</div>
						<div class="radio">
							<input type="radio" name="name1">One Way<br>
							
						</div>
					</div>
					<div class="wrapper">
						Leaving From:
						<div class="bg">
						<input name="origin" id="origin" type="text" class="input input1" value="Enter City" onBlur="if(this.value=='') this.value='Enter City'" onFocus="if(this.value =='Enter City' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Going To:
						<div class="bg">
						<input name="destination" id="destination" type="text" class="input input1" value="Enter City" onBlur="if(this.value=='') this.value='Enter City'" onFocus="if(this.value =='Enter City' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Departure Date:
						<div class="wrapper">
							<div class="bg left"><input name="departdate" id="departdate" type="text" class="input input2" value="dd/mm/yyyy " onBlur="if(this.value=='') this.value='dd/mm/yyyy '" onFocus="if(this.value =='dd/mm/yyyy ' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Return Date:
						<div class="wrapper">
							<div class="bg left"><input name="returndate" id="returndate" type="text" class="input input2" value="dd/mm/yyyy " onBlur="if(this.value=='') this.value='dd/mm/yyyy '" onFocus="if(this.value =='dd/mm/yyyy ' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Passenger(s):</p>
						<div class="bg left"><input name="noofpass" id="noofpass" type="text" class="input input2" value="# passengers" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
                           <input name="example" type="submit" value="GO!" class="button2" />
						
					</div>
				</form>
				<h2>Did You Know?</h2>
				<p><strong>Get ready to be pampered!</strong> Bluebliss now features more than 200 movie selections in 4 different languages in their seat-back TVs. A multi cusine food selection is also made available in these flights.  </p>
				
			</div>
		</article>

		<article class="col2 pad_left1">
			<h2>Welcome to Blue Bliss!</h2>
<p class="pad_bot2">If you're visiting our website for the first time and wish for a reliable airline to embark upon your journey, then you've come to the right place! </p> <p> And if you are a revisiting member, then welcome back! We have lots of exciting offers this season. </p>

			
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Our Aim</strong></p>
					<p class="pad_bot2">Bluebliss aims to become India's most preferred low cost airline, elivering the lowest air fares with the highest consumer value, to price sensitive consumers. We hope to fulfill everyone’s dream of flying! </p><p> With the economic and business growth rapidly increasing, the percentage of India traveling is burgeoning. More and more Indians are traveling for both business and pleasure and everyone needs to save both time and money. BlueBliss hopes to address this issue and ensure that flying is for everyone. </p>
				</div>
			</div>
			
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Fares</strong></p>
					<p class="pad_bot2">With a dynamic fare structure, BlueBliss offers fares that are affordable and significantly lower than most airlines. With contemporary interiors, modern graphics and vibrant colours, our airline is very much like today’s traveler - practical yet stylish</p>
				</div>
			</div>
			<div class="wrapper pad_bot2">
				
			</div>
			<div class="wrapper">
				<article class="cols">
					<h2>The BlueBliss family</h2>
					
					<p>BlueBliss's key management personnel are all senior, seasoned professionals and have significant international experience in both launching and managing low-cost airlines. With thousands of cumulative man hours in the industry, the management is committed to bring to customers in India all the benefits of the global revolution in the skies. </p> <p> We all work together with a common goal in mind. Our employees are treated with the utmost respect and care, because to us, they are not just a part of the airlines, rather we are all one big family. So come fly with the BlueBliss family! </p>
				</article>
				<div class="box1">
					<div class="pad_1">
						<div class="wrapper">
							<p class="pad_bot2">Sometimes It's not about the destination.It's about the journey that gets you there. </p>
							<p><span class="right">-Victoria Orsingher</span>&nbsp;<br></p> </p>
							
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