<?php
	require "connect.php";
	
	function doLogin($username , $password){
		global $conn;
		$query = "select * from users where email = '".$username."' and password = '".$password."'";
		
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1) {
			return true;
		} else {
			return false;
		}
	}
?>