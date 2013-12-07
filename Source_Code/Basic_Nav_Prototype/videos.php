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

    <title>Videos - IOLA</title>

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
			<h1 class="text-center">Videos</h1>
			<h3 class="text-center">A list of the clips found throughout the site</h3>
		</div>
		<div class="jumbotron">
		    <div class="container">
			<div class="jumbotron">
				<br>

				<ul>
					<a class="btn btn-default btn-lg center" style="width:100%" data-toggle="collapse" data-target="#videos"><h2>Unit 1 Videos &raquo;</h2></a>
					<div class="accordion-body collapse" id = "videos">
						<ul>
							<blockquote>
								<p>Task 2 Videos:<p>
								<video id="video_1" width="45%" class="video-js vjs-default-skin"
									controls preload="false"
									data-setup='{"controls": true, "autoplay": false, "preload": "false"}'}'>
									<source src="media/unit1/task2/Brad_double_funnel_w_words.mp4" type='video/mp4' />
								</video>
								<video id="video_2"  width="45%" class="video-js vjs-default-skin"
								controls preload="false"
									data-setup='{"controls": true, "autoplay": false, "preload": "false"}'>
									<source src="media/unit1/task2/Justin_Task_2.mp4" type='video/mp4' />
								</video>
								<br><br>
								<p>Task 3 Video:<p>
								<video id="video_1" width="45%" class="video-js vjs-default-skin"
									controls preload="false"
									data-setup='{"controls": true, "autoplay": false, "preload": "false"}'}'>
									<source src="media/unit1/task3/zero_vector.mp4" type='video/mp4' />
								</video>
								<br><br>
								<p>Task 4 Video:<p>
								<video id="video_1" width="45%" class="video-js vjs-default-skin"
									controls preload="false"
									data-setup='{"example_option":true}'>
									<source src="media/unit1/task4/Justin_Day_5_3_in_R2_ceiling_clip.mp4" type='video/mp4' />
								</video>

							</blockquote>
						</ul>
					</div>
				</ul>
				<ul>
					<a class="btn btn-default btn-lg center" style="width:100%" data-toggle="collapse" data-target="#videos2"><h2>Unit 2 Videos &raquo;</h2></a>
					<div class="accordion-body collapse" id = "videos2">
						<ul>
							<blockquote>
								<p>There are no Unit 2 videos at this time.<p>
							</blockquote>
						</ul>
					</div>
				</ul>	
			</div>				
			<br><br>
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
	
  </body>
</html>
