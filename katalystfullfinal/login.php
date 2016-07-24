<?php
	session_start();
	require "connect.php";
	function doLogin($username , $password)
	{
		global $conn;
		$query = "select * from users where email = '".$username."' and password = '".$password."'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1)
		{
			$role_id ;
			$user_id;
			while($row = mysqli_fetch_assoc($result))
			{
				$role_id = $row['role_id'];
				$user_id = $row['user_id'];
			}		
			$_SESSION["userId"] = $user_id;
			if($role_id == 1)
			{
					echo "<script>";
					echo "window.location.href ='admin/admin.php'";
					echo "</script>";
			}
				
			else if($role_id == 2)
			{
					echo "<script>";
					echo "window.location.href ='mentor/index.html'";
					echo "</script>";
			}
				
			else if($role_id == 3)
			{
					echo "<script>";
					echo "window.location.href ='mentee/index.html'";
					echo "</script>";
			}	
				
			else
			{
					echo "<script>";
					echo "window.location.href ='logon.php'";
					echo "</script>";
			}
		} 
		
		else
		{
			echo "<script>";
			echo "window.location.href ='logon.php'";
			echo "</script>";
		}
	}
	if(isset($_POST["submit1"]))
	{
		//$user_idError = "";
		//$passwordError = "";
		
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		echo 
		/*
		if(empty($username)){
			$flag = "true";
			$username = "Please Enter your username";
			echo "$user_idError";
		}
		else if(!preg_match("/^[a-zA-Z ]*$/",$username)){
			$flag = "true";
			$user_idError = "There is some error in your login credentials, please login with your correct details";
			echo "$user_idError";
		}
		
		if(empty($password)){
			$flag = "true";
			$passwordError = "Please Enter your password";
			echo "$passwordError";
		}
		*/	
		doLogin($username, $password);
	}
?>