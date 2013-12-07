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

    <title>IOLA - Related Projects</title>

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
			<h1 class="text-center">Related Projects</h1>
		</div>
		<div class="jumbotron">
		    <div class="container">
				<div class="jumbotron">
					<center><img width="15%"  src="img/logo.png">
					<br><br>
					<p style="font-size:20px">
						<a href="http://www.web.pdx.edu/~slarsen/TAAFU/home.php"> TAAFU: Teaching Abstract Algebra for Understanding</a>
						<br><br>
						Additional related projects will go here.
						</p>
				</center>				
			</div>				
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
