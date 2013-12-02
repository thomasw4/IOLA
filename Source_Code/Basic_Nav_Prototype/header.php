<div class="navbar-inner">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">
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
		<li class="active"><a href="index.php">Home</a></li>
			<?php  if (isset($_SESSION['user'])) {  ?>
			<li><a id="simple-menu" href="#sidr">Modules</a></li>
			<?php } ?>
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
	  <?php  if (!isset($_SESSION['user'])) {  ?>
	  <form class="navbar-form navbar-right" action="index.php" method="post">
		<div class="form-group">
		  <input type="text" name="username" class="form-control" value="username">
		</div>
		<div class="form-group">
		  <input type="password" class="form-control" name="password" value="password">
		</div>
		<button type="submit" class="btn btn-primary" value="Login">Sign in</button>
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