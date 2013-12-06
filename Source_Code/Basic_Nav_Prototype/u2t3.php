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
	  <?php $ref='unit'; include 'header.php' ?>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<a style="display:block" href="#sidr">
		<div id="float2" class="">
			<br>
			<span class="ba"><h3>
				<!--span class="glyphicon glyphicon-circle-arrow-right"></span></h3-->
				<a class="expandside" state="0"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</span>
		</div>
	</a>

    <div class="container">

      <div class="jumbotron">
		<div id="sidr" class="hidden-print">
			<?php $unit = 'u2'; $task = 't3'; include 'sidebar.php' ?>
		</div>
	
        <h1 class="text-center">Unit 2: Italicizing N Task Sequence</h1>
		</div>
		<div class="jumbotron">
			<a class="expandcollapse btn  btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<a class="btn btn-gray center pull-right" style="margin-right:15px"data-toggle="collapse" data-target="#t">Print Lesson &raquo;</a>
				<div class="accordion-body collapse pull-right" id = "t">
					<ul>
						<blockquote>
							<a href="media/unit1/u2_task3.pdf">.pdf Download</a> <br><a href="media/unit1/u2_task3.doc">.doc Download</a>
						</blockquote>
					</ul>
				</div>
			<div class="accordion" id="summary">		  
		<h2 class="text">Task 3: Pat and Jamie</h2>
		<br>
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#handout1">Handout 1: Pat and Jamie &raquo;</a>
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
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#t1">Lesson Overview &raquo;</a>
			<div class="accordion-body collapse" id = "t1" >
				<ul>
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
			</div>		
		</ul>
		<ul>
			<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#goalsrationale">Learning Goals and Rationale &raquo;</a>
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
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#studentthinking">Student Thinking &raquo;</a>
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
		<a class="btn btn-primary center" data-toggle="collapse" data-target="#implementation">Implementation &raquo;</a>
				<div class="accordion-body collapse" id = "implementation">	
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				The Pat and Jamie task sets the stage for a shift in students’ mathematical activity and goals; students are asked to combine matrices that define transformations in addition to determining what those matrices are. This is a shift from the goal of constructing a single transformation matrix based on inputs and outputs, such as in the Italicizing N task.   
				<br><br>	
				Encourage students talking in their small groups about whether Pat and Jamie’s approach seems sensible and if that approach should give the same final matrix A that was found in the initial Italicizing N task.  (See Questions 1-2 from the Handout.)
				<br><br>			
		
			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i22">Working in small groups towards a solution &raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i22">
			<ul>
			<blockquote>
				<p>Working in small groups towards a solution</p>	
				The class begins the Pat and Jamie task by talking in their small groups about whether Pat and Jamie’s approach seems sensible and whether that approach should give the same final matrix A that was found in the initial Italicizing N task. The teacher plays an important role in facilitating the subsequent whole class discussion, eliciting students’ initial ideas. Students tend to take the view that Pat and Jamie's approach seems sensible, and that it should yield the same matrix A as the previous task.  We have found it useful to make these explicit in whole class conversation prior to students’ work on Question 2 from the Handout.

				<br><br>
				During small group work, the instructor should notice the various approaches that the students are taking - noting which examples of student thinking might be leveraged in whole class discussion. Here we provide typical student responses/difficulties and recommend how they might be leveraged in whole class discussion:
				<br><br>
				Students will likely begin with the one of the approaches they used in Tasks 1 and 2. For instance the students might first determine the image of “N” under a desired transformation and then use an unknown matrix to find a system of equations (a, right). Another approach would use the generalizations discussed in Task 2 to determine what matrix would distort 2 in a desired way (b).
				<br><br>
				<img src = "img/u2t3/6.png" alt="6">
				<br><br>
				Between these two approaches, each group should be able to determine correctly a matrix that would make the “N” taller (from 12-pt font to 16-pt font, as described in the task set-up). This matrix is $\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$. The more difficult part of this task (from the students’ perspective) is usually the coordination of this “taller” transformation with a new transformation that would italicize the new, 16-pt font “N.” Specifically, students using approach (a) from above often have difficulty determining appropriate input-output pairs to use with the unknown matrix to generate a system of equations. For instance, students may try to find a matrix that italicizes the original 12-pt N (Groups 1 and 2 in Student Thinking section). Because of this, students often do not view the output of the first transformation as the input for the second transformation, which Pat and Jamie’s method requires. The difficulty with using the second approach (anticipating the entries of the matrix by observing the geometric distortion of the plane) is that the italicizing matrix skews the plane, and students may not yet know the form of a matrix for that geometric transformation.

			</blockquote>
			</ul>
			</div>
			<br>

			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i23">Short break into Whole Class Discussion&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i23">
			<ul>
			<blockquote>
				<p>Short break into Whole Class Discussion</p>	
				If many groups’ progress is stalling here (trying to determine the “leaning” matrix in Pat and Jamie’s approach), the instructor should reconvene everyone into a whole class discussion. 
				<br>
				This “mini whole class discussion” would have two main purposes: 
				<br><br>
				<ul style="padding-left:35px">
					<li>To allow students to describe their progress, articulate what they are finding difficult about the problem, and bounce ideas off of each other of how to proceed
					</li>
					<li>To allow the teacher to suggest that the class agree upon a shared notational system for the problem
					</li>
				</ul>

				<br><br>
				In service of the first goal, as students start to share their reasoning and progress, the instructor may wish to have everyone agree on names and notation for the various matrices (which serves the second goal), which the class should readily agree would help in their progress. 
				<br><br>
				For instance, the instructor could ask students what label they gave the matrix that made the N “taller” and use that.  Alternatively, the instructor could suggest they all agree to use “B” (for “make bigger”) to notate this matrix.
				<br>
				<b>NOTE:</b> In the past, we have avoided using “T” for the matrix that makes the N “taller” because of the use of “T” to denote a linear transformation throughout this section.
				<br><br>
				Similarly, the instructor could ask students what label they gave the matrix that made the N “lean” and use that. Alternatively, the instructor could suggest they all agree to use “L” (for “make lean”). 
				<br><br>
				<b>NOTE:</b> In the past, we have avoided using “I” for the matrix that “italicizes” the N because “I” is reserved for the identity matrix and identity transformation in Task 4.
				<br><br>
				It is often the case that all of the students develop the same B matrix, but not all students develop the same L matrix. The instructor may recommend naming these matrices L<sub>1</sub> & L<sub>2</sub>, or L & L’, etc. 
				
				<br><br>
					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t61">What’s Happening Here Mathematically and How Do I Use It? &raquo;</a>	
					<div class="accordion-body collapse" id = "t61">
						<blockquote style="background-color:#F8F8F8;">
						The mathematics below surfaces eventually through students’ work – most often after students are sent back into small groups after the above mini-whole class discussion.  We include it here so that instructors can be prepared for the variety of student responses.

						<br>
						We stress that stress that students may not even think to use matrix multiplication at first, much less to know why it is sensible in this task. These mathematical relationships <b>do</b> need to come out in whole class discussion by the end of Task 3. 
						<br><br>
						The students who use the 16-pt “N” as input for L will probably find the matrix L (or L<sub>1</sub>)= $\begin{bmatrix} 1 & 1/4 \\ 0 & 1\end{bmatrix}$
						<br><br>
						The students who use the 12-pt “N” as input for L will probably find the matrix L (or L<sub>1</sub>)= $\begin{bmatrix} 1 & 1/2 \\ 0 & 1\end{bmatrix}$
						<br><br>
						All students will probably find the matrix B = $\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$. Notice that:

						<br>
						BL ≠ A but BL' = A:
						<br><br>
						BL = $\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$$\begin{bmatrix} 1 & 1/4 \\ 0 & 1\end{bmatrix}$ = $\begin{bmatrix} 1 & 1/4 \\ 0 & 4/3\end{bmatrix}$ ≠ A = $\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3\end{bmatrix}$ = $\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$
						$\begin{bmatrix} 1 & 1/3 \\ 0 & 1\end{bmatrix}$ = BL'
						<br><br>
						and LB = A (which matches what Pat and Jamie did) but L'B ≠ A:
						<br><br>
						LB = $\begin{bmatrix} 1 & 1/4 \\ 0 & 1\end{bmatrix}$$\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$ = $\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3\end{bmatrix}$ = A ≠ $\begin{bmatrix} 1 & 1/4 \\ 0 & 4/3\end{bmatrix}$ = $\begin{bmatrix} 1 & 1/3 \\ 0 & 1\end{bmatrix}$
						$\begin{bmatrix} 1 & 0 \\ 0 & 4/3\end{bmatrix}$ = L'B.
						</blockquote>
					</div>

				<br><br>
				Once issues of notation are balanced, the instructor should prompt students for general strategies for moving forward with the Pat and Jamie task. Some groups may have (correctly) used the vectors from the 16-pt “N” as the inputs for the italicizing transformation to correctly determine the “lean” matrix L.The teacher may choose to summarize and revoice this explanation using mathematical symbolism that highlights how the output of the first transformation becomes the input for the second and illustrate this with particular input-output pairs (e.g., see Figure 3.1). This discussion is important because it lays a foundation for students’ understanding matrix multiplication as composition of linear transformations. 
				<br><br>

				<img src = "img/u2t3/7.png" alt="7">
				<br><br>
				The students should be able to continue in small group work toward explicitly finding the matrices B and L (if they have not already done so) and determining how the two matrices are combined (and why) to produce matrix A from the original Italicizing N task.
				<br><br>

				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t62">Example Prompt for Small Group Work &raquo;</a>	
					<div class="accordion-body collapse" id = "t62">
						<blockquote style="background-color:#F8F8F8;">
						“Thanks for sharing your initial ideas. We still have some work to do to confidently decide what “bigger” matrix B and “lean” matrix L represent Pat and Jamie’s approach.  Also, we need to decide how to combine these matrices – we know (from #1 on the handout) that the matrices should combine to equal A. But what method of combination makes sense, and why? If we didn’t know they should equal A, how could we know what to do?”
						</blockquote>
					</div>
				
		</blockquote>
		</ul>
		</div>

	
			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i24">Back in Small Groups&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i24">
			<ul>
			<blockquote>
				<p>Back in Small Groups</p>
				<br>	
				If they hadn’t done so already, all students should now be ready to find at least one lean matrix. The task is now to find a way to sensibly combine these two matrices to produce A, the matrix that transforms the normal size 12 N to the italicized size 16 N. It is likely that a few groups will try to add the matrices component-wise. Other students may recall the matrix multiplication algorithm from previous classes. In the latter case, these students may multiply both BL and LB (or L’B and BL’). The students should see that only one of these products (in each pair) results in A, which the instructor could leverage into a discussion of the noncommutativity of matrix multiplication. 
				<br><br>				
				Specifically, the students who italicized the 12-pt “N” will need to realize that, although they can multiply their matrices to create A (BL’ = A), these matrices do not represent the transformations described by Pat and Jamie’s approach. 
				<br><br>
				This is an example of two distinct matrices (L and L’) that, when multiplied by B, yield A but not when multiplied in the same order (i.e., BL ≠ BL’). Even more, BL ≠ LB and BL’ ≠ L’B. 
				</blockquote>
			</ul>
			</div>
			<br><br>

		<a class="btn btn-blue center" data-toggle="collapse" data-target="#i29">Reconvening in Whole Class Discussion &raquo;</a>
					<br>
					<div class="accordion-body collapse" id = "i29">
						<ul>
						<blockquote>
						Again, students’ main difficulties in this task are:				
						<br>
						<ul style="padding-left:35px">
							<li>Using the outputs from the “make taller” transformation as inputs in the “lean” transformation to find the correct matrix for the “lean” transformation</li>
							<li>Realizing the order of matrix multiplication that matches Pat and Jamie’s approach is multiplying the matrix B on the left by “lean” matrix L</li>
						</ul>
						<br>
						These common challenges serve as valuable points for whole class discussion that provide students with opportunities to consider ways to coordinate input and output vectors across multiple transformations, as well as how to interpret matrix multiplication as composition of functions. The instructor should, if possible, find representatives of student work to discuss in whole class: one that tried BL’ = A, and one that tried LB = A. 
						<br>


					<a class="btn btn-warning center" data-toggle="collapse" data-target="#t63">Example Discussion Question:&raquo;</a>	
					<div class="accordion-body collapse" id = "t63">
						<blockquote style="background-color:#F8F8F8;">
						“Ok here we have two groups that represent the two main approaches I saw out there: it looks like this group decided on BL’ = A as Pat and Jamie’s approach, and the other decided on LB = A. Can both approaches be correct? If not, how to do we decide? 
						<br><br>
						<b>Note:</b> Some students may not have experience multiplying matrices. If this is the case, it is often useful to discuss matrix multiplication as an extension of the product of a matrix and a vector. Extending this, the product of the two matrices is the concatenation of the individual matrix-vector products. While it is not the only approach the instructor may choose to discuss matrix multiplication, this discussion does rely on the students’ current ways of operating with matrices and vectors (i.e., making use of their knowledge of A <b>x=b</b> to understand AX=B as A[<b>x<sub>1</sub> x<sub>2</sub></b>]=[<b>b<sub>1</sub> b<sub>2</sub></b>]. In a more proof-oriented course, the instructor may view this discussion as insufficient or unnecessary. 
						</blockquote>
					</div>
					</blockquote>
					</ul>
					</div>


<a class="btn btn-blue center" data-toggle="collapse" data-target="#i25">Emphasizing the Connection to Composition of Functions&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i25">
			<ul>
			<blockquote>
				<p>Emphasizing the Connection to Composition of Functions</p>
				
				The instructor should wrap up Task 3 by connecting students’ work to the concept of function composition.  Through this mini-lecture, the instructor can use students’ work to highlight how, in Task 1, Ax=y was interpreted as the linear transformation defined by A, acting on the input vector x to produce the output vector y. Now, in Pat and Jamie’s approach, that vector x would first be acted on by the matrix transformation B, then that result (let’s call it z, so Bx = z) would be acted on by L to produce y (so Lz = y). In other words: 
				<br><br>
				<ul style="padding-left:35px">
					<li> x could be turned into y in one step via A: Ax=y</li>
					<li>x could be turned into y in two steps via B and L: L(Bx)=L(z)=y
						<ul style="padding-left:60px">
							<li>Therefore, Ax=y and LBx=y
							</li>
							<li>This works for any input vector x, implying A=LB.
							</li>
						</ul>
					</li>
				</ul>	
				<br>
				The instructor should state that, when considering matrices as linear transformations, matrix multiplication is interpreted as a composition of functions.
				<br><br>
				<ul style="padding-left:35px">
					<li>Instructors may wish to bring up a few examples from high school algebra to remind students that they are familiar with how composition of functions works: 
						<ul style="padding-left:60px">
							<li>f(x)=x+4 and g(x)=x<sup>2</sup>: f(g(2))=f(4)=8 but g(f(2))=g(6)=36. Thus f(g(x))≠g(f(x)) for every x in the domain.
							</li>
							<li>Some classes may choose to further emphasize that the codomain of the first function serves as the domain for the second function.  This gives a nice rationale (in terms of linear transformations) for why an m x n matrix can only be multiplied by an n x p matrix. 
							</li>					
						</ul>	
					</li>
					
			</blockquote>
			</ul>
			</div>
	

			<a class="btn btn-blue center" data-toggle="collapse" data-target="#i30">Defining Commutative and Noncommutative Matrices &raquo;</a>
					<br>
					<div class="accordion-body collapse" id = "i30">
						<ul>
						<blockquote>
							Finally, the instructor should define the term commutative: We say two matrices D and F are commutative if DF = FD. If not, we say F and D are not commutative. Students should connect this to noncommutativity of function composition as well. 
						</blockquote>
						</ul>
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
