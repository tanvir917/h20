<?php

	$con = mysqli_connect("localhost" , "root" , "" , "h2o");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}
?>