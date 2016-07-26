<!DOCTYPE html>
<html>
<head>

</head>
<body>

<!-- start of form -->
<form action="processing.php" method="post">
	
	<p>First name : <input type="text" name="fname" size="20" maxlength="40" /></p>
	<p>Last name : <input type="text" name="lname" size="20" maxlength="40" /></p>
	<p>Email : <input type="text" name="email" size="40" maxlength="40" /></p>
	<p>Gender : <input type="radio" name="gender" value="M" /> Male
	<input type="radio" name="gender" value="F" /> Female
	<br />
	<p>Age : <select name="age">
			<option value="0-20">Under  20</option>
			<option value="20-40">20 or over</option>
			<option value="40-100">40 or over</option>
	</select></p>	
	<p>Comments : <br /><textarea name="comments" rows="3" cols="40" maxlength="150" ></textarea>
	<p>Password: <input type="password" name="password" maxlength="40" /></p>
	<input type="submit" name="submit"/>
	
</form>


</body>
</html>