<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
// On submitting form below function will execute.
function validate()
{

  if(isset($_POST['submit'])){
if (empty($_POST["fname"])) {
$nameError = "Name is required";
$fname=$_POST['fname'];
} else {
$name = test_input($_POST["fname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$nameError = "Only letters and white space allowed";
echo $nameError;
}
}
// last name validation
if (empty($_POST["lname"])) {
	$lname=$_POST['lname'];
$nameError = "Name is required";
} else {
//$name = test_input($_POST["lname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
$nameError = "Only letters and white space allowed";
echo $nameError;
}
}

if (empty($_POST["email"])) {
$emailError = "Email is required";
$email=$_POST['email'];
} else {
//$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
echo $emailError;
}
}

if (empty($_POST["contact"])) {
$emailError = "Contact is required";
$contact=$_POST['contact'];
} else {
if (is_numeric($contact))) {
$emailError = "Invalid number format";
echo $emailError;
}
}
if($_POST['gender'] == -1)
{
	 echo 'Please select a gender';
}
               
       


}  

}






?>