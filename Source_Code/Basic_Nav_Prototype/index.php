<?php 
    require("config.php"); 
    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: mockup.php"); 
            die("Redirecting to: mockup.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
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

    <title>IOLA Mockup</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">	
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">


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
	  <div class="navbar-inner">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><img src="img/logo_i.png" width="48" height="48" alt="IOLA"></a>
			  			  

			</div>
			<div class="navbar-collapse collapse">
			
			  <ul class="nav navbar-nav">
				<li></li>
				<li class="active"><a href="#">Home</a></li>
 				<?php  if (isset($_SESSION['user'])) {  ?>
					<li><a id="simple-menu" href="#sidr">Modules</a></li>
	  			<?php } ?>
				<li><a href="team.php">Team</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Videos</a></li>
					<li><a href="#">Pictures</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">Links</li>
					<li><a href="#">NSF</a></li>
					<li><a href="#">Related Projects</a></li>
				  </ul>
				</li>
			  </ul>
			  <?php  if (!isset($_SESSION['user'])) {  ?>
			  <form class="navbar-form navbar-right" action="mockup.php" method="post">
				<div class="form-group">
				  <input type="text" name="username" class="form-control" value="username">
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" name="password" value="password">
				</div>
				<button type="submit" class="btn btn-primary" value="Login">Sign in</button>
			  </form> 
			<?php } ?>
 			<?php  if (isset($_SESSION['user'])) {  ?>
			  <form class="navbar-form navbar-right" action="logout.php" method="post">
				<div class="form-group" style="padding-right:15px">
					<font  color="FFFFFF">Hello, <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</font>
				</div>
				<button type="submit" class="btn btn-primary" value="logout">Log out</button>
			  </form> 

			<?php } ?>
			</div><!--/.navbar-collapse -->
		  </div>
		</div>
    </div>
	  
	<?php  if (isset($_SESSION['user'])) {  ?>
	<a style="display:block" href="#sidr">
		<div id="float" class="hidden-print">
			<br>
			<span class="glyphicon glyphicon-resize-horizontal"></span>
			<span class="bottomaligned">
				<span class="glyphicon glyphicon-resize-horizontal"></span>
			</span>
		</div>
		<div id="float2" class="hidden-print">
			<br>
			<span class="ba"><h3>
				<span class="glyphicon glyphicon-circle-arrow-right"></span></h3>
			</span>
		</div>
	</a>
	<?php } ?>

	

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  
	  	<?php  if (isset($_SESSION['user'])) {  ?>
		<div id="sidr">
			<?php include 'sidebar.php' ?>
		</div>
	  	<?php } ?>		

        <h1>Welcome to IOLA!</h1>
        <h3><p>Developing Inquiry-Oriented Instructional Materials for Linear Algebra Instruction</p>
		<br>
        <p><a class="btn btn-primary btn-lg " href="team.php">Meet the team &raquo;</a></p></h3>
      </div>
    </div>

    <div class="container">
<div class="jumbotron">
      <!-- Example row of columns -->
      <div class="row">
	  
	   <div class="col-lg-4">
          <h2>New Site In-Progress</h2>
		  		  <p><img width="250" height="150" src="img/screen.JPG"></p>
		  <a class="btn btn-default" data-toggle="collapse" data-target="#u6">View details &raquo;</a>
				   <p class="collapse" id="u6">
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
       </div>
	   
        <div class="col-lg-4">
          <h2>Paper Published</h2>
		  		  		  <p><img width="250" height="150" src="img/paper.JPG"></p>

		  <a class="btn btn-default" data-toggle="collapse" data-target="#u5">View details &raquo;</a>
				   <p class="collapse" id="u5">
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
		  </p>

        </div>

        <div class="col-lg-4">
          <h2>Classroom Motivation Up</h2>
		  		  		  		  		  <p><img width="250" height="150" src="img/student.gif"></p>

		  <a class="btn btn-default" data-toggle="collapse" data-target="#u7">View details &raquo;</a>

				   <p class="collapse" id="u7">
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
        </div>
      </div>

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
	<script src="js/sidr/sidr.js"></script>
 
	<!-- Include the Sidr JS -->
	<script>
	$(document).ready(function() {
	$('#simple-menu').sidr();
	$('#float2').sidr();
	$('#simple').sidr();
	$('#float').sidr();
	});
	</script>
	<script>
	$(document).ready(function() {
	$('#simple').sidr({ speed : 50 });
	});
	</script>
  </body>
</html>
