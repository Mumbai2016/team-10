<?php
	require "connect.php";
	function regMente($email , $password,$role_id,$fname,$lname,$address,$contact,$dob,$location,$income)
	{
		global $conn;
		$emailCheckQuery = "select * from users where email = '".$email."' ";
		$result = mysqli_query($conn,$emailCheckQuery);
		if(mysqli_num_rows($result) != 0){
			echo "<script>";
			echo "window.location.href ='signup_mentee.php'";
			echo "</script>";
		}
			$sql1="INSERT into users(email,password,role_id) value('".$email."','".$password."',".$role_id.")";
				 
			$qury=mysqli_query($conn,$sql1);
			if(!$qury)
			{	 
   				die("error connecting");
			}
			
			$sql_user_id = "select user_id from users where email = '".$email."'";
			$result = mysqli_query($conn,$sql_user_id);
			if(!$result){
				die("error ");
			}
			$user_id ;
			while($row = mysqli_fetch_assoc($result)){
				$user_id = $row['user_id'];
			}
			$sql="INSERT into menteeinfo(menee_id,firstname,lastname,emailid,address,contact_no,dob,family_income,location) value(".$user_id.",'".$fname."','".$lname."','".$email."','".$address."','".$contact."','".$dob."','".$income."','".$location."')";
			echo $sql;	 
			$qury=mysqli_query($conn,$sql);
			if(!$qury)
			{	 
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			else
			{
				echo "<script>";
				echo "window.location.href ='logon.php'";
				echo "</script>";
			}
	}
?>

