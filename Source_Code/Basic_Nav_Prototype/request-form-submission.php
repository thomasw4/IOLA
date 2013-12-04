<?php  
require_once 'swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('iola.automated.mailer')
  ->setPassword('iolaiola');

$mailer = Swift_Mailer::newInstance($transport);

// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
	header("Location: requestaccess.php"); exit;  
}  
	  
// get the posted data  
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];  
$username = $_POST["username"];  
$password = $_POST["password"];  
$message = $_POST["contact_message"];  
	  
// check that a name was entered  
if (empty ($name))  
	$error = "You must enter your name.";  
// check that an email address was entered  
elseif (empty ($email_address))   
	$error = "You must enter your email address.";  
// check for a valid email address  
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))  
	$error = "You must enter a valid email address.";  		  
elseif (empty ($username))   
	$error = "You must enter a username.";  
elseif (empty ($password))   
	$error = "You must enter a password.";  

// check if an error was found - if there was, send the user back to the form  
if (isset($error)) {  
	header("Location: requestaccess.php?e=".urlencode($error)); exit;  
}  

$message = Swift_Message::newInstance("IOLA: $name Has Requested An Account")
  ->setFrom(array('iola.automated.mailer@gmail.com' => 'IOLA Mailer'))
  ->setTo(array('wtlucy@gmail.com'))
  ->setBody("$name has requested an account.\n Email Address: $email_address\n Requested username: $username\n Requested password: $password\n Attached Message: $message");

$result = $mailer->send($message);

	  
// send the email  
//mail ("wtlucy@gmail.com", "Account Registration Request", $email_content);  
	  
// send the user back to the form  
header("Location: requestaccess.php?s=".urlencode("Your request was successful.  Your new account will become active once approved by a site administrator.")); exit;  


  
?>  