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
						<a href="u1t1.php" title="Title"> - Task 1: The Carpet Ride Problem</a>
						<a href="u1t2.php" title="Title"> - Task 2: Hide and Seek</a>
						<a href="u1t3.php" title="Title"><strong> - Task 3: Getting Back Home</strong></a>
						<a href="u1t4.php" title="Title"> - Task 4: Linear (In)dependence</a>
				   </p>
                </li>		
				<li>
				<a class="accordion-toggle" data-toggle="collapse" data-target="#u2">Unit 2  <b class="caret"></b></a>
				   <p class="collapse" id="u2">
						<a href="#" title="Title"> - Task 1</a>
						<a href="#" title="Title"> - Task 2</a>
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
		
        <h1 class="text-center">Unit 1: Magic Carpet Ride</h1>
		</div>
		<!-- Begin expandall section -->
		<div class="jumbotron">

		<section id="accordion">
			<a href="#_" class="expandcollapse btn btn-mini btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<div class="accordion" id="summary">		  

		<h2 class="text">Task 3: Getting Back Home
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
		</h2>
		
			<ul class="collapse" id = "t1" >
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
		<br>
		<ul>
			<a class="btn btn-gray center" id="printt" onclick="window.print();" >Print Lesson</a>
		</ul>
		
		<ul>
			<a class="btn btn-info center" data-toggle="collapse" data-target="#handout">Handout 3: Getting Back Home &raquo;</a>
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
			<a class="btn btn-success center" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
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
		<a class="btn btn-success center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
			<div class="accordion-body collapse" id = "studentthinking">
				<ul>
					<blockquote>
						At the heart of students' difficulties in this task is the issue of developing a coherent geometric interpretation for linear combination of vectors with all possible cases for sign combination of scalar coefficients.  As students work on this task, they begin to develop the ability to conceptualize movement in the plane using combinations of vectors.  In looking at the definition of span, it may seem obvious that a task intended to help students develop an intuitive understanding of span should require students to investigate the idea of linear combinations in depth.  However, we see here that it is a non-trivial task for students to explore and develop a concept image for span in which all possible linear combinations of vectors are conceptualized in a coordinated way.  Below are 6 examples of student work.
						<br><br>
						<!-- Carousel ================================================== -->
						<div id="myCarousel" class="carousel slide">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u1t2/1.png" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Cone</em> method: (1/6)</p>
									This group argued that the only points that could be reached were the ones that lie "between" the cone traced out by the extensions of the two transportation vectors. Their argument was framed in terms of the slopes of the lines corresponding to the vectors when drawn from the origin. Notice this response is incorrect, most likely because students neglected to use negative scalars with the modes of transportation. 
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t2/2.jpg"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Double cone method:</em>  (2/6)</p>
									This group interpreted the sign of the scalar as an indication of whether they were moving forward or backward in time. So, in their interpretation, either both modes of transportation had to move forward (cone in first quadrant) or both had to move backward (cone in third quadrant). 	
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t2/3.jpg"/ alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Grid</em> method: (3/6)</p>
									This board and the one below illustrate the idea of "gridding" the plane with lines parallel to the two initial vectors.  As part of the discussion a student asked, "Can we use any scalar to slide to any point on the graph?" This question was resolved by exploring when a vector equation equivalent to that shown at the top of this board had a solution.
							  </div>
							</div>
							</div>
							<div class="item">
							  <img src="img/u1t2/4.jpg"/ alt="Student thinking 4">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Sliding</em> method:  (4/6)</p>
									This group argued that you can reach any point on the plane by taking into consideration the ability to ride any given mode of transportation backwards. They explained that the portions of the graph that the Double Cone group deemed unreachable were accessible when considering that you can travel in the negative direction. For example, to travel to a point located in the 2nd quadrant, you travel in the positive direction a set distance with the magic carpet then travel in the negative direction with the hover board. Because each vector can be extended to any desired length through scalar multiplication, every point on the graph is reachable.  Their in-class description emphasized the metaphor of "sliding" the second vector along the first one to reach any point: "We can slide where we start riding our other mode of transportation, anywhere up and down.  We can extend this [first] one to infinity each way, and then we just set the initial conditions of this [second] one anywhere we want on here."
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t2/5.jpg"/ alt="Student thinking 5">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Zig-Zag</em> method:  (5/6)</p>
									This group also used the "Grid" method.  The green and red lines indicate a detailed gridding of that portion of the graph using vectors with the same direction as the original vectors.  The blue vectors indicate what we call the "zig-zag" method.  For this method, students imagined using each vector (mode of transportation) for a short time repeatedly.  Alternating between the two modes creates a zig-zag appearance on the graph that helps convince some students that they can reach anywhere. In addition, this board illustrates a system of equations to help answer the question.  The x-direction was set equal to an East/West (E/W) directionand the y-direction was equated to a North/South (N/S) direction.  Using substitution, the students solved for what x and y would have to be to reach any location with coordinates (E/W, N/S).  
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t2/6.jpg"/ alt="Student thinking 6">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>+,+;+,-</em> method:  (6/6)</p>
									For this white board the students extended the two vectors given for the modes of transportation to divide the plane into four spaces.  They labeled each of the four spaces according to how one would travel to reach them.  For example, if one travels forward on both modes of transportation (i.e., if both vectors are multiplied by a positive scalar), then the result is in the quadrant marked as "both +".  If one travels forward in the <1,2> direction and backwards in the <3,1> direction (i.e., the first vector is multiplied by a positive scalar and the second by a negative scalar), then the result is in the quadrant marked as "+, -." 
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
		<a class="btn btn-success center" data-toggle="collapse" data-target="#implementation">Implementation &raquo;</a>
			<div class="accordion-body collapse" id = "implementation">
				<ul>
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				Depending on how long it has been since the students completed Task 1, you may want to review briefly some of the basic ideas and vocabulary from Task 1 such as vector, scalar, and vector equation.  Remind students of the ability to multiply each vector by any real-valued scalar.<br><br>
				Point out to the students that in Task 1 they were trying to determine how to travel to one location, whereas Task 2 of this Magic Carpet Ride Sequence is to determine if one can get to any point on the plane using just these two modes of transportation.
				<br><br>
				
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i1">Working in small groups towards a solution  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i1" ">
					<ul>
						<blockquote>
							<p>Working in small groups towards a solution  </p>
							<br>
							While walking around to small groups, the instructor should note and encourage a wide variety of arguments, both geometric and symbolic.  Students may not agree on whether there is a place where Gauss can hide and will hopefully display a wide variety of geometric arguments.  Students should be encouraged to fully develop their arguments and/or complete a second argument if they have extra time during small group work.  A wide range of solutions is most productive for whole class discussion.  
						</blockquote>
					</ul>
				</div>
				<br><br>

				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i2">Discussing different solution strategies during whole class discussion  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i2" ">
					<ul>
						<blockquote>
							<p>Discussing different solution strategies during whole class discussion</p>
							Whole class discussion can be organized around various solution methods.  <br><br>
								<ul>
									<a class="btn btn-warning center" data-toggle="collapse" data-target="#na">Numeric approaches (method of 'guess-and-check') &raquo;</a>
									<br>
									<div class="accordion-body collapse" id = "na"">
										<ul>
											<blockquote>
												Students may choose one or more specific locations and then determine the scalars that allow them to get there.  They may generalize from this that because they can always find an answer, there is nowhere Gauss can hide.
											</blockquote>
										</ul>
									</div>
								</ul>	
								<br>
								<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#ga">Geometric approaches &raquo;</a>
									<br>
									<div class="accordion-body collapse" id = "ga"">
										<ul>
										<blockquote>
											There are often a wide variety of geometric arguments presented by students, some correct and some incorrect.  //whiteboard illustration!
												<br><br>
												<ul>
													<li>
													<em>Zig-Zag</em> method:  In its simplest form, the zig-zag method is a geometric guess and check in that students are imagining travelling for various amounts of time on each mode, possibly in an alternating manner, and seeing which locations this leads them to. By trying a number of examples, it may convince students that by zigging and zagging enough, they can get to all locations.
													</li>
													<br>
													<li>
													<em>Single cone and Double cone</em> methods.  Students argue that one can travel to any place in between the two vectors in the first quadrant (single cone) or in between the two vectors in both the first and third quadrant (double cone).  These responses may come from the students implicitly or explicitly assuming that only positive scalars are allowed (single cone) or that the scalars on the two vectors must be both positive or both negative (double cone).
													</li>
													<br>
													<li>
													<em>++;+-</em> method: These students realize that the scalars may be multiplied by four different sets of integers: both positive (++), both negative (--), or one of each (+-) and (-+).  They may draw a graph with the two vectors extended to infinity in each direction and the four new quadrants that are created labeled with one of the four integer combinations. This method allows students to imagine reaching a point in any of their new quadrants, thus allowing them to reach any location on the plane.
													</li>
													<br>
													<li>
													<em>Gridding</em> method: The students create a gridding of the plane using the initial vectors extended and parallel versions of these vectors at regular intervals.  This creates a coordinate system along which one can imagine travelling to reach all points on the plane. 
													</li>
													<br>
													<li>
													<em>Sliding</em> method: The students argue that you can reach any point on the plane by imagining one vector extended infinitely in both directions from the origin and the second infinitely extended vector sliding along the first.  As the second vector slides along the first it covers every point in the plane.  To reach a point one slides along the first vector the correct amount and then moves along the second extended vector to reach the destination. 
													</li>
												</ul>
												<br>
												<b>Points to bring out:</b>
												<br><br>
												<ul>
													<li>
													The Zig-zag method allows for whole class discussion regarding how adding multiple copies of the same two vectors in an alternating pattern can be rewritten as a linear combination of only two travel vectors used only once. 
													</li>
													<br>
													<li>
													Discussing the single cone, double cone, and ++;+- methods allows for a review of what scalars are possible and how adding vectors with different signed scalars can be represented geometrically.
													</li>
													<br>
													<li>
													The ++;+- and gridding methods give a initial look at thinking of the plane in terms of a new basis, although this discussion is probably beyond the scope of the Task 2 discussion.
													</li>
													<br>
													<li>
													The sliding method is a type of covariational reasoning which may allow students an initial glimpse into the functional reasoning needed later when we think of varying inputs <$x, y$> to reach solutions  in the linear transformation $T($<$x,y$>$)= $<$A,B$>, although discussion of this in detail is probably beyond the scope of the Task 2 discussion.
													</li>
											</ul>
										</blockquote>
										</ul>
									</div>
								</ul>		
								<br>
								<ul>
									<a class="btn btn-warning center" data-toggle="collapse" data-target="#sle">System of linear equations &raquo;</a>
									<br>
									<div class="accordion-body collapse" id = "sle"">
										<ul>
											<blockquote>
												Students may set the vector equation equal to a variable location, e.g., $\begin{bmatrix} A \\ B \end{bmatrix} = c_1\begin{bmatrix} 3 \\ 1 \end{bmatrix} + c_2\begin{bmatrix} 1 \\ 2 \end{bmatrix}$ and then convert this into a system of equations.
												<ul>
													<li>Informally, students may argue that any system with two equations and two unknowns has a (unique) solution, so you can find a way to get to Gauss at any location.  Students may not realize that although this system does have a unique solution, other systems will have no or infinitely many solutions.</li>
													<br>
													<li>To show that this system does indeed have a unique solution for any real numbers A and B, one can solve as follows:<br><br>
													$A = 3c_1 + c_2$ <br>
													$B = c_1 + 2c_2$ and we get $c_1 \frac{2A-B}{5}$ and $c_2 = \frac{3B-1}{5}$<br><br>
													So, for any location we want to reach <A, B>, there exists c_1 and c_2 as defined above, that will allow you to reach that location.
													</li>
												</ul>
											</blockquote>
										</ul>
									</div>
								</ul>	
								<br>

							</blockquote>
					</ul>
				</div>
				<br><br>					
				<a class="btn btn-blue center" data-toggle="collapse" data-target="#i3">Defining span  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i3" ">
					<ul>
						<blockquote>				
							<p>Defining span </p>				
							At this point the students, although they don't yet realize it, have a good intuitive sense of the span of two vectors in $R^2$ that are not multiples of each other. The preceding solutions to the Hide-and-Seek problem give us that for any location we might want to reach $\begin{bmatrix} A \\ B \end{bmatrix}$ there exists $c_1$ and $c_2$ such that $\begin{bmatrix} A \\ B \end{bmatrix} = c_1\begin{bmatrix} 3 \\ 1 \end{bmatrix} + c_2\begin{bmatrix} 1 \\ 2 \end{bmatrix}$. In other words, any $\begin{bmatrix} A \\ B \end{bmatrix}$ in the plane can be written as a linear combination of $\begin{bmatrix} 3 \\ 1 \end{bmatrix}$ and $\begin{bmatrix} 1 \\ 2 \end{bmatrix}$. There is a technical word for the collection of all such vectors $\begin{bmatrix} A \\ B \end{bmatrix}$.  The term is span.  In determining that there is nowhere Gauss can hide, the students have discovered that the span of $\begin{bmatrix} 3 \\ 1 \end{bmatrix}$ and $\begin{bmatrix} 1 \\ 2 \end{bmatrix}$ is all of $R^2$.  In other words,  $Span \{ \begin{bmatrix} 3 \\ 1 \end{bmatrix}$,  $\begin{bmatrix} 1 \\ 2 \end{bmatrix}\} = R^2$.  
							<br><br>
							We can also relate this back to the calculations in Task 1.  We can see that $\begin{bmatrix} 107 \\ 64 \end{bmatrix} \in Span \{ \begin{bmatrix} 3 \\ 1 \end{bmatrix}$,  $\begin{bmatrix} 1 \\ 2 \end{bmatrix}\}$ because it can be written as a linear combination of those two vectors, i.e., $\begin{bmatrix} 107 \\ 64 \end{bmatrix} = 30\begin{bmatrix} 3 \\ 1 \end{bmatrix} + 17\begin{bmatrix} 1 \\ 2 \end{bmatrix}$.
							<br><br>
							We can now define span more generally:
							<br><br>
							<ul>
								<li>
								The span of a set of vectors is all possible linear combinations of those vectors, or in other words, all places you could reach with those two vectors.
								</li><br>
								<li>
								Span $\{v_1, v_2, ..., v_p\}$ is the collection of all vectors that can be written in the form $c_1 v_1 + c_2 v_2 + ... + c_P v_P$ $with c_1,c_2,...,c_p$ with scalars.
								</li>
							</ul>
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">Example Practice Problems: &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t6"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											Determine the following:<br>
											<li>
											(a) $Span\{\begin{bmatrix} 3 \\ 1 \end{bmatrix}\}$<br>
											(b) $Span \{ \begin{bmatrix} 2 \\ 3 \end{bmatrix}$,  $\begin{bmatrix} 4 \\ 6 \end{bmatrix}\}$<br>
											(c) $Span \{ \begin{bmatrix} 1 \\ 3 \end{bmatrix}$,  $\begin{bmatrix} 4 \\ 5 \end{bmatrix}\}$<br>
											(d) $Span \{ \begin{bmatrix} 1 \\ 3 \end{bmatrix}$,  $\begin{bmatrix} 2 \\ -6 \end{bmatrix}$,  $\begin{bmatrix} 4 \\ 6 \end{bmatrix}\}$<br>
											(e) $Span \{ \begin{bmatrix} 1 \\ 3 \\ 2 \end{bmatrix}$,  $\begin{bmatrix} 1 \\ 4 \\ 5 \end{bmatrix}\}$<br>
											(f) $Span \{ \begin{bmatrix} 0 \\ 0 \end{bmatrix}$,  $\begin{bmatrix} 2 \\ 3 \end{bmatrix}\}$		<br>
											(g) $Span\{\begin{bmatrix} -3 \\ 0 \\ -2 \end{bmatrix}\}$
											</li>
											<br>							
										</blockquote>
									</ul>
								</div>
							</ul>
							<br>
							These sets of vectors are specifically chosen to help students apply the definition of span and gain the understanding of the definition of span.
							<br><br>
							If time permits, you may want to ask questions of the format, "Is ___ in $Span\{,\}$?"  This is the format of a number of typical homework problems.
							<br><br>
							<ul>
							<a class="btn btn-warning center" data-toggle="collapse" data-target="#t7">Example Discussion Question &raquo;</a>
							<br>
							<div class="accordion-body collapse" id = "t7"">
								<ul>
									<blockquote style="background-color:#F8F8F8;">
										<li>
										Would any two vectors allow us to reach all points in the plane?  If not, for what sets of vectors will this not work?  Why will a set of vectors of the type described [e.g., two vectors that are multiples] not span the plane?  What fails in the reasoning above that we had for $\begin{bmatrix} 3 \\ 1 \end{bmatrix}$ and $\begin{bmatrix} 1 \\ 2 \end{bmatrix}$?
										</li>
									</blockquote>
								</ul>
							</ul>
						</blockquote>
					</ul>
				</div>				
			</div>		
		</ul>	
		<ul>
			<a class="btn btn-info center" data-toggle="collapse" data-target="#videos">Videos &raquo;</a>
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
