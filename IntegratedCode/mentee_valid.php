<?php
	include "mentee_register.php";
	if(isset($_POST["submit"])){
		$fnameError = "";
		$lnameError = "";
		$addressError = "";
		$emailError = "";
		$dobError = "";
		$contactError = "";
		$locationError = "";
		$income_error = "";
		$flag = "false";
		
		$fname = $_REQUEST["firstname"];
		$lname = $_REQUEST["lastname"];
		$dob = $_REQUEST["dob"];
		$contact = $_REQUEST["comtact_no"];
		$income = $_REQUEST["family-income"];
		$address = $_REQUEST["address"];
		$email = $_REQUEST["emailid"];
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
		
		if(empty($dob)){
			$flag = "true";
			$dobError = "Please enter dob";
			echo "dobError";
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
		
		if(empty($income)){
			$flag = "true";
			$income_error = "Please Enter your income";
			echo "$income_error";
		}
		$role_id = 2;
		$password = "123456";
		if($flag == "false"){
			regMente($email , $password,$role_id,$fname,$lname,$address,$contact,$dob,$location,$income);
			/*echo "<script>";
			echo "window.location.href ='login.php'";
			echo "</script>";*/
		}
	}
?>