<?php
session_start();
if (!isset($_SESSION['user']) || !$_SESSION['user']) {
	header('Location:index.php');
	exit();
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

    <title>NSF Information - IOLA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css"  type="text/css" rel="stylesheet">
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
	  <?php $ref = 'res'; include 'header.php' ?>
    </div>

	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
				<?php include 'sidebtn.php' ?>	

	<?php } ?>

    <div class="container print">
	
		<div class="jumbotron">
		  	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
			<div id="sidr">
				<?php $unit=""; $task=""; include 'sidebar.php' ?>
			</div>
		  	<?php } ?>		
			<h1 class="text-center">NSF Grant Information</h1>
		</div>
		<div class="jumbotron">
		    <div class="container">
				<div class="jumbotron">
					<center><img width="35%"  src="img/nsf.png">
					<br><br>
					<h3>
					This material is based upon work supported by the National Science Foundation under grant numbers <b>DUE-1245673/1245796/1246083</b>. Any opinions, findings, and conclusions or recommendations expressed in this material are those of the author(s) and do not necessarily reflect the views of the National Science Foundation. 
					</h3>
					<br><br>
				</center>				
			</div>				
			<br><br>
			<footer>
				<?php include 'footer.php' ?>
			</footer>
		</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
		tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
		});
	MathJax.Hub.Config({
		"HTML-CSS": {
		scale: 85       // change font scale
		}
	});
	</script>
	<script type="text/javascript"
			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/sidr/sidr.js"></script>
	<script src="js/iola.js"></script>
	
  </body>
</html>
