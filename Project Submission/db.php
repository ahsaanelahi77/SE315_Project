<?php
	
	$connection = mysqli_connect("localhost","root");
	if(!$connection)
	{
		die("database connection failed" . mysqli_error());
	}
	mysqli_select_db($connection,'fabrics');
	?> 