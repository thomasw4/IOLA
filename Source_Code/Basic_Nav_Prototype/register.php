<?php 
    require_once 'swift/lib/swift_required.php';
    require 'config.php';

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('iola.automated.mailer')
        ->setPassword('iolaiola');

    $mailer = Swift_Mailer::newInstance($transport);

    // check for form submission - if it doesn't exist then send back to contact form  
    if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
        header("Location: requestaccess.php"); exit;  
    }  
          
    // get the posted data  
    $name = $_POST["contact_name"];  
    $email_address = $_POST["contact_email"];  
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $message = $_POST["contact_message"];  

    // Ensure that the user fills out fields 
    if(empty($username)) 
    { $error = "Please enter a username."; } 
    if(empty($password)) 
    { $error = "Please enter a password."; } 
    if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)) 
    { $error = "Invalid E-Mail Address."; } 

    // check if an error was found - if there was, send the user back to the form  
    if (isset($error)) {  
        header("Location: requestaccess.php?e=".urlencode($error)); exit;  
    }  
     
    // Check if the username is already taken
    $query = " 
        SELECT 
            1 
        FROM users 
        WHERE 
            username = :username 
    "; 
    $query_params = array( ':username' => $username ); 
    try { 
        $stmt = $db->prepare($query); 
        $result = $stmt->execute($query_params); 
    } 
    catch(PDOException $ex){
        header("Location: requestaccess.php?e=".urlencode("Failed to run query: " . $ex->getMessage())); exit;
    } 
    $row = $stmt->fetch(); 
    if($row){
        header("Location: requestaccess.php?e=".urlencode("This username is already in use.")); exit;
    } 
    $query = " 
        SELECT 
            1 
        FROM users 
        WHERE 
            email = :email 
    "; 
    $query_params = array( 
        ':email' => $email_address
    ); 
    try { 
        $stmt = $db->prepare($query); 
        $result = $stmt->execute($query_params); 
    } 
    catch(PDOException $ex){
        header("Location: requestaccess.php?e=".urlencode("Failed to run query: " . $ex->getMessage())); exit;
    } 
    $row = $stmt->fetch(); 
    if($row){
        header("Location: requestaccess.php?e=".urlencode("This email address is already registered.")); exit;
    } 
     
    // Add row to database 
    $query = " 
        INSERT INTO users ( 
            username, 
            password, 
            salt, 
            email,
            user_level
        ) VALUES ( 
            :username, 
            :password, 
            :salt, 
            :email,
            :user_level
        ) 
    "; 
     
    // Security measures
    $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
    $password = hash('sha256', $password . $salt); 
    for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
    $query_params = array( 
        ':username' => $username, 
        ':password' => $password, 
        ':salt' => $salt, 
        ':email' => $email_address,
        ':user_level' => 0
    ); 
    try {  
        $stmt = $db->prepare($query); 
        $result = $stmt->execute($query_params); 
    } 
    catch(PDOException $ex){
        die("Failed to run query: " . $ex->getMessage());
    }

    $message = Swift_Message::newInstance("IOLA: $name Has Requested An Account")
      ->setFrom(array('iola.automated.mailer@gmail.com' => 'IOLA Mailer'))
      ->setTo(array('ef314159@vt.edu'))
      ->setBody("$name has registered an IOLA account.\n Username: $username\n Email Address: $email_address\n\n Attached Message:\n $message");

    $result = $mailer->send($message);

    $message = Swift_Message::newInstance("Your IOLA account has been created")
      ->setFrom(array('iola.automated.mailer@gmail.com' => 'IOLA Mailer'))
      ->setTo(array($email_address))
      ->setBody("Your IOLA account has been created. Your username is $username.\n\n You currently do not have access to view the curriculum; the IOLA team may verify your account soon.");

    $result = $mailer->send($message);

    header("Location: index.php");
    die("Redirecting to index.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>IOLA Registration - IOLA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">	
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">
    <link href="css/imgflip.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="init()">
    <div class="navbar navbar-inverse  navbar-fixed-top">
      <?php include 'header.php' ?>
    </div>
	

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  
        <h1>Create Account</h1>
		<br>
			<form class="navbar-form navbar" action="register.php" method="post">
				<div class="form-group">
				  <input type="text" name="username" class="form-control" value="username" onclick="this.value='';">
				</div>
				<div class="form-group">
				  <input type="text" name="email" class="form-control" value="email" onclick="this.value='';">
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" name="password" value="password" onclick="this.value='';">
				</div>
				<button type="submit" class="btn btn-success" value="Register">Register!</button>
			  </form> 

			</form>
		<footer>
			<?php include 'footer.php' ?>
		</footer>
    </div> <!-- /container -->
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
