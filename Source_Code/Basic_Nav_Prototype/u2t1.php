<?php
session_start();
if (!isset($_SESSION['user']) || !$_SESSION['user']) {
	header('Location:mockup.php');
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="init()">
    <div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="navbar-inner">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><img src="img/logo_i.png" width="48" height="48" alt="IOLA"></a>
			  			  

			</div>
			<div class="navbar-collapse collapse">
			
			  <ul class="nav navbar-nav">
				<li></li>
				<li><a href="mockup.php">Home</a></li>
				<li  class="active"><a id="simple-menu" href="#sidr">Modules</a></li>
				<li><a href="team.php">Team</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Videos</a></li>
					<li><a href="#">Pictures</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">Links</li>
					<li><a href="#">NSF</a></li>
					<li><a href="#">Related Projects</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-form navbar-right" action="logout.php" method="post">
				<div class="form-group" style="padding-right:15px">
					<font  color="FFFFFF">Hello, <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</font>
				</div>
				<button type="submit" class="btn btn-warning" value="logout">Log out</button>
			  </form> 
			</div><!--/.navbar-collapse -->
		  </div>
		</div>
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
		<div id="sidr">
			<ul>
				<li>
				<a class="accordion-toggle in" data-toggle="collapse" data-target="#u1"><strong>Unit 1 Magic Carpet Ride  <b class="caret"></b></strong></a>
				   <p class="collapse" id="u1">
				   		<a href="u1.php" title="Title"> - Unit 1 Summary</a>
						<a href="u1t1.php" title="Title"><strong> - Task 1: The Carpet Ride Problem</strong></a>
						<a href="u1t2.php" title="Title"> - Task 2: Hide and Seek</a>
						<a href="u1t3.php" title="Title"> - Task 3: Getting Back Home</a>
						<a href="u1t4.php" title="Title"> - Task 4: Linear (In)dependence</a>
				   </p>
                </li>		
				<li>
				<a class="accordion-toggle" data-toggle="collapse" data-target="#u2">Unit 2  <b class="caret"></b></a>
				   <p class="collapse" id="u2">
						<a href="u2.php" title="Title">- Unit 2 Summary</a>
						<a href="u2t1.php" title="Title"> - Task 1: Italicizing N</a>
						<a href="u2t2.php" title="Title"> - Task 2: Beyond the N</a>
						<a href="u2t3.php" title="Title"> - Task 3: Pat and Jamie </a>
						<a href="u2t4.php" title="Title"> - Task 4: Getting Back to N</a>
				   </p>
                </li>	
				<li>				
				<a class="accordion-toggle" data-toggle="collapse" data-target="#u3">Unit 3  <b class="caret"></b></a>
				   <p class="collapse" id="u3">
						<a href="#" title="Title"> - Task 1</a>
						<a href="#" title="Title"> - Task 2</a>
				   </p>
                </li>

                <li>
				<a class="accordion-toggle" data-toggle="collapse" data-target="#u4">Unit 4  <b class="caret"></b></a>
				   <p class="collapse" id="u4">
						<a href="#" title="Title"> - Task 1</a>
						<a href="#" title="Title"> - Task 2</a>
				   </p>
                </li>
			</ul>
		</div>
	
        <h1 class="text-center">Unit 2: Italicizing N Task Sequence</h1>
		</div>
				<!-- Begin expandall section -->
		<div class="jumbotron">

		<section id="accordion">
			<a href="#_" class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion" id="summary">		  

		<h2 class="text">Task 1: Italicizing N
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
		</h2>
		
			<ul class="collapse" id = "t1" >
				<blockquote>
				<p class="lead" >Goal is to construct a matrix that yields a desired transformation and to explore linear transformations through this example</p>
				<p>By the end of the lesson students should be able to:</p>
				<ul>
					<li>Conceive of a matrix as a way of mapping elements of R<sup>2</sup> to elements of R<sup>2</sup></li>
					<li>Find a matrix that produces the desired geometric transformation from R<sup>2</sup> to R<sup>2</sup></li>
					<li>Determine whether the matrix for a transformation is unique (relative to the standard basis)</li>
					<li>Articulate criteria by which a set of vectors can be chosen to determine the (unique) transformation matrix (e.g., the set of vectors must span the domain)</li>
				</ul>
				<br>
				<p>The instructor should:</p>
				<ul>
					<li>NOT give away that the matrix is unique before students work on the task</li>
					<li>Define linear transformation</li>
					<li>Derive how AB can be interpreted as A acting on the columns of B after the students complete the task</li>
				</ul>
				</blockquote>
			</ul>
		<br>
		
		<ul>
			<a class="btn printLesson" id="printt" onclick="window.print();" >Print Lesson</a>
		</ul>
		
		<ul>
			<a class="btn btn-info center" data-toggle="collapse" data-target="#handout1">Handout 1: Italicizing N Problem &raquo;</a>
			<div class="accordion-body collapse" id = "handout1">
				<ul>
					<blockquote>
						<object data-src="media/unit1/handouts/u1_handout1.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit1/handouts/h1.pdf">click here to download the handout.</a></p>  
						</object>					
					</blockquote>
				</ul>
			</div>
		</ul>		
		<ul>
			<a class="btn center" id="contentInfo" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
			<div class="accordion-body collapse" id = "goalsrationale">
				<ul>
					<blockquote>
						<p class="lead">Goals and Rationale</p>
						
							<p>The task on Handout 1, which was inspired by an application problem in Lay’s (2003) linear algebra textbook, is the experientially real starting point for this instructional sequence in that it draws on the experiences students have likely had observing font changes when working with computers.  The task is deliberately placed on an unlabeled grid, pushing students to make their own choice about where to place the origin and how to coordinatize the space.  In addition, it is deliberately left unclear what size the transformation matrix needs to be.</p>
						
						<br>
						
						
							<p>In this task, students must make choices of how to represent the “input” and “output” letter N using vectors, the dimensions of the matrix that will yield the desired transformation, and what set of input-output vectors to coordinate in order to find such a matrix.  Students tend to develop systems of equations that can be pretty easily solved by inspection to find this matrix.</p>
						
					</blockquote>
				</ul>
			</div>
		</ul>

		<ul>
		<a class="btn btn-success center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
			<div class="accordion-body collapse"  id = "studentthinking">
				<ul>
					<blockquote>
						It is nontrivial for students to determine that both the inputs and outputs for the transformation lie in R<sup>2</sup> and that a 2 x 2 matrix defines the mapping. Furthermore, students grapple with how to interpret and symbolize the representations of the N. 
						<br><br>

						<!-- Carousel
						================================================== -->
						<div id="myCarousel" class="carousel slide" style="height:675px">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u2t1/1.png" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 1</em> method:</p>
									This group began by determining the scale of the x- and y-axes and naming each line segment of the letter N on the left. Notice that the left-most vertical segment is named [0,12], indicating that the group named this vector relative to an origin fixed on the bottom of this segment. However, the students named the second (diagonal) segment relative to an origin located at the upper left-hand corner of the letter N. Further, the last segment is named relative to an origin located on the bottom-right. The second N is labeled similarly, with the origin moving to the corners of N each time a new segment is named.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t1/2.png"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 2</em> method:</p>
									This group’s approach was similar to group 1, with the exception that they used a different scale for the coordinates of the line segments. Notice again that, when naming each segment, the students varied the location of the origin and named each segment as though it were a vector itself. 
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t1/3.png"/ alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 3</em> method:</p>
									Unlike Groups 1 and 2, this group named points on N relative to a fixed origin at the lower left-hand corner of each N. 																	</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t1/4.png"/ alt="Student thinking 4">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 4</em> method:</p>
									Regardless of the way in which students represent the letter N, a common approach is setting up a system of matrix equations – one matrix equation for each input-output pair – in order to determine the component values of A. Group 4 has shown their calculations for determining matrix A based on two input-output pairs. These pairs are consistent with Group 2’s naming system for the line segments. Notice that the matrix A is initially written with parameters a, b, c, and d. Using this matrix, in chorus with the two input-output pairs, the group found two systems of two equations. The first system yielded constant values for b and d, which the group substituted into the second system of equations to find a and c. From this work, the group determined the matrix A.								
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t1/5.png"/ alt="Student thinking 5">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 5</em> method:</p>
									This group attempted to determine the equation of the line that would be consistent with various parts of each N. Note that the equations corresponding to the vertical portions of the N on the left on the left are both x = 0. Similarly the equations of the parallel portions on the right are y = 4x. No further work with this approach was shown, and it is unclear how this work could help in correctly determining A.									
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t1/6.png"/ alt="Student thinking 6">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 6</em> method:</p>
									This group’s approach is similar to Group 4 in that they attempted to correspond input-output pairs with each other through matrix multiplication. Unlike Group 4, this group did not write A as a matrix of parameters. Also, this group concatenated the input and output vectors into 2x3 matrices. This could be viewed as an anticipation of matrix multiplication, seen as a repeated matrix multiplication on each of the three column vectors.									
								</div>
							  </div>
							</div>

							</div>
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div><!-- /.carousel -->					

						<!-- NON-CAROUSEL STUDENT THINKING: MAY BE BETTER SUITED FOR MOBILE-->
						<!--div class="paragraphs">
							<div class="row">
								<div class="span4">
									<div class="clearfix content-heading">
										<img class="pull-left" src="img/u2t1/1.png"/ height="300" width="300" hspace="20">
										<br><br>
										 <p><em>Group 1</em> method:</p>
									This group began by determining the scale of the x- and y-axes and naming each line segment of the letter N on the left. Notice that the left-most vertical segment is named [0,12], indicating that the group named this vector relative to an origin fixed on the bottom of this segment. However, the students named the second (diagonal) segment relative to an origin located at the upper left-hand corner of the letter N. Further, the last segment is named relative to an origin located on the bottom-right. The second N is labeled similarly, with the origin moving to the corners of N each time a new segment is named.
										<br><br>
										<img class="pull-right" src="img/u2t1/2.png"/ height="300" width="300" hspace="20">
										<br><br>
										<p><em>Group 2</em> method:</p>
									This group’s approach was similar to group 1, with the exception that they used a different scale for the coordinates of the line segments. Notice again that, when naming each segment, the students varied the location of the origin and named each segment as though it were a vector itself.
										<br><br>
										<img class="pull-left" src="img/u2t1/3.png"/ height="300" width="300" hspace="20">
										<br><br>
										 <p><em>Group 3</em> method:</p>
									Unlike Groups 1 and 2, this group named points on N relative to a fixed origin at the lower left-hand corner of each N. 								
										<br><br>
										<img class="pull-right" src="img/u2t1/4.png"/ height="300" width="300" hspace="20">
										<br><br>
										 <p><em>Group 4</em> method:</p>
									Regardless of the way in which students represent the letter N, a common approach is setting up a system of matrix equations – one matrix equation for each input-output pair – in order to determine the component values of A. Group 4 has shown their calculations for determining matrix A based on two input-output pairs. These pairs are consistent with Group 2’s naming system for the line segments. Notice that the matrix A is initially written with parameters a, b, c, and d. Using this matrix, in chorus with the two input-output pairs, the group found two systems of two equations. The first system yielded constant values for b and d, which the group substituted into the second system of equations to find a and c. From this work, the group determined the matrix A.										
										<br><br>
										<img class="pull-left" src="img/u2t1/5.png"/ height="300" width="300" hspace="20">
										<br><br>
										 <p><em>Group 5</em> method:</p>
									This group attempted to determine the equation of the line that would be consistent with various parts of each N. Note that the equations corresponding to the vertical portions of the N on the left on the left are both x = 0. Similarly the equations of the parallel portions on the right are y = 4x. No further work with this approach was shown, and it is unclear how this work could help in correctly determining A.									
										<br><br>
										<img class="pull-right" src="img/u2t1/6.png"/ height="300" width="300" hspace="20">
										<br><br>
										<p><em>Group 6</em> method:</p>
									This group’s approach is similar to Group 4 in that they attempted to correspond input-output pairs with each other through matrix multiplication. Unlike Group 4, this group did not write A as a matrix of parameters. Also, this group concatenated the input and output vectors into 2x3 matrices. This could be viewed as an anticipation of matrix multiplication, seen as a repeated matrix multiplication on each of the three column vectors.									
										<br><br>
									</div>
		  
								</div>
							</div>
						</div-->						
					</blockquote>
				</ul>
			</div>
		</ul>
		
		<ul>
		<a class="btn btn-success center" data-toggle="collapse" data-target="#implementation">Implementation &raquo;</a>
			<div class="accordion-body collapse" id = "implementation">
				<ul>
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				Following the Introduction mini-lecture (see page 4) on interpreting Ax=b as a transformation that acts on an input vector x to produce the output vector b, the instructor should pass out the Italicizing N task on Handout 1 (see page 48 for the student printable version).  
				<br>
				<ul>
					<li>Again, take a moment to make sure everyone is “on the same page” of what the task is asking them to do, etc. </li>
					<li>We recommend reading the task out loud with the students and giving them a few seconds to think over what is being asked of them before they get started on it.</li>

				</ul>
				We leave it to the instructor whether to discuss the location (and fixedness) of the origin before having the students engage in the Italicizing N task. This discussion would distinguish between approaches like those of Groups 1 and 2 from approaches like that of Group 3. 
				<br>
				<ul>
					<li>One advantage of deciding (as a class) that the origin is at the bottom left corner of both Ns before the students engage in the task is that the students’ responses may be relatively more consistent, having selected a standard that everyone can follow. This approach, however, depending on the student population, can be seen as “doing” too much of the mathematics for the students. </li>
					<li>Allowing students to determine where the origin is for themselves allows them to engage in the task using their own naming system. This could develop into a debate in whole class discussion through which the students (along with the instructor) could navigate distinctions between various naming systems and democratically develop a convention for the class (that all points on the N will be thought of as the endpoint of a vector that emanates from a fixed origin). This discussion is nontrivial because the general mathematical community fixes the origin even though, in this case, both approaches are logically consistent and ultimately successful.</li>

				</ul>	
				
				<br><br>	

				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i2">Working In Small Groups  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i2" ">
					
						<blockquote>
							<p>Working in small groups </p>
							
								This task involves a number of preliminary key steps for students to engage in during their small group work: <br><br>
								<ul>
									<li>Determining that R<sup>2</sup> is the domain and the codomain for the transformation that A represents, so that means A will be a 2x2 matrix</li>
									<li>Determining a way to “coordinatize” the original N and the italicized N (e.g., the lower left corner of both Ns can be described by the point/vector <0,0> and the upper right corners of the Ns can be described by <2,3> and <3,4>, respectively)</li>
									<li>Finding various input-output pairs that can be used to determine A </li>
								</ul>	
								<br>
								Additionally, the instructor should look out for more nuanced issues that students may encounter (explicitly or implicitly) that can be leveraged to help explore properties of transformation during whole class discussion. While these don’t need to be explored during small group work, the instructor may wish to make note of for whom these issues surfaced so as to facilitate a discussion of them during whole class discussion:
								<br>
								<ul>
									<li>How many input-output pairs are needed to determine the matrix A</li>
									<li>What type of input-output pairs are needed to determine the matrix A</li>
									<li>Whether the matrix A is unique </li>
								</ul>	
							</blockquote>
				
				</div>
				<br><br>					
				
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i3">Deciding the dimension of A during Whole Class Discussion &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i3" ">
					<ul>
						<blockquote>				
							<p>Deciding the dimension of A during Whole Class Discussion</p>
							<br>
							Some classes may struggle with determining what the dimensions of A should be. If this is the case, it may be advantageous to stop the class partway through small group work to discuss that the two Ns can be described as a collection of images in R<sup>2</sup>, so A is taking input vectors from R<sup>2</sup> (in the original N) and transforming them into output vectors in R<sup>2</sup> (the 16-pt italicized N).  Thus A has to be a 2x2 matrix. An example of how this conversation could go (inspired by how it has occurred in the past) is given: 
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">Example Discussion Question &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t6"">
									<ul style="list-style-type: none;">
										<blockquote style="background-color:#F8F8F8;">	
										<li><strong>Instructor:</strong> So did anyone try to think about what the domain or codomain might be for these input and output space?</li><br>
										<li><strong>Jonathan:</strong> Yes. The regular N is your domain and then the italicized 16 N is your codomain.</li><br>
										<li><strong>Instructor:</strong> Okay, so you said the domain was the regular N, and the codomain was this italicized N. If we think back to the examples we saw before, we had 
										spaces like R<sup>2</sup>, R<sup>5</sup>, R<sup>8</sup>, etc. as our domains and codomains. So, here we could say 
										that the original N is a collection of vectors in the domain, and the italicized N is a	collection of vectors in the codomain. And if we think about the fact that the N and the italicized N are all lying on the plane and can be represented with 2 	components, we’d say that the input space is R<sup>2</sup> and the codomain is still R<sup>2</sup>. </li>
										</blockquote>
									</ul>				
								</div>
							</ul>
							<br>
							At this point, the instructor should give students more time in small group work to determine what the entries of A are.  Note that the correct answer (according to the standard basis, which is left implied at the moment, is A=$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3 \end{bmatrix}$
						</blockquote>
					</ul>
				</div>



				<br><br>					

				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i4">Sharing solution approaches and the correct answer in Whole Class Discussion &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i4" ">
					
						<blockquote>						
							<p>Sharing solution approaches and the correct answer in Whole Class Discussion </p>
							 If the class had not determined that all points on the N will be thought of as the endpoint of a vector that emanates from a fixed origin before they engaged in the task, examination of past student work has revealed two common notational strategies: 
							<br><br>
							<ul>
								<li>Using vectors in R<sup>2</sup> in which the 3 portions of the N are the vectors (e.g., Group 1-2)</li>
								<li>Using vectors in R<sup>2 </sup>(or points in the x-y plane) in which the N is represented with vectors whose endpoint lay on the N with tips originating from the same point on the letter (corresponding to a fixed origin) (e.g., Group 3)</li>

							</ul>
							<br><br>
							To find the matrix A, students tend to either:
							<ul>
									<li>Set up two matrix equations, such as $\begin{bmatrix} a & b \\ c & d \end{bmatrix}$ $\begin{bmatrix} 2 \\ 0 \end{bmatrix}$ = $\begin{bmatrix} 2 \\ 0 \end{bmatrix}$ and $\begin{bmatrix} a & b \\ c & d \end{bmatrix}$ $\begin{bmatrix} 0 \\  3  \end{bmatrix}$ = $\begin{bmatrix} 1 \\ 4 \end{bmatrix}$, convert them into two systems of equations, and solve for a, b, c, and d.</li>
									<li>	Set up one matrix equation, such as $\begin{bmatrix} a & b \\ c & d \end{bmatrix}$  $\begin{bmatrix} 0 & 2 & 0 & 2\\ 0 & 0 & 3 & 3\end{bmatrix}$ = $\begin{bmatrix} 0 & 2 & 1 & 3\\ 0 & 0 & 4 & 4\end{bmatrix}$, convert it into a system of equations, and solve for a, b, c, and d. <li>
							</ul>
							<br>
							The instructor could have students present their solution techniques and final solution for A to the class.
							<br>
						</blockquote>
						</div>	

				<br><br>		
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i5">Defining “Linear Transformation” in whole class discussion &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i5" ">
					
						<blockquote>						
							<p>Defining “Linear Transformation” in whole class discussion </p>
							<br>
							The problem in Task 1 that students have been working on is an example of a special type of transformation encountered in linear algebra, and so it is worth pausing to introduce and define that special class of transformations. 
							<br><br>
							Two other reasons it is useful to define linear transformation here is (a) it can be used to show that any transformation that can be defined with a matrix is linear (and so we can use A(x+y)=Ax+Ay and A(cx)=cAx in calculations and derivations; and (b) it is utilized in proofs of important results (such as knowing how a basis is transformed is sufficient to know how a whole space is transformed).
							<br><br>
							<strong>Definition:</strong> A transformation T:R<sup>n</sup>→R<sup>m</sup> is called a linear transformation if it satisfies the following two properties: (1) T(x+y)=T(x)+T(y) for every x,y∈R<sup>n</sup>, and (2) T(cx)=cT(x) for every x∈R<sup>n</sup> and every c∈R.
							<br><br>
							<strong>NOTE:</strong> This definition assumes R as the field of scalars for the defined operations.
							<br><br>
							The instructor could point out that the students have seen examples of linear transformations, such as the derivative operator in Calculus: that is, (f+g)'=f'+g'.
							<br><br>
							A useful consequence of this definition is that the zero vector is always sent to the zero vector. Trying to prove why this would be true can be a good partner talk activity. Task 2 explores transformations of space at a more “global” level (rather than only one input-output pair at a time), so it is helpful to begin to hint that in a linear transformation, the zero vector is a sort of “anchor” that remains fixed and everything else is transformed around it. 
							<br><br>

							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t60">Example Partner Talk Task &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t60"">
									<ul style="list-style-type: none;">
										<blockquote style="background-color:#F8F8F8;">	
										Use the definition of linear transformation to prove that T(0)=0. That is, that under a 
										linear transformation, the zero vector in R^n has to map to the zero vector in R<sup>m</sup>.
										<br><br>
										Possible justifications: 
										<ul>
											<li>Because T is linear, we know T(cx)=cT(x) for every x∈R<sup>n</sup> and every c∈R. So choose c=0 and consider what happens: </li>
											<br>
											<ul>
												<li style="list-style-type: none;">
													T(cx)=T(0x)=T(0) because the scalar 0 times the vector x results in the zero vector in R<sup>n</sup>  for any vector x∈R<sup>n</sup>
												</li>
												<br>
												<li style="list-style-type: none;">
													cT(x)=0T(x)=0 	because T(x) is a vector in R<sup>m</sup>, and the scalar 0 times the vector T(x) results in the zero vector in R<sup>m</sup>  
												</li>
												<br>
												<li style="list-style-type: none;">
													&there4; T(0) = 0
												</li>
												<br>
											</ul>

											<li>Because T is linear, we know T(x+y)=T(x)+T(y) for every x, y∈R<sup>n</sup>. So choose the vector y=-x and consider what happens:</li>
											<br>
											<ul>
												<li style="list-style-type: none;">
													T(x+y)=T(x+(-x))=T(x-x)=T(0) 
												</li><br>
												<li style="list-style-type: none;">
													T(x)+T(y)=T(x)+T(-x)=T(x)-T(x)=0
												</li><br>
												<li style="list-style-type: none;">
													&there4; T(0) = 0
												</li><br>

											</ul>	
										</ul>
										</blockquote>
									</ul>				
								</div>
							</ul>

							<br>
							It is beneficial to provide some time for students to explore examples that are and are not linear. This also involves needed practice in knowing what counts as evidence in either case (namely, that a transformation that is not linear needs to be shown to fail one of the two properties or T(0)≠0, whereas a transformation that is linear needs to be shown to satisfy both properties from the definition of linearity). 
							<br><br>
							Below are a few possible examples.  The instructor should choose which examples make sense for the class level, how many to do, how much time to spend in class discussing them, etc. 
							<br>

							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t300">Example Discussion Questions:  &raquo;</a>
								<br>
								<div class="accordion-body collapse" id="t300">
									<ul style="list-style-type:none;">
									<blockquote style="background-color:#F8F8F8;">
									
									Determine if the following transformations are linear or not: 
									
										<li>(a) T:R→R where T(x)=x<sup>2</sup></li>
										<li>(b) T:R→R where T(x)=4x</li>
										<li>(c) T:R→R where T(x)=x+3</li>
										<li>(d) T:R<sup>2</sup>→R<sup>2</sup> where T(x<sub>1</sub>,x<sub>2</sub> )=(3x<sub>1</sub>,x<sub>1</sub>+2x<sub>2</sub>)</li>
										<li>(e) T:R<sup>2</sup>→R<sup>2</sup>where T(x<sub>1</sub>,x<sub>2</sub> )=(x<sub>1</sub>,2x<sub>2</sub>-1)</li>
										<li>(f) T:R<sup>2</sup>→R<sup>2</sup> where T is defined by T(x)=Ax, and A=$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3 \end{bmatrix}$.</li>
										<li>(g) T:R<sup>2</sup>→R<sup>2</sup> where T is defined by T(x)=Ax, and A=$\begin{bmatrix} a & b \\ c & d \end{bmatrix}$,a,b,c,d∈R.</li>
									</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
							Of these examples, (a), (c), and (e) are not linear.  Students most likely will be surprised that example (c) is not linear because the graph of T(x)=x+3 “looks like a line.” Letting students discuss this example, and its similarity to example (e), is beneficial to their conceptual understanding of linear transformation.
							<br><br>
							Example (g) may want to be saved for homework. If the class is advanced and/or proof-oriented, the example “prove that any T:R<sup>n</sup>→R<sup>m</sup> that can be defined by an m x n matrix A is linear” may be given for homework of small group work.
							<br><br>
							Example (f) is the matrix that represents the “Italicizing N” transformation.  That can serve as a nice example of how to use the definition to prove linearity: 
							<ul>
								<li>
									$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3 \end{bmatrix}$
									($\begin{bmatrix} x1 \\ x2 \end{bmatrix}$ +
									$\begin{bmatrix} y1 \\ y2 \end{bmatrix}$ ) =
									$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3 \end{bmatrix}$
									$\begin{bmatrix} x1 + y1 \\ x2 + y2 \end{bmatrix}$

								</li>
							</ul>


						</blockquote>
				</div>	


							<ul>
							<a class="btn btn-warning center" data-toggle="collapse" data-target="#t8">Example Discussion Question &raquo;</a>
							<br>
							<div class="accordion-body collapse" id = "t8" >
								<ul>
									<blockquote style="background-color:#F8F8F8;">
										<li>Is riding the hover board forward for 30 hours and the magic carpet forward for 17 hours the only way to get to Old Man Gauss?
										</li>
										<br>							
										<ul>
											<li>Algebraically, some students might respond to this question in a manner similar to the following: "We just solved a system of equations in two equations and two unknowns, and we found one solution. So that solution has to be the only one. Maybe if the system was different, we would have found no solutions or infinitely many, but that didn't happen here."  That connection to their experience with systems of equations in high school algebra is appropriate and useful here. </li>
											<li>Geometrically, this question leads the class to discuss what counts as a "different way" to Gauss. For instance, do the two different sides of the parallelogram (the sketch representing both $30\begin{bmatrix} 3 \\ 1 \end{bmatrix}+17\begin{bmatrix} 1 \\ 2 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$ and $17\begin{bmatrix} 1 \\ 2 \end{bmatrix}+30\begin{bmatrix} 3 \\ 1 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$ or a "staircase" sketch (e.g., the sketch representing the equation $10\begin{bmatrix} 1 \\ 2 \end{bmatrix}+9\begin{bmatrix} 3 \\ 1 \end{bmatrix}+7\begin{bmatrix} 1 \\ 2 \end{bmatrix}+21\begin{bmatrix} 3 \\ 1 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$ represent the same or different solutions? The underlying sentiment that is important to bring out is that even if they seem like different "paths", they all represent the same solution because they all lead to the same solution of $(30, 17)$. So one could say they are different paths to the same solution, and thus, we can say there is only one solution to the problem. One could use the term "commutativity of vector addition" here if it is appropriate for your class, but it is not essential. </li>
										</ul>
									</blockquote>
								</ul>
							</div>
							</ul>
							<br>

							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t9">Example Discussion Question &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t9" style="background-color:#F8F8F8;">
									<ul>
										<blockquote>
											<li>Is it possible to reach Old Man Gauss with only one mode of transportation?<br>
												 If so, provide a solution and sketch of the problem and solution.<br>
													 If not, develop a justification for why it is not possible.
											</li>
											<br>							
											<ul>
												<li>In the process of answering the question on Handout 1, many students may have already thought about this Example Discussion Question. </li>
												<li>Geometrically one goal of this question is to have students practice justification, explaining to their peers in class discussion, and questioning each other's justifications. This question is more justification-oriented than the main problem (determining how to get to Gauss) because it promotes different ways to support and present an argument.</li>
												<li>Expect both geometric (e.g., the travel paths would miss Gauss) and algebraic (e.g., the ratios are different or can't find one $x$, $y$ for both equations).</li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							</blockquote>
						</ul>
						</blockquote>
					</ul>
				</div>
		</ul>	
		
			<ul>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#studentthinkingexamplequestion">Student Thinking, Example Discussion Question &raquo;</a>
				<div class="accordion-body collapse" id = "studentthinkingexamplequestion">
					<ul>				
					<blockquote>
						Examples of student responses to the question: Is it possible to reach Old Man Gauss with only one mode of transportation? If so, provide a solution and sketch of the problem and solution. If not, develop a justification for why it is not possible					<br><br>
						<div class="paragraphs">
							<div class="row">
								<div class="span4">
									<div class="clearfix content-heading">
										<img class="pull-left" src="img/u1t1/s1.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										This group determined that the point-slope form of the line that connects the origin to Old Man Gauss is $y = 1.671x$. They also determined that the point-slope form of the lines that have the same slope as the vector representing the motion of the magic carpet and the hoverboard are $y = 2x$ and $y = (1/3)x$, respectively. The group sketched these lines and concluded that the lines only intersect at $(0, 0)$.									
										<br><br>
										<img class="pull-right" src="img/u1t1/s2.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										This group claimed that you could not reach Gauss with only one mode because "$\begin{bmatrix} 3 \\ 1 \end{bmatrix}$ is not a divisor of $\begin{bmatrix} 107 \\ 64 \end{bmatrix}$," and that the same was true for $\begin{bmatrix} 1 \\ 2 \end{bmatrix}$. Algebraically, they showed that for $ t \begin{bmatrix} 3 \\ 1 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$, whatever t-value worked for the top equation would not satisfy the bottom one. This demonstrates 1 of the 4 cases. Their claim, "no matter if you can reach the x coord[inate] of Gauss cabin @ 1 time & y coord[inate] @ 1 time it is never the same time. $\therefore$ You cannot reach the cabin," generalizes beyond that one case.									<br><br>
										<img class="pull-left" src="img/u1t1/s3.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										This group's approach seems similar to the previous one. They first found that $107 \div 3=35\frac{2}{3}$ and wrote, "didn't divide evenly." This is not further explained, but the calculations "$64 \times 3 = 192$" and "$64 \times 1 = 64$" most likely were used to support that claim. For the magic carpet, the group found that $64 \div 2=32$ (so the amount of time on the hover board would be 32 hours), but that $1 \times 32 = 32$ not $107$; thus, a rider "did not make the trip North" by using only the magic carpet for 32 hrs. The group did a similar calculation (but no explanation) with the magic carpet dealing with 107 as primary. 									<br><br>
										<img class="pull-right" src="img/u1t1/s4.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										This group's justification for the claim that you cannot reach Gauss states explicitly that there exists no real number $c$ such that $c \begin{bmatrix} 3 \\ 1 \end{bmatrix} = \begin{bmatrix} 107 \\ 64 \end{bmatrix}$ or $c\begin{bmatrix} 1 \\ 2 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$. The group did not include algebraic justification to support how they knew this was true.								</div>
		  
								</div>
							</div>
						</div>
					</blockquote>
				</ul>
			</ul>
		</div>
	</section>

      <hr>
	<footer>
		<ul class="list-inline text-right">
			<li><p>&copy; IOLA Team 2013</p></li>
			<li><a href="team.php">Contact Us</a></li>
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
	$('#u1').collapse("hide"); <!--Auto-open Unit 1 sidebar link -->
	}
	
	$('.carousel').carousel(
		{
		pause: true,
		interval: false
		});
	</script>
  </body>
</html>
