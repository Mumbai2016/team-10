<?php
	require "../connect.php";
	function reg($roll,$branch,$year,$name,$present_addr,$permanent_addr,$email,$telR,$telM,$status,$pass)
	{
		global $conn;
		//if ($_SERVER["REQUEST_METHOD"] == "POST")
		if(true)
		{
			/*
			$roll=$_POST['menteeinfoinfo_id'];
			$branch=$_POST['menee_id'];
			$year=$_POST['firstname'];
			$name=$_POST['lastname'];
			$present_addr=$_POST['emailid'];
			$permanent_addr=$_POST['address'];
			$email=$_POST['contact_no'];
			$telR=$_POST['dob'];
			$telM=$_POST['state'];
			$status=$_POST['interests'];
			$pass=$_POST['mentor_confirm'];
			*/
			$sql="INSERT into menteeinfo(menteeinfo_id,menee_id,firstname,lastname,emailid,address,contact_no,dob,state,family_income,city) value(".$roll.",".$branch.",'".$year."','".$name."','".$present_addr."','".$permanent_addr."',".$email.",'".$telR."','".$telM."',".$status.",'".$pass."')";
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
		
	reg(2, 3,'yo','yo','yo','yo',9967388688,'yo','yo',2000,'mumbai');		
?>