<?php
	require "connect.php";
	function pairing($title,$description,$date)
	{
		global $conn;
		$sql="INSERT into pairtable(title,description,date) value('".$title."','".$description."','".date."')";
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
