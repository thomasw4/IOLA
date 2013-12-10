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

    <title>Publications - IOLA</title>

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
			<h1 class="text-center">Publications</h1>
		</div>
		<div class="jumbotron">
		    <div class="container">
			<div class="jumbotron">
				<br>
				<div class="row">
					<div class = "col-md-10">An Inquiry-Oriented Approach to Span and Linear Independence: The Case of the Magic Carpet Ride Sequence</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#1">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "1">
						<ul><br><br>
								<object data="media/pubs/MCR-pre-proof-accepted-small.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/MCR-pre-proof-accepted-small.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div class = "col-md-10">UTILIZING TYPES OF MATHEMATICAL ACTIVITIES TO FACILITATE CHARACTERIZING STUDENT UNDERSTANDING OF SPAN AND LINEAR INDEPENDENCE</div>
					<div class = "col-md-1"></div>
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#2">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "2">
						<ul><br><br>
								<object data="media/pubs/rume16_submission_75.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/rume16_submission_75.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>				
				<br>
				<div class="row">
					<div class = "col-md-10">Task Design: Towards Promoting a Geometric Conceptualization of Linear Transformation and Change of Basis</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#3">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "3">
						<ul><br><br>
								<object data="media/pubs/Wawro_LONG.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Wawro_LONG.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
				<br>
				<div class="row">
					<div class = "col-md-10">Individual and Collective Analysis of the Genesis of Student Reasoning Regarding the Invertible Matrix Theorem in Linear Algebra</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#4">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "4">
						<ul><br><br>
								<object data="media/pubs/Wawro_proceedings resubmit.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Wawro_proceedings resubmit.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
				<br>
				<div class="row">
					<div class = "col-md-10">Developing instructor support materials for an inquiry-oriented curriculum</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#6">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "6">
						<ul><br><br>
								<object data="media/pubs/Lockwood Johnson Larsen 2013.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Lockwood Johnson Larsen 2013.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	

				<br>
				<div class="row">
					<div class = "col-md-10">A local instructional theory for the guided reinvention of the quotient group concept</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#7">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "7">
						<ul><br><br>
								<object data="media/pubs/Larsen Lockwood 2013.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Larsen Lockwood.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
				<br>

				<div class="row">
					<div class = "col-md-10">Developing instructor support materials for an inquiry-oriented curriculum</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#8">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "8">
						<ul><br><br>
								<object data="media/pubs/Lockwood Johnson Larsen 2013.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Lockwood Johnson Larsen 2013.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
				<br>

				<div class="row">
					<div class = "col-md-10">Locating starting points in differential equations: a realistic mathematics education approach</div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#10">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "10">
						<ul><br><br>
								<object data="media/pubs/Rasmussen King 2000.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Rasmussen King 2000.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
				<br>


				<div class="row">
					<div class = "col-md-10">A HYPOTHETICAL COLLECTIVE PROGRESSION FOR CONCEPTUALIZING MATRICES AS LINEAR TRANSFORMATIONS </div>
					<div class = "col-md-1"></div>					
					<div class = "col-md-1"><a class="btn btn-default center pull-right" data-toggle="collapse" data-target="#5">View .pdf &raquo;</a></div>
					<div class="accordion-body collapse" id = "5">
						<ul><br><br>
								<object data="media/pubs/Wawro-et-al-2012-Italicizing-N-paper-small.pdf" type="application/pdf" width="100%" height="800">				 
									<p><a href="media/pubs/Wawro-et-al-2012-Italicizing-N-paper-small.pdf">Click here to download.</a></p>  
								</object>					
						</ul>
					</div>
				</div>	
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
