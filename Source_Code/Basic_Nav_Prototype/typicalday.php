<?php
session_start();
//if (!isset($_SESSION['user']) || !$_SESSION['user']) {
//	header('Location:index.php');
//	exit();
//}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>A Typical Day - IOLA</title>

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
	  <?php $ref = 'res'; include 'header.php' ?>
    </div>

	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
		<?php include 'sidebtn.php' ?>	
	<?php } ?>

    <div class="container print">
	
		<div class="jumbotron">
		  	<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
			<div id="sidr">
				<?php $unit=""; $task=""; include 'sidebar.php' ?>
			</div>
		  	<?php } ?>		
			<h1 class="text-center">A Typical Day</h1>
		</div>
		<div class="jumbotron">	
		    <div class="container">
				<a class="expandcollapse btn  btn-primary pull-right" state="0"><span class="glyphicon glyphicon-chevron-down"></span> Expand All</a>
				<div class="row">			
					<h2>What Happens on a Typical Day? </h2>
					<h4>
					The Inquiry-Oriented Linear Algebra (IOLA) materials work from the premise that you, the instructor, will structure class time so to allow for small group work, whole class discussion, partner talk, and time for you to "tell" students important mathematical information. The amount of time spent on each of these different formats will vary, but it is expected that each class period will contain some amount of each of the following: 
					</h4>
					<br>

					<ul>
						<a class="btn  btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#1">Small Group Work (3-4 students per group) &raquo;</a>
						<div class="accordion-body collapse" id = "1">
							<ul>
								<blockquote>
									<ul>
										<li>Spend a few minutes making sure students understand what the task they are about to work on is asking them to do, but do not prescribe or elicit solution approaches. </li>
										<li>Help students be accountable to each other in their small group. Encourage them to make sure no one in their group is lost or not participating. </li>
										<li>If possible, give each group a white board where they can work together on a shared physical space (as opposed to each student writing things out individually). Students often use their phones to then take pictures of their collective work. Office supply stores sell inexpensive white boards.</li>
										<li>When talking with a small group, try to avoid one-on-one conversations. Instead try to get all members of the group involved.</li>
										<li>Give advice and suggestions when appropriate.</li>
										<li>Periodically stop small group work and have students report back on their current progress, even if they are not finished. It is rarely productive to have small groups work for more than 15 minutes before reporting back to the whole class.</li>
										<li>Don't feel compelled to get to every group before having a whole class discussion.</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>

					<ul>
						<a class="btn  btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#2">Whole Class Discussion &raquo;</a>
						<div class="accordion-body collapse" id = "2">
							<ul>
								<blockquote>
									<ul>
										<li>See section below on Productive Whole Class Discussions.</li>
										<li>Try to avoid whole class exchanges in which you ask a question, a student responds, and then you evaluate the response. This is not a discussion.</li>
										<li>Select one or more groups to present their work to the class (even work that is not completed can lead to productive discussions). White boards or document cameras tend to work well for presentations.</li>
										<li>Standing to the side of the room and looking at the class (versus the students who are presenting) encourages those presenting to speak to the class and only to you (a natural tendency for students). </li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>
					
					<ul>
						<a class="btn  btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#3">Partner Talk &raquo;</a>
						<div class="accordion-body collapse" id = "3">
							<ul>
								<blockquote>
									<ul>
										<li>Partner talk is distinct from small group work in that the instructor directs students to discuss with the person next to them a specific idea for 1-2 minutes and then report back to the whole class.</li>
										<li>The instructional materials do not specify when you might use this strategy. A rule of thumb is to use partner talk when the instructor perceives that students need additional time to digest an idea or when an idea is particularly important. </li>
										<li>Directing students to talk with the person next to them about a challenging idea is a strategy that occurs during a whole class discussion or during a lecture. Typically partner talk might happen once or twice a class session.</li>
										<li>Partner talk allows those students who are hesitant to speak in the whole class a chance to discuss their ideas; students who are not following can bring up their questions with their neighbor and perhaps find a way to formulate their question for whole class discussion.  </li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>		
					
					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#4">Time to Tell &raquo;</a>
						<div class="accordion-body collapse" id = "4">
							<ul>
								<blockquote>
									<ul>
										<li>One form of telling is lecture. Although the IOLA materials do not identify specific times for the instructor to lecture, it is expected that you will use your good judgment to lecture at times, but this rarely happens for more than a quarter of a class period. </li>
										<li>You do need to tell students things, especially when it comes to mathematical conventions and formalisms. During whole class discussions it is at times appropriate to tell students specific information. Whole class discussions are meant to be occasions to develop the mathematics and consolidate students' initial and tentative ideas, and this at times requires you, the instructor, to share your expertise.</li>
										<li>Another time to tell is at the end of class. Students often need to leave class knowing which of their ideas were mathematically correct or moved the mathematics forward. It is therefore useful at times for you to give a brief 5-minute summary lecture to bring closure to a discussion or to consolidate students' emerging ideas.</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>			


					<br>
					<h2>Productive Whole Class Discussions </h2>
					<h4>
					To facilitate substantive and rigorous whole class discussions, the following goals are necessary and foundational. Without these, instructors will not have the conditions needed to ensure that the discussion deepens student reasoning and understanding. 
					</h4>

					<br>
					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#5">Goal One: Helping Individual Students Share Their Own Thoughts &raquo;</a>
						<div class="accordion-body collapse" id = "5">
							<ul>
								<blockquote>
									If a student is going to participate in the discussion, he or she has to be able to share thoughts and responses out loud, however tentative or unsure they are of their ideas. If only one or two students can do this, it is not a discussion - it is a monologue or, at best, a dialogue between the instructor and a student. 
									<br><br>
									Instructor prompts that can help instructors achieve Goal One:
									<br><br>
									<ul>
									<li>"Say more about that."</li>
									<li>"Dave, I know you haven't finished, but tell us your initial thinking."</li>
									<li>"Take your time, we're not in a rush."</li>
									<li>"Oh, that's interesting. Did everyone hear what Julie just said? She said that . . ."</li>
									<li>"That's an important point. Keisha, can you say that again?"</li>
									<li>"So you're saying that . . ."</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>	

					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#6">Goal Two: Helping Students Orient to and Listen Carefully to One Another &raquo;</a>
						<div class="accordion-body collapse" id = "6">
							<ul>
								<blockquote>
									If a student is just sitting waiting to speak, and is not listening to others and trying to understand them, he or she will not be able to contribute to a real discussion. An instructor's ultimate goal involves sharing of ideas and reasoning, not simply a series of students giving their own, unconnected thoughts, one by one. This goal entails having students continually attend to and make sense of other students' contributions to the discussion.
									<br><br>
									Instructor prompts that can help instructors achieve Goal Two:
									<br><br>
									<ul>
									<li>"Do you agree with what Darrel just said?"</li>
									<li>"Can someone add to Sean's idea?"</li>
									<li>"Who wants to add to that?"</li>
									<li>"Did everyone hear what Declan just said?"</li>
									<li>"Say that again so that everyone can hear."</li>
									<li>"Can someone rephrase Diane's explanation in their own words?"</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>
					
					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#7">Goal Three: Helping Students Deepen Their Reasoning &raquo;</a>
						<div class="accordion-body collapse" id = "7">
							<ul>
								<blockquote>
									Even if students express their thoughts and listen to others' ideas, the discussion can still fail to be mathematically productive if it does not include solid and sustained reasoning. Most students are not skilled at pushing to deepen their own reasoning. Therefore, a key role of the instructor is to continuously and skillfully press the students for reasoning and evidence.
									<br><br>
									Instructor prompts that can help instructors achieve Goal Three:
									<br><br>
									<ul>
									<li>"So, how did you know that 50 is the solution?"</li>
									<li>"How can we check to make sure?"</li>
									<li>"What is the reasoning that allows you to make that conclusion?"</li>
									<li>"Do you agree or disagree and why?"</li>
									<li>"How does that connect with what we learned previously?"</li>
									<li>"How did you arrive at that solution?"</li>
									<li>"Can anyone come up with a different way to explain that?"</li>
									<li>Press students with a counterexample.</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>

					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#8">Goal Four: Helping Students Engage with Others' Reasoning &raquo;</a>
						<div class="accordion-body collapse" id = "8">
							<ul>
								<blockquote>
									Students need to take up the ideas and reasoning of other students and respond to them. This is when real discussion can take off - discussion that will support robust learning. 
									<br><br>
									Instructor prompts that can help instructors achieve Goal Four:
									<br><br>
									<ul>
									<li>"Who can repeat in their own words what Juan just said?"</li>
									<li>"But what about what Damen's point that . . .?"</li>
									<li>"Oscar, can you say in your own words what I am asking you all to do?" </li>
									<li>"Max, can you say in your own words the explanation that I just gave for why Vilma's idea makes sense?"</li>
									<li>"So Debbie, is Jorge saying that . . .?"</li>
									<li>"Jesika, what do you think about what Ding just said?"</li>
									</ul>
								</blockquote>
							</ul>
						</div>
					</ul>		

					<ul>
						<a class="btn btn-primary center" id="contentInfo" data-toggle="collapse" data-target="#9">Goal Five: Building on and Extending Students' Ideas &raquo;</a>
						<div class="accordion-body collapse" id = "9">
							<ul>
								<blockquote>
									Whole class discussions are occasions for students to report back to everyone how their small group is thinking and the progress they have made on problems. Whole class discussions also need to be occasions in which you, the instructor, add to what students say and help them see how their thinking can lead to more conventional or formal mathematics.
									<br><br>
									Instructor moves that can help achieve Goal Five:
									<br><br>
									<ul>
									<li>Restate what students have said in more conventional or formal terms.</li>
									<li>Introduce a new representation that is consistent with what students have said.</li>
									<li>When a student offers one solution or idea (whether it is correct or incorrect), offer two other alternative solutions or ideas and direct students to decide, with reasons, which solution or idea is correct. </li>
								</blockquote>
							</ul>
						</div>
					</ul>	
				</div>
			</div>
			<footer>
				<?php include 'footer.php' ?>
			</footer>
		</div>
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
	<script src="js/iola.js"></script>
	<script src="js/expandall.js"></script>
	<!-- Include the Sidr JS -->
	<script>

	</script>
	
  </body>
</html>
