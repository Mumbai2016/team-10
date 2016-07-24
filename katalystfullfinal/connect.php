<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "katalyst";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$database);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysql_connect_error());
	}
	
?>