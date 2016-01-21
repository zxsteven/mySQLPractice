<?php

	if ($_POST['submit']) {	
	 	if (!$_POST['name']) $error.="<br />Please enter your name";

	 	if (!$_POST['email']) $error.="<br />Please enter your email address";
	 		elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="Please enter a valid email address.";

	 	if (!$_POST['password']) $error.="<br />Please enter a password.";
	 		else {
	 			if (strlen($_POST['password']) < 8) $error.="<br />Please enter a password with at least 8 characters.";
	 			if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password.";
	 		}
	 	if ($error) echo "There were errors in your signup details:".$error;
	}
?>

 <form method="post">
 	<input type="email" name="email" id="email" />
 	<input type="password" name="password" id="password">
 	<input type="submit" name="submit" value="Sign Up">
 </form>