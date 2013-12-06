<?php
require("config.php");
if (!isset($_SESSION['user']) || !$_SESSION['user'] || $_SESSION['user']['user_level'] != 2) {
    header('Location:index.php');
    exit();
}

if (!empty($_POST)) {
    $query = "SELECT username, user_level FROM users";
    
    try{ 
        $stmt = $db->prepare($query); 
        $result = $stmt->execute(); 
    } 
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 

    foreach ($stmt->fetchAll() as $row) {
        if (isset($_POST[$row["username"]."-delete"])) {
            $query = "DELETE FROM users WHERE username = :username";

            $query_params = array(
                ':username' => $row["username"]
            );

            try{ 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
            } 
            catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
            
        } else {
            if (isset($_POST[$row["username"]."-canseemodules"])) {
                $ulevel = 1;
            } else $ulevel = 0;

            if (isset($_POST[$row["username"]."-isadmin"])) {
                $ulevel = 2;
            }

            $query = "
                UPDATE users
                SET user_level = :ulevel
                WHERE username = :username";

            $query_params = array( 
                ':ulevel' => $ulevel,
                ':username' => $row["username"]
            ); 

            try{ 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
            } 
            catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        }
    }
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

    <title>IOLA Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/iola.css" rel="stylesheet">	
	<link rel="stylesheet" href="js/sidr/stylesheets/jquery.sidr.light.css">
    <link href="css/imgflip.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="init()">
    <div class="navbar navbar-inverse  navbar-fixed-top">
      <?php $ref = 'admin'; include 'header.php' ?>
    </div>
	<?php include 'sidebtn.php' ?>	

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
		<div id="sidr">
			<?php $unit=""; $task=""; include 'sidebar.php' ?>
		</div>
        <h1>Modify Accounts</h1>
		<br>

        <form action="useradmin.php" method="post">
            <div class="form-group">

                <table class="table table-striped table-condensed">
                    <tr>
                        <td>
                            Account Name
                        </td>
                        <td>
                            Email address
                        </td>
                        <td>
                            Can see modules
                        </td>
                        <td>
                            Is administrator
                        </td>
                        <td>
                            Delete user
                        </td>
                    </tr>

                    <?php
                        $query = "SELECT username, user_level, email FROM users";
                        
                        try{ 
                            $stmt = $db->prepare($query); 
                            $result = $stmt->execute(); 
                        } 
                        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 

                        foreach ($stmt->fetchAll() as $row) {
                            print "<tr>";

                            print "<td><strong>" . $row["username"] . "</strong></td>";
                            print "<td>" . $row["email"] . "</td>";

                            print "<td><input type=\"checkbox\" name=\"" . $row["username"] . "-canseemodules\"";
                            if ($row["user_level"] > 0) { print "checked";}
                            print "></td>";

                            print "<td><input type=\"checkbox\" name=\"" . $row["username"] . "-isadmin\"";
                            if ($row["user_level"] == 2) { print "checked";}
                            print "></td>";

                            print "<td><input type=\"checkbox\" name=\"" . $row["username"] . "-delete\"></td>";
                        }
                    ?>

                    <!--<tr>
                        <td>
                            <strong>Iola</strong>
                        </td>
                        <td>
                            iola@iola.iola
                        </td>
                        <div class="radio">
                            <td>
                                <input type="checkbox" id="iola-canseemodules">
                            </td>
                            <td>
                                <input type="checkbox" id="iola-isadmin">
                            </td>
                            <td>
                                <input type="checkbox" id="iola-deleteuser">
                            </td>
                        </div>
                    </tr>-->


                </table>
            </div>

        <button type="submit" class="btn btn-success" value="Submit">Submit changes</button>
        <button class="btn btn-success" value="Reset">Reset changes</button>
        </form>

		<footer>
			<?php include 'footer.php' ?>
		</footer>
    </div> <!-- /container -->
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/sidr/sidr.js"></script>
	<script src="js/iola.js"></script>
  </body>
</html>
