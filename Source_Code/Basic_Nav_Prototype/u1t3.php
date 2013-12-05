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

    <title>IOLA Unit 1 Task 3</title>

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
		
        <h1 class="text-center">Unit 1: Linear Independence and Span</h1>
		</div>
		<!-- Begin expandall section -->
		<div class="jumbotron">
			<a class="expandcollapse btn  btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<a class="btn btn-gray center pull-right" style="margin-right:15px"data-toggle="collapse" data-target="#t">Print Lesson &raquo;</a>
				<div class="accordion-body collapse pull-right" id = "t">
					<ul>
						<blockquote>
							<a href="media/unit1/u1_task3.pdf">.pdf Download</a> <br><a href="media/unit1/u1_task3.doc">.doc Download</a>
						</blockquote>
					</ul>
				</div>
			<div class="accordion" id="summary">		  
		<h2 class="text">Task 3: Getting Back Home</h2>		
		<br>
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#handout">Handout 3: Getting Back Home &raquo;</a>
			<div class="accordion-body collapse" id = "handout">
				<ul>
					<blockquote>
						<object data="media/unit1/handouts/u1_handout3.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit1/handouts/u1_handout3.pdf">click here to download the handout.</a></p>  
						</object>					
					</blockquote>
				</ul>
			</div>		
		</ul>		
		<ul>
			<a class="btn btn-primary center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
				<div class="accordion-body collapse" id = "t1" >
					<ul>
					<blockquote>
						<p class="lead" >Main Goal: to develop informal ideas about linear dependence (drawing on a metaphor of "getting back home").  </p>
						<p>By the end of the lesson students should be able to:</p>
						<ul>
							<li>Interpret the zero vector as "home"  </li>
							<li>Intuitively understand linear dependence as getting home (in a non-trivial manner) </li>
							<li>Relate linear independence to Task 2</li>
						</ul>
						<br>
						<p>The instructor should:</p>
						<ul>
							<li>Introduce the formal definition of Linear Dependence </li>
							<li>Introduce definition of Linear Independence</li>
						</ul>
					</blockquote>
					</ul>
				</div>
		</ul>			
		
		<ul>
			<a class="btn btn-primary center" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
			<div class="accordion-body collapse" id = "goalsrationale">
				<ul>
					<blockquote>
						<p class="lead">Goals</p>
						<ul>
							<li>The main goal of the problem on the front of Handout 3 - Getting Back Home - is to determine if it is possible to use the three given modes of transportation to leave and return back to "home." The problem is stated with modes of transportation in the 3-dimensional world. By the end of the task, linear dependence and linear independence will be formally defined. </li>
							<li>The purpose of this exercise is to have students develop a sense of linear dependence from their previous understanding of vectors as modes of transportation. That is, for students to consider the possibility of a nontrivial linear combination that is equal to no net change (the zero vector). This is then leveraged to develop a definition of linear independence. </li>
							<li>In the follow-up questions, students will need to visualize such a linear combination within 3-space as well as consider the geometric implications of linear dependence in $[]^3$. For instance, in the main problem, the vectors span a plane in $[]^3$. The follow-up questions are intended to have students explicitly consider the span and also relate this to their work and reasoning in Task 2.</li>
						</ul>
						<br>
						<p>Rationale</p>
						<ul>
							<li>The set of vectors in the problem were chosen specifically because they are linearly dependent - with no vector being a real scalar multiple of any other vector in the set (including the zero vector). Instead, each vector is a nontrivial linear combination of the other two (i.e., $\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix} \neq r\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}$, $\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix} \neq s\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}$, and $\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix} \neq t\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}$ for any $r,s,t \in     \mathbf{R}$). The vectors were chosen to be in $[ ]^3$ because this is the vector space with minimal dimension for such a linear dependence relationship. </li><br>
							<li>Furthermore, a set of dependent vectors was chosen for the students' first encounter with linear (in)dependence because it is useful for students to experience a situation in which it was "possible to get back home" before experiencing a situation in which this was not possible. In other words, it is easier to see specific examples than to show that no such specific examples exist. The vectors from the original problem in Task 1 (as well as other examples that the instructor sees fit) may then be used to allow students to experience a case of linear independence. </li>
						</ul>
					</blockquote>
				</ul>
			</div>
		</ul>

		<ul>
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
			<div class="accordion-body collapse" id = "studentthinking">
				<ul>
					<blockquote>
						Below are four common examples of student thinking related to the question on the front of Handout 3.
						<br><br>
						<!-- Carousel ================================================== -->
						<div id="myCarousel" class="carousel slide">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u1t3/1.jpg" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Guess and check:</em>  (1/4)</p>
									 The students in this group found by inspection that the zero vector could be obtained by taking a linear combination of 3 given vectors. A group member said, "Pretty much, just an observation that we noticed, that if you multiply the first vector by 2 and add it to the third vector, you get the same amount as the second vector. So that's why I picked that equation." The second example on the board shows that multiplying the 1st vector by $-2$, subtracting the 3rd, and adding the 2nd vector gets you back to the origin. Thus, this board demonstrates 2 solutions to the "getting back home" problem
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t3/2.jpg"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Guess and check with general solution:</em>  (2/4)</p>
									This group's first equation (with $c_1 = c_2 = c_3 = 1$) shows a linear combination of $v_1$, $v_2$, and $v_3$ not equal to the zero vector. The second equation shows a linear combination of v1 and v2 equal to v3. The group used those scalars to generate a general solution ($c_1 = -2x$, $c_2 = c_3 = x$), which works for a general solution to $c_1v_1+ c_2v_2 = c_3v_3$, but not to $c_1v_1+ c_2v_2 +c_3v_3 = 0$. Notice it also includes a graphical representation of the problem, which is less common in student work.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t3/3.jpg"/ alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Systems of equations:</em> (3/4)</p>
									This group converted $xv_1+yv_2 + zv_3 = 0$ into a system of equations. This group found the correct general solution ($x = 2z$, $y = -z$) but was unable to reconcile their algebraic results with the "getting back home" problem. That is, they were unable to use this information to determine that for any z amount of time, as long as x = 2z and y = -z, they would be able to start a journey that begins and ends at home. This struggle to interpret the result from a systems of equations approach is common. 
							  </div>
							</div>
							</div>
							<div class="item">
							  <img src="img/u1t3/4.jpg"/ alt="Student thinking 4">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Systems of equations with general solution:</em>  (4/4)</p>
									This group translated the zero vector equation into a system of equations and used elimination to solve for the specific variables, which correspond to the scalar multiples of each vector. The group's general solution $x = -2y$, $y = y$, and $z = -y$ is correct for $xv_1 + yv_2 + zv_3 = 0$. The group's examples of specific scalars that satisfy the equation (written in red) imply the students understood how to interpret the results of the general solution and choose x, y, and z that would satisfy the vector equation
								</div>
							  </div>
							</div>
							</div>
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div><!-- /.carousel -->					
					</blockquote>
				</ul>
			</div>
		</ul>
		
		<ul>
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#implementation">Implementation &raquo;</a>
			<div class="accordion-body collapse" id = "implementation">
				<ul>
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				This task is the first in the instructional sequence that uses vectors in R3 to describe the modes of travel. As such, the instructor may choose to establish with the students an agreed-upon way to graph the vectors (e.g., How to interpret the movement along <$1,1,1$> and what it would look like graphically).<br><br>
				<ul><li>NOTE: This discussion should not take as long as the discussion on the first day. It should merely be used to establish a classroom standard for interpreting travel along vectors with three components.<br><br></li></ul>
				The instructor should also provide students with the opportunity to discuss what "Home" means in this situation (the zero vector) and how to represent it algebraically: 
				<br><br>
				
				<ul>
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#d1">Example Discussion Question &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "d1"">
					<ul>
						<blockquote style="background-color:#F8F8F8;">
							<li>
							How can we take the information given in the <em>Getting back home</em> problem and represent it symbolically with vectors?
							</li><br>
							<ul>
								<li>
								Students can take a few minutes to discuss this in their groups before the instructor leads them in a whole class discussion. This whole class discussion would give a chance for the class to agree that trying to determine if there exists a journey that begins and ends at home can be represented with the equation $c_1 \begin{bmatrix} 1\\1\\1 \end{bmatrix} + c_2 \begin{bmatrix} 6\\3\\8 \end{bmatrix} + c_3 \begin{bmatrix} 4\\1\\6 \end{bmatrix} = \begin{bmatrix} 0\\0\\0 \end{bmatrix}$ and amounts to trying to solve for $c_1$,$c_2$ and $c_3$.
								</li>
							</ul>
						</blockquote>
					</ul>
				</ul>
				<br>
				The <em>Getting Back Home</em> problem is important for allowing students to develop their own notions of what it means to have a nontrivial solution to the zero equation. Because of this, the instructor should emphasize the restriction that each mode of transportation should be used only once (this can tie back into their work in Task 1). This discussion might tie in the ideas of commutativity and associativity of vector addition. 
				<br><br>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i1">Working in small groups towards a solution  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i1" ">
					<ul>
						<blockquote>
							<p>Working in small groups towards a solution  </p>
							From their work on Tasks 1 and 2, students may be getting used to sharing their thinking with each other, working together toward solutions, and writing out their work to share with the class (i.e., it is becoming normative behavior in the classroom). As the instructor walks around during small group work time on Task 3, he/she may wish to check for and emphasize these practices, if needed. 
							<br><br>
							We have found that students are less likely to include geometric interpretations of this problem than they were in Task 1 and Task 2 (probably because sketching in three dimensions is more challenging).  The instructor could encourage students to attempt a geometric interpretation of their solution strategy. 
						</blockquote>
					</ul>
				</div>
				<br><br>

				<a class="btn btn-success center" data-toggle="collapse" data-target="#i2">Discussing different solution strategies during whole class discussion  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i2" ">
					<ul>
						<blockquote>
							<p>Discussing different solution strategies during whole class discussion</p>
							Student solution strategies typically fall into one of two broad categories: (1) some version of "guess and check" for a solution to the vector equation, and (2) convert to a systems of equations and find a solution algebraically.  The instructor might want to look for both solution approaches (both successful and unsuccessful) as well as other solution strategies that do not fall into either of these types.
							<br><br>
								<ul>
									<a class="btn btn-warning center" data-toggle="collapse" data-target="#na">Guess-and-Check &raquo;</a>
									<br>
									<div class="accordion-body collapse" id = "na"">
										<ul>
											<blockquote>
												Very often at least a few students present some version of a "guess-and-check" approach, most often when finding solutions to a vector equation.  
												<br><br>
												<ul>
													<li>
														Some students are able to guess the scalars for the zero equation: <br><br>
														<center>
														$2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}-\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}+\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$ (so  $c_1 = 2, c_2 = -1, c_3 = 1$)<br>
														$4\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}-2\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}+2[\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$ (so  $c_1 = 4, c_2 = -2, c_3 = 2$), or <br>
														$ \begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix} - \frac{1}{2} \begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}+ \frac{1}{2} \begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$ (so  $c_1 = 1, c_2 = -\frac{1}{2}, c_3 = \frac{1}{2}$), etc.
														</center>
													</li>
													<br>
													<li>
														Some students "just see" or "figure out" that 2 of the vectors can be used in linear combination to produce the remaining vector. For example: <br><br>
														<center>
														$2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+1\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}$  (i.e., $2v_1 + v_3 = v_2$ ), <br>
														$-2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+1\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}=\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}$ (i.e., $-2v_1 + v_2 = v_3$ ), or <br>
														$\frac{1}{2} \begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}- \frac{1}{2} \begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}$ (i.e., $\frac{1}{2} v_2 - \frac{1}{2}v_3 = v_1$ ), etc.<br><br>
														</center>
														The instructor should draw out these students' reasoning because others might not immediately understand why this strategy is productive toward "getting back home." Students using this approach understand that, for instance, negating the second vector after producing the linear combination of the first and third vectors produces a round-trip journey away from and back to the origin:
														<br><br>
														<center>
														$2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix} \Leftrightarrow 2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}-[\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$
														</center>
														<br><br>
														Algebraically, they may see that subtracting the vector $\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}$ from both sides of $2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}$ yields the equation $2\begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}-\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$
													</li>
												</ul>
												<br>
												As an instructor, this approach is a nice place to begin whole class discussion because:
												<br><br>
												<ul>
													<li>
														It typically results in getting at least one correct solution to the "getting back home" problem established in the classroom. 
													</li>
													<br>
													<li>
														Some students struggle to interpret their work in a systems of equations approach, so knowing at least one specific solution helps in connecting to and interpreting a systems of equations approach
													</li>
												</ul>
											</blockquote>
										</ul>
									</div>
								</ul>	
								<br>
								<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#ga">-	System of equations &raquo;</a>
									<br>
									<div class="accordion-body collapse" id = "ga"">
										<ul>
										<blockquote>
											This approach is used often, but it can be difficult for students to interpret their algebraic results. For instance, students may translate the zero vector equation into a system of equations and solve: 
											<br><br>
											<center>
											$c_1 \begin{bmatrix} 1 \\ 1 \\ 1 \end{bmatrix}+ c_2 \begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix}+c_3 \begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix}=\begin{bmatrix} 0 \\ 0 \\ 0 \end{bmatrix}$  <br>
											$\Leftrightarrow$	<br>
											$c_1+6c_2+4c_3=0	\Rightarrow	c_1=2c_3 and c_2=-c_3 $<br>
											$c_1+3c_2+c_3=0$	<br>
											$c_1+8c_2+6c_3=0$	<br>
											<br>
											</center>
											<ul><li>
												Students may be able to find the solutions expressed in some general form (such as $c_1=2c_3$ and $c_2=-c_3$) but may not be able to interpret those as a solution (or infinitely many solutions).  Students may have expected to reach a numerical solution (i.e., a unique solution) to the system so may be left struggling, assuming they are not finding an exact solution because of their own algebraic efforts. 
											</li></ul>
											<br>
											The instructor can draw attention to this approach - both the correct algebra and the general form of the solution.  Interpreting the result in terms of the "getting back home" problem is nontrivial for students and should be a point of discussion:
											<br><br>
											<ul>
											<a class="btn btn-warning center" data-toggle="collapse" data-target="#d2">Example Discussion Question &raquo;</a>
											<br>
											<div class="accordion-body collapse" id = "d2"">
												<ul>
													<blockquote style="background-color:#F8F8F8;">
														<li>
														How can we interpret the equations $c_1=2c_3$ and $c_2=-c_3$  in terms of finding solution(s), if any exist, to the "getting back home" problem? 

														</li><br>
														<ul>
															<li>
																Here, having already established a few correct solutions (such as $c1 = 2, c2 = -1, c3 = 1$) from the "guess and check" approach helps students see that those correct solutions are of the form found through the systems of equations approach.
															</li>
														</ul>
													</blockquote>
												</ul>
											</ul>	
											<br>
											The discussion of these solution approaches might bring up the term "free variable." This concept will be addressed more thoroughly later in the semester, as the students explore Gaussian elimination, so it is not essential here.
											<br>
										</blockquote>
										</ul>
									</div>
								</ul>		
								<br>
							</blockquote>
					</ul>
				</div>
				<br><br>					
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i3">Relating solutions to a geometric representation  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i3" ">
					<ul>
						<blockquote>				
							<p>Relating solutions to a geometric representation during whole class discussion</p>				
							Once the students' solution methods have been presented and discussed, it is helpful to relate these solutions to a geometric representation of the zero equation. Relying on established notions of travel in Tasks 1 and 2, the instructor can lead a discussion that develops the language and imagery of traveling along each vector for the amounts of time that correspond to the students' solutions to Task 3. For example: 
							<br><br>
							<ul>
								<li>
								For the equation $2v_1 - v_2 + v_3 = 0$, students may describe a triangle formed by beginning at the origin, travelling out on the first vector forward for 2 hours, in reverse on $v_2$ for one hour, and then forward on $v_3$ for one hour to return back to the origin (home).
								</li><br>
								<li>
								For the equation $2v_1 - v_2 = -v_3$, students may describe that the location reached by first traveling forward for 2 hours on $v_1$ and then in reverse for one hour on $v_2$ is the same location reached by traveling in reverse for one hour on $v_3$. When examined together, these two paths form a triangle that has a vertex at the origin. 
								</li>
							</ul>
							<br>
							Below is one example of student work that could be leveraged to highlight these two interpretations:
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">How Students Might Geometrically Interpret Their Algebraic Solutions &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t6"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											<center><img src="img/u1t3/i1_1.jpg"><img src="img/u1t3/i1_2.jpg"></center><br><br>
											<li>
												Here, we see an example of students representing the three given vectors from Task 3 using colored vectors. The instructor could lead a discussion in which the representation is interpreted as traveling away from the origin along the third (orange) vector, across the second (pink) vector, and returning to the origin on the first (purple) vector. In this representation, the students have not explicitly labeled the scalar multiples of each vector they are using, and the instructor could ask for them to explicitly connect the geometric representation to their algebraic solutions.
											</li>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
							One role of the instructor is to provide students with the opportunity to draw connections between the travel-oriented problem statement and the geometric and algebraic interpretations of the problem statement. One additional way to achieve this is by projecting a three-dimensional graphing program onto a screen or smart board (See this example, for Mac users). This allows students to see dynamic models of their own solutions to Task 3, and explicitly relates the vector equation to the graphs of their solutions, supporting a geometric understanding of the zero equation. This is important for relating the students' own travel understanding of "getting back home" to the formal definitions of linear independence and linear dependence. 
							<br><br>
							<center><img src="img/u1t3/i2.jpg" height=400 width=400><br>
							<h6>Snapshot of file "Carpet Ride Get Back Home" in Grapher program on MacBook Pro</h6></center>
						</blockquote>
					</ul>
				</div>	
				<br><br>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i4">Formally Defining Linear Dependence and Linear Independence  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i4" ">
					<ul>
						<blockquote>				
							<p>Formally Defining Linear Dependence and Linear Independence</p>				
							The language of "getting back home" can come to represent for these students the movement along the vectors and how to combine the vectors so that the journey returns to the origin. 
							<br><br>
							The instructor should now label the ability to "get back home" with the term linearly dependent, and introduce the <strong>formal definition of linear dependence</strong> as follows: 
							<br><br>
							<ul><li>
								A set of vectors {$v_1,v_2,...,v_p$} in $R^n$ is called a linearly dependent set if there exists a solution to the equation $c_1v_1 + c_2v_2+...+ c_pv_p = 0$ where not all $c_1, c_2, ..., c_p$ are zero.
							</li></ul>
							<br>
							After defining linear dependence, it is helpful to provide students with various sets of vectors and allow them to practice determining whether these sets are linearly dependent. The two examples below are chosen for specific purposes: 
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#epp">Example Practice Problems &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "epp"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											Determine if the following sets of vectors are linearly dependent or not:<br><br>
											<center>
											(a)	{$\begin{bmatrix} 4 \\ 1 \\ 6 \end{bmatrix},\begin{bmatrix} 6 \\ 3 \\ 8 \end{bmatrix},\begin{bmatrix} 4 \\ 4 \\ 4 \end{bmatrix}$} 
											<br><br>
											(b) {$\begin{bmatrix} 1\\2 \end{bmatrix},\begin{bmatrix} 3\\1 \end{bmatrix}$}
											<br><br>
											<ul>
												Set (a) can be shown to be linearly dependent because one vector is a scalar multiple of another vector. As students reason about if the set is linearly dependent or not, they may think in terms of the travel metaphor of the problem, or in terms of the formal definition:
												<br><br>
												<ul>
												<li>
													Travel: By inspection, a student may note that you could ride out on the vector $\begin{bmatrix} 1\\1\\1 \end{bmatrix}$ to the point $(4,4,4)$ and then ride back on $\begin{bmatrix} 4\\4\\4 \end{bmatrix}$. Thus, because there was a way to leave and return home using two of the three vectors, the set of three vectors is linearly dependent. 
												</li><br>
												<li>
													Definition: A student may note that using 4 as the scalar for the first vector, 0 for the second, and -1 for the third would be a nontrivial solution to the associated zero vector equation.
													<ul>
														<li>
															Students have to realize that for a set of vectors to be linearly dependent, some but not all of the scalars may be zero.
														</li>
														<li>
															The class may wish to discuss how to interpret zero as a scalar in terms of the travel scenario. In the past, students have decided that meant that mode of transportation wasn't used in the journey.
														</li>
													</ul>
												</li><br>
												<li>
													NOTE: Part of the difficulty students have with this part of the lesson is that they are unfamiliar with various aspects of formal mathematical definitions, especially quantifiers. Because of this, students might think that nontrivial solutions to the zero equation must be composed of all nonzero scalars. 
												</li>
												</ul>
											</ul>
											<br><br>
											<ul>
												Set (b) is the vectors that are the modes of transportation from Tasks 1 and 2. This set is chosen here because it is not a linearly dependent set, and it can motivate the introduction of the term linear independence.
												<br><br>
												<ul>
												<li>
													Students may say that there is no way to get back home using these two modes of transportation, unless they never left home at all
												</li><br>
												<li>
													Students may solve the associated system of equations $c_1 \begin{bmatrix} 1\\2 \end{bmatrix} + c_2 \begin{bmatrix} 3\\1 \end{bmatrix}=\begin{bmatrix} 0\\0 \end{bmatrix}$ and determine that the scalars $c_1$ and $c_2$ would be forced to be zero.
												</li>
												</ul>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
							The instructor could tag the two vectors in set (b), the Gauss's Cabin scenario vectors, as linearly independent and may now also formally define linear independence.
							<br><br>
							<ul><li>
								A set of vectors {$v_1,v_2,...,v_p$} in $R^n$ is a linearly independent set if the only solution to the equation $c_1v_1 + c_2v_2 +...+ c_pv_p = 0$  is if all $c_1, c_2, ..., c_p$ are zero.
							</li></ul>
							<br>
							If time permits you may do more examples, but students generate their own examples of linearly (in)dependent sets in Task 4. Students will also explore making generalizations about linear (in)dependence in Task 4 (such as 3 vectors in $R^2$ are LD), so it isn't necessary to pursue those here. If students offer such conjecture here, the instructor can make note of it and say the class will come back to that interesting idea soon.  
						</blockquote>
					</ul>
				</div>	
				<br><br>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i5">Important follow-ups arising from the Getting Back Home task that drive student thinking  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i5" ">
					<ul>
						<blockquote>				
							<p>Important follow-ups arising from the Getting Back Home task that drive student thinking</p>				
							The goals of Task 3 are to develop an intuitive understanding of linear (in)dependence, formally define the concepts, and relate these concepts to the students' previous work in the unit. In order to accomplish these, it is important to draw connections between the students' algebraic solution strategies and how these strategies relate back to the problem statement as well as the students' work in Tasks 1 and 2. 
							<br><br>
							Questions 1-3 on the back of Handout 3 are intended to facilitate the discussion that relates the algebraic and geometric interpretations involved in Task 3. Below, we discuss how each question might help advance the discussion.
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#d3">Example Discussion Question (#1 on back of Handout 3)  &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "d3"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											<p>Is there more than one way to make a journey that meets the requirements described above? (In other words, are there different combinations of time you can spend on the modes of transportation so that you can get back home?)  If so, how?</p>
											<ul>
											<li>
												This question may have already surfaced in whole class discussion. An instructor may also go over this question before formally defining linear dependence and independence. If it was not explored thoroughly, then this is a good place to do so. 
											</li><br>
											<ul>
												<li>
													Answering this question can be done consistently with each of the four most common interpretations: systems of equations, vector equation, geometric, and travel: 
													<br><br>
													<ul>
														<li>
															Systems: Students solving the original task in this representation should have the relationships $c_1=2c_3$ and $c_2=-c_3$. As mentioned above, choosing a value for $c_3$ determines the values of $c_1$ and $c_2$. This discussion could explore what it means to have more than one way to "get back home" in this representation (i.e., using different fixed values of $c_3$).
														</li><br>
														<li>
															Vector equation: Students will likely discover that scaling their solutions by a constant will maintain the equality of the zero equation. This is analogous to multiplying both sides of an equation by a constant in previous algebra classes (i.e., if $x + y = 0$, then $2x +2y = 2*0 = 0$). 
														</li><br>
														<li>
															Geometric: Students can also relate this to the geometric representation as a dilation of the triangle. So, the initial solutions may be scaled by any constant to produce an infinite number of different solutions. For instance, the instructor could explore this in Grapher: the image below shows two solutions, which appear as two triangles. 
															<br><br>
															<center><img src="img/u1t3/i3.jpg" height=400 width=400></center>
														</li><br>
														<li>
															Travel: Within the travel metaphor, this same reasoning can be described as traveling along similar triangular paths, but either staying closer to home or traveling farther away from home.
														</li>
													</ul>
												</li>
												</ul>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#d4">Example Discussion Question (#2 on back of Handout 3)  &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "d4"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											<p>Is there anywhere in this 3D world that Gauss could hide from you?  If so, where?  If not, why not?</p>
											<ul>
											<li>
												The purpose of this question is to allow the students to practice finding the span of a set of vectors, as they did in Task 2, but with vectors in a 3-dimensional vector space. Essentially, the question is asking whether this set of vectors spans $[]^3$. From their work in Task 2, the students should be able to explain how the first two vectors would span a plane in $[]^3$ (the instructor may need to distinguish between $[]^2$ and planar subspaces of $[]^3$). Once it is established that any two of these vectors form a plane in $[]^3$, the students may use their geometric representation to confirm that the third vector is indeed contained in this plane (the dynamic graphing software is especially useful here). From this, the students should see that Gauss could hide from them anywhere away from this plane. 
											</li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#d5">Example Discussion Question (#3 on back of Handout 3)  &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "d5"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											<p>What is $span\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}$?</p>
											<ul>
											<li>
												Relying on their response to Question 2, the students will likely begin by describing the span as a plane in $[]^3$. The instructor could use a 3-D graphing technology, such as the Grapher file referenced above (link), and have that program sketch the span of the set of three vectors: 
												<br><br>
												<center><img src="img/u1t3/i4.jpg" height=400 width=600></center>
											</li><br>
											<li>
												Depending on the notation used and emphasized in a given class, students can also describe the span of the set of vectors in a more set theoretic / formal way: 
												$$\{\begin{bmatrix} x\\y\\z \end{bmatrix}:\begin{bmatrix} x\\y\\z \end{bmatrix}=a\begin{bmatrix} 1\\1\\1 \end{bmatrix}+b\begin{bmatrix} 6\\3\\8 \end{bmatrix}+c\begin{bmatrix} 4\\1\\6 \end{bmatrix};a,b,c \in []\}$$
											</li><br>
											<li>
												A good follow-up question could be to ask how the span of this particular set would change if only two of the three vectors were included. For this set, not all of the vectors are necessary to describe the span of the set, allowing the span to be represented as the span of any pair of vectors in the set. In other words: 
												$$span\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}=span\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix}\}  = span\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}= span\{\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}$$
											</li><br>
											<li>
												An instructor could return to the Grapher program and select the various sets of only 2 of the 3 vectors and graph their span.  For instance, the gray plane is $span\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix}\}$, and the purple plane is $span\{\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}$. Within Grapher, a user can spin the axes and convince him/herself that the gray and purple are the same plane. 
												<br><br>
												<center><img src="img/u1t3/i4.jpg" height=400 width=600></center>
											</li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>
							<br><br>
						</blockquote>
					</ul>
				</div>	
				<br><br>
					<a class="btn btn-success center" data-toggle="collapse" data-target="#oo">(Optional) Getting more practice with linear (in)dependence  &raquo;</a>
					<br>
					<div class="accordion-body collapse" id = "oo"">
						<ul>
							<blockquote>
								<p>(Optional) Getting more practice with linear (in)dependence</p>
								<ul>
								<li>
									If time permits during class, and/or it would be beneficial to students, the instructor could provide 4-5 practice problems for students to work on together in their small groups.  This would allow students to deepen their understanding of the concept, as well as to gain experience working with the definitions. 
									<br><br>
									A second alternative for these optional problems would be to assign them for homework. 
								</li><br>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#wewe">Example Practice Problems  &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "wewe"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											Determine if the following sets of vectors are linearly independent or linearly dependent:
											<br><br>
											<center>
											(a) $\{\begin{bmatrix} -2\\0.9\\1.4 \end{bmatrix},\begin{bmatrix} 3\\1.35\\-2.1 \end{bmatrix}\}$      
											<br><br>
											
											(b)$\{\begin{bmatrix} 42\\-1.7 \end{bmatrix}\}$   
											<br><br>
											
											(c) $\{\begin{bmatrix} 4\\2 \end{bmatrix},\begin{bmatrix} 5\\-1 \end{bmatrix},\begin{bmatrix} 3\\6 \end{bmatrix}\}$  
											<br><br>
											
											(d)$\{\begin{bmatrix} -1\\1\\5 \end{bmatrix},\begin{bmatrix} 3\\12\\-4 \end{bmatrix},\begin{bmatrix} 0\\0\\0 \end{bmatrix}\}   $   
											<br><br></center>
											<ul>
											<li>
												The instructor, of course, could choose different sets of vectors to use. Problems (a) and (b) are both linearly independent sets, whereas (c) and (d) are linearly dependent.  Generalizations associated with (c) and (d) - namely about sets with more vectors than the dimension of the vector space and about sets that contain the zero vector - are explored thoroughly in Task 4. 
											</li>
											</ul>
										</blockquote>
									</ul>
								</div>
								</ul>
							</blockquote>
						</ul>
					</div>
			</div>	
			
		</ul>	
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#videos">Videos &raquo;</a>
			<div class="accordion-body collapse" id = "videos">
				<ul>
					<blockquote>
						<video id="video_1" class="video-js vjs-default-skin"
							controls preload="false"
							data-setup='{"example_option":true}'>
							<source src="media/unit1/task3/zero_vector.mp4" type='video/mp4' />
						</video>
					</blockquote>
				</ul>
			</div>
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
