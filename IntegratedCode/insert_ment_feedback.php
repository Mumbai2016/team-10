<?php
	require "connect.php";
	$session_start();
	$mentor_id = $_SESSION['userId'];
	function insert_ment($feedback_rate,$comments,$feedback_date,$feedback_time,$qinter,$ginter,$improvement,$mentee_id,$mentor_id)
	{
		global $conn;
		
		$sql="INSERT into feedback(feedback_rate,comments,feedback_date,feedback_time,qinter,ginter,improvement,mentor_id,mentee_id) 
		value(".$feedback_rate.",'".$comments."','".$feedback_date."','".$feedback_time."','".$qinter."','".$ginter."','".$improvement."',".$mentor_id.",".$mentee_id.")";
		echo $sql;	 
		$qury=mysqli_query($conn,$sql);
		if(!$qury)
		{	 
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
			
		else
		{
			echo "successful";	
		}
	}
?>	