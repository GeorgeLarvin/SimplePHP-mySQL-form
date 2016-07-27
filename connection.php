<?php
	
$hostname = 'localhost';
$username = 'root';
$password1 = '';
$dbname = 'myfirstdatabase';	
	
	
	
	//making a connection to mySQl database

$dbc = mysqli_connect($hostname, $username, $password1, $dbname) OR die('could not connect ERROR: '.mysqli_connection_error());

	//set encoding/
mysqli_set_charset($dbc,"UTF8");	
	
	if($dbc) {
		
	}
	
	
	
?>