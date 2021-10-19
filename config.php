<?php

	$servername = "localhost:3306";
	$username = "root";
	$password = "root";
	$dbname = "sgbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>