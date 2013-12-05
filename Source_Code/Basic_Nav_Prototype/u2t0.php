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
    <link rel="shortcut icon" href="img/ico/logo.png">

    <title>IOLA Content Demo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">	
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">


    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
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

    <div class="container">

      <div class="jumbotron">
		<div id="sidr" class="hidden-print">
			<?php include 'sidebar.php' ?>
		</div>

        <h1 class="text-center">Unit 2: Matrices as Transformations</h1>
		</div>
				<!-- Begin expandall section -->
		<div class="jumbotron">
			<a class="expandcollapse btn  btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<a class="btn btn-gray center pull-right" style="margin-right:15px"data-toggle="collapse" data-target="#t">Print Lesson &raquo;</a>
				<div class="accordion-body collapse pull-right" id = "t">
					<ul>
						<blockquote>
							<a href="media/unit1/u1_task4.pdf">.pdf Download</a> <br><a href="media/unit1/u1_task4.doc">.doc Download</a>
						</blockquote>
					</ul>
				</div>
			<div class="accordion" id="summary">		  
		<h2 class="text">Introductory Lesson</h2>
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
			<div class="accordion-body collapse" id = "t1" >
				<ul>
				<blockquote>
				<p>The first learning goal of the instructional sequence is interpreting matrices as mathematical objects that transform input vectors to output vectors. Thus, a goal of this introductory whole-class discussion is to help students conceive of input-output pairs of vectors that are related through a matrix transformation.</p>
				<p>It is appropriate to introduce students to this through a mini-lecture with a few examples.  This will provide the pre-requisite information students need to engage in the Italicizing N task sequence.</p>
				<p>Assumed prior knowledge</p>
				<ul>
					<li>Linear combinations, span, and linear (in)dependence </li>
					<li>Methods for determining solutions to a linear system such as Gaussian elimination; existence and uniqueness of solutions</li>
					<li>The interpretation of A<b>x</b> = <b>b</b> as a vector equation both algebraically and geometrically</li>
					<li>The interpretation of A<b>x</b> = <b>b</b> as a system of equations both algebraically and geometrically</li>
				</ul>		
				</blockquote>
				</ul>
			</div>
		</ul>
		<ul>
			<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#goalsrationale">Mini-lecture on transformations &raquo;</a>
			<div class="accordion-body collapse" id = "goalsrationale">
				<ul>
					<blockquote>
						<p class="lead">Mini-lecture on transformations</p>				
							<p>The instructor could begin by reminding the class that they have already worked with two interpretations of the equation Ax = b (vector equation & system of linear equations). </p>						
						<br>
						<a class="btn btn-warning center" data-toggle="collapse" data-target="#t01">Example Discussion Topic: &raquo;</a>
						<br>
						<div class="accordion-body collapse" id = "t01">
							<blockquote style="background-color:#F8F8F8;">
							Let’s review the interpretations of Ax=b we’ve seen by considering the example $\begin{bmatrix} 5 & 2 \\ 1 & 3\end{bmatrix}$$\begin{bmatrix} 1 \\ 4 \end{bmatrix}$=$\begin{bmatrix} 13 \\ 13 \end{bmatrix}$.
							<br>
							<ul style="list-style-type:none";>
								<li style="list-style-type:none;"> <p>As a vector equation:</p>
									<ul>
										<li  style="padding-bottom:20px;">$\begin{bmatrix} 5 & 2 \\ 1 & 3\end{bmatrix}$$\begin{bmatrix} 1 \\ 4 \end{bmatrix}$=1$\begin{bmatrix} 5 \\ 1 \end{bmatrix}$ + 4$\begin{bmatrix} 2 \\ 3 \end{bmatrix}$ = $\begin{bmatrix} 13 \\ 13 \end{bmatrix}$.						
										</li>
										<li style="padding-bottom:20px;">The solution (1, 4) is the number of the first column vector and the number of the second column vector needs to become the linear combination $\begin{bmatrix} 13 \\ 13\end{bmatrix}$
										<br><br>
										<img src="img/u2t0/0.png" alt="0">
										</li>
									</ul>
								</li>
								<br><br>
								<li style="list-style-type:none; padding-bottom:20px;">
									<p>As a system of equations:</p>
									<ul>
										<li style="padding-bottom:20px;">5(1)+2(4)=13 <br> 1(1)+3(4)=13
										</li>
										<li style="padding-bottom:20px;">The solution (1, 4) is the location in the Cartesian plane in which the equations 5x+2y=13 and x+3y=13 intersect.
										<br><br>
										<img src="img/u2t0/1.png" alt="1">
										</li>
									</ul>
								</li>
								<br><br>
								<li style="list-style-type:none;">
									<p>As a linear transformation:</p>
									<ul>
										<li style="padding-bottom:20px;">One can also consider A<b>x</b> = <b>b</b> is as A transforming the vector x into the vector <b>b</b>. That is, we can think of A as “acting on <b>x</b>” to turn it into a vector <b>b</b>.
										<br><br>
										<img src="img/u2t0/2.png" alt="2">
										</li>
										<li style="padding-bottom:20px;">Considering the same example $\begin{bmatrix} 5 & 2 \\ 1 & 3\end{bmatrix}$$\begin{bmatrix} 1 \\ 4 \end{bmatrix}$ = $\begin{bmatrix} 13 \\ 13 \end{bmatrix}$, the transformation defined by A = $\begin{bmatrix} 5 & 2 \\ 1 & 3\end{bmatrix}$ transforms the vector $\begin{bmatrix} 1 \\ 4 \end{bmatrix}$ into the vector  $\begin{bmatrix} 13 \\ 13 \end{bmatrix}$.

										</li>
										<li style="padding-bottom:20px;">
											Graphically:
											<br><br>
											<img src="img/u2t0/3.png" alt="3">
										</li>
									</ul>
								</li>
							</ul>
							</blockquote>
						</div>						
					</blockquote>
				</ul>
			</div>
		</ul>

		
		<ul>
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#defintions">Definitions &raquo;</a>
			<div class="accordion-body collapse" id = "defintions">
				<ul>
				<blockquote>
					<p>Definitions</p>
					The instructor might give the following definitions and briefly relate them to how students are familiar with them from high school and calculus (functions from R to R). 
					<br><Br>
					<b>NOTE:</b> Depending on the students’ backgrounds and/or the rigor of the linear algebra course, the instructor could choose to wait until after students have worked on Task 1 to introduce these terms, connecting them to the work students will have done in Task 1.
					<br><br>
					<ul style="padding-left:40px">
						<li>A <b>transformation</b> (function) T:&#x211d;<sup>n</sup>→ &#x211d;<sup>m</sup> is a rule that assigns each x ∈ &#x211d;<sup>n</sup> a vector T(x) ∈ &#x211d;<sup>m</sup>.
						</li>
						<li>The <b>domain</b> is the set of all possible input vectors x. Here, the domain is  &#x211d;<sup>n</sup>
						</li>
						<li>The output T(x)  is the <b>image</b> of x under the transformation T
						</li>
						<li>The <b>range</b> is the set of all images under the transformation T
						</li>
						<li><b>Codomain:</b> The (vector) space that contains the range of the transformation T 
						</li>
						<br>
						<img src="img/u2t0/4.png" alt="4">
					</ul>
					<br>
					<p><b>Examples (Use these if the above definitions have been given):</b></p>
					<b>Familiar examples:</b>
					<br>
					<ol style="padding-left:40px">
						<li style="padding-bottom:20px;">T:&#x211d;→ &#x211d; given by T(x)=x<sup>2</sup>
							<ul>
								<li>The domain and codomain are both R, whereas the range is only [0,∞).
								</li>
							</ul>
						</li>
						<li style="padding-bottom:20px;">T:&#x211d;→ &#x211d; given by T(x)= x + 5
							<ul>
								<li>The domain and codomain are both &#x211d;, and the range is also &#x211d;
								</li>
							</ul>
						</li>
					</ol>
					<br>
					<b>New examples:</b>
					<br>
					<ol style="padding-left:40px">
						<li style="padding-bottom:20px;">
							Let T:&#x211d;<sup>4</sup>→ &#x211d;<sup>2</sup> be a transformation defined by A = $\begin{bmatrix} 1 & 0 &3 & 2 \\ 2 & 1 &  0 & 5 \end{bmatrix}$. That is, T(x<sub>1</sub>,x<sub>2</sub>,x<sub>3</sub>,x<sub>4</sub>) = (x<sub>1</sub> + 3x<sub>3</sub> + 2x<sub>4</sub>,2x<sub>1</sub> + x<sub>2</sub> + 5x<sub>4</sub>). Note that A is transforming vectors from &#x211d;<sup>4</sup> into vectors in &#x211d;<sup>2</sup>. For examples, let <b>x</b> = 
							$\begin{bmatrix} 1 & 3 & 1 & 0 \end{bmatrix}$. Then A<b>x</b> = $\begin{bmatrix} 1 & 0 & 3 & 2 \\ 2 & 1 &  0 & 5 \end{bmatrix}$$\begin{bmatrix} 1 \\ 3 \\ 1 \\ 0 \end{bmatrix}$ = $\begin{bmatrix} 4 \\ 5 \end{bmatrix}$. A graphical interpretation is hard to do for this, but we can think of it set theoretically:
							<br><br>
							<img src="img/u2t0/5.png" alt="5">
						</li>
						<li style="padding-bottom:20px;">Let T be a transformation defined by A. Let A= $\begin{bmatrix} 1 & -2 \\ 5 & -9 \\ -3 6 \end{bmatrix}$, let u=$\begin{bmatrix} 2 \\ 1 \end{bmatrix}$. Find the image of u under the transformation T. </li>
						<li>If the domain for a transformation T is &#x211d;<sup>5</sup> and the codomain for T is &#x211d;<sup>3</sup>, and T is defined by a matrix A, what would the dimensions of A have to be? (i.e., how many rows and how many columns does A have and why?)
						</li>
					</ol>
					<br>
					<p><b>Examples (use the versions below if the above definitions have NOT been given at this time)</b></p>
					<ol style="padding-left:40px">
						<li style="padding-bottom:20px;">Let A = $\begin{bmatrix} 1 & 0 & 3 & 2 \\ 2 & 1 &  0 & 5 \end{bmatrix}$. Note that A transforms vectors from &#x211d;<sup>4</sup> to vectors in &#x211d;<sup>2</sup>, For example, let x = $\begin{bmatrix} 1 \\ 3 \\ 1 \\ 0 \end{bmatrix}$. Then A<b>x</b> = $\begin{bmatrix} 1 & 0 & 3 & 2 \\ 2 & 1 &  0 & 5 \end{bmatrix}$$\begin{bmatrix} 1 \\ 3 \\ 1 \\ 0 \end{bmatrix}$=$\begin{bmatrix} 4 \\ 5\end{bmatrix}$. A graphical interpretation is hard to do for this, but we can think of it set theoretically: 
						<br><br>
							<img src="img/u2t0/5.png" alt="5">
						</li>
						<li style="padding-bottom:20px;">Let A=$\begin{bmatrix} 1 & -2 \\ 5 & -9 \\ -3 & 6 \end{bmatrix}$, let u=$\begin{bmatrix} 2 \\ 1 \end{bmatrix}$. Find the 		image of u under multiplication by A.
						</li>
						<li style="padding-bottom:20px;">What is the size of a matrix that sends vectors in &#x211d;<sup>5</sup> to vectors in &#x211d;<sup>3</sup>?
						</li>

					</ol>
				</blockquote>
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
 
	<!-- Include the Sidr JS -->
	<script>
	$(document).ready(function() {
	$('#simple-menu').sidr();
	$('#float2').sidr();
	$('#printt').sidr();
	$('#simple').sidr();
	$('#float').sidr();
	});
	</script>

	<!-- Automatically open sidebar -->
	<script>
	function init(){
	$('#simple-menu').sidr({ speed : 0 });
	$.sidr('open', 'sidr');
	$('#u2').collapse("hide"); <!--Auto-open Unit 1 sidebar link -->
	}
	
	$('.carousel').carousel(
		{
		pause: true,
		interval: false
		});
	</script>
  </body>
</html>
