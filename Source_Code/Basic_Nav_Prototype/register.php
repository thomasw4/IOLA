<?php 
    require("config.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) 
        { die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("Invalid E-Mail Address"); } 
         
        // Check if the username is already taken
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( ':username' => $_POST['username'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        header("Location: index.php"); 
        die("Redirecting to index.php"); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/logo.png">

    <title>IOLA Registration</title>

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
	  
        <h1>Register an account</h1>
        <p>Inquiry Oriented Linear Algebra</p>

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

      </div>
    </div>

    <div class="container">

      <hr>

		<footer>
			<ul class="list-inline text-right">
				<li><p>&copy; IOLA Team 2013</p></li>
				<li><a href="team.php">Contact Us</a></li>
				<li><a href="register.php">Request Access</a></li>
			</ul>
		</footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
