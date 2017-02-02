<?php
require_once './config1.php';

if (isset($_GET["uid"])) {
	
  $uid = $_GET["uid"];
  
  $sql = "SELECT * from register where uid = :uid";
  try {
    
	$stmt = $DB->prepare($sql);
    $stmt->bindValue(":uid", $uid);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
    if (count($result) > 0) {
	
      if ($result[0]["status"] == "approved") {
        $msg = "Your account has already been activated.";
        $msgType = "info";
      } else {
		
        $sql = "UPDATE `register` SET  `status` =  'approved' WHERE `uid` = :uid";
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":uid", $uid);
        $stmt->execute();
        $msg = "Your account has been activated.";
        $msgType = "success";
		$sqlx = "INSERT INTO `account` VALUES (:uid,:bal)";
		$stmtx = $DB->prepare($sqlx);
		$stmtx->bindValue(":uid", $uid);
		$stmtx->bindValue(":bal",'100000');
		$stmtx->execute();
      }
    } else {
      $msg = "No account found";
      $msgType = "warning";
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
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
}

.button:hover {background-color: #336699}

.button:active {
  background-color: blue;
  transform: translateY(4px);
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h1>Thank you for registering with us.</h1>
    </div>
  </div>
  <div>
   <button onclick="window.location='login.html'" class="button">Login to continue</button>
  </div>
</div>
</body>
</html>