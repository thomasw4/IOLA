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

    <title>IOLA Unit 1 Task 4</title>

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
							<a href="media/unit1/u1_task4.pdf">.pdf Download</a> <br><a href="media/unit1/u1_task4.doc">.doc Download</a>
						</blockquote>
					</ul>
				</div>
			<div class="accordion" id="summary">		  
		<h2 class="text">Task 4: Creating Examples</h2>		
		<br>
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#handout">Handout 4: Linear Independence and Dependence &raquo;</a>
			<div class="accordion-body collapse" id = "handout">
				<ul>
					<blockquote>
						<object data="media/unit1/handouts/u1_handout4.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit1/handouts/u1_handout4.pdf">click here to download the handout.</a></p>  
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
					<p class="lead" >Main Goal: To develop conjectures about linear dependence/independence. Secondary goals are to develop generalizations about span and about connections between span and linear (in)dependence.  </p>
					<p>By the end of the lesson students should be able to:</p>
					<ul>
						<li>Develop a travel interpretation of a non-zero scalar times the zero vector (e.g., $4\begin{bmatrix} 0\\0 \end{bmatrix}$] means riding a stationary bike for 4 hours)</li>
						<li>Develop generalized notions of linear independence and dependence in $R^n$
							<ul>
								<br>
								<li>
								Essential generalizations: 
								</li>
								<ul>
									<li>If a set contains two vectors that are scalar multiples of each other, then the set is linearly dependent.</li>
									<li>If at least one vector in a set is a linear combination of the other vectors in the set, then the set is linearly dependent.</li>
									<li>Any set of vectors from $R^n$ containing more than n vectors is linearly dependent.</li>
									<li>Any set containing the zero vector is linearly dependent.</li>
									<li>NOTE: The latter three generalizations are consistent with Theorems 7-9 of Chapter 1 of Lay (2007).</li>
								</ul>
								<br>
								<li>
								Possible generalizations:
								<ul>
									<li>Any set of vectors from $R^n$ with fewer than n vectors cannot span $R^n$</li>
									<li>A set of n vectors in $R^n$ spans $R^n$ if and only if the set is linearly independent.</li>
									<li>NOTE: These could support early notions of basis and help form a foundation for the Invertible Matrix Theorem.</li>
								</ul>
								</li>
								<br>
							</ul>
						</li>
						<li>Develop an intellectual need for efficient computational strategies and sophisticated solution techniques when working with vector equations and systems of equations</li>
					</ul>
					<br>
					<p>The instructor should:</p>
					<ul>
						<li>Assist students in writing out their conjectures in more formal ways</li>
						<li>It is essential to discuss with the students why these are true, but the level of rigor with which you discuss the proofs of the conjectures depends on the level of your course. </li>
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
							<li>The main goal of Handout 4 - Linear Independence and Dependence: Creating Examples - is to guide students to develop generalizations and supporting justifications regarding linear independence and dependence for any given set of vectors, shifting away from a reliance on the Magic Carpet Ride scenario.</li>
							<li>Although worded in terms of $[]^2$ and $[]^3$, the students' reasoning behind the strategies should inform the development of generalizations that extend to any $[]^n$ as they work on and discuss Handout 4.</li>
							<li>A secondary goal is to develop an intellectual need for efficient computational strategies and sophisticated solution techniques.</li>							
						</ul>
						<br>
						<p>Rationale</p>
						<ul>
							<li>Handout 4 asks students to generate sets of vectors that satisfy three varying constraints: number of vectors (2, 3, or 4), vector space ($[]^2$ or $[]^3$), and linear dependence or linear independence. These were chosen to provide a wide enough variety of situations that students would have a good opportunity to develop the essential generalizations. The prompts purposefully ask for examples from $[]^2$ and $[]^3$ because students have already developed some intuition for vectors in 2 and 3 dimensions because of their work on Tasks 1-3 (and perhaps from other courses like physics). </li><br>
						</ul>
					</blockquote>
				</ul>
			</div>
		</ul>
		<ul>
			<a class="btn btn-primary center" data-toggle="collapse" data-target="#lds">Classifying Types of Linearly Dependent Sets: &raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "lds">
				<ul>
					<blockquote>
						To communicate more easily in this document, we developed abbreviated names for the types of generalizations we expect students to make about linearly dependent sets of vectors. We do not intend for the instructor to use these names in class discussion. It is merely for coherence and conciseness within this document that we use the following names. These classifications align with the essential generalizations described in the Overview for Task 4.
						<br><br>
						<ul>
							<li>Scalar multiple dependence: when a set contains two or more vectors that are scalar multiples of each other (e.g., $\{\begin{bmatrix} 1\\2 \end{bmatrix},\begin{bmatrix} 2\\4 \end{bmatrix}\}$).</li>
							<li>Zero vector dependence: when the set includes the zero vector (e.g., $\{\begin{bmatrix} 1\\2 \end{bmatrix},\begin{bmatrix} 0\\0 \end{bmatrix},\begin{bmatrix} -5\\0.4 \end{bmatrix}\}$).</li>
							<li>Linear combination dependence: when a vector can be written as a linear combination of the other vectors in the set (e.g., $\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}$).</li>
							<li>"Too many vectors" dependence: When the cardinality of the set of vectors exceeds the dimension of the vector space (i.e., a set of 3 vectors in $[]^2$).</li>
							<br>
							<li>Note: These classifications are not mutually exclusive. </li>
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
						This section highlights examples of responses to Handout 4 and points out the types of linear dependence that the examples satisfy.  It also points out instances in which groups used sets of vectors from previous tasks in the MCR Unit. 
						<br><br>
						<!-- Carousel ================================================== -->
						<div id="myCarousel" class="carousel slide">
						  <!-- Indicators -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/u1t4/1.jpg" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Group 1: (1/5)</p>
									<em>Linear Dependence:</em> Every row seems to satisfy scalar multiple dependence. In rows 1 and 3, however, the scalar multiple of the first vector is 1 so, set theoretically, each set only has one element and does not satisfy the constraints required by Handout 4. In row 2, the scalar is -1 and in rows 4 and 5, the scalar is 2, making these examples correct.
									<br>
									<em>Linear Independence:</em> Row 1contains a correct example. Row 2 contains each vector from the first row as well as the vector <1, 1>. This set satisfies "too many vectors" dependence and, so, is incorrect. Row 4 seems incomplete, since there are only two vectors written. Row 5 has been left blank. This may be because Group 1 was unable to complete the handout in time or because no such example is possible.
									<br>
									<em>Generalizations:</em> Group 1 wrote, "At least one vector in the set is a multiple of another vector" under the first column and "No vector is a multiple of another in the set" under the LI column. This first statement is sufficient but not necessary for linear dependence, whereas the second statement is necessary but not sufficient for linear independence.						
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t4/2.jpg"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Group 2: (2/5)</p>
									<em>Linear Dependence:</em> The sets in rows 1 and 3 satisfy scalar multiple dependence. The group wrote an algebraic formula in row 3 that generally represents scalar multiple dependence. Row 4 contains the vectors from Task 3. Row 5 is left blank. It is seems that Group 2 did not have enough time to finish because row 5 is also blank in the linear independence column.
									<br>
									<em>Linear Independence:</em> Rows 1 and 3 contain correct examples of linearly independent sets. Row 2 contains three copies of the zero vector. The fourth row contains the vectors from the third row and also the zero vector. The examples in rows 2 and 4 are incorrect because they satisfy zero vector dependence. 
									<br>
									<em>Generalizations:</em> Group 2's work in row 3 of the linearly dependent column indicates that they have developed a general formula for such a set of vectors: $\{\begin{bmatrix} A\\B\\C \end{bmatrix},\begin{bmatrix} A_x\\B_x\\C_x \end{bmatrix}\}$.
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t4/3.jpg"/ alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Group 3: (3/5)</p>
									<em>Linear Dependence:</em> Rows 1 and 3 satisfy scalar multiple dependence. Row 4 contains three vectors that satisfy linear combination dependence - with components arranged as though the students counted from 1 to 9. Row 5 contains four vectors that satisfy "too many vectors" dependence. All of the sets are indeed linearly dependent. 
									<br>
									<em>Linear Independence:</em> Rows 1 and 3 contain two vectors that are linearly independent. It is not immediately clear how the students know that these sets are in fact linearly independent. Rows 2 and 4 have the first two vectors from the corresponding sets in the LD columns, but the students have replaced each of the third vectors with the zero vector. These two sets are not linearly independent because they each contain the zero vector and, so, are incorrect responses.
							  </div>
							</div>
							</div>
							<div class="item">
							  <img src="img/u1t4/4.jpg"/ alt="Student thinking 4">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Group 4:  (4/5)</p>
									<em>Linear Dependence:</em> Every row satisfies scalar multiple linear dependence.
									<br>
									<em>Linear Independence:</em> Rows 1, 3, and 4 have sets of vectors with integer components, some of which correspond to the components of the vectors in the LD column. Notice that Group 4 used their general rule (below) on rows 2 and 5 as is indicated by their response, "No Soln."
									<br>
									<em>Generalization:</em> Group 4 wrote, "If the number of vectors exceeds the number of dimensions, then the set is linearly dependent."
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u1t4/5.jpg"/ alt="Student thinking 5">
							  <div class="container">
								<div class="carousel-caption">
								  <p>Group 5:  (5/5)</p>
									<em>Linear Dependence:</em> This group presented their responses as equations with the zero vector on the right hand side (except in row 5, which is a linear combination of vectors that is equivalent to the zero vector). The sets in rows 1-3 and row 5 satisfy scalar multiple dependence. Row 4 contains the vectors from Task 3. While correct examples would have the vectors written as elements in a set, this group's work is useful because the vector equations show how they determined the sets were linearly dependent and can be leveraged to relate students' examples to the definitions of linear dependence and linear independence. 
									<br>
									<em>Linear Independence:</em> In rows 1 and 3, these students wrote sets of two vectors that were not scalar multiples of each other. Row 4 contains three empty brackets, which likely indicate that the students did not have time to complete the handout. Rows 2 and 5 read NA. It is not clear whether Group 5 developed a generalization for the "too many vectors" dependence.
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
				Before the students begin work on Handout 4, the instructor may choose to put the formal definitions of linear independence and linear dependence on the class whiteboard or projector screen.  <br><br>
				To get the students started on Handout 4, the instructor could remind them to make use of the formal definitions, geometric interpretations, and/or travel interpretations to assist them in creating their examples.<br><br>
				The instructor should ask students to try to identify several strategies for determining the linear (in)dependence of a set of vectors as they generate their examples. The reasoning behind the strategies could inform the development of generalizations as they work on and discuss Handout 4.
				<br><br>
				
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i1">Working in small groups  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i1" ">
					<ul>
						<blockquote>
							<p>Working in small groups </p>
							<br>
							As students work on Handout 4 in small groups, the instructor should look for examples from the groups that would be good to include during whole class discussion:
							<br><br>
							<ul>
								<li>One thing to look for is students' examples that illustrate various types of linear dependence:</li><br>
								<ul>
									<li><em>Scalar multiple dependence:</em> when a set contains two or more vectors that are scalar multiples of each other (e.g., $\{\begin{bmatrix} 1\\2 \end{bmatrix},\begin{bmatrix} 2\\4 \end{bmatrix}\}$  or $\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 5\\5\\5 \end{bmatrix},\begin{bmatrix} -4\\-4\\-4 \end{bmatrix}\}$).</li>
									<li><em>Zero vector dependence:</em> when the set includes the zero vector (e.g., $\{\begin{bmatrix} 1\\2 \end{bmatrix},\begin{bmatrix} 0\\0 \end{bmatrix},\begin{bmatrix} -5\\0.4 \end{bmatrix}\}$).</li>
									<li><em>Linear combination dependence:</em> when a vector can be written as a linear combination of the other vectors in the set (e.g., $\{\begin{bmatrix} 1\\1\\1 \end{bmatrix},\begin{bmatrix} 6\\3\\8 \end{bmatrix},\begin{bmatrix} 4\\1\\6 \end{bmatrix}\}$).</li>
								</ul><br>
								<li>Another thing to look for is examples from student work that contradict another group's work. For instance, one group says that having a set of 3 vectors in $[]^2$ that is linearly independent is impossible and another group gives an example of such a set (this is the most common example of a contradictory case).  This will allow the instructor to select specific students to debate their reasoning, in turn, producing a richer and more productive whole-class discussion.</li>
								<br>
								<li>Finally, the instructor should look for student thinking that is unexpected and new to him/her. </li>
							</ul>
							<br>
							NOTE: Handout 4 tends to be more successful if students do not have the chance to consult their linear algebra textbook as they complete the handout. Without the book, the students must both (a) generate their own examples, and (b) generate their own conjectures about linear (in)dependent sets. 
							<br><br>
							<center><img src="img/u1t4/i1.jpg" width=450 height=300></center><br><br>
							Example: This group consulted their textbook (Lay, 2009), as indicated by their references to Theorems 8 and 9. While the group's work is correct, consulting the book only allowed them to practice using the theorems, rather than to practice generating theorems that are sensible to them based on their own mathematical experiences and understanding.
							<br><br>
							The instructor should keep in mind that some groups may be unsuccessful at generating some of the examples requested in Handout 4.  While only two examples are impossible to generate (3 linearly independent vectors in $[]^2$ and 4 linearly independent vectors in $[]^3$), students may have difficulty generating examples in other cells where it is possible.  The instructor might find it beneficial to talk with students when they have empty blanks - did they run out of time? Did they think those examples were too hard to find, or did they think there was no solution?
							<br><br>
							Finally, the instructor should encourage students to keep track of the strategies used to generate their examples. As students use these to write generalizations (that are conjectural), the instructor could encourage them to think about how they might determine if their conjectures are true (i.e., develop some sort of proof of each conjecture). 
							<br>
						</blockquote>
					</ul>
				</div>
				<br>

				<a class="btn btn-success center" data-toggle="collapse" data-target="#i2">Sharing examples during whole class discussion  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i2" ">
					<ul>
						<blockquote>
							<p>Discussing different solution strategies during whole class discussion</p>
							Facilitating the sharing of examples can seem daunting to an instructor because every group will (most likely) have different examples, and there are 10 cells to complete - plus generalizations - on the handout.  Instructors should not feel as though they must have every example from every cell shared and explained in whole class discussion.  Rather, the instructor has the freedom to make choices about which examples to discuss as a class and how to do so. 
							<br><br>
							The following two example discussion questions can be used multiple times as the instructor leads the class in discussing Handout 4. 
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#na">Example Discussion Question &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "na"">
									<ul>
										<blockquote>
											Look around to your classmates' examples.  Do you see any that seem like a different type of example than what your group did for any given cell?
											<br><br>
											A question such as this encourages students to be invested in each other's mathematics. It also helps the instructor gauge students' understanding of the content and streamline which aspects of Handout 4 to dwell on and which lead less discussion.
										</blockquote>
									</ul>
								</div>
							</ul>
							<br>							
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#na2">Example Discussion Question &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "na2"">
									<ul>
										<blockquote>
											Look around to your classmates' examples.  Do you see any that seem like that group used a different strategy to generate its example than what your group did for any given cell?
											<br><br>
											Additionally, as students listen to each other explain why an example is valid, they should also begin to be able to identify instances in which they used a different approach than their peers.
										</blockquote>
									</ul>
								</div>
							</ul>	
							<br>
							<p>Below is a summary of key points of Handout 4, organized by row: </p>
							<br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#r1">Row 1 (2 vectors in $[]^2$) &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "r1"">
									<ul>
										<blockquote>
											Because they have seen examples of each, students normally generate examples in this row relatively easily. 
											<br><br>
											<ul>
												<li>The most common example for LD is 2 nonzero vectors that are scalar multiples of each other (scalar multiple dependence), and the most common for LI is 2 vectors that are not scalar multiples of each other.</li>
												<br>
												<li>The instructor should ask students to provide justifications for why these examples are valid. He/she may also encourage students to share more than one type of justification, such as: </li>
												<br>
												<ul>
													<li>Definition: The set $\{\begin{bmatrix} 5\\3 \end{bmatrix},\begin{bmatrix} 10\\6 \end{bmatrix}\}$ is linearly dependent because there exists nonzero solutions, such as $a = 2$ and $b = -1$, to the equation $a\begin{bmatrix} 5\\3 \end{bmatrix}+b\begin{bmatrix} 10\\6 \end{bmatrix}=\begin{bmatrix} 0\\0 \end{bmatrix}$</li>
													<li>Travel: The set $\{\begin{bmatrix} 5\\3 \end{bmatrix},\begin{bmatrix} 10\\6 \end{bmatrix}\}$  is linearly dependent because I can ride a mode of transportation defined by $\begin{bmatrix} 5\\3 \end{bmatrix}$ in the forward direction for 2 hours and a mode of transportation defined by $\begin{bmatrix} 10\\6 \end{bmatrix}$ in reverse for an hour, and return back home. </li>
													<li>Geometric: The set $\{\begin{bmatrix} 5\\3 \end{bmatrix},\begin{bmatrix} 10\\6 \end{bmatrix}\}$ is linearly dependent because the vectors in the set lie on the same line. </li>
												</ul>
												<br>
												<li>This could set the bar for what counts as valid justifications in whole class discussion as students explain the remainder of the handout examples. It also allows students to share diverse strategies, which can lay the foundation for generalizations.</li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>	
							<br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#r2">Row 2 (3 vectors in $[]^2$) &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "r2"">
									<ul>
										<blockquote>
											In the linear dependence column, row 2 provides the opportunity for more variety in examples than in row 1:
											<br><br>
											<ul>
												<li>Students commonly generate examples of scalar multiple dependence or of linear combination dependence. </li>
												<li>It is less common for students to generate examples that contain the zero vector. If it does occur here, it can lay a nice foundation for the generalization, "Any set containing the zero vector is linearly dependent."</li>
											</ul>
											<br>
											In the linear independence column, row 2 confronts students with trying to create an example that is not possible.
											<br><br>
											<ul>
												<li>It is often the case, however, that students still feel as though they have successfully generated an example. The instructor should be aware of which groups have and have not generated an example so that they may have students debate their reasoning (e.g., students were asked to debate Groups 3 and 4's examples because they could not both be correct). </li>
												<li>By the end of this discussion, there should at least be a conjecture out that any set in $[]^2$ of more than 2 vectors has to be linearly dependent, hopefully generated by the students' reasoning. This lays a foundation for the broader generalization, "any set of vectors from $[]^n$ containing more than n vectors is linearly dependent."</li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>	
							<br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#r3">Row 3 (2 vectors in $[]^3$) &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "r3"">
									<ul>
										<blockquote>
											This row is similar to Row 1, except that the vectors are in $[]^3$ rather than $[]^2$. Instructors may want to address that shift in dimension directly, if needed. That is, this row could be useful for allowing students to practice visualizing and reasoning with vectors in $[]^3$, especially when they generate linearly independent sets. Otherwise, this row can be skimmed over and treated more lightly than the other rows. 
										</blockquote>
									</ul>
								</div>
							</ul>	
							<br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#r4">Row 4 (3 vectors in $[]^3$) &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "r4"">
									<ul>
										<blockquote>
											Here, students may have a harder time being sure that the examples they create (or that the other groups create) are indeed linearly independent or linearly dependent. As such, many rely on using systems of equations to try to confirm that a generated set is either linearly independent or linearly dependent. The instructor could hint at how cumbersome and annoying it is to go through this process. This starts to lay the foundation for an intellectual need for solution strategies such as Gaussian elimination.
										</blockquote>
									</ul>
								</div>
							</ul>	
							<br>	
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#r5">Row 5 (4 vectors in $[]^3$) &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "r5"">
									<ul>
										<blockquote>
											Depending on time, this row can receive a lighter treatment. 
											<br><br>
											For the linearly dependent column: 
											<br><br>
											<ul>
												<li>Examples using scalar multiple or linear combination dependence are most common</li>
												<li>Students may suggest examples using zero vector dependence or "too many vectors" dependence, based on discussions about Row 3</li>
											</ul>
											<br>
											For the linearly independent column:
											<br><br>
											<ul>
												<li>In light of Row 3, students should also be able to use "too many vectors" dependence to explain why no such set of vectors is linearly independent. </li>
											</ul>
										</blockquote>
									</ul>
								</div>
							</ul>	
							<ul>
						</blockquote>
					</ul>
				</div>
				<br>					
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i3">Making generalizations  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i3" ">
					<ul>
						<blockquote>				
							<p>Making generalizations </p>				
							The instructor should elicit student-created generalizations that are inspired by the discussion of the their examples from Rows 1-5. 
							<br><br>
							<ul>
								<li>All of these generalizations should be written on the board in one place so that students may organize their results. </li>
								<li>There is flexibility in how to write these up on the board - organically as the class progresses through the example cells, at the end once the examples are discussed, etc.  The instructor should choose what feels natural during class that day.</li>
							</ul>
							<br>
							The degree to which students create generalizations - and their confidence in the generalizations' validity - varies between students as well as across the specific generalizations. 
							<br><br>
							The four generalizations listed below represent typical responses.  They are considered to be essential generalizations (i.e., if students do not generate them, the instructor should suggest them for consideration): 
							<br><br>
							<ul>
								<li>1.	If a set contains two vectors that are scalar multiples of each other, then the set is linearly dependent.</li>
								<li>2.	If at least one vector in a set is a linear combination of the other vectors in the set, then the set is linearly dependent.</li>
								<li>3.	Any set of vectors from $R^n$ containing more than n vectors is linearly dependent.</li>
								<li>4.	Any set containing the zero vector is linearly dependent.</li><br>
								<li>NOTE: The latter three generalizations are consistent with Theorems 7-9 of Chapter 1 of Lay (2007). As such, this task, coupled with Task 3, can replace a textbook section on linear (in)dependence. </li><br>
							</ul>
							<br>
							Sometimes students' wording of the conjectures is not of this form. For example, #1 might be written as "A set of vectors is linearly dependent if there are 2 vectors that lie on the same line," or #3 might be written as "If the number of vectors is greater than the number of dimensions then the set is LD." Students might also generate a specific rather than general case of a generalization. For instance, "no two vectors add to be another" can be discussed during whole class discussion to expand to #2. 
							<br><br>
							It is up to the instructor to determine what will count as justifications for the various generalizations that the class offers conjecturally.  What counts as a "convincing argument," i.e., a proof, varies depending on the level of rigor expected in a given class. See p. 44 for examples of justifications given by students in whole class discussion for generalizations #3-4 mentioned above. 
							<br><br>
							Finally, the instructor could also have students discuss any generalizations that they made that they now think are invalid:
							<br><br>
							<ul>
								<a class="btn btn-warning center" data-toggle="collapse" data-target="#t6">Example Discussion Question: &raquo;</a>
								<br>
								<div class="accordion-body collapse" id = "t6"">
									<ul>
										<blockquote style="background-color:#F8F8F8;">
											After discussing each other's examples, do you think any of the generalizations that your group or other groups conjectured are invalid?  If so, which one and why?
											<br><br>
											For instance, Group 3 in the "Student Thinking" section wrote, "No vector is a multiple of another in the set" as a generalization for linear independence. This is a necessary but not sufficient condition to guarantee linear independence. 
										</blockquote>
									</ul>
								</div>
							</ul>
						</blockquote>
					</ul>
				</div>		
				<br>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i4">Developing an intellectual need for sophisticated solution techniques  &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i4" ">
					<ul>
						<blockquote>				
							<p>Developing an intellectual need for sophisticated solution techniques </p>				
							A final learning goal of Task 4 is the development of an intellectual need for an efficient computational strategies and sophisticated solution techniques. It is common for students to assume that if by inspection they cannot immediately "see" the dependence relation among a set of vectors in $R^n$ for $n \geq 3$, then the set must be linearly independent. The instructor is in the position to draw attention to this, stating that sometimes it is difficult to be certain from inspection alone whether or not a set of vectors is linearly dependent. Thus, they needed a more rigorous solution strategy. 
							<br><br>
							Example Transition Statement, given by the instructor:
							<br><br>
							<ul>
								<li>"One aspect of this Handout is that when we got to the certain part of the table, it's just hard to check if the examples are correct. Some of you were strategic about the way you picked your vectors, and some picked randomly. But it wasn't always easy to check whether they're linearly independent or dependent. That will be even truer as we work with larger sets and with vectors in R4 and higher. So our next goal is to develop an efficient computational method to check if sets are linear independent or dependent, and if certain vectors are in the span of a given set." </li>
								<br>
								<li>Based on this need to check rigorously and efficiently for properties of sets of vectors, the instructor can transition out of the Magic Carpet Ride instructional sequence into a section on the method of row-reduction and Gaussian elimination. Rather than simply being the next chapter or the next unit for study, Gaussian elimination can germinate from a genuine need within this classroom: a need to be certain that a set of vectors is or is not linear independent, and a need for an efficient computational strategy for solving large systems of equations.</li>
							</ul>
						</blockquote>
					</ul>
				</div>	
				<br>
				<a class="btn btn-success center" data-toggle="collapse" data-target="#i5">Extension of Task 4: Span   &raquo;</a>
				<br>
				<div class="accordion-body collapse" id = "i5" ">
					<ul>
						<blockquote>				
							<p>Optional Extension of Task 4: Span  </p>				
							If time permits in a given classroom, an instructor may wish to have students determine the span of the given set for the examples generated in Handout 4.  This provides further practice with span.  It also may lay a foundation for students to make conjectures regarding span, or regarding the relationship between span and linear (in)dependence for certain types of sets of vectors. 
							<br><br>
							Alternatively, this exercise could be given as part of a homework assignment.
						</blockquote>
					</ul>
				</div>					
			</div>		
		</ul>

		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#handout2">Handout 4: Linear Independence and Dependence: Creating Examples &raquo;</a>
			<div class="accordion-body collapse" id = "handout2">
				<ul>
					<blockquote>
						<object data="media/unit1/handouts/u1_handout4_2.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit1/handouts/u1_handout3.pdf">click here to download the handout.</a></p>  
						</object>					
					</blockquote>
				</ul>
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
							<source src="media/unit1/task4/Justin_Day_5_3_in_R2_ceiling_clip.mp4" type='video/mp4' />
						</video>
						<br>
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
