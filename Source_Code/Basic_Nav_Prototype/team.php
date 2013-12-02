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
    <link rel="shortcut icon" href="img/ico/logo.png">

    <title>IOLA Team</title>

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
	  <?php include 'header.php' ?>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<a style="display:block" href="#sidr">
	<div id="float" class="hidden-print">
		<br>
		<span class="glyphicon glyphicon-resize-horizontal"></span>
		<span class="bottomaligned">
			<span class="glyphicon glyphicon-resize-horizontal"></span>
		</span>
	</div>

</a>
    <div class="container print">
	
		<div class="jumbotron">
			<div id="sidr" class="hidden-print">
				<?php include 'sidebar.php' ?>
			</div>
			<h1 class="text-center">Meet the IOLA Team!</h1>
		</div>
		<div class="jumbotron">
		    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  
	   <div class="col-lg-4">
				<h2>Megan Wawro</h2>
				<p><img width="250" height="250" src="img/team/wawro.jpg"></p>
		  <a class="btn btn-primary" data-toggle="collapse" data-target="#t1">View details &raquo;</a>
				   <p class="collapse" id="t1">
				    <a href="mwawro@vt.edu">Megan Wawro</a>
is an Assistant Professor of Mathematics Education in the Department of Mathematics at Virginia Tech in Blacksburg, Virginia. She received a B.A. and M.A in mathematics from Cedarville University and Miami University, respectively, and her Ph.D. in mathematics and science education jointly from San Diego State University and University of California, San Diego. Her research focuses on the learning and teaching of undergraduate mathematics. Her current work explores student thinking and instructional design in linear algebra, as well as methodologies for documenting student reasoning at both individual and collective levels.		  </p>
       </div>
	   
        <div class="col-lg-4">
          <h2>Chris Rasmussen</h2>
		  		  		  <p><img width="250" height="250" src="img/team/rasmussen.jpg"></p>

		  <a class="btn btn-primary" data-toggle="collapse" data-target="#t2">View details &raquo;</a>
				   <p class="collapse" id="t2">
				  
<a href="Chris.rasmussen@sdsu.edu">Chris Rasmussen</a> is Professor of Mathematics Education in the Department of Mathematics and Statistics at San Diego State University. He received an undergraduate degree in mechanical engineering, a master's degree in mathematics, and his Ph.D. in mathematics education at the University of Maryland. His research focuses on the learning and teaching of undergraduate mathematics, with a focus on courses that serve as a transition from students' current ways of reasoning to more formal and abstract ways of reasoning		  </p>

        </div>

        <div class="col-lg-4">
          <h2>Michelle Zandieh</h2>
		  		  		  		  		  <p><img width="250" height="250" src="img/team/zandieh.jpg"></p>

		  <a class="btn btn-primary" data-toggle="collapse" data-target="#u7">View details &raquo;</a>

				   <p class="collapse" id="u7">
<a href="zandieh@asu.edu">Michelle Zandieh</a> is an Associate Professor and Mathematics Program Leader in the Department of Applied Sciences and Mathematics in the College of Technology and Innovation at Arizona State University. She received undergraduate degrees in mathematics and geology, a master's degree in mathematics, and a Ph.D. in mathematics at Oregon State University. Her research focuses on the learning and teaching of undergraduate mathematics, with a focus on student reasoning in courses such as calculus, linear algebra, geometry and transition to proof.       </div>
	  </div>

	  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  
	   <div class="col-lg-4">
          <h2>Christine Larson</h2>
		  		  <p><img width="250" height="250" src="img/team/larson.jpg"></p>
		  <a class="btn btn-primary" data-toggle="collapse" data-target="#u6">View details &raquo;</a>
				   <p class="collapse" id="u6">
<a href="christine.j.larson@vanderbilt.edu">Christine Larson</a> is a post-doctoral research fellow at Vanderbilt University's Peabody School of Education in the Department of Teaching and Learning. She earned her undergraduate and master's degrees in mathematics from the University of Kansas, and her Ph.D. in mathematics education and learning sciences from Indiana University. Her dissertation research focused on instructional design in introductory undergraduate linear algebra, exploring the ways in which student thinking, modeling, and history of mathematics serve to inform the development of inquiry oriented instructional materials in that content domain. Her current work explores teacher learning and institutional supports for effectively scaling up the implementation of inquiry oriented curricula.       </div>
	   
        <div class="col-lg-4">
          <h2>David Plaxco</h2>
		  		  		  <p><img width="250" height="250" src="img/team/plaxco.jpg"></p>

		  <a class="btn btn-primary" data-toggle="collapse" data-target="#u5">View details &raquo;</a>
				   <p class="collapse" id="u5">
<a href="dplaxco@vt.edu">David Plaxco</a> is a doctoral student in Mathematics with an emphasis in Mathematics Education. David received his Bachelor's degree in Secondary Mathematics Education from Auburn University. He taught eighth grade in Muscle Shoals, AL (his hometown) for two years before becoming a graduate student at Virginia Tech. David earned his Master's degree in Mathematics from Virginia Tech, completing a thesis that used the context of probability to investigate relationships between undergraduate students' proof schemes and definitions. He is currently interested in students' understanding of mathematical concepts, especially how specific proving activities evoke and influence various aspects of a student's conception about the mathematics involved. His goal is to investigate students' individual understanding of concepts in an Abstract Algebra curriculum and how this understanding changes over time, specifically while engaged in proof activity. David works in the Virginia Tech Mathematics Department under a research assistantship with Dr. Wawro. His previous work in the department includes assisting Dr. Norton with the Noyce Scholarship Program and teaching Vector Geometry, Mathematics Tutoring, and the Early Field Experience for Preservice Teachers.		  </p>

        </div>
      </div>

		<hr>
		<footer>
			<ul class="list-inline text-right">
				<li><p>&copy; IOLA Team 2013</p></li>
				<li><a href="#team.php">Contact Us</a></li>
			</ul>
		</footer>
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
	<script src="js/expandall.js"></script>

 
	<!-- Include the Sidr JS -->
	<script>
	$(document).ready(function() {
	$('#simple-menu').sidr();
	});
	</script>
	<script>
	$(document).ready(function() {
	$('#simple').sidr();
	});
	</script>
	<script>
	$(document).ready(function() {
	$('#float').sidr();
	});
	</script>
	
  </body>
</html>
