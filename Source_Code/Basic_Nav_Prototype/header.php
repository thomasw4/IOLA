<div class="navbar-inner">
  <div class="container" style="padding-right:10px; padding-left:10px">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand">
	  	<!-- <img src="img/logo_i.png" width="48" height="48" alt="IOLA"> -->

		<div class="flip-container" style="float:left" ontouchstart="this.classList.toggle('hover');">
		  <div class="flipper">
			<div class="front">
		<div id="flipimagediv" style="float:left">
			<img id="front" src="img/logo_i.png" />
		</div>
			</div>
			<div class="back">
		<div id="flipimagediv" style="float:left">
			<img id="front" src="img/logo_i_back.png" />
		</div>
			</div>
		  </div>
		</div>
	  </a>
	  			  

	</div>
	<div class="navbar-collapse collapse">
	
	  <ul class="nav navbar-nav">
		<li></li>
			<?php if($ref == 'home') { ?> <li class="active"><a href="index.php">Home</a></li> <?php } ?>
			<?php if($ref != 'home') {?> <li><a href="index.php">Home</a></li><?php } ?>

			<?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] > 0) {  ?>
			<?php if($ref == 'unit') { ?> <li class="active"><a id="simple-menu" href="#sidr">Units</a></li><?php } ?>
			<?php if($ref != 'unit') { ?> <li><a id="simple-menu" href="#sidr">Units</a></li><?php } ?>
			<?php } ?>
			
		<?php if($ref == 'team') { ?> <li class="active"><a href="team.php">Team</a></li>
		<?php } else {?><li><a href="team.php">Team</a></li><?php } ?>		
		<?php if($ref == 'res') { ?><li class="dropdown active">
		<?php } else {?><li class="dropdown"><?php } ?>
		  <a href="" class="open dropdown-toggle active" data-toggle="dropdown">Resources <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		    <li><a href="typicalday.php">Typical Day</a></li>		    
			<li><a href="videos.php">Videos</a></li>			
			<li><a href="nsf.php">NSF</a></li>			
			<li class="divider"></li>
			<li><a href="publications.php">Publications</a></li>
			<li><a href="related.php">Related Projects</a></li>
		  </ul>
		</li>

	    <?php  if (isset($_SESSION['user']) && $_SESSION['user']['user_level'] == 2) {  ?>
		<?php if($ref == 'admin') { ?><li class="dropdown active">
		<?php } else {?><li class="dropdown"><?php } ?>
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="useradmin.php">Manage Users</a></li>
		  </ul>
		</li>
		<?php } ?>

	  </ul>
	  <?php  if (!isset($_SESSION['user'])) {  ?>
	  <form class="navbar-form navbar-right" action="index.php" method="post">
		<div class="form-group">
		  <input type="text" name="username" class="form-control" value="username" onclick="this.value='';">
		</div>
		<div class="form-group">
		  <input type="password" class="form-control" name="password" value="password" onclick="this.value='';">
		</div>
		<button type="submit" class="btn btn-primary" value="Login" >Sign in</button>
		<a class="btn btn-primary btn-warning" href="requestaccess.php">Request Access</a>
	  </form> 
	<?php } ?>
		<?php  if (isset($_SESSION['user'])) {  ?>
	  <form class="navbar-form navbar-right" action="logout.php" method="post">
		<div class="form-group" style="padding-right:15px">
			<font  color="FFFFFF">Hello, <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</font>
		</div>
		<button type="submit" class="btn btn-primary" value="logout">Log out</button>
	  </form> 

	<?php } ?>
	</div><!--/.navbar-collapse -->
  </div>
</div>