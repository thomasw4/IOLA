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

    <title>IOLA Unit 1 Task 1</title>

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
		<div id="sidr">
			<?php include 'sidebar.php' ?>
		</div>
	
        <h1 class="text-center">Unit 1: Magic Carpet Ride</h1>
		</div>
				<!-- Begin expandall section -->
		<div class="jumbotron">

		<section id="accordion">
			<a href="#_" class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion" id="summary">		  

		<h2 class="text">Task 1: The Carpet Ride Problem
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
		</h2>
		
			<ul class="collapse" id = "t1" >
				<blockquote>
				<p class="lead" >Goal is to develop students' familiarity with the language, notation, and graphical representations for linear combinations of vectors (and connections to linear systems).</p>
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
		<br>
		
		<ul>
			<a class="btn btn-gray center" id="printt" onclick="window.print();" >Print Lesson</a>
		</ul>
		
		<ul>
			<a class="btn btn-info center" data-toggle="collapse" data-target="#handout1">Handout 1: The Carpet Ride Problem &raquo;</a>
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
			<a class="btn btn-success center" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
			<div class="accordion-body collapse" id = "goalsrationale">
				<ul>
					<blockquote>
						<p class="lead">Goals</p>
						<ul>
							<li>Students' goal on Handout 1 - <a href="#handout">The Carpet Ride Problem</a> - is to determine if it is possible to reach Old Man Gauss with the two given modes of transportation. </li>
							<li>More generally, the goal is to develop students' familiarity with the language, notation, and graphical representations for linear combinations of vectors (and connections to systems of equations).</li>
							<li>An implicit goal for Problem 1 is to provide an opportunity for students to conceptualize and work with linear combination as a mathematical object. This will help students' success in Task 2, when they are asked to consider the collection of all possible places Gauss could live. This sets them up well for the definition of span - the set of all possible linear combinations of a set of vectors.</li>
						</ul>
						<br>
						<p>Rationale</p>
						<ul>
							<li>The wording of the Carpet Ride Problem is intended to be clear and unambiguous but also allow for multiple solution strategies (algebraic, geometric, etc.).</li>
							<li>We chose to have Gauss live at $\begin{bmatrix} 107 \\ 64 \end{bmatrix}$ because the solution to $a\begin{bmatrix} 3 \\ 1 \end{bmatrix} + b\begin{bmatrix} 1 \\ 2 \end{bmatrix} = \begin{bmatrix} 107 \\ 64 \end{bmatrix}$ (or the equivalent system of equations) is (a) not immediately obvious, (b) cannot be easily guessed, and (c) is small enough in magnitude that students could graph if they so choose.</li>
						</ul>
					</blockquote>
				</ul>
			</div>
		</ul>

		<ul>
		<a class="btn btn-success center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
			<div class="accordion-body collapse" id = "studentthinking">
				<ul>
					<blockquote>
						It is not immediately obvious to students that Old Man Gauss can be reached by riding the magic carpet forward for 17 hours and the hover board forward for 30 hours, so there is a substantial amount of mathematical work for students to do just with this initial task.  Below are 6 examples of student work.  
						<br><br>

						<!-- Carousel
						================================================== -->
						<div id="myCarousel" class="carousel slide">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u1t1/1.png" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Guess and check</em> method: (1/6)</p>
									This group began by using the hoverboard 10 hours at a time. After iterating this 10-hour journey three times and recognizing that this got them to a location of 90 miles E and 30 units N, they determined that riding the magic carpet for 17 additional hours would allow them to arrive at their desired destination of 107 miles E and 64 miles N.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t1/2.jpg"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Guess and check via vector weighting method:</em>  (2/6)</p>
									This group wrote a vector equation (but with 'fraction-like' notation). They determined the weights that each vector would need so the East and North components would sum to 107 and 64, respectively. They included a graphical representation where the weighted vectors are depicted tip-to-tail.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t1/3.png"/ alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Systems of equations</em> method: (3/6)</p>
									This group defined variables ($t1$ and $t2$) for the amount of time spent on each mode of transportation and represented the problem using a system of equations. They used elimination to solve the system and drew a diagram to indicate the journey corresponding to their solution. In their diagram they used right triangles to illustrate the component parts of each vector that made up their journey to Gauss's cabin and included a dashed line to depict the resultant vector. 																	</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t1/4.png"/ alt="Student thinking 4">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Vector equation becomes a system</em> method:  (4/6)</p>
									This group began by representing the problem using a vector equation. They rewrote the vector equation as a system of equations, which they solved. Finally, they depicted the journey corresponding to their solution with vectors drawn tip-to-tail. They also included a depiction of the resultant vector.									
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t1/5.jpg"/ alt="Student thinking 5">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Noticing <em>net times</em>:  (5/6)</p>
									This group's made use of a vector equation becomes a systems of equation approach.  They summarized their conclusion by stating, Solution: Use H. Board for 30 hrs and F. Carpet for 17 hrs (these are net times). The mention of the solution representing net time can be leveraged during whole class discussion to a conversation about unique solutions.									
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t1/6.jpg"/ alt="Student thinking 6">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Two different paths</em>:  (6/6)</p>
									This group makes use of horizontal notation for vectors, a practice students may be familiar with from previous calculus classes. Additionally, the sketch of the problem scenario is color-coded, with red notating the hover board's travel and purple notating the magic carpet's travel.  The group sketch both sides of a parallelogram, representing that one could ride the hover board first and then the magic carpet (the lower half of the parallelogram) or vice versa (the upper half). This could be leveraged in a discussion about unique solutions.									
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
										<img class="pull-left" src="img/u1t1/1.png"/ height="300" width="300" hspace="20">
										<br><br>
										<em>Guess and check</em> method:  This group began by using the hoverboard 10 hours at a time. After iterating this 10-hour journey three times and recognizing that this got them to a location of 90 miles E and 30 units N, they determined that riding the magic carpet for 17 additional hours would allow them to arrive at their desired destination of 107 miles E and 64 miles N. 
										<br><br>
										<img class="pull-right" src="img/u1t1/2.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										<em>Guess and check via vector weighting</em> method: This group wrote a vector equation (but with 'fraction-like' notation). They determined the weights that each vector would need so the East and North components would sum to 107 and 64, respectively. They included a graphical representation where the weighted vectors are depicted tip-to-tail. 
										<br><br>
										<img class="pull-left" src="img/u1t1/3.png"/ height="300" width="300" hspace="20">
										<br><br>
										<em>Systems of equations</em> method: This group defined variables ($t1$ and $t2$) for the amount of time spent on each mode of transportation and represented the problem using a system of equations. They used elimination to solve the system and drew a diagram to indicate the journey corresponding to their solution. In their diagram they used right triangles to illustrate the component parts of each vector that made up their journey to Gauss's cabin and included a dashed line to depict the resultant vector. 									
										<br><br>
										<img class="pull-right" src="img/u1t1/4.png"/ height="300" width="300" hspace="20">
										<br><br>
										<em>Vector equation becomes a system</em> method: This group began by representing the problem using a vector equation. They rewrote the vector equation as a system of equations, which they solved. Finally, they depicted the journey corresponding to their solution with vectors drawn tip-to-tail. They also included a depiction of the resultant vector.									
										<br><br>
										<img class="pull-left" src="img/u1t1/5.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										Noticing <em>net times</em>: This group's made use of a vector equation becomes a systems of equation approach.  They summarized their conclusion by stating, Solution: Use H. Board for 30 hrs and F. Carpet for 17 hrs (these are net times). The mention of the solution representing net time can be leveraged during whole class discussion to a conversation about unique solutions.									
										<br><br>
										<img class="pull-right" src="img/u1t1/6.jpg"/ height="300" width="300" hspace="20">
										<br><br>
										<em>Two different paths</em>: This group makes use of horizontal notation for vectors, a practice students may be familiar with from previous calculus classes. Additionally, the sketch of the problem scenario is color-coded, with red notating the hover board's travel and purple notating the magic carpet's travel.  The group sketch both sides of a parallelogram, representing that one could ride the hover board first and then the magic carpet (the lower half of the parallelogram) or vice versa (the upper half). This could be leveraged in a discussion about unique solutions.									
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
				When we hand out a new task, we take a moment to make sure everyone is "on the same page" of what the task is asking them to do, if the notation makes sense, etc.  For this task, there are a couple key places for this to occur: 
				<br><br>
				<ul>
					<li>How to interpret the movement along $<3, 1>$ and what it looks like graphically (i.e., graphing the vector $<3, 1>$ emanating from the origin)</li>
					<li>What it means to ride a mode of transportation for different integer and non-integer periods of time (in forward and reverse) to establish allowable scalars</li>
					<br>
					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t5">Example Discussion Questions &raquo;</a>
					<br>
						<div class="accordion-body collapse" id = "t5"">
							<ul>
								<blockquote style="background-color:#F8F8F8;">
									<li>How could we represent, in vector notation, riding the hover board in the forward direction for 5 hours and 10 minutes?</li>
									<li>How could we represent, in vector notation, riding the magic carpet in the reverse direction for $1 \frac{1}{2}$ hours?</li>
									<br>							
									<ul>
										<li>By asking specific positive and negative non-integer valued "periods of time" from the task setting to be represented in mathematical symbolism (such as $5 \frac{1}{6} \begin{bmatrix} 3 \\ 1 \end{bmatrix}$ and $-1.5 \begin{bmatrix} 1 \\ 2 \end{bmatrix} $ from above), the students have the chance to discuss and agree as a class that any real number is a viable scalar, even fractions and negatives.</li>
										<li>The goal of this short whole-class discussion is to establish enough common ground so that students can engage productively in the task. As such, defining terms is not the main goal here. However, defining scalar and scalar multiple here, if it seems natural and fitting, is fine.</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					<br>
					<li><strong>Something to look for:</strong> Some students may interpret negative scalars as traveling back in time. Allow them to discuss this in whole class discussion. The end goal should be to encourage an agreement to interpret negative scalars as riding in reverse direction. This allows considering the span of 2+ vectors, some with positive and some with negative scalars, to make sense in a consistent way.</li>

						

				</ul>
				<br><br>
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i1">Discussing Strategies and Answers During Whole Class Discussion &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i1" ">
					<ul>
						<blockquote>
							<p>Discussing Strategies and Answers During Whole Class Discussion (WCD) </p>
							<br>
							When you ask your students to work in small groups towards a solution to the problem on Task 1, encourage them to work together (verbally as they determine solutions, in writing them, in graphically interpreting them, etc.). Because we normally do this activity on the first day of class, working together like this in a mathematics class might be new to then. 
							<br><br>
							Notice that Handout 1 suggests that the students use symbols and graphs to explain their reasoning.  As you walk around while they work in small groups, if students have done one but not the other, suggest that they do the other.  This helps get the most content "out in the open" for you to draw from during whole class discussion.  Alternatively, if no group does a graphical approach at first, you can send them back to their small groups later for that explicit purpose.  
							<br><br>
							It is not immediately obvious to students that Old Man Gauss can be reached (namely, by riding the hover board forward for 30 hours and the magic carpet forward for 17 hours), so there is a substantial amount of mathematical work for students to do.  A variety of approaches are common. See pages 7-8 for student thinking on this task.
						</blockquote>
					</ul>
				</div>
				<br><br>

				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i2">Working in small groups towards a solution  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i2" ">
					<ul>
						<blockquote>
							<p>Working in small groups towards a solution </p>
								<br>
								As seen in the student work examples, a variety of approaches are common. During whole class discussion, the instructor chooses a representative sample of these to have students present and discuss as a class. The three most common could be described as intuitive, vector equation, and system of equations.					<br><br>
								A short description of how we distinguish the importance of highlighting each method during WCD:
								<br><br>
								<ul>
									<li>
										<Strong>Intuitive approaches (method of 'guess-and-check')</strong>
										<br><br>
										<ul>
											<li>Many students try some version of an informed guess-and-check. The purpose of highlighting this during WCD is to emphasize that intuition is a valid and useful way to attack a new problem. </li>
										</ul>
									</li>
									<br>
									<li>
										<Strong>System of equations</strong>
										<br><br>
										<ul>
											<li>This is a very common approach. Talking about this during WCD allows the instructor to investigate and honor student thinking about the problem and solution strategy</li>
											<li>Highlighting this allows the instructor to define the term "system of equations"</li>
											<li>NOTE: deeply investigating a systems of equations approach is not the main point of this task. It will get emphasized again later in the unit and in the semester. </li>
										</ul>
									</li>
									<br>
									<li>
										<Strong>Vector equation</strong>
										<br><br>
										<ul>
											<li>This is the most important approach to highlight because it lays a foundation for the rest of the unit, which focuses on vectors.</li>
											<li>Here the instructor should take the opportunity to build from students' work to <strong>define the terms scalar, scalar multiple, and linear combination. </strong></li>
											<li>o	This helps to achieve the learning goal, "Develop graphical and algebraic representations of scalar multiples and linear combinations of vectors."</li>
										</ul>
									</li>
								</ul>
							</blockquote>
					</ul>
				</div>
				<br><br>					
				
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i3">Discussing Graphical Representations during Whole Class Discussion &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i3" ">
					<ul>
						<blockquote>				
							<p>Discussing Graphical Representations during Whole Class Discussion </p>
							<br>
							One important aspect of this task is to connect graphical and algebraic representations of scalar multiples, linear combinations of vectors, and vector equations.
							<br><br>
							If possible, find boards of students who graphed the vector equation associated with the Magic Carpet Problem. This probably would resemble a tip-to-tail method. An explicit discussion about where the various parts of the vector equation "appear" in the graph is beneficial in connecting the graphical and algebraic approaches.
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">Example Discussion Question &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t6"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											<li>In the vector equation $30\begin{bmatrix} 3 \\ 1 \end{bmatrix}+17\begin{bmatrix} 1 \\ 2 \end{bmatrix}=\begin{bmatrix} 107 \\ 64 \end{bmatrix}$, there is a $30$ in front of the vector $\begin{bmatrix} 3 \\ 1 \end{bmatrix}$ and a $17$ in 
												front of $\begin{bmatrix} 1 \\ 2 \end{bmatrix}$.  Where do the $30$ and $17$ appear, if at all, in the graphical representation of that 
												vector equation? </li>
											<br>							
											<ul>
												<li>Some students seem to reason additively (travelling in iterations of the $<3,1>$ vector added together, for instance), while other graph the scalar multiplication multiplicatively (the vector $<3,1>$ is 30 times longer, for instance). Making this a point of discussion helps achieve the learning goal, "Interpret scalar multiplication as repeated tip to tail vector addition and as a multiplicative stretching (or shrinking) of the vector."</li>
												<li>This discussion question also begins to emphasize the notion of solution.  Here, if it hasn't happened already, the instructor could define the term solution, and informally discuss the notion of existence of solutions. </li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br>
							If students had graphed the systems of equations corresponding to the Magic Carpet Ride problem, then the following discussion question follows nicely from the previous one. 
							<br><br>
							Because systems of equations are not the main focus of this unit, pursuing this graphical interpretation isn't necessary.  However, if students produce this graph or many are focused on systems of equations, it provides a nice way to connect to and honor their thinking. 
							<br><br>
							<ul>
							<a class="btn btn-warning center" data-toggle="collapse" data-target="#t7">Example Discussion Question &raquo;</a>
							<br>
							<div class="accordion-body collapse" id = "t7"">
								<ul>
									<blockquote style="background-color:#F8F8F8;">
										<li>After solving the system of equations $3x+y=107,x+2y=64$, you determined $x=30$ and $y=17$. Where do the $30$ and the $17$ appear, if at all, in the graphical representation of that 
										system of equations? 
										</li>
										<br>							
										<ul>
											<li>This would help in achieving the learning goal of translating between a vector equation and systems of equations interpretation of the problem situation and solution. </li>
											<li>In the systems of equations graph, the solution $(30, 17)$ appears as the location where the lines $3x+y=107$ and $x+2y=64$ intersect.  Furthermore, the transportation vectors $<3, 1>$ and $<1, 2>$ do not appear as vectors in this graph, but determine the slopes of the lines instead.  </li>
										</ul>
									</blockquote>
								</ul>
							</ul>
						</blockquote>
					</ul>
				</div>
				<br><br>					

				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i4">Discussing the notion of solution &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i4" ">
					<ul>
						<blockquote>						
							<p>Discussing the notion of solution </p>
							If it hasn't been defined explicitly already, define solution for both a vector equation and a system of equations.  It is nice to begin to use terminology such as existence of solutions. 
							<br><br>
							The final two example discussion questions focus on the notion of solution - more specifically, on the idea of uniqueness of solutions.
							<br><br>
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
