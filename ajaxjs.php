<?php
require_once "phpmailer/class.phpmailer.php";

$totalfare = $_GET['totalfare'];
$id = $_GET['id'];
$noofpass = $_GET['noofpass'];

$origin = $_GET['origin'];
$destination = $_GET['destination'];

$flightno = $_GET['flightno']; 
$departure = $_GET['departure']; 
$arrival = $_GET['arrival']; 
$date = $_GET['date']; 

$con = mysqli_connect("localhost","root","","wp");
$statment = "UPDATE account set bal=bal-$totalfare WHERE uid = '$id'";
$book = "insert into bookticket values ('$id','$flightno','$totalfare','$noofpass')"; 
$stat = "SELECT email from register WHERE uid = '$id'";
$bookresult = mysqli_query($con, $book);
$result = mysqli_query($con, $stat);
if($result)
{
	while($arr = mysqli_fetch_array($result))
	{
		$email=$arr['email'];
	}
}

$res = mysqli_query($con, $statment);	

$message = '<html><head>
                <title>Ticket Info</title>
                </head>
                <body>';
        $message .= '<h1>Your Booking Information</h1><br><h2>Flight Details</h2><br>';
        $message .= '<h3>Origin: ' . $origin .'		Destination: '. $destination . '</h1>';
        $message .= '<h3>Flightno: ' . $flightno . '</h1>';
        $message .= '<h3>DepartureTime: ' . $departure .'		ArrivalTime: '. $arrival . '</h1>';  
		$message .= '<h3>Total Fare: ' . $totalfare .'		Date of Journey: '. $date . '</h1>';

		$message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server

        $mail->Username = 'arjunsunny154@gmail.com';
        $mail->Password = 'ARJUNSUNNY123';

        $mail->SetFrom('arjunsunny154@gmail.com', 'Bluebliss Airlines');
        $mail->AddAddress($email);

        $mail->Subject = trim("Booking Information - Bluebliss Airlines");
        $mail->MsgHTML($message);
		try {
          $mail->send();
          $msg = "Booking Information has been sent to your email.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
?>
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<html>
<head>
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
<link href="bootstrap/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
</head>
<body>
</body>
</html>