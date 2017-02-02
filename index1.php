<?php
require_once './config1.php';

/*if (isset($_POST["sub"])) {*/
  require_once "phpmailer/class.phpmailer.php";

  $fname = trim($_POST["fname"]);
  $lname = trim($_POST["lname"]);  
  $dob = trim($_POST["dob"]);
  $addr1 = trim($_POST["addr1"]);
  $addr2 = trim($_POST["addr2"]);
  $cno = trim($_POST["cno"]);
  $email = trim($_POST["email"]);
  $uname = trim($_POST["uname"]);
  $password = trim($_POST["password"]);
  $repassword = trim($_POST["repassword"]);	
  $sql = "SELECT COUNT(*) AS count from register where email = :email";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      $msg = "Email already exist";
      $msgType = "warning";
    } else {
      $sql = "INSERT INTO `register` (`fname`, `lname`, `dob`, `addr1`, `addr2`, `cno`, `email`, `uname`, `password`) 
	  VALUES " . "( :fname, :lname, :dob, :addr1, :addr2, :cno, :email, :uname, :password)";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":fname", $fname);
	  $stmt->bindValue(":lname", $lname);
	  $stmt->bindValue(":dob", $dob);
	  $stmt->bindValue(":addr1", $addr1);
	  $stmt->bindValue(":addr2", $addr2);
	  $stmt->bindValue(":cno", $cno);
	  $stmt->bindValue(":email", $email);
	  $stmt->bindValue(":uname", $uname);
      $stmt->bindValue(":password", md5($password));
      
      $stmt->execute();
      $result = $stmt->rowCount();
	  
      if ($result > 0) {
        
        $lastID = $DB->lastInsertId();
		
        $message = '<html><head>
                <title>Email Verification</title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $fname .' '. $lname . '!</h1>';
        $message .= '<p><a href="'.SITE_URL.'activate1.php?uid=' . $lastID . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
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

        $mail->Subject = trim("Email Verifcation - Bluebliss Airlines");
        $mail->MsgHTML($message);

        try {
          $mail->send();
          $msg = "An email has been sent for verfication.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
/*}*/
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
<style>
.button {
  display: inline-block;
  padding: 35px 65px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #204060;
  border: none;
  border-radius: 15px;
  margin-left:40px;
}

.button:hover {background-color: #336699}

.button:active {
  background-color: blue;
  transform: translateY(4px);
}
</style>
</head>
<body>
<div>
<button class="button" onclick="window.location='index_guest.html'">Continue to Bluebliss</button>   
</div>
</body>
</html>
