<?php
	//validation form process script


	
if ($_SERVER['REQUEST_METHOD']== 'POST'){
	
$fname = $_POST["fname"];	
$lname = $_POST["lname"];	
$email = $_POST["email"];	
$gender = $_POST["gender"];	
$age = $_POST["age"];	
$comments = $_POST["comments"];	
$password = $_POST=['password'];		
	
	if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password)) {
		
		include("connection.php");
		
	} else {
		
		echo "please fill all values of the form";
		
	}
		
	
}else {
	
	echo "No form has been submitted";
	
}	


	
	
	
	
	




?>