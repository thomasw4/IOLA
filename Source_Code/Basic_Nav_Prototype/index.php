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
            header("Location: index.php"); 
            die("Redirecting to: index.php"); 
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
    <link rel="shortcut icon" href="img/logo.png">

    <title>IOLA Mockup</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">	
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">


    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/imgflip.css" rel="stylesheet">

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
			<div class="row">
		  
				<div class="col-lg-6">
					<center>
						<h2>New Site In-Progress</h2>
						<p><img width="350" height="230" src="img/screen.jpg" style="border:1px solid gray"></p>
						<!--a class="btn btn-default" data-toggle="collapse" data-target="#u6">View details &raquo;</a>
							   <p class="collapse" id="u6"--> 
						<p>
						This new site is a work-in-progress.  It's being developed by computer science design students at Virginia Tech: Bill Lucy, Ethan Francis, and Thomas Walton.  
						</p>
					</center>
			   </div>
			   
				<div class="col-lg-6">
					<center>
						<h2>NSF Grant Information</h2>
						<p><img width="166" height="167" src="img/nsf1.gif"></p>
						<!--a class="btn btn-default" data-toggle="collapse" data-target="#u5">View details &raquo;</a>
							   <p class="collapse" id="u5"-->
						<p>
						This material is based upon work supported by the National Science Foundation under grant numbers <b>DUE-1245673/1245796/1246083</b>. Any opinions, findings, and conclusions or recommendations expressed in this material are those of the author(s) and do not necessarily reflect the views of the National Science Foundation. 
						</p>
						<br><br>
					</center>
				</div>		
				<!--
				<div class="col-lg-4">
				  <h2>Classroom Motivation Up</h2>
												  <p><img width="250" height="150" src="img/student.gif"></p>

				  <a class="btn btn-default" data-toggle="collapse" data-target="#u7">View details &raquo;</a>

						   <p class="collapse" id="u7">
				  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
				</div>
				</div>
				-->
				</div>
			<footer>
				<?php include 'footer.php'?>
			</footer>
		</div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/sidr/sidr.js"></script>
	<script src="js/sidr/iola.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#simple-menu').sidr();
			$('#float2').sidr();
			$('#simple').sidr();
			$('#float').sidr();
		});
		$(document).ready(function() {
			$('#simple').sidr({ speed : 50 });
		});
		function changeText(idElement) {
	var element = document.getElementById('element' + idElement);
	if (idElement === 1 || idElement === 2) {
		if (element.innerHTML === 'Contact Us') element.innerHTML = '<a href="mailto:mwawro@vt.edu">mwawro@vt.edu</a>';
		else {
			element.innerHTML = 'Contact Us';
		}
	}
}
	</script>
  </body>
</html>