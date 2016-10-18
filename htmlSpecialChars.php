<?php

	$link = "<a href='echo.php'>Echo</a>";
	$test = htmlspecialchars($link, ENT_Quotes);
	echo $test;

	//not working

?>
