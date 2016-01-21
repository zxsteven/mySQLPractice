<?php

	$link = mysqli_connect('localhost', 'cl40-example-h7h', 'bkDFkY9^w', 'cl40-example-h7h');

	if (mysql_connect_error()) {
		die("Could not connect.");
	}

	$query = 'SELECT * FROM users';

	if ($result = mysqli_query($link, $query)) {
		$row = mysql_fetch_array($result);
		print_r($row);
	} else {
		echo "Failed";
	}


?>