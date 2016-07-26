<?php
	
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myfirstdatabase';	
	
	
	
	//making a connection to mySQl database

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die('could not connect ERROR: '.mysqli_connection_error());

	//set encoding/
mysqli_set_charset($dbc,"UTF8");	
	
	if($dbc) {
		echo "your connected too ".$dbname;
	}
	
	
	
?>