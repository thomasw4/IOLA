<?php
session_start();
//if (!isset($_SESSION['user']) || !$_SESSION['user']) {
//	header('Location:index.php');
//	exit();
//}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>About the Team - IOLA</title>

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
	  <?php $ref = 'team'; include 'header.php' ?>
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
			<h1 class="text-center">Meet the IOLA Team!</h1>
		</div>
		<div class="jumbotron">
		    <div class="container">
			
	  

		  <!-- Example row of columns -->
				<div class="row">
					<h2>Megan Wawro</h2><br>
						<img width="250" height="250" src="img/team/wawro.jpg" style="float:left; padding-right:10px">
						<ul>
							<blockquote style="border-right: 5px solid #3f3f3f; border-left: 0px"><p>
								<a href="mailto:mwawro@vt.edu">Megan Wawro</a> is an Assistant Professor of Mathematics Education in the Department of Mathematics at Virginia Tech in Blacksburg, Virginia. She received a B.A. and M.A in mathematics from Cedarville University and Miami University, respectively, and her Ph.D. in mathematics and science education jointly from San Diego State University and University of California, San Diego. Her research focuses on the learning and teaching of undergraduate mathematics. Her current work explores student thinking and instructional design in linear algebra, as well as methodologies for documenting student reasoning at both individual and collective levels.
							</p></blockquote>
						</ul>
					<br>	
					<h2 style="float:right">Chris Rasmussen</h2><br><br><br><br>
						<img width="250" height="250" src="img/team/rasmussen.jpg" style="float:right; padding-left:10px">
						<ul>
							<blockquote style=" border-top-left-radius:15px"><p>
								<a href="mailto:Chris.rasmussen@sdsu.edu">Chris Rasmussen</a> is Professor of Mathematics Education in the Department of Mathematics and Statistics at San Diego State University. He received an undergraduate degree in mechanical engineering, a master's degree in mathematics, and his Ph.D. in mathematics education at the University of Maryland. His research focuses on the learning and teaching of undergraduate mathematics, with a focus on courses that serve as a transition from students' current ways of reasoning to more formal and abstract ways of reasoning.
							</p></blockquote>
						</ul>	
					<br>
					
					<h2>Michelle Zandieh</h2><br>
						<img width="250" height="250" src="img/team/zandieh.jpg" style="float:left; padding-right:10px">
						<ul>
							<blockquote style="border-right: 5px solid #3f3f3f; border-left: 0px"><p>
								<a href="mailto:zandieh@asu.edu">Michelle Zandieh</a> is an Associate Professor in the Faculty of Sciences and Mathematics in the School of Letters and Sciences at Arizona State University. She received undergraduate degrees in mathematics and geology at Northwestern University, a master's degree in mathematics, and a Ph.D. in mathematics at Oregon State University. Her research focuses on the learning and teaching of undergraduate mathematics, with a focus on student reasoning in courses such as calculus, linear algebra, geometry and transition to proof.
							</p></blockquote>
						</ul>
					<br>
					
					<h2 style="float:right">Christine Larson</h2><br><br><br><br>
						<img width="250" height="250" src="img/team/larson.jpg" style="float:right; padding-left:10px">
						<ul>
							<blockquote style=" border-top-left-radius:15px"><p>
								<a href="mailto:christine.j.larson@vanderbilt.edu">Christine Larson</a> is an assistant professor of mathematics education at Florida State University. She recently completed a post-doctoral research fellowship in Vanderbilt University's Peabody School of Education in the Department of Teaching and Learning. In this capacity, she had the opportunity to assume a leadership role on a longitudinal project aimed understanding the institutional supports needed to improve middle school math instruction at scale. She earned her undergraduate and master's degrees in mathematics from the University of Kansas, and her Ph.D. in mathematics education and learning sciences from Indiana University. Her dissertation research focused on instructional design in introductory undergraduate linear algebra, exploring the ways in which student thinking, modeling, and history of mathematics serve to inform the development of inquiry oriented instructional materials in that content domain. Her current work explores teacher learning and institutional supports for effectively scaling up the implementation of inquiry oriented instruction.
							</p></blockquote>
						</ul>	
					<br>
				   
					<h2>David Plaxco</h2><br>
						<img width="250" height="250" src="img/team/david.jpg" style="float:left; padding-right:10px">
						<ul>
							<blockquote style="border-right: 5px solid #3f3f3f; border-left: 0px"><p>
								<a href="mailto:dplaxco@vt.edu">David Plaxco</a> is a doctoral student in Mathematics at Virginia Tech. David earned his
									Bachelor's degree in Secondary Mathematics Education from Auburn
									University and his Master's degree in Mathematics from Virginia Tech. He
									taught eighth grade for two years in Muscle Shoals, AL. David is currently
									interested in students' understanding of mathematical concepts, especially
									how engaging in specific proof activities evokes and informs various aspects
									of a student's conception about the mathematics involved.
							</p></blockquote>
						</ul>
					<br>
					
					<h2 style="float:right">Kathy Czeranko</h2><br><br><br><br>
						<img width="250" height="250" src="img/team/czeranko.jpg" style="float:right; padding-left:10px">
						<ul>
							<blockquote style=" border-top-left-radius:15px"><p>
								Kathy Czeranko earned her BS and MS in Electrical Engineering from George Mason University. She has a Secondary Education Teaching Certificate in Mathematics in the State of Arizona. Kathy is currently an instructor at Arizona State University.
							</p></blockquote>
						</ul>	
					<br><br><br><br><br>
					
					<h2>Hayley Miles-Leighton </h2><br>
						<img width="250" height="250" src="img/team/hayley.jpg" style="float:left; padding-right:10px">
						<ul>
							<blockquote style="border-right: 5px solid #3f3f3f; border-left: 0px"><p>
								Hayley Miles-Leighton is a doctoral student in Mathematics Education jointly at San Diego State University and University of California, San Diego. She received a B.S. in Scientific Computation from the University of California, San Diego and a M.S. in Applied Mathematics from the University of Arizona. Her research focuses on the learning and teaching of undergraduate mathematics. Hayley works as a research assistant with Dr. Rasmussen on student thinking and instructional design in linear algebra, as well as student persistance in calculus. 
							</p></blockquote>
						</ul>
					<br>		  
				</div>
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
 
	<!-- Include the Sidr JS -->
	<script>

	</script>
	
  </body>
</html>
