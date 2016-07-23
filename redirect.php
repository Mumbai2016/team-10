<?php
	require "connect.php";
	
	function doLogin($username , $password){
		global $conn;
		$query = "select * from users where email = '".$username."' and password = '".$password."'";
		
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1)
		{
			$role_id ;
			while($row = mysqli_fetch_assoc($result))
			{
				$role_id = $row['role_id'];
				echo "$role_id";
			}		
		} 
		
		else
		{
			echo "<script>";
			echo "window.location.href ='logon.php'";
			echo "</script>";
		}
	}
	
?>