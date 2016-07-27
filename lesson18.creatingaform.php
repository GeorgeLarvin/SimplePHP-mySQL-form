<?php


	
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
		
		mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, password) VALUES('$fname','$lname','$email','$gender','$age','$comments','$password')");
		
		$registered = mysqli_affected_rows($dbc);
		
		echo $registered. " row is affected"; 
		
	} else {
		
		echo "<h3><em><u><p style='color:red'>please fill all values of the form</p></u></em></h3>";
		
	}
		
	
}else {
	
	echo "<h3><em><u>Please enter your details below</u></em></h3>";
	
}	





?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<!-- start of form -->
<form action="lesson18.creatingaform.php" method="post">
	
	<p>First name : <input type="text" name="fname" size="20" maxlength="40" /></p>
	<p>Last name : <input type="text" name="lname" size="20" maxlength="40" /></p>
	<p>Email : <input type="text" name="email" size="40" maxlength="40" /></p>
	<p>Gender : <input type="radio" name="gender" value="M" /> Male
	<input type="radio" name="gender" value="F" /> Female
	<br />
	<p>Age : <select name="age">
			<option value="0-20">Under  20</option>
			<option value="20-40">20 to 39</option>
			<option value="40-100">40 or over</option>
	</select></p>	
	<p>Comments : <br /><textarea name="comments" rows="3" cols="40" maxlength="150" ></textarea>
	<p>Password: <input type="password" name="password" maxlength="40" /></p>
	<input type="submit" name="submit"/>
	
</form>


</body>
</html>