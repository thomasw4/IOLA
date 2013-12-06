<?php
session_start();
if (!isset($_SESSION['user']) || !$_SESSION['user'] || $_SESSION['user']['user_level'] < 1) {
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

    <title>IOLA Unit 1 Summary</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css"  type="text/css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/imgflip.css" rel="stylesheet">
    <link href="css/imgflip.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="init()">
    <div class="navbar navbar-inverse  navbar-fixed-top">
	  <?php $ref='unit'; include 'header.php' ?>
    </div>
	
	<?php include 'sidebtn.php' ?>

</a>
    <div class="container ">
		<div class="jumbotron">
			<div id="sidr" class="hidden-print">
				<?php $unit = 'u1'; $task = 's'; include 'sidebar.php' ?>
			</div>
			<h1 class="text-center">Unit 1: Linear Independence and Span</h1>
			<h4>
			<p class="text-center">
				Prerequisite Knowledge: Intuitive understanding of vector in $\mathbb{R}^2$ (formal definition not required)<br>
				Expected Length: 4-5 75 minute instructional sessions
			<br>
			</p>
			</h4>
		</div>
		<div class="jumbotron">
		<section id="accordion">
			<a class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion " id="summary">		  
				<h2><a href="u1t1.php">Task 1: The Carpet Ride Problem (Working in $\mathbb{R}^2$)</a></h2>
				<ul>
					<a class="btn btn-gray" data-toggle="collapse" data-parent="#parent" data-target="#t1">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t1">
						<ul>
							<blockquote>
								<p class="lead">Goal is to develop students' familiarity with the language, notation, and graphical representations for linear combinations of vectors (and connections to linear systems).</p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Develop graphical and algebraic representations of scalar multiples and linear combinations of vectors</li>
									<li>Interpret scalar multiplication as repeated tip to tail vector addition and as a multiplicative stretching (or shrinking) of the vector </li>
									<li>Determine the correct solution of $(30, 17)$ and understand what the 30 means and what the 17 means in relation to the vector equation</li>
									<li>Represent the problem situation with a Vector Equation and a System of Equations</li>
									<li>Translate between vector equation, systems of equations, and geometric representations of each</li>
									<li>Explain what it means to be a solution to a vector equation and to a system of equations</li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Define what is meant by scalar multiples and linear combinations of vectors</li>
									<li>Define what is meant by vector equation and system of equations</li>
								</ul>
							</blockquote>
						</ul>
					</div>
				</ul>
		
				<h2><a href="u1t2.php">Task 2: Hide and Seek (Working in $\mathbb{R}^2$)</a></h2>
				<ul>
					<a class="btn btn-gray" data-toggle="collapse" data-target="#t2">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t2">
						<ul>
							<blockquote>
								<p class="lead">Goal is to develop informal ideas about span in a 2D setting (drawing on a metaphor of "getting anywhere" using 2 modes of transportation corresponding to vectors). </p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Conclude that there is nowhere that Gauss can hide </li>
									<li>Explicitly compare various graphical and algebraic justifications to this conclusion</li>
									<li>Articulate why / how the vector equation $c_1[3, 1] + c_2[1, 2] = [a, b]$ means that you can get anywhere in $\mathbb{R}^2$ that Gauss tries to hide </li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Introduce the formal definition of span</li>
									<li>NOT mention Linear (in)dependence (this comes up in Task 3)</li>
								</ul>
							</blockquote>
						</div>
					</ul>
				</ul>

				<h2><a href="u1t3.php">Task 3: Getting Back Home (Working in $\mathbb{R}^3$)</a></h2>
				<ul>
					<a class="btn btn-gray" data-toggle="collapse" data-target="#t3">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t3">
						<ul>
							<blockquote>
								<p class="lead">Goal is to develop informal ideas about linear dependence (drawing on a metaphor of "getting back home"). </p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Interpret the zero vector as "home" </li>
									<li>Intuitively understand linear dependence as getting home (in a non-trivial manner)</li>
									<li>Relate linear independence to Task 2</li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Introduce the formal definition of Linear Dependence </li>
									<li>Introduce definition of Linear Independence</li>
								</ul>
							</blockquote>
						</div>
					</ul>
				</ul>
		
				<h2><a href="u1t4.php">Task 4: Linear [In]dependence (Moving Towards $\mathbb{R}^n$)</a></h2>
				<ul>
					<a class=" btn btn-gray hidden-print" data-toggle="collapse" data-target="#t4">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t4">
						<ul>
							<blockquote>
								<p class="lead">To develop conjectures about linear dependence/independence. Secondary goals are to develop generalizations about span and about connections between span and linear (in)dependence.</p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Develop a travel interpretation of a non-zero scalar times the zero vector (e.g., $4 \begin{bmatrix} 0 \\ 0 \end{bmatrix}$  means riding a stationary bike for 4 hours)</li>
									<li>Develop generalized notions of linear independence and dependence in $\mathbb{R}^n$</li>
										<ul>
											<li>Essential Generalizations:</li>
											<ul>
												<li>If a set contains two vectors that are scalar multiples of each other, then the set is linearly dependent.</li>
												<li>If at least one vector in a set is a linear combination of the other vectors in the set, then the set is linearly dependent.</li>
												<li>Any set of vectors from $\mathbb{R}^n$ containing more than $n$ vectors is linearly dependent.</li>
												<li>Any set containing the zero vector is linearly dependent.  <br>
												<strong>NOTE:</strong> The latter three generalizations are consistent with Theorems 7-9 of Chapter 1 of Lay (2007). </li>

											</ul>
											<li>Possible Generalizations:</li>
											<ul>
												<li>Any set of vectors from $\mathbb{R}^n$ with fewer than n vectors cannot span $\mathbb{R}^n$</li>
												<li>A set of n vectors in $\mathbb{R}^n$ spans $\mathbb{R}^n$ if and only if the set is linearly independent.  <br>
												<strong>NOTE:</strong> These could support early notions of basis and help form a foundation for the Invertible Matrix Theorem.</li>
											</ul>

										</ul>
									<li>Develop an intellectual need for efficient computational strategies and sophisticated solution techniques when working with vector equations and systems of equations</li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Assist students in writing out their conjectures in more formal ways</li>
									<li>It is essential to discuss with the students why these are true, but the level of rigor with which you discuss the proofs of the conjectures depends on the level of your course. </li>
								</ul>
							</blockquote>
						</div>
					</ul>
				</ul>	
			</div>
		</section>
		<hr>
		<footer>
			<?php include 'footer.php'?>
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
	<script src="js/iola.js"></script>

	<!-- Automatically open sidebar -->
	<script>
	function init(){
	$('#simple-menu').sidr({ speed : 0 });
	$.sidr('open', 'sidr');
	$('#u1').collapse("hide"); <!--Auto-open Unit 1 sidebar link -->
	}
	</script>
  </body>
</html>
