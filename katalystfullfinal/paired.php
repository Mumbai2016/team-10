<?php
	require "connect.php";
	function pairing($mentor_id,$mentee_id)
	{
		global $conn;
		$sql="INSERT into pairtable(mentor_id,mentee_id) 
		value(".$user_id.",'".$fname.")";
		echo $sql;	 
		$qury=mysqli_query($conn,$sql);
		if(!$qury)
		{	 
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
			
		else
		{
			echo "<script>";
			echo "window.location.href =''";
			echo "</script>";	
		}
	}
?>
