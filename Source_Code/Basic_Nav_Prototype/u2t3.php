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
	
        <h1 class="text-center">Unit 2: Italicizing N Task Sequence</h1>
		</div>
				<!-- Begin expandall section -->
		<div class="jumbotron">

		<section id="accordion">
			<a href="#_" class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion" id="summary">		  

		<h2 class="text">Task 3: Pat and Jamie
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
		</h2>
		
			<ul class="collapse" id = "t1" >
				<blockquote>
				<p class="lead" >Goal is to To interpret the product of matrices as a composition of linear transformations</p>
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
			</ul>
		<br>
		
		<ul>
			<a class="btn btn-gray printLesson" id="printt" onclick="window.print();" >Print Lesson</a>
		</ul>
		

<ul>
			<a class="btn btn-info center" data-toggle="collapse" data-target="#handout1">Handout 1: Pat and Jamie &raquo;</a>
			<div class="accordion-body collapse" id = "handout1">
				<ul>
					<blockquote>
						<object data="media/unit2/handouts/u2_handout3.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit2/handouts/u2_handout3.pdf">click here to download the handout.</a></p>  
						</object>					
					</blockquote>
				</ul>
			</div>
		</ul>

	

		<ul>
			<a class="btn btn-success center" id="contentInfo" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
			<div class="accordion-body collapse" id = "goalsrationale">
				<ul>
					<blockquote>
						<p class="lead">Goals</p>						
						The main goal of the problem on Handout 3 – Pat and Jamie – is to help students come to interpret matrix multiplication as a composition of linear transformations.  
						<br><br>
						<p class="lead">Rationale</p>
						This task sets up a scenario in which students must first decide if the approach of two “fellow students,” Pat and Jamie, is valid and, if so, determine the matrices that represent the transformation via Pat and Jamie’s approach. Note that in the problem statement the order in which Pat and Jamie transform the N is not vague (they make it taller first and then italicize it), but the way in which to computationally accomplish this is purposefully left vague. It is anticipated that students will struggle with how to combine and symbolize one transformation followed by another.  This requires students to coordinate input and output vectors across a sequence of transformation, and to relate that coordination to the order in which the sequence of corresponding matrices is multiplied.
						<br><br>					
						The Pat and Jamie task sets the stage for a shift in students’ mathematical activity and goals; students are asked to combine matrices that define transformations in addition to determining what those matrices are. This is a shift from the goal of constructing a single transformation matrix by coordinating sets of input and output vectors, such as in the Italicizing N task.
					</blockquote>
					</ul>				
			</div>
		</ul>

		<ul>
		<a class="btn btn-success center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
			<div class="accordion-body collapse"  id = "studentthinking">
				<ul>
					<blockquote>
											<!-- Carousel
						================================================== -->
						<div id="myCarousel" class="carousel slide" style="height:600px">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u2t3/1.png" style="height:430px" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 1</em></p>
									Group 1 correctly found the matrix that stretches the 12-pt font to 16-pt font, but incorrectly found Pat and Jamie’s  “italicize” matrix. Note that the matrix $\begin{bmatrix} 1 & 1/3 \\ 0 & 1\end{bmatrix}$ italicizes the original 12-pt font N, not the taller 16-pt font N. Having found these two matrices, the group was unable combine them in a way that would yield matrix A from Task 1.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t3/2.png"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 2</em></p>
									This group found the same matrices as Group 1, but also realized that matrix multiplication would yield A. The students did realize that the order in which you multiply the matrices does make a difference, but did not realize that their matrices do not transform N in the same way that Pat and Jamie did. Instead, Group 2 found matrices that lean (or tilt) N and then make N bigger. It is unclear whether these students are aware of this.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t3/3.png" style="height:430px" alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 3</em></p>
									This group correctly found the two matrices to “make N bigger” and “italicize N” and also multiplied them in the correct order to yield the matrix A. Notice, though, that the same matrix produced by Groups 1 and 2 is crossed out in the upper left-hand corner of their whiteboard. We also see from their work that the students found first attempted to add the matrices, then multiplied them in the incorrect order before finally multiplying them in the correct order. From this, it is unclear whether the students understood why this using this operation in this order produced a correct solution. 
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t3/4.png" style="height:400px" alt="Student thinking 4">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Groups 4 and 5</em></p>
									Group 4’s work (below) highlights how he students found the two transformations and the correct order of multiplication. The students also wrote “CB = A which corresponds to bigger first and leaning second.” Group 5’s work (left) highlights a bit of the compositional nature of the task, where the “(B(N))” seems similar to the notion of “f(x),” with the matrix C then acting on the output of B(N). Note that both of these responses only begin to hint at the compositional nature of the two transformations, with the output of the transformation defined by B becoming the input for that defined by C. It is the role of the teacher to facilitate explicit discussion of this issue. (Note: These students had agreed that the “lean” matrix should be called C.)
								</div>
							  </div>
							</div>


							<div class="item">
							  <img src="img/u2t3/5.png" style="height:400px; width:100%" alt="Student thinking 5">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Groups 4 and 5 (Second Image)</em></p>
									Group 4’s work (below) highlights how he students found the two transformations and the correct order of multiplication. The students also wrote “CB = A which corresponds to bigger first and leaning second.” Group 5’s work (left) highlights a bit of the compositional nature of the task, where the “(B(N))” seems similar to the notion of “f(x),” with the matrix C then acting on the output of B(N). Note that both of these responses only begin to hint at the compositional nature of the two transformations, with the output of the transformation defined by B becoming the input for that defined by C. It is the role of the teacher to facilitate explicit discussion of this issue. (Note: These students had agreed that the “lean” matrix should be called C.)
								</div>
							  </div>
							</div>
							
						</div>
							

						  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>  <!-- /.carousel -->					

						<!-- NON-CAROUSEL STUDENT THINKING: MAY BE BETTER SUITED FOR MOBILE-->
												
					</blockquote>
				</ul>
			</div>
		</ul> 



		
		<ul>
		<a class="btn btn-success center" data-toggle="collapse" data-target="#implementation">Implementation &raquo;</a>
				<div class="accordion-body collapse" id = "implementation">	
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				This task is meant to be a natural follow up to the Italicizing N task in Handout 1.  As such, students should be able to “jump in” with respect to understanding what Handout 2 is asking them to investigate.  This does not mean that the correct answer is obvious to students, but rather that the question connects to their previous experience.  
				<br><br>				
					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">Example "Getting Started" Prompt: &raquo;</a>									
					<div class="accordion-body collapse" id = "t6">
						<blockquote style="background-color:#F8F8F8;">
						So we just determined the matrix A that would perform that one N, which we treated as if it was in the first quadrant.  
						<br><br>
						In another class, I have some students that wonder what would happen to the letter “E” placed in various locations under that transformation matrix.
						<br><br>
						The students can’t decide. On this handout I have 4 of different answers that students believe represent how the “E’s” would be transformed. We need to help them decide who is right.	
						</blockquote>
					</div>				
				<br><br>
				
			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i2">Working In Small Groups&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i2">
			<ul>
			<blockquote>
				<p>Working in small groups </p>	
				The instructor should allow students to work on this problem in their small groups. This task should not take students too long, so 5-8 minutes in small group should be sufficient.
				<br><br>
				Choice C is the correct answer to the task on Handout 2. The difference between choice B and C is that choice B does not account for the vertical stretch of the “empty space” between the N and the E above it, whereas choice C does. Choice A incorrectly keeps the bottom of the E above the N “anchored,” and choice D incorrectly has the E in the third quadrant skew incorrectly.
				</blockquote>
			</ul>
			</div>

			<br>
			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i22">Sharing Responses in Whole Class Discussion&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i22">
			<ul>
			<blockquote>
				<p>Sharing Responses in Whole Class Discussion</p>	
				This task presents a nice opportunity for students to share their ways of thinking with the whole class. As in the work by Student 4, 5, and 6 in the student thinking section, not all students realize Choice C is the correct answer.
				<br><br>
				<ul style="list-style-type: none;">
					<li><b>Choice A</b></li>					
					Students who choose this tend state that the transformation doesn’t have a horizontal affect. This reasoning possibly arises from a conflation with the preservation of length in the horizontal direction; that is, that if the horizontal lengths of the letters were 2 units long in the original image they are still 2 units long in the transformed image. An instructor may choose to have a student who chose Choice A justify it in class (which would most likely lead to a debate). An instructor may alternatively ask a student who did not choose A explain how he/she knew that choice A was incorrect.
					<br><br>
					<li><b>Choice D</b></li>
					Choice D is not commonly chosen. It was created as a distractor because it seems to “lean” in the same manner as the N. One response that students give for why it is not correct is that (0,0)was mapped to (1,0), which they know is not possible in a linear transformation.
					<br><br>
					<li><b>Choice B</b></li>
					Choice B is the most common incorrect response. Students who choose this tend to not consider how the vertical stretch in the transformation affects the “empty space” between the N and the E above it. They are, however, at least implicitly, realizing that the transformation affects the whole plane, not just the N.
					<br><br>
					<li><b>Choice C</b></li>
					This is the correct choice. Students who choose this tend to reason that the whole space is affects by the transformation and notice the small difference in the placement of the upper E between choices B and C. Many students, such as Student 1 in the Student Thinking section, actually compute Ax for a set of x vectors from that E, such as (0,5) and (2,5). This helps them to see that vertical stretching of the plane increased the vertical “empty space” between the N and the E.
				</ul>
				<br>
				We recommend that the instructor have students share their reasoning and lead the class in coming to a consensus that Choice C is correct. We also recommend a mini-lecture in which the instructor “tells” the students that, consistent with what this task was demonstrating, linear transformations affect the entire domain in a consistent and predictable manner.				
				</blockquote>
			</ul>
			</div>
			<br>

			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i23">Exploring additional linear transformations&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i23">
			<ul>
			<blockquote>
				<p>Exploring additional linear transformations</p>	
				We recommend that instructors allow the students to explore additional linear transformations beyond the one highlighted in the Italicizing N tasks. We recommend some coverage of the standard linear transformations from R2 to R2: rotations, horizontal and vertical stretches and dilations, and skews.Some may be addressed in class, whereas others may be relegated to homework.
				<br>
				One task that can assist in transitioning to considering other transformations is the “Smiley Face” task. An editable version of this is found at the end of the student pages section.
				<br><br>
				<center><img src="img/u2t2/smiley_face.jpg" alt="smileyface"></center>
				<br>
				The Smiley Face problem provides students with an image in which the input / output vectors may be harder to determine (for instance, (2,0) is not on the smiley face). The question itself asks students to determine what happens to the point (3,3), which is not on the smiley face. Most students can answer correctly (choice D) without problem.
				<br><br>
				A nice follow-up is to ask students to determine the matrix that represents this transformation of stretching by 2 horizontally and by 3 vertically:
				<br><br>
					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t61">Example follow-up question to the “Smiley Face” Transformation: &raquo;</a>									
					<div class="accordion-body collapse" id = "t61">
						<blockquote style="background-color:#F8F8F8;">
						The problem states that a group of students found the matrix A that transforms the smiley face into one twice as wide and three times as tall. We’ve discussed how this matrix would have that same effect on the entire plane. What is that <b>matrix A</b>?
						<br>
						This question is beneficial because it gives students additional practice in determining a matrix based on how input-output pairs are coordinated.
						<ul >
							<li style="padding-bottom:30px;">
							 	Some students pick specific input-output pairs to determine A=$\begin{bmatrix} a & b \\ c & d \end{bmatrix}$, such as 
								$\begin{bmatrix} a & b \\ c & d \end{bmatrix}$$\begin{bmatrix} 1 \\ 0\end{bmatrix}$ 
								=$\begin{bmatrix} a & b \\ c & d \end{bmatrix}$$\begin{bmatrix} 1 \\ 2\end{bmatrix}$ 
								=$\begin{bmatrix} 2 \\ 6\end{bmatrix}$ , correctly yielding $\begin{bmatrix} 2 & 0 \\ 0 & 3 \end{bmatrix}$							
							</li>
							<li>
								Other students use a generic vector and reason that because the transformation stretches things twice as wide and three times as tall, every vector  $\begin{bmatrix} x \\ y \end{bmatrix}$ is transformed to $\begin{bmatrix} 2x \\ 2y \end{bmatrix}$, The only matrix that makes the equation
								$\begin{bmatrix} a & b \\ c & d \end{bmatrix}$$\begin{bmatrix} x \\ y \end{bmatrix}$ = $\begin{bmatrix} 2x \\ 2y \end{bmatrix}$ for every x and y value is A =
								 $\begin{bmatrix} 2 & 0 \\ 0 & 3 \end{bmatrix}$ (see the student thinking page).
							</li>
						</ul>
						</blockquote>
					</div>
					</div>	
					<br>		
			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i24">Exploring Transformation Matrices for Common Geometric Transformations&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i24">
			<ul>
			<blockquote>
				<p>Exploring Transformation Matrices for Common Geometric Transformations</p>
				<br>	
				The Smiley Face problem can serve as a transition into considering transformation matrices for common geometric transformations, namely (a) Horizontal Stretch / Dilation, (b) Vertical Stretch / Dilation (c) Skew, (d) Rotation, and (e) Reflection. The instructor could lead a discussion in which the class explores why a matrix of the form $\begin{bmatrix} k & 0 \\ 0 & 1\end{bmatrix}$ 
				corresponds to a horizontal stretch transformation for k > 1, and $\begin{bmatrix} 1 & 0 \\ 0 & k\end{bmatrix}$ corresponds to a vertical stretch transformation for k > 1.
				<br>
				<br>
				We see three main ways for instructors to pursue exploring these with their students. Instructors should make their decision based on their own learning goals, technological resources, and amount of time to dedicate during class. As such, much of these could be relegated to homework if so desired. Some examples of past homework problems are given in the next section.
				<br>
				<ul style="padding-left:30px" >
					<li>Instructors could verbally describe transformations and ask students to determine the matrix that represents that transformation.</li>
					<li >Instructors could provide a matrix and ask students to describe in words how the space would be transformed graphically</li>
					<li >Instructors could point students towards applets that aid them in exploring how the various entries in the matrix affect the transformation graphically.</li>
				</ul>
				<br>
				We conclude with examples of each of these three avenues for exploration.
				<br><br>
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t63">Example questions for: Find the matrix for the given transformation &raquo;</a>					
										
					<div class="accordion-body collapse" id = "t63">
						<blockquote style="background-color:#F8F8F8;">
							<ul>
							<li>Find a matrix for the transformation that reflects all vectors in R<sup>2</sup> over y-axis</li><li>Find a matrix for the transformation that rotates all vectors in R<sup>2</sup>by degrees counterclockwise.</li>
							</ul>
						</blockquote>
					</div>
					<br>
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t64">Example questions for: Describe the transformation for the given matrix &raquo;</a>				
								
					<div class="accordion-body collapse" id = "t64">
						<blockquote style="background-color:#F8F8F8;">
							<ul>
							<li>Describe the geometric affect of the transformation defined by
								A = $\begin{bmatrix} 1 & 0 \\ 2 & 1\end{bmatrix}$
							</li>
							<li>Describe the geometric affect of the transformation defined by
								A = $\begin{bmatrix} 1 & -4/5 \\ 0 & 1\end{bmatrix}$
							</li>
							</ul>
						</blockquote>
					</div>
					<br>


					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t65">Example applets for: Graphical Explorations with Technology&raquo;</a>				
								
					<div class="accordion-body collapse" id = "t65">
						<blockquote style="background-color:#F8F8F8;">
						We recommend instructors make use of the free Wolfram Demonstrations Project to aid in exploring transformations graphically. 
						<br><br>
						This website contains thousands of free demonstrations:<a href="http://demonstrations.wolfram.com/">http://demonstrations.wolfram.com/</a> 
						Users can explore the demonstrations in a limited way on the website but will have more freedom from the downloaded version (that needs an installed player, which can be downloaded for free at: <a href="http://www.wolfram.com/products/player/">http://www.wolfram.com/products/player/</a>
						<br><br>
						The demonstrations we have chosen as useful are below.  Of course, there may be others that instructors find useful or interesting instead. 
						<br><br>
						This demonstration keeps an original letter “F” in blue fixed and allows the user to change the values in the transformation matrix via 4 sliders. The resulting transformed “F” is graphed in red.<a href="http://demonstrations.wolfram.com/MatrixTransformationsF/">http://demonstrations.wolfram.com/MatrixTransformationsF/</a>
						<br><br>
						<img src = "img/u2t2/matrix_F.png" alt="matrix_F">
						<br><br><br>
						This demonstration is similar to the one above except that the original “circle” is in all four quadrants, rather than only quadrant one. Manipulating and exploring this figure and its graphical image may provide further insight that the “F” demonstration does not facilitate. <a href="http://demonstrations.wolfram.com/MatrixTransformation/">http://demonstrations.wolfram.com/MatrixTransformation/</a>
						<br><br>
						<img src = "img/u2t2/matrix.png" alt="matrix">
						<br><br><br>
						This demonstration is labeled as being about determinants. It also, however, allows a user to see how the unit square and the unit cube are transformed when the entries of the transformation matrix (according to the standard basis) are changed.  We particularly like that this allows for exploration in 3 dimensions
						<a href="http://demonstrations.wolfram.com/DeterminantsSeenGeometrically/">http://demonstrations.wolfram.com/DeterminantsSeenGeometrically/</a>
						<br><br>
						<img src = "img/u2t2/determinant.png" alt="determinant">
						<br><br>
						<img src = "img/u2t2/determinant2.png" alt="determinant2">
						</blockquote>
					</div>	
					<a class="btn btn-blue center" data-toggle="collapse" data-target="#i29">Suggestions for homework &raquo;</a>
					<br><br>
					<div class="accordion-body collapse" id = "i29">
						Below are problems we have used in the past for homework.  Instructors should feel free to use any subset of these that they feel would be beneficial to their students.
						<br> 
						<b>NOTE: #1-7 could be given after Task 1 or after Task 2.</b>
						<br>
						<blockquote>
							<ol>
							<li style="padding-bottom:20px">
								 Let A=$\begin{bmatrix}3 &0 \\ 0 & -2\end{bmatrix}$ and define T:&#x211d;<sup>2</sup>→ &#x211d;<sup>2</sup> by T(x) = Ax. Find the images under T of <b>u</b> = $\begin{bmatrix}3 \\ -1\end{bmatrix}$, <b>v</b>=$\begin{bmatrix}0 \\ 1.5\end{bmatrix}$, and the vector (u + v). Also sketch the three vectors before and after the transformation.  Write 1-2 sentences that explain how you found your answers/knew they were right and why the sketch makes sense.	
							</li>
							<li style="padding-bottom:20px">
								Let A=$\begin{bmatrix} 1 & -5 & -7 \\ -3 & 7 &5\end{bmatrix}$ and define T:&#x211d;<sup>2</sup>→ &#x211d;<sup>3</sup> by T(x) = Ax.
								<ul>
									<li style="list-style-type:none; padding-bottom:20px">
										a. Find the image under T of <b>u</b> = 
										$\begin{bmatrix} 2\\ 1 \\ -1 \end{bmatrix}$
									</li>

									<li style="list-style-type:none; padding-bottom:20px">
										b. Find a vector x whose image under T is <b>b</b> =
										$\begin{bmatrix} -12 \\ 12\end{bmatrix}$
									</li>
								</ul>
							</li>
							<li style="padding-bottom:20px">
								[If not done in class] Suppose that a transformation T: &#x211d;<sup>2</sup>→ &#x211d;<sup>2</sup> is defined by the matrix = $\begin{bmatrix}a & b \\ c & c\end{bmatrix}$. In orde to do this, you must show that the definition of linear transformation is satisfied with this matrix A. To help you get started, let <b>x</b> = $\begin{bmatrix} x_{1}\\ x_{2}\end{bmatrix}$ and <b>y</b> = $\begin{bmatrix}y_{1}\\ y_{2}\end{bmatrix}$, and c be a real number. You need to algebraically show both that A(<b>x + y</b>) = A<b>x</b> + A<b>y</b> and A(c<b>x</b>) = cA(<b>x</b>).
							</li>
							<li style="padding-bottom:20px">
								Show that the transformation T defined by T($\begin{bmatrix} x_{1}\\ x_{2}\end{bmatrix}$) = $\begin{bmatrix} x_{1} + 5\\ x_{2}\end{bmatrix}$ is not a linear transformation.
							</li>
							<li style="padding-bottom:20px">
								TRUE OR FALSE: (Assume that the product AB is defined). If the columns of B are linearly dependent, then so are the columns of AB. If TRUE, provide a justification. If FALSE, provide a counterexample.
							</li>
							<li style="padding-bottom:20px">
								After class, two linear algebra students start talking about linear transformations and the letter “N.” One of the students suggested translation (shifting up) as another linear transformation that could be done to the letter “N,” like the following:
								<br><br>
								 <img src="img/u2t2/hw_6.png" alt="hw_6">
								 <br>
								 The other student disagreed, stating that shifting the “N” up like this is NOT an example of a linear transformation.  Which student is right? Why?
							</li>
							<li style="padding-bottom:20px">
								Consider the image given below and the transformation matrix C = $\begin{bmatrix} 2 & 0 \\ 0 & -1.5\end{bmatrix}$

								<ol type="a">
									<li>Sketch what will happen to the image under the transformation</li>
									<li>Describe in words what will happen to the image under the transformation</li>
									<li>Describe how you determined that happened. (What, if any, calculations did you do? Did you make a prediction? How did you know you were right? etc.)</li>
								</ol>
							</li>
							<li style="padding-bottom:20px">
								Assume that T is a linear transformation and that e<b><sub>1</sub></b> = $\begin{bmatrix}1 & 0\end{bmatrix}$ and e<b><sub>2</sub></b> = $\begin{bmatrix}0 & 1\end{bmatrix}$. For each part, find the standard matrix A for T, and draw the image of the "half=shaded unit square" (shown below) under the given transformation:
								<br><br>
								<ol type="a">
									<li>T:&#x211d;<sup>2</sup>→ &#x211d;<sup>2</sup> rotates points (about the origin) through &Pi;/4 radians (clockwise</li>
									<li>T:T:&#x211d;<sup>2</sup>→ &#x211d;<sup>2</sup> is a vertical shear that maps <b>e<sub>1</sub></b> into <b>e<sub>1</sub> - e<sub>2</sub></b> but leaves the vector <b>e<sub>2</sub></b> unchanged</li>
									<li>T:T:&#x211d;<sup>2</sup>→ &#x211d;<sup>2</sup> first reflects points across the vertical axis and then rotates points &Pi;/2 radians (counterclockwise) </li>
									<br>
									 <img src="img/u2t2/hw_8.png" alt="hw_8">
								 <br>
								</ol>

							</li>


							</ol>
						</blockquote>
					</div>



			</blockquote>
			</ul>
			</div>


			</blockquote>
			</ul>
			</div>






			</blockquote>
			</div>
		</ul>
			
	
	







      <hr>
	<footer>
		<ul class="list-inline text-right">
			<li><p>&copy; IOLA Team 2013</p></li>
			<li><a href="team.php">Contact Us</a></li>
		</ul>
	</footer>
	</section>
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
