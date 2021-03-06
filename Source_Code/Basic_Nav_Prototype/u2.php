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

    <title>Unit 2 Summary - IOLA</title>

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
	  <?php $ref='unit'; include 'header.php' ?>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<?php include 'sidebtn.php' ?>
    <div class="container print">
	
		<div class="jumbotron">
			<div id="sidr" class="hidden-print">
				<?php $unit = 'u2'; $task = 's'; include 'sidebar.php' ?>
			</div>
			<h1 class="text-center" style="font-size:53px">Unit 2: Matrices as Transformations</h1>
			<br>
			<h4>
				
				<b><p style="font-size:18px; padding:0">Common Prior Knowledge:</p></b>
				<ul>
					<li>Linear combinations, span, and linear (in)dependence</li> 
					<li>Methods for determining solutions to a linear system such as Gaussian elimination; existence 				and uniqueness of solutions</li>
					<li>The interpretation of $Ax = b$ as a vector equation both algebraically and geometrically</li>
					<li>The interpretation of $Ax = b$ as a system of equations both algebraically and geometrically</li>
				</ul>
				<br>
				<b><p style="font-size:18px; padding:0">Prerequisite Skills:</p></b>
				<ul>
					<li>How to compute the product of a matrix and a vector</li>
					<li>2x2 matrix multiplication</li>
				</ul>
				<br>
				<b><p style="font-size:18px; padding:0">Overarching Learning Goals for the Entire Task Sequence:</p></b>
		
				To develop a robust conceptual understanding of matrices as linear transformations by:
				<br><br>
				<ul>
					<li>Interpreting A<b>x = b</b> as the matrix A acting on the input vector x to transform it to the output vector <b>b</b></li>
					<li>Interpreting products of matrices as a composition of linear transformations and inverse matrices as objects that undo a transformation</li>
					<li>Interpreting matrices as mathematical objects that transform sets of input vectors to sets of output vectors – which gives rise to a way of conceiving of matrices as objects that geometrically transform a space (e.g., &#x211d;<sup>2</sup> or &#x211d;<sup>3</sup>)</li>
				</ul>
				<br>
				<p>Expected Length: 4 - 75 minute instructional sessions</p>
				
			</h4>
		</div>
		<div class="jumbotron">
		<section id="accordion">
			<a href="#_" class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion " id="summary">


				<h2><a href="u2t0.php">Introductory Lesson</a></h2>
				<ul>
					<a class="btn btn-gray" id="moreInfo" data-toggle="collapse" data-target="#t0">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t0">
						<ul>
							<blockquote>
								<p class="lead">The goal is to introduce the idea of interpreting a matrix times a vector as a linear transformation.</p>
								<p>We suggest the instructor begin this unit with a mini-lecture that:</p>
								<ul>
									<li>Contrasts a transformation interpretation of a matrix equation Ax = b with previously discussed views (e.g. vector equation, system of equations).  The transformation interpretation should highlight the view that A acts on an input vector x to transform it into the output vector b</li>
									<li>Explore ways of determining the dimensions of a matrix that would transform vectors in &#x211d;<sup>n</sup> to vectors in &#x211d;<sup>m</sup> for specified n and m</li>
									<li>Introduce the terms transformation, domain, image, range, and codomain</li>
									
								</ul>
								
							</blockquote>
						</div>
					</ul>
				</ul>	  
				<h2><a href="u2t1.php">Task 1: Italicizing $N$</a></h2>
				<ul>
					<a class="btn btn-gray" id ="moreInfo"data-toggle="collapse" data-parent="#parent" data-target="#t1">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t1">
						<ul>
							<blockquote>
								<p class="lead">The goal is to construct a matrix that yields a desired transformation and to explore linear transformations through this example.</p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Conceive of a matrix as a way of mapping elements of &#x211d;<sup>2</sup> to elements of &#x211d;<sup>2</sup></li>
									<li>Find a matrix that produces the desired geometric transformation from &#x211d;<sup>2</sup> to &#x211d;<sup>2</sup></li>
									<li>Determine whether the matrix for a transformation is unique (within a particular choice of basis)</li>
									<li>Articulate criteria by which a set of vectors can be chosen to determine the (unique) transformation matrix (e.g., the set of vectors must span the domain)</li>

								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>NOT give away that the matrix is unique before students work on the task</li>
									<li>Define linear transformation</li>
									<li>Derive how AB can be interpreted as A acting on the columns of B after the task</li>
								</ul>
							</blockquote>
						</ul>
					</div>
				</ul>
		
				<h2><a href="u2t2.php">Task 2: Beyond $N$</a></h2>
				<ul>
					<a class="btn btn-gray" id="moreInfo" data-toggle="collapse" data-target="#t2">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t2">
						<ul>
							<blockquote>
								<p class="lead">The goal is to understand how linear transformations affect the entire space.</p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Explain how the Italicizing N transformation affects the entire plane, not just one “N”</li>
									<li>Interpret matrices as objects that transform sets of input vectors to sets of output vectors in a coordinated and predictable way</li>
									<li>Determine the matrix for a linear transformation (from &#x211d;<sup>2</sup> to &#x211d;<sup>2</sup>) for common geometric transformations such as reflection, rotation, stretching, and shearing</li>
									<li>Identify the geometric effect of a transformation based on the associated matrix values </li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Prompt students to consider how the entire domain is affected by a transformation</li>
									<li>Provide follow-up example transformations within &#x211d;<sup>2</sup> or &#x211d;<sup>3</sup></li>

								</ul>
							</blockquote>
						</div>
					</ul>
				</ul>

				<h2><a href="u2t3.php">Task 3: Pat and Jamie</a></h2>
				<ul>
					<a class="btn btn-gray" id="moreInfo" data-toggle="collapse" data-target="#t3">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t3">
						<ul>
							<blockquote>
								<p class="lead">The goal is to interpret the product of matrices as a composition of linear transformations. </p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Coordinate input and output vectors across a sequence of transformations</li>
									<li>Determine the matrices that yield a desired sequence of transformations</li>
									<li>Conceive of the product of two matrices as a composition of two linear transformations</li>
									<li>Understand how the order of matrix multiplication coordinates with the order in which linear transformations are composed</li>
								</ul>
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Connect students’ work to composition of functions as an interpretation of matrix multiplication</li>
									<li>Introduce the terms commutative and non-commutative after the students complete the task</li>

								</ul>
							</blockquote>
						</div>
					</ul>
				</ul>
		
				<h2><a href="u2t4.php">Task 4: Getting Back To $N$</a></h2>
				<ul>
					<a class=" btn btn-gray" id="moreInfo" data-toggle="collapse" data-target="#t4">More Information <span class="glyphicon glyphicon-chevron-down"></span></a>
					<div class="accordion-body collapse" id = "t4">
						<ul>
							<blockquote>
								<p class="lead">The goals are to interpret an inverse transformation as “undoing” the original transformation and the identity transformation as the “do nothing” transformation.</p>
								<p>By the end of the lesson students should be able to:</p>
								<ul>
									<li>Understand the inverse of a matrix as a transformation that “undoes” the transformation corresponding to the original matrix</li>
									<li>Explain why the inverse of a composition of transformations “changes the order” in which the transformations are “undone” and coordinate that with why (AB)<sup>-1</sup> = B<sup>-1</sup>A<sup>-1</sup></li>
									<li>Interpret a transformation composed with its inverse as the identity transformation and coordinate that with the interpretation of a matrix multiplied by its inverse as the identity matrix</li>
									<li>Identify the identity transformation as the “do nothing” transformation and coordinate that with an interpretation of the identity matrix</li>
								</ul>	
								<br>
								<p>The instructor should:</p>
								<ul>
									<li>Label the matrix that “undoes” the original transformation as the inverse (e.g., C = A<sup>-1</sup>) after students have found it</li>
									<li>Define invertible matrix and transformation, inverse, identity matrix and transformation</li>
									<li>NOT offer a formula or procedure for finding the inverse of a matrix</li> 
									<li>Use diagrams related to linear transformations to help illustrate (AB)<sup>-1</sup> = B<sup>-1</sup> A<sup>-1</sup> and A A<sup>-1</sup> = A<sup>-1</sup>A = I </li>

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
	$('#u2').collapse("hide"); <!--Auto-open Unit 1 sidebar link -->
	}
	</script>
  </body>
</html>
