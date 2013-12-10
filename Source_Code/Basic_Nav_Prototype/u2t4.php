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

    <title>Unit 2 Task 4 - IOLA</title>

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
	
<?php include 'sidebtn.php' ?>
    <div class="container">

      <div class="jumbotron">
		<div id="sidr" class="hidden-print">
			<?php $unit = 'u2'; $task = 't4'; include 'sidebar.php' ?>
		</div>
	
        <h1 class="text-center">Unit 2: Italicizing N Task Sequence</h1>
		</div>
		<div class="jumbotron">
			<a class="expandcollapse btn  btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
			<a class="btn btn-gray center pull-right" style="margin-right:15px"data-toggle="collapse" data-target="#t">Print Lesson &raquo;</a>
				<div class="accordion-body collapse pull-right" id = "t">
					<ul>
						<blockquote>
							<a href="media/unit2/docs/u2t4.pdf">.pdf Download</a> <br><a href="media/unit2/docs/u2t4.docx">.docx Download</a>
						</blockquote>
					</ul>
				</div>
			<div class="accordion" id="summary">		  
		<h2 class="text">Task 4: Getting Back to N</h2>
		<br>
		<ul>
			<a class="btn btn-warning center" data-toggle="collapse" data-target="#handout1">Handout 4: Getting Back to N &raquo;</a>
			<div class="accordion-body collapse" id = "handout1">
				<ul>
					<blockquote>
						<object data="media/unit2/handouts/u2_handout4.pdf" type="application/pdf" width="100%" height="800">				 
							<p>It appears you don't have a PDF plugin for this browser!
							<a href="media/unit2/handouts/u2_handout4.pdf">click here to download the handout.</a></p>  
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
				<p class="lead" >Goal is to interpret an inverse transformation as “undoing” the original transformation and the identity transformation as the “do nothing” transformation</p>
				<p>By the end of the lesson students should be able to:</p>
				<ul>
					<li>Understand the inverse of a matrix as a transformation that “undoes” the transformation corresponding to the original matrix</li>
					<li>Explain why the inverse of a composition of transformations “changes the order” in which the transformations are “undone” and coordinate that with why (AB)<sup>-1</sup>= B<sup>-1</sup>A<sup>-1</sup> </li>
					<li>Interpret a transformation composed with its inverse as the identity transformation and coordinate that with the interpretation of a matrix multiplied by its inverse as the identity matrix</li>
					<li>Identify the identity transformation as the “do nothing” transformation and coordinate that with an interpretation of the identity matrix</li>
				</ul>
				<br>
				<p>The instructor should:</p>
				<ul>
					<li>Label the matrix that “undoes” the original transformation as the inverse (e.g., C = A<sup>-1</sup>) after students have found it</li>
					<li>Define invertible matrix and transformation, inverse, identity matrix and transformation</li>	
					<li>NOT offer a formula or procedure for finding the inverse of a matrix
					</li>	
					<li>Use diagrams related to linear transformations to help illustrate(AB)<sup>-1</sup> = B<sup>-1</sup>A<sup>-1</sup> and AA<sup>-1</sup> = A<sup>-1</sup>A = 1
					</li>			
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
						Develop the idea of an inverse as “undoing” the original transformation.
						<br><br>
						Develop reasoning about matrix multiplication as a composition of linear transformations, as well as the inverse of a composition of linear transformations. 
						<br><br>
						 Determine a matrix C that will transform the letter on the right back into the letter on the left; that is, from the 16-pt italicized N to the original N in two ways: through one direct transformation and through Pat and Jamie’s method (i.e., in two steps). 

						<br><br>
						<p class="lead">Rationale</p>
						To the expert, this task introduces the notion of inverse transformations. While this naturally follows from students’ work on the previous tasks because investigating the Pat and Jamie approach to “getting back to the N” reiterates their work regarding function composition and matrix multiplication, the task is by no means trivial for students.
						<br><br>					
						The design of this task is consistent with Oehrtman et al.’s (2008) observation that more sophisticated, process-oriented views of an inverse function coincide with conceiving of it as the function that undoes the action of the original function.  We argue that this promotes richer conceptual understanding of both inverses and of matrix transformations as functions than would a more procedural approach focused on determining the associated matrix inverse via a memorized formula, and that this work is important as a precursor to the development of a more general method of determining inverses in the context of functions. 
						<br><br>
						Additionally, this task requires students to consider the importance of order in function composition and matrix multiplication when one or more of the functions under consideration has the action of “undoing” the action of a previous transformation.
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
							  <img src="img/u2t4/1.png" style="height:430px" alt="Student thinking 1">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 1</em></p>
									This group used a generic “a, b, c, d” matrix with four parameter entries (along with two known input-output pairs) to generate a system of four equations with four unknowns. This allowed the group to explicitly determine the entries of the matrix C. Notice that it is not immediately clear that this is the general matrix C that “undoes” the original matrix A, although this matrix does satisfy the two chosen input-output pairs. This can be connected back to the discussion of the uniqueness of a linear transformation and its determination under a given basis
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t4/2.png"/ alt="Student thinking 2">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 2</em></p>
									This student work illustrates a naming scheme developed during the class, in which B, L, and A are the matrices from before (“Bigger,” “Lean,” and their composition, respectively), and then the arrows going the opposite directions correspond to the transformations UL, UB, and UA, which “undo” the original transformations defined by L, B, and A.  Note the definition and symbolism for inverses was not used here; this was because “inverse” had yet to be defined in class.  When it is time to introduce that definition, the teacher can connect to students’ current ways of reasoning by leveraging this work into the formal notation and definitions. The same group used the notation “U<sub>A</sub>Ax = x and AU<sub>A</sub>b = b” to show that A composed with its “undoing” matrix U<sub>S</sub> in either order leaves the input vector unchanged.  

								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t4/3.png" style="height:430px" alt="Student thinking 3">
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 3</em></p>
									This example of student work shows the correct order of computation to find the inverses for Pat and Jamie’s approach. The student wrote, “unskew à shrink” to mean you first undo the lean and then you undo making it bigger. This student group had also computed “shrink à unskew” and shown that the approach was possible but that the corresponding matrices would not be the same.  This can lead to a discussion about commutativity and the connection to function composition – in that, although it is possible to do the steps in the opposite order, the new f and g functions would not be the same as the old to obtain the same final result
								</div>
							  </div>
							</div>
							<div class="item">
							  <img src="img/u2t4/4.png" style="height:400px" alt="Student thinking 4">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 4</em></p>
									This group’s approach for generating U<sub>L</sub> and U<sub>B</sub> was similar to Group 1’s approach for U<sub>A</sub>. This shows how Group 3 might have generated their matrices.
								</div>
							  </div>
							</div>


							<div class="item">
							  <img src="img/u2t4/5.png" style="height:400px; width:100%" alt="Student thinking 5">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 5</em></p>
									This group’s work shows that they confirmed that the product of the matrix A from Task 1 and their newfound matrix “U<sub>A</sub>” is the identity matrix. 
								</div>
							  </div>
							</div>

							<div class="item">
							  <img src="img/u2t4/6.png" style="height:400px; width:100%" alt="Student thinking 6">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Group 6</em></p>
									After calculating the two matrices that would “undo lean” and “undo bigger,” Group 5 began to generalize about which matrix entries corresponded to specific geometric changes to the letters. The students wrote “Adjusts shift” for the upper right upper-right -¼ entry of U<sub>L</sub> and “Adjusts height” for the lower right entry of U<sub>B</sub>. This type of approach can be used in whole class discussion to discuss perceived relationships between the entries in a matrix and its effect when multiplied with specific vectors.
								</div>
							  </div>
							</div>


					<div class="item">
							  <img src="img/u2t4/7.png" style="height:400px; width:100%" alt="Student thinking ">
							   
							  <div class="container">
								<div class="carousel-caption">
								  <p><em>Individual 1</em></p>
									This student’s written response to a homework task details his attempt to find the matrix UL by changing specific entries in the L matrix and testing the new matrix by multiplying it with known vectors. Specifically, he used reciprocals to change the entries. This is similar to Group 6’s attempt to attribute specific properties of geometric change to the various parts of the matrix.
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
				<ul>
				<blockquote>
				<p class="lead">Getting Started with the Task</p>
				The students should be able to engage in the task relatively easily, although finding the explicit matrices to map the italicized N to the original N is typically more difficult than Tasks 1 and 3. One reason for this difficulty is that the vertical components of the italicized N are no longer scalar multiples of a standard basis vector, but are skewed, causing it to be more difficult for students to “Guess-and-Check” the inverse matrices   
				<br><br>	
				The instructor should draw on students’ reasoning that the transformation defined by C “undoes” the effect of the transformation defined by A, and support this reasoning by using notation such as C = U<sub>A</sub>, explaining that U<sub>A</sub> stands for “undoes A.” It need not be the case that this matrix is called “U<sub>A</sub>,” but this notation works well when the instructors move toward formally defining the inverse matrix. In any case, the instructor should discuss what notation the students might adopt throughout the Task
				<br><br>			
		
			<a class="btn btn-success center" data-toggle="collapse" data-target="#i22">Working in small groups towards a solution &raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i22">
			<ul>
			<blockquote>
				<p>Working in small groups towards a solution</p>	
				One thing for the instructor to keep in mind during small group work is the different matrices that students might generate throughout their work. Even more, the instructor should readily identify how a group’s generated matrix should be used in whole class discussion. Below are the typically seen matrices. We discuss how the instructor might use them in the WCD section

				
				<br><br>
				<img  style="width:100%" src="img/u2t4/10.png" alt="10">
				<br><br>
				
			<ul style="padding-left:35px">
			<li>Matrix I (the matrix C requested in #1 of Handout 4) correctly “undoes A,” where A=$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3\end{bmatrix}$ (see Task 1). </li>
			<li>Matrix II is always associated with “undoing” the matrix B that makes the N bigger, which is B=$\begin{bmatrix} 1 & 1/3 \\ 0 & 4/3\end{bmatrix}$ (see Task 3). </li>
			<li>Matrix III is associated with “undoing the lean” after “undoing bigger.” This is NOT the matrix that Pat and Jamie would find, because they would first be undoing the lean. </li>
			<li>Matrix IV is associated with “undoing the lean” before “undoing bigger.” This is consistent with what Pat and Jamie would find in their approach because they would need to “undo” the matrix that leaned the taller N, which was L=$\begin{bmatrix} 1 & 1/4 \\ 0 & 1\end{bmatrix}$.
			</li>

			</ul>

			<br>
			<br>

			Notice that the student work shown in Matrices III and IV named two different matrices U<sub>L</sub>. It is important to distinguish between the two matrices during whole class discussion, focusing on why these two matrices do not represent the same transformation and how different groups came up with Matrix I through some combination of Matrices II, III, and IV. Specifically, M<sub>I</sub> = M<sub>III</sub>M<sub>II</sub> = M<sub>II</sub>M<sub>IV</sub>.


			</blockquote>
			</ul>
			</div>
			<br>

			<a class="btn btn-success center" data-toggle="collapse" data-target="#i23">Whole class discussion: Discussing the solution C&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i23">
			<ul>
			<blockquote>
				<p>Whole class discussion: Discussing the solution C</p>	
				The instructor should make sure the students share their solutions for a single matrix, C, that “undoes” A. This should not take very much time because this process is very similar to the students’ work in Task 1. Once the students have shared their solution and/or solution approaches, the instructor should make sure the solution matrix C = $\begin{bmatrix} 1 & -1/4 \\ 0 & 3/4\end{bmatrix}$ is written on the board. 
				<br>				
			</blockquote>
			</ul>
			</div>

		<br>
			<a class="btn btn-success center" data-toggle="collapse" data-target="#i24">Whole class discussion: Finding two matrices, each of which “undoes” one of Pat and Jamie’s matrices&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i24">
			<ul>
			<blockquote>
				<p>Whole class discussion: Finding two matrices, each of which “undoes” one of Pat and Jamie’s matrices</p>				
				As with Task 3, students will likely create two pairs of matrices to “undo” the “bigger” and “lean” matrices: one pair corresponds to “undoing” the “lean” matrix first (U<sub>B</sub>U<sub>L</sub> or, using the notation above, M<sub>II</sub>M<sub>IV</sub>, which “undoes” Pat and Jamie’s approach from Task 3), while the second pair corresponds to “undoing” the “bigger” matrix first (U<sub>L</sub>U<sub>B</sub> or, using the notation above, M<sub>III</sub>M<sub>II</sub>, which does NOT “undo” Pat and Jamie’s approach from Task 3). The whole class discussion about these two possibilities can be explored through work similar to that of Group 3 in the Student Thinking section. 
				<br><br>				
				To help determine which of these two possibilities describes “undoing” Pat and Jamie’s approach from Task 3, the instructor may use the graphical representation of the maps from “N” to “N” to “N” (versus “N” to “N” to “N,” which was not Pat and Jamie’s approach) as a tool to help conceptualize of the order in which each transformation should be “undone.” In the example below, the group used “UL” and “UB” to represent the matrices that “undo lean” and “undo bigger,” respectively, in a diagram that conveys the importance of the order in which each matrix should be “undone.” 
				<br><br>
 				<img src="img/u2t4/4_1.png" style="width:100%" alt="4_1">
				<br><br>

				Once it has been agreed that the matrices U<sub>L</sub>=$\begin{bmatrix} 1 & 1/4 \\ 0 & 1\end{bmatrix}$ and U<sub>B</sub>=$\begin{bmatrix} 1 & 0 \\ 0 & 3/4\end{bmatrix}$ actually “undo” each of Pat and Jamie’s matrices, the instructor should lead a discussion of how to use these two “undo” matrices might be used to generate matrix C. As with Task 3, this discussion should emphasize the non-commutativity of matrix multiplication.
				<br><br>
				<b>NOTE: </b> We intentionally do not to use inverse language or notation yet. Notation that grows out of student reasoning, such as the UB and UL notation described here, should be used until the end of the Task 4 lesson, when the instructor formally introduces and defines “invertible matrix” and “invertible transformation.”
				<br><br>
				<a class="btn btn-warning center" data-toggle="collapse" data-target="#t63">Example Discussion Question:&raquo;</a>	
					<div class="accordion-body collapse" id = "t63">
					<ul>
					<blockquote style="background-color:#F8F8F8;">
					How does the matrix C that we found in Question 1 of the Handout coordinate with the matrices (that we called “U<sub>L</sub>” and “U<sub>B</sub>”) that we found in Question 2 of the Handout? 
					<br><br>
					Should the final answer for “getting back” be the same for each approach?  Why (or why not), and how can we make sense of it?			
					</blockquote>
					</ul>
					</div>
				<br>
				Using diagrams such as Figure 4.1 above can facilitate the instructor in leading a discussion on why “undoing” the original transformation in one step and “undoing” the original transformation in two steps should yield the same final transformation matrix.  After their work on Task 3 (“Pat and Jamie”), students will most likely have been approaching the problem with that assumption.
				<br><br>
				<ul style="padding-left:35px">
					<li>In Task 3, the class had found that, for an input vector <b>x</b> in the original “N,” the result was the same if that <b>x</b> was made bigger, and then that result was italicized: A $\vec{x}$=L(B$\vec{x}$)= b$\vec{x}$<br>
					Because this works for every input vector <b>x</b>, we concluded that A = LB.
					<br><br>
					<li>When trying to get back to the original, using the “undo” matrices allows one to switch the input and output vectors: U<sub>A</sub>$\vec{b}$ = C$\vec{b}$ = U<sub>B</sub>(U<sub>L</sub>$\vec{b}$) = $\vec{b}$
					<br>
					Because this works for every input vector <b>x</b>, we can conclude U<sub>A</sub>=U<sub>B</sub> U<sub>L</sub>.
				</ul>
				<br>
				<b>NOTE: Connecting Matrices to Transformations:</b>
				<br>
					<ul style="padding-left:35px">
						<li style="list-style-type:none">We have found that repeatedly reinforcing the connections between matrix multiplication and composition of functions is important. One way we have found helpful to do this is to repeatedly attach input vectors and output vectors to the transformations under discussion (as above).This can help students coordinate the importance of order, as well as conceptualize the transformations that the matrices represent.
						</li>
					</ul>
				</blockquote>
			</ul>
			</div>
			<br>


		<a class="btn btn-success center" data-toggle="collapse" data-target="#i29">Whole class discussion: Multiplying U<sub>A</sub>•A and A•U<sub>A</sub> (and composing a transformation and its “undoing”) &raquo;</a>
					<br>
					<div class="accordion-body collapse" id = "i29">
						<ul>
						<blockquote>
						The instructor should now discuss with the students what the results of A•U and U<sub>A</sub>•A are. This discussion should be relatively straightforward, in that the students should be able to calculate the product (see Group 5 in the Student Thinking section). Once the product is established, the instructor should discuss the effect that the product U<sub>A</sub>•A has on specific vectors, for instance, on “N.” The students should be able to see that U<sub>A</sub>•A sends N to N. This discussion might be elaborated by utilizing the above graphical representation of sending N to N to N to N to N. A similar discussion could take place regarding A•U<sub>A</sub> as well as with B•U<sub>B</sub>, U<sub>B</sub>•B, L•U<sub>L</sub>, and U<sub>L</sub>•L. That is, the students may calculate each of these products and discuss the effect these products (what you know to be the identity) would have on specific vectors or “N.”			
						<br><br>
						<b>Defining Identities and Inverses</b>
						<br><br>
						This should lead into a formal discussion of how inverses of matrices are typically written and used. For instance, the instructor may ask students what matrix A(U<sub>A</sub>) represents. Having calculated the identity matrix, the students will likely describe a matrix with ones down the diagonal and zeros elsewhere. The instructor may then define the identity matrix and notate it as I<sub>n</sub>. 
						<br><br>
						<ul style="padding-left:35px">
							<li style="list-style-type:none; padding-bottom:20px">
								<b>Definition:</b>The <b>identity matrix</b> of size n (denoted I<sub>n</sub>) is the n x n matrix in which a<sub>ij</sub>=1 if i=j and aa<sub>ij</sub>=0 if i≠j (where aa<sub>ij</sub> denotes the entry in the i<sup>th</sup> row and j<sup>th</sup> column).
							</li>
						
							<li style="list-style-type:none;">
							<b>Definition:</b> The <b>identity transformation</b> I<sub>n</sub>:&#x211d;<sup>n</sup>→&#x211d;<sup>m</sup> is the linear transformation that sends every vector to itself. That is, I<sub>n</sub> (x)=x for all x∈&#x211d;<sup>n</sup>. This could be informally referred to as the “do nothing” function.</li>
							<br>
						</ul>
						It is now appropriate for the instructor to formally define the inverse transformation as the mathematical object that when composed with the original transformation yields the identity transformation. In other words, it is the transformation that, when composed (in either order) with the original transformation, the “net effect” is as if nothing happened at all. 
						<br><br>
						<ul style="padding-left:35px">
							<li style="list-style-type:none;">
								<b>Definition:</b> A linear transformation T:&#x211d;<sup>n</sup>→&#x211d;<sup>m</sup> is called an invertible transformation if there exists a transformation S:&#x211d;<sup>m</sup>→&#x211d;<sup>n</sup> such that S(T(x))=x for all x∈&#x211d;<sup>n</sup> and T(S(y))=y for all y∈&#x211d;<sup>m</sup>. In this case, S is called the <b>inverse</b> of T and is denoted T<sup>-1</sup>.
							</li>						
						</ul>
						<br>
						Additionally, it is appropriate for the instructor to formally define the inverse matrix as the mathematical object that when multiplied with the original matrix yields the identity matrix. 
						<br><br>
						<ul style="padding-left:35px">
							<li style="list-style-type:none;"> <b>Definition:</b> An n x n matrix A is called <b>invertible</b> if there exists an n x n matrix C such that C•A = I<sub>n</sub> and A•C = I<sub>n</sub>. In this case, C is called the inverse of A and is denoted A<sup>-1</sup>.
							<br><br>
							<ul style="padding-left:50px">
							<li>One version of a formal definition of inverse does not explicitly state that the inverse is square and of the same dimension as A. Rather, these can be derived from the definition itself. This may be a worthwhile task in a more formal class. </li>	
							<br>
							<li>The instructor may wish to prove with the class that the inverse matrix is unique:
								<br>
								<ul style="padding-left:65px">
									<li>Suppose there exist two n x n matrices, C and D, such that AC = CA = I and AD = DA = I. Consider (ACD):(DAC) = D(AC) = DI = D(DAC) = (DA)C = IC = C. Thus, C = D and the inverse is unique.
									</li>
								</ul>
							</li>
							</ul>
							</li>
						</ul>
						<br>
						<b>Computing the Inverse of a Product of Matrices </b>
						<br><br>
						Now that the term and notation A<sup>-1</sup> for the inverse of A has been introduced, the teacher should return to the work on Handout 4 and ask students about determining the inverse of Pat and Jamie’s approach – that is determining what (LB)<sup>-1</sup> equals. This may have already been discussed when considering what occurs when you multiply A and U<sub>A</sub>.  Even so, it is beneficial to return to it here in order to pair it with the term and notation of inverse. 
						<br><br>
						Students may reason that, for some x in the original “N”, the series of actions through Pat and Jamie’s approach and the appropriate “undoing” would be: U<sub>B</sub> (U<sub>L</sub> (L(B<b>x</b>)))=<b>x</b> or in inverse notation, B<sup>-1</sup> (L<sup>-1</sup> (L(B<b>x</b>)))=<b>x</b>.  Because this is true for any x for which the multiplication is defined, (LB)<sup>-1</sup>=B<sup>-1</sup> L<sup>-1</sup>.
					</blockquote>
					</ul>
					</div>
				<br>

<a class="btn btn-success center" data-toggle="collapse" data-target="#i25">Suggested “Next Steps” after the Italicizing N Unit&raquo;</a>
			<br>
			<div class="accordion-body collapse" id = "i25">
			<ul>
			<blockquote>
				<p>Suggested “Next Steps” after the Italicizing N Unit</p>
				
				Note that this task does not offer a formula or procedure for finding the inverse of a matrix. That is, this activity does not result in students having a general process for finding matrix inverses, but it helps them conceive of <b>what</b> an inverse matrix (and inverse transformation) is. 
				<br><br>
				In the past, we have followed up this task sequence by:
				<br>
				<ul style="padding-left:35px">
					<li>Exploring what types of matrices are invertible and why. We have used that opportunity to introduce the terms <b>one-to-one </b>transformations and <b>onto</b> transformations.</li>
					<li>Exploring algorithms and formulas for determining A<sup>-1</sup> (in 2x2 or 3x3 only)
						<ul style="padding-left:60px">
							<li>Investigate why [ A | I ] ~ [ I | A<sup>-1</sup>] makes sense conceptually and how that connects to what matrices are and aren’t invertible
							</li>
							<li>	Derive the formula for the inverse of a 2x2, A<sup>-1</sup>=1/(det⁡(A)) $\begin{bmatrix} d & -b \\ -c & -a\end{bmatrix}$ for A=$\begin{bmatrix} a & b \\ c & -d\end{bmatrix}$ from the investigation of [ A | I ] ~ [ I | A<sup>-1</sup>
							</li>
						</ul>
					</li>
					<li>Introducing elementary matrices in service of connecting to geometric interpretations of matrix transformations. In particular, for any invertible matrix A can be written as a finite sequence of elementary matrices E<sub>i</sub> such that A = E<sub>1</sub> E<sub>2</sub>… E<sub>k-1</sub>E<sub>k</sub>. Thus (based on the “undoing” seen in Pat and Jamie’s two-step inverse), A<<sup>-1</sup>=(E<sub>k</sub>)<sub>-1</sub>(E><sub>k-1</sub>)<sup>-1</sup>... (E<sub>2</sub>)<sup>-1</sup>(E<sub>1</sub>)<sup>-1</sup>. These elementary matrices (and their order) aren’t necessarily unique, but each can correspond to a geometric action (such as stretching or skewing) and the inverse of that elementary matrix corresponds to “undoing” that geometric action</li>
				</ul>	
				</blockquote>
				</ul>
				</div>	

				



			</ul>
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
 
	<script src="js/iola.js"></script>

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
