<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>Contact Us - IOLA</title>

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
	  <?php $ref='contact'; include 'header.php' ?>
    </div>
	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
				<?php include 'sidebtn.php' ?>	
	<?php } ?>

    <div class="container print">
		<div class="jumbotron">

			<?php  
            // check for a successful form post  
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";     
            // check for a form error  
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";      
			?>  
		  	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
			<div id="sidr">
				<?php $unit=""; $task=""; include 'sidebar.php' ?>
			</div>
		  	<?php } ?>					
			<h1 class="text-center">Contact Us!</h1>
			<br>	
			<div class="panel panel-default" style="margin:0 auto;width:80%">

				<div class="panel-body">
					<form name="contactform" method="post" action="contact-form-submission.php" class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputName" class="col-lg-2 control-label">Name</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputName" name="contact_name" placeholder="Your Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail" name="contact_email" placeholder="Your Email Address">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="4" id="inputMessage" name="contact_message" placeholder="Your message..."></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<input type="hidden" name="save" value="contact">  
								<button type="submit" class="btn btn-primary">
									Send Message
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>  
		<br>
			<footer>
				<?php include 'footer.php'?>
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
