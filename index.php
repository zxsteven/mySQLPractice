<?php

	session_start();

	$link = mysqli_connect('localhost', 'cl40-example-h7h', 'bkDFkY9^w', 'cl40-example-h7h');

	if (mysqli_connect_error()) {
	 	 die("Could not connect to database");
	}	 	

	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('John', 'john@example.com', 'test')";
	 	
	//$query = "UPDATE `users` SET `name =` 'John Smith' WHERE name = 'john'";
	
	//mysqli_query($link, $query);

	$query = "SELECT * FROM users";

	if ($result = mysqli_query($link, $query)) {
		 	 while ($row = mysqli_fetch_array($result)) {
		 	 print_r($row); 
		 	}
	} else {
		 echo "It failed";
	}

	//session_destroy();
?>