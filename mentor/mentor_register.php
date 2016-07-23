<?php
	require "../connect.php";
	function reg($roll,$branch,$year,$name,$present_addr,$permanent_addr,$email,$telR,$telM,$status,$pass,$city)
	{
		global $conn;
		//if ($_SERVER["REQUEST_METHOD"] == "POST")
		if(true)
		{
			/*
			$roll=$_POST['mentorinfo_id'];
			$branch=$_POST['mentor_id'];
			$year=$_POST['ment_fname'];
			$name=$_POST['ment_lname'];
			$present_addr=$_POST['ment_address'];
			$permanent_addr=$_POST['email_id'];
			$email=$_POST['location'];
			$telR=$_POST['experience'];
			$telM=$_POST['hobby_id'];
			$status=$_POST['interests'];
			$pass=$_POST['mentor_confirm'];
			$city = $_POST['city'];
			*/
			$sql="INSERT into mentorinfo(mentorinfo_id,mentor_id,ment_fname,ment_lname,ment_address,email_id,state,experience,hobby_id,interests,mentor_confirm,city) value(".$roll.",".$branch.",'".$year."','".$name."','".$present_addr."','".$permanent_addr."','".$email."','".$telR."',".$telM.",'".$status."','".$pass."','".$city."')";
			echo $sql;	 
			$qury=mysqli_query($conn,$sql);
			if(!$qury)
			{	 
   				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
  		
			else
			{
				echo "Successful";	
			}
		}	
		else
		{
			echo "error";
		}
	}
		
	reg(2, 1,'yo','yo','yo','yo','yo','yo',1,'yo','yo','mumbai');		
?>

