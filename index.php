<?php

	//setcookie('id', '1234', time() + 60 * 60 *24);

	setcookie('id', '', time() - 3600);

	echo $_COOKIE['id'];
?>