<?php
session_start();
if (htmlspecialchars($_POST['username']) == 'test' && 
	htmlspecialchars($_POST['password'] == 'hunter2')) {

	$_SESSION['login'] = TRUE;
	header('Location:u1.php');
	exit();
} else {
	$_SESSION['login'] = FALSE;
	header('Location:mockup.php');
	exit();
}
?>
