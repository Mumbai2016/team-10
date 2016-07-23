<?php
	include "mentor_register.php";
	if(isset($_POST["submit"])){
		echo "here";
		$fnameError = "";
		$lnameError = "";
		$addressError = "";
		$emailError = "";
		$contactError = "";
		$locationError = "";
		$flag = "false";
		
		$fname = $_REQUEST["ment_fname"];
		$lname = $_REQUEST["ment_lname"];
		$contact = $_REQUEST["contact_no"];
		$experience = $_REQUEST["Experience"];
		$address = $_REQUEST["address"];
		$email = $_REQUEST["email_id"];
		$location = $_REQUEST["location"];
		
		//$hobbies = $_REQUEST["hobbies"];
		
		if(empty($fname)){
			$flag = "true";
			$fnameError = "Please Enter First Name";
			echo "$fnameError";
		}
		else if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
			$flag = "true";
			$fnameError = "First Name should conatin only alphabets";
			echo "$fnameError";
		}
		
		if(empty($lname)){
			$flag = "true";
			$lnameError = "Please Enter last Name";
			echo "$lnameError";
		}
		else if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
			$flag = "true";
			$lnameError = "Last Name should conatin only alphabets";
			echo "$lnameError";
		}
		if(empty($address)){
			$flag = "true";
			$addressError = "Please Enter your address";
			echo "$addressError";
		}
		
		if(empty($email)){
			$flag = "true";
			$emailError = "Please Enter your email";
			echo "$emailError";
		}
		
		if(empty($location)){
			$flag = "true";
			$locationError = "Please Enter your location";
			echo "$locationError";
		}
		
		if(empty($contact)){
			$flag = "true";
			$contactError = "Please Enter your contact";
			echo "$contactError";
		}
		
		$role_id = 2;
		$password = "123456";
		if($flag == "false"){
			regMentor($email , $password,$role_id,$fname,$lname,$address,$contact,$location,$experience);
			/*echo "<script>";
			echo "window.location.href ='login.php'";
			echo "</script>";*/
		}
	}
?>